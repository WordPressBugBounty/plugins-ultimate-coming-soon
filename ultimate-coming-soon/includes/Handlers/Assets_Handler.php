<?php

namespace ultimate_comming_soon\Handlers;

use ultimate_comming_soon\Classes\Singleton;
use ultimate_comming_soon\Classes\Schema_Manager;
use ultimate_comming_soon\Classes\Options_Manager;

class Assets_Handler extends Singleton
{
  private $prefix = "ultimate_comming_soon_";
  private $build_dir = UCS_ROOT_URL . "assets/build/";
  private $ver = UCS_VERSION;
  public static $ajax_nonce = "UCS_AJAX_NONCE_DTCSSXYZ";

  function __construct()
  {
    add_action("admin_enqueue_scripts", [$this, "enqueue_dashboard_script"]);
    add_action("enqueue_block_editor_assets", [$this, "enqueue_editor_assets"]);
    add_action("admin_enqueue_scripts", [$this, "enqueue_global_assets"]);
    add_action("wp_enqueue_scripts", [$this, "enqueue_global_assets"]);
  }

  function get_local_var()
  {
    return [
      "ajax_url" => admin_url("admin-ajax.php"),
      "nonce" => wp_create_nonce(self::$ajax_nonce),
      "assets_url" => UCS_ROOT_URL . "assets/",
    ];
  }

  function enqueue_global_assets()
  {
    wp_enqueue_script($this->prefix . "global_script", $this->build_dir . "global.bundle.js", ["jquery"], $this->ver, true);
    wp_enqueue_style($this->prefix . "global_style", $this->build_dir . "global.bundle.css", [], $this->ver);
    wp_localize_script($this->prefix . "global_script", "UCS_LOCAL", $this->get_local_var());
  }

  function enqueue_editor_assets()
  {
    $handle = $this->prefix . "gutenberg_editor_script";
    $handle_2 = $this->prefix . "core_block_extend_script";
    $url = $this->build_dir . "gutenberg_editor.bundle.js";
    $url_2 = $this->build_dir . "core_block_extend.bundle.js";
    $dependency = ["wp-i18n", "wp-element", "wp-components", "jquery"];
    wp_enqueue_script($handle, $url, $dependency, $this->ver, true);
    wp_enqueue_script($handle_2, $url_2, $dependency, $this->ver, true);


    $schema_manager = new Schema_Manager();
    $option_manager = Options_Manager::getInstance();
    wp_localize_script(
      $handle,
      "UCS_LOCAL",
      array_merge($this->get_local_var(), [
        "import_url" => admin_url("import.php"),
        "settings_schema" => $schema_manager->get_settings_schema(),
        "settings" => $option_manager->get_all_settings_value(),
      ])
    );
    wp_enqueue_style($this->prefix . "admin_style", $this->build_dir . "admin.bundle.css", [$this->prefix . "global_style"], $this->ver);
  }

  function enqueue_dashboard_script($hook)
  {
    if ($hook !== "toplevel_page_ultimate-coming-soon-dashboard") return;

    //load wp.media picker before dashboard script 
    //dashboard script use the wp.media to load meida picker
    wp_enqueue_media();
    $deps = ["wp-i18n", "wp-element", "wp-components", "jquery"];

    //if pro active then load pro script 1st 
    if (defined("UCS_PRO_ROOT_FILE")) {
      $deps[] = "ultimate_comming_soon_pro_dashboard_script";
    }

    wp_enqueue_script($this->prefix . "dashboard_script", $this->build_dir . "dashboard.bundle.js", $deps, $this->ver, true);
    $schema_manager = new Schema_Manager();
    $option_manager = Options_Manager::getInstance();
    wp_localize_script(
      $this->prefix . "dashboard_script",
      "UCS_LOCAL",
      array_merge(
        $this->get_local_var(),
        [
          "import_url" => admin_url("import.php"),
          "settings_schema" => $schema_manager->get_settings_schema(),
          "settings" => $option_manager->get_all_settings_value(),
        ]
      )
    );
    wp_enqueue_style($this->prefix . "admin_style", $this->build_dir . "admin.bundle.css", [$this->prefix . "global_style"], $this->ver);
    wp_enqueue_style('ucsm-font-awesome_min', UCS_ROOT_URL . 'assets/css/font-awesome/css/font-awesome.min.css', array(), $this->ver);
  }
}
