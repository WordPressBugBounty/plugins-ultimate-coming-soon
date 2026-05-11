<?php

namespace ultimate_comming_soon\Classes;

class Schema_Manager
{
  private $settings_schema = [];

  function __construct()
  {
    $this->set_up_schema();
  }

  function set_up_schema()
  {
    $schema =  [
      //FREE PLUGIN DATA
      //settings menu
      "wpucs_enable_mode" => ["type" => "boolean", "default" => false],
      "ucsm_page_setup" => [
        "type" => "string",
        "default" => "whole-website",
        "enum" => ["whole-website", "homepage"]
      ],
      "ucsm_mode" => [
        "type" => "string",
        "default" => "coming_soon",
        "enum" => ["coming_soon", "maintenance", "redirect"]
      ],
      "wpucs_redirect_mode_url" => ["type" => "string", "default" => ""],
      "wpucs_order_logo" => ["type" => "integer", "default" => 1, "min" => 1, "max" => 20],
      "wpucs_order_heading" => ["type" => "integer", "default" => 1, "min" => 1, "max" => 20],
      "wpucs_order_subheading" => ["type" => "integer", "default" => 1, "min" => 1, "max" => 20],
      "wpucs_order_description" => ["type" => "integer", "default" => 1, "min" => 1, "max" => 20],
      "wpucs_order_social" => ["type" => "integer", "default" => 1, "min" => 1, "max" => 20],
      "wpucs_order_contact" => ["type" => "integer", "default" => 1, "min" => 1, "max" => 20],
      "wpucs_order_newsletter" => ["type" => "integer", "default" => 1, "min" => 1, "max" => 20],
      "wpucs_order_countdown" => ["type" => "integer", "default" => 1, "min" => 1, "max" => 20],

      //templates
      "activated_template_id" => ["type" => "string|integer", "default" => ""],

      //Content menu
      "wpucs_main_heading" => ["type" => "string", "default" => __("We Are", "ultimate-coming-soon")],
      "wpucs_sub_heading" => ["type" => "string", "default" => __("Coming Very Soon!", "ultimate-coming-soon")],
      "wpucs_main_description" => ["type" => "string", "default" => __("We will let you know when we are Launching", "ultimate-coming-soon")],

      //appearence
      "wpucs_favicon" => ["type" => "string", "default" => UCS_ROOT_URL . "assets/img/favicon.png"],
      "wpucs_logo_setup" => ["type" => "string", "default" => "text", "enum" => ["text", "graphic", "disabled"]],
      "wpucs_website_text_logo" => ["type" => "string", "default" => get_bloginfo("name")],
      "wpucs_text_logo_align" => ["type" => "string", "default" => "align-left", "enum" => ["align-left", "align-center", "align-right"]],
      "wpucs_text_logo_size" => ["type" => "string", "default" => "45"],
      "wpucs_website_logo" => ["type" => "string", "default" => get_site_icon_url(512, UCS_ROOT_URL . "assets/img/icon/logo5.png")],
      "wpucs_logo_width" => ["type" => "string", "default" => ""],
      "wpucs_logo_height" => ["type" => "string", "default" => ""],
      "wpucs_background_image" => ["type" => "string", "default" => UCS_ROOT_URL . "assets/img/background/background-0.jpg"],
      "wpucs_background_color_rgba" => ["type" => "string", "default" => "#0f44ae"],

      //social tab
      "wpucs_social_links_order" => ["type" => "array", "default" => []],
      //update its order from associative array to index based array run migration after instalation
      //for now old structure is using
      "wpucs_social_links" => ["type" => "array", "default" => []],

      //contact tab
      "wpucs_cf_contact_no" => ["type" => "string", "default" => ""],
      "wpucs_cf_email_address" => ["type" => "string", "default" => ""],
      "wpucs_cf_opening_hours" => ["type" => "string", "default" => ""],
      "wpucs_cf_address" => ["type" => "string", "default" => ""],

      //newsletter tab
      "wpucs_newsletter_status" => ["type" => "string", "default" => "on", "enum" => ["on", "off"]],

      //coundown tab
      "wpucs_countdown_timer_status" => ["type" => "string", "default" => "on", "enum" => ["on", "off"]],
      "wpucs_countdown_date" => ["type" => "string", "default" => ""],
      "wpucs_countdown_message_status" => ["type" => "string", "default" => "on", "enum" => ["on", "off"]],
      "wpucs_countdown_finishing_text" => ["type" => "string", "default" => __("Stay tuned for updates!", "ultimate-coming-soon")],

      //seo tab
      "wpucs_seo_title" => ["type" => "string", "default" => ""],
      "wpucs_seo_description" => ["type" => "string", "default" => ""],
      "wpucs_seo_meta_keywords" => ["type" => "string", "default" => ""],
      "wpucs_seo_img" => ["type" => "string", "default" => UCS_ROOT_URL . "assets/img/icon/favicon.png"],

      //advance settings tab
      "wpucs_administrator" => ["type" => "string", "default" => "off", "enum" => ["on", "off"]],
      "wpucs_editor" => ["type" => "string", "default" => "off", "enum" => ["on", "off"]],
      "wpucs_author" => ["type" => "string", "default" => "off", "enum" => ["on", "off"]],
      "wpucs_contributor" => ["type" => "string", "default" => "off", "enum" => ["on", "off"]],
      "wpucs_subscriber" => ["type" => "string", "default" => "off", "enum" => ["on", "off"]],
      "wpucs_ads" => ["type" => "string", "default" => "on", "enum" => ["on", "off"]],

    ];

    $this->settings_schema = apply_filters("ucs_schema_list_before_set", $schema);
  }

