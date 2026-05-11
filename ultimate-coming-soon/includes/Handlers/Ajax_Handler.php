<?php

namespace ultimate_comming_soon\Handlers;

use ultimate_comming_soon\Classes\Singleton;
use ultimate_comming_soon\Classes\Schema_Manager;
use ultimate_comming_soon\Classes\Options_Manager;
use ultimate_comming_soon\Classes\Importer;
use ultimate_comming_soon\Classes\Template_Manager;

class Ajax_Handler extends Singleton
{
  private $ajax_endpoints = [];
  private $last_imported_post_id_key = "ucs_last_imported_page_id";

  function __construct()
  {
    add_action("admin_init", [$this, "handle_import_page"]);
    add_action("wp_insert_post", [$this, "save_imported_post_id"], 10, 3);
    add_action("init", [$this, "register_ajax_points"], 12);
  }

  function send_email($to, $subject, $message, $headers = array())
  {

    if (empty($to) || empty($subject) || empty($message)) {
      return false;
    }

    if (empty($headers)) {
      $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . get_bloginfo('name'),
      );
    }

    return wp_mail($to, $subject, $message, $headers);
  }

  function newsletter_email_exists($email)
  {
    global $wpdb;
    $table_name = $wpdb->prefix . 'newsletter_client_information';
    return (int) $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM `$table_name` WHERE email = %s", $email)) > 0;
  }

  function save_newsletter_data($email, $message, $name, $phone)
  {
    global $wpdb;
    // Save form data to the database
    $table_name = $wpdb->prefix . 'newsletter_client_information';
    $data = array(
      'name'    => $name,
      'email'   => $email,
      'mobile'  => $phone,
      'address' => "",
      'message' => $message,
    );

    $res =  $wpdb->insert($table_name, $data, ["%s", "%s", "%s", "%s", "%s"]);

    if (false === $res) {
      return new \WP_Error('db_insert_failed', __('Could not save newsletter data.', 'ultimate-coming-soon'));
    }

    return true;
  }

  function save_imported_post_id($post_id, $post, $update)
  {
    // Only during import
    if (! defined("UCS_WP_IMPORTING") || ! UCS_WP_IMPORTING) {
      return;
    }

    // Only pages
    if ($post->post_type !== "page") {
      return;
    }

    update_option($this->last_imported_post_id_key, $post_id);
  }

  function register_ajax_points()
  {
    $this->ajax_endpoints = apply_filters("ultimate_coming_soon_ajax_points", [
      ["endpoint" => "save_settings", "callback" => "handle_save_settings", "handle_class" => $this],
      ["endpoint" => "get_templates", "callback" => "handle_get_templates", "handle_class" => $this],
    ]);


    foreach ($this->ajax_endpoints as $endpoint) {
      $handler = !empty($endpoint["handle_class"]) ? [$endpoint["handle_class"], $endpoint["callback"]] : $endpoint["callback"];
      add_action("wp_ajax_ultimate_coming_soon_" . $endpoint["endpoint"], $handler);
    }
  }

  function validate_nonce($nonce, $return = false)
  {
    if (! wp_verify_nonce($nonce, Assets_Handler::$ajax_nonce)) {
      $data = ["success" => false, "message" => __("Invalide nonce", "ultimate-coming-soon")];
      return $return ? $data : wp_send_json($data, 400);
    }
  }

  function check_permission($action = "manage_options", $return = false)
  {
    if (! current_user_can($action)) {
      $data = ["success" => false, "message" => __("permission denied!", "ultimate-coming-soon")];
      return $return ? $data : wp_send_json($data, 400);
    }
  }

  function handle_get_templates()
  {
    $nonce = sanitize_text_field($_POST["nonce"]);
    $this->validate_nonce($nonce);
    $this->check_permission();

    $data  = Template_Manager::getInstance()->get_templates();

    wp_send_json($data, $data["status_code"]);
  }

  function handle_import_page()
  {
    $action = sanitize_text_field($_GET["action"] ?? "");

    if ($action !== "ultimate_coming_soon_import_page") {
      return;
    }

    $page_id = (int) sanitize_text_field($_GET["page_id"] ?? "");
    $new_page_id = (int) sanitize_text_field($_GET["new_page_id"] ?? 0);
    $nonce = sanitize_text_field($_GET["nonce"]);

    $res = $this->validate_nonce($nonce, true);
    if ($res) {
      echo json_encode($res);
      exit;
    }

    $res = $this->check_permission("manage_options", true);
    if ($res) {
      echo json_encode($res);
      exit;
    }

    //install importer plugin if not install and activated before
    $plugin_installed = Importer::getInstance()->install_wporg_plugin("wordpress-importer");
    if (is_wp_error($plugin_installed)) {
      $res = json_encode([
        "status" => false,
        "message" => __("WordPress Importer plugin installation or activation fail", "ultimate-coming-soon"),
        "error" => $plugin_installed
      ]);
      echo $res;
      exit;
    }

    if (!defined("WP_LOAD_IMPORTERS") || !class_exists("WP_Importer") || !class_exists("WP_Import")) {
      $res = json_encode(["status" => false, "message" => __("Importer not loaded", "ultimate-coming-soon")]);
      echo $res;
      exit;
    }

    if ($page_id == 0) {
      echo json_encode(["success" => false, "message" => __("Invalid page", "ultimate-coming-soon")]);
      exit;
    }

    $res = Template_Manager::getInstance()->get_template($page_id);
    if ($res["status"] == false) {
      echo json_encode($res);
      exit;
    }


    $headers = apply_filters("ucs_template_headers", ["Accept" => "application/xml", "url" => get_site_url()]);
    $response = wp_remote_get($res["data"]["location"], [
      "timeout" => 60 * 2,
      "redirection" => 5,
      "headers" => $headers
    ]);

    if (is_wp_error($response)) {
      echo json_encode(["success" => false, "message" => __("Fail to fetch xml file", "ultimate-coming-soon")]);
      exit;
    }

    $code = wp_remote_retrieve_response_code($response);
    if ($code !== 200) {
      echo json_encode(["success" => false, "message" => __("Fail to fetch xml file", "ultimate-coming-soon"), "status_code" => $code]);
      exit;
    }

    $xml_content = wp_remote_retrieve_body($response);

    if (empty($xml_content)) {
      echo json_encode(["success" => false, "message" => __("Blank xml file", "ultimate-coming-soon")]);
      exit;
    }

    // $xml_content =  file_get_contents(UCSM_PLUGIN_DIR_LITE . "404-page.xml");
    $file_path = $this->put_content_in_temp_file($xml_content);

    if (is_wp_error($file_path)) {
      echo json_encode(["success" => false, "message" => $file_path->get_error_message()]);
      exit;
    }


    //define this constant so `wp_insert_post` hook time save last import page id
    define("UCS_WP_IMPORTING", true);

    //import page
    $res = Importer::getInstance()->import($file_path);

    if (is_wp_error($res)) {
      echo json_encode(["success" => false, "message" => $res->get_error_message()]);
      exit;
    }

    if ($res !== true) {
      echo json_encode(["success" => false, "message" => __("Import fail!", "ultimate-coming-soon"), "error" => $res]);
      exit;
    }

    $imported_page_id = get_option($this->last_imported_post_id_key);

    $post_data = [
      'ID'           => $new_page_id,
      'post_content' => get_post_field('post_content', $imported_page_id),
      'post_title'   => get_post_field('post_title', $imported_page_id),
      'post_status'  => get_post_field('post_status', $imported_page_id),
      'post_type'    => get_post_field('post_type', $imported_page_id),
    ];

    if ($new_page_id == 0) {
      $p_id = wp_insert_post($post_data);
    } else {
      $p_id = wp_update_post($post_data, true);
    }

    if (is_wp_error($p_id)) {
      //delete previously imported page
      wp_delete_post($imported_page_id, true);
      echo json_encode(["success" => false, "message" => __("Import fail!", "ultimate-coming-soon"), "error" => $p_id]);
      exit;
    }

    //delete previously imported page
    wp_delete_post($imported_page_id, true);

    echo json_encode(
      [
        "success" => true,
        "message" => __("Page imported", "ultimate-coming-soon"),
        "data" => [
          "page_id" => $p_id,
          "page_url" => get_edit_post_link($p_id, "raw")
        ]
      ]
    );
    exit;
  }

  function put_content_in_temp_file($content)
  {
    $tmp_dir = get_temp_dir();

    $filename = "ucs-import-" . wp_generate_uuid4() . ".xml";
    $file_path = $tmp_dir . $filename;

    // Write XML content
    $bytes = file_put_contents($file_path, $content);

    if (false === $bytes) {
      return new \WP_Error(500, "Failed to write temp file.");
    }

    //auto delete temp file after execution or after fatal error
    register_shutdown_function(function () use ($file_path) {
      if (file_exists($file_path)) {
        unlink($file_path);
      }
    });

    return $file_path;
  }

  function remove_temp_file($path)
  {
    if (file_exists($path)) {
      return unlink($path);
    }

    return false;
  }

  function handle_save_settings()
  {
    $nonce = sanitize_text_field($_POST["nonce"]);
    $this->validate_nonce($nonce);
    $this->check_permission();
    $schema_manager = new Schema_Manager();

    //get data
    $data = json_decode(stripcslashes($_POST["settings"]), true);
    $validated_data  = $schema_manager->validate_settings($data);

    //INVALIDE DATA
    if ($validated_data["success"] == false) {
      wp_send_json(["success" => false, "data" => $validated_data["error"], "message" => $validated_data["message"]]);
    }

    $option_manager = Options_Manager::getInstance();
    $previous_template = $option_manager->get_activated_template();

    //DATA IS VALID SAVE THE DATA 
    foreach ($validated_data["data"] as $key => $value) {
      $option_manager->save_option($key, $value);
    }

    //if new template is activated and its legacy html template only then run below code
    //to set some default setting for that template
    $cur_template = $option_manager->get_activated_template();
    if ($cur_template["template_type"] == "html" && ($previous_template["template_id"] !== $cur_template["template_id"])) {
      include_once(UCS_ROOT_DIR . "functions/default-data.php");
      ucs_set_default_data_based_on_template($cur_template["template_id"], UCS_ROOT_URL);
    }

    wp_send_json(["success" => true, "message" => __("Settings saved", "ultimate-coming-soon")], 200);
  }
}