  function get_settings_schema()
  {
    return $this->settings_schema;
  }

  private function validate_key($key)
  {
    if (! array_key_exists($key, $this->settings_schema)) {
      return ["success" => false, "message" => "Invalid setting key: {$key}"];
    }

    return null;
  }

  private function validate_type($key, $value)
  {
    $value_type = gettype($value);
    $value_type_should_be = $this->settings_schema[$key]["type"];

    if ($value_type_should_be === "string|integer" && ($value_type === "string" || $value_type === "integer")) {
      return null;
    }

    if ($value_type !== $value_type_should_be) {
      return ["success" => false, "message" => "Invalid type of: {$key}. Expected {$value_type_should_be}, got {$value_type}."];
    }

    return null;
  }

  private function validate_enum($key, $value)
  {
    //check for enum value
    if (array_key_exists("enum", $this->settings_schema[$key]) && !in_array($value, $this->settings_schema[$key]["enum"], true)) {
      $message = "Invalid value. Enum: ";
      foreach ($this->settings_schema[$key]["enum"] as $val) {
        $message .= ", {$val} ";
      }

      return ["success" => false, "message" => $message];
    }

    return null;
  }

  private function validate_string($key, $value)
  {
    $value = sanitize_text_field($value);
    return ["success" => true, "message" => "Valid", "data" => $value];
  }

  private function validate_bool($key, $value)
  {
    return ["success" => true, "message" => "Valid", "data" => rest_sanitize_boolean($value)];
  }

  private function validate_number($key, $value)
  {
    return ["success" => true, "message" => "Valid", "data" => (int)$value];
  }

  private function validate_string_or_integer($key, $value)
  {
    if (gettype($value) == "integer") {
      return ["success" => true, "message" => "Valid", "data" => (int)$value];
    }

    if (gettype($value) == "string") {
      return ["success" => true, "message" => "Valid", "data" => sanitize_text_field($value)];
    }
  }

  private function validate_array($key, $value)
  {
    $_values = [];
    foreach ($value as $key => $val) {
      $_values[$key] = sanitize_text_field($val);
    }
    return ["success" => true, "message" => "Valid", "data" => $_values];
  }

  private function validate_object($key, $value)
  {
    return ["success" => true, "message" => "Valid", "data" => $value];
  }

  //setting is key and value pair: ["key" => $value, "key" => $value]
  function validate_settings($settings)
  {
    if (!is_array($settings)) {
      return ["success" => false, "message" => __("Settings need to be an key => value array", "fancy-post-grid")];
    }

    $errors = [];
    $values = [];

    foreach ($settings as $key => $value) {

      //key check
      $validate_issue =  $this->validate_key($key);
      if ($validate_issue) {
        $errors[] =  $validate_issue;
        continue;
      }

      //type check
      $validate_issue =  $this->validate_type($key, $value);
      if ($validate_issue) {
        $errors[] = $validate_issue;
        continue;
      }

      //enum check 
      $validate_issue =  $this->validate_enum($key, $value);
      if ($validate_issue) {
        $errors[] = $validate_issue;
        continue;
      }

      //value validate
      $type_to_fn_map = [
        "boolean"   => "validate_bool",
        "string" => "validate_string",
        "integer" => "validate_number",
        "array"  =>  "validate_array",
        "object" => "validate_object",
        "string|integer" => "validate_string_or_integer"
      ];

      $value_type = $this->settings_schema[$key]["type"];

      if (! array_key_exists($value_type, $type_to_fn_map) ||   !method_exists($this, $type_to_fn_map[$value_type])) {
        $errors[] = ["success" => false, "message" => "Validation fn missing for: {$value_type}"];
        continue;
      }

      $method = $type_to_fn_map[$value_type];
      $val = $this->$method($key, $value);

      if ($val["success"]) {
        $values[$key] = $val["data"];
      } else {
        $errors[] = $val;
      }
    }

    //remove null from $errors;
    $errors = array_filter($errors);

    if (count($errors) !== 0) {
      return ["success" => false, "message" => __("Validation failed.", "fancy-post-grid"), "error" => $errors];
    }

    return ["success" => true, "message" => __("Validation Done", "fancy-post-grid"), "data" => $values];
  }
}
