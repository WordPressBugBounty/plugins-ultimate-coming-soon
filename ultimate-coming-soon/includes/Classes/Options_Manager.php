<?php

namespace ultimate_comming_soon\Classes;

use ultimate_comming_soon\Classes\Singleton;
use ultimate_comming_soon\Classes\Schema_Manager;

class Options_Manager extends Singleton
{
  function get_option($key, $default = false)
  {
    $val = get_option($key, $default);
    if ($val === "") return $default;

    return $val;
  }

  function save_option($key, $value)
  {
    update_option($key, $value);
  }

  function is_maintenance_mode_enable()
  {
    return $this->get_option("wpucs_enable_mode");
  }

  function get_all_settings_value()
  {
    $values = [];
    $schema_manager = new Schema_Manager();
    $settings_schema = $schema_manager->get_settings_schema();

    //loop through schema and getting db value. 
    //if db value not present then getting default value from schema
    foreach ($settings_schema as $key => $v) {
      $val = $this->get_option($key, $v["default"]);
      if ($v["type"] === "string") $val = (string) $val;
      if ($v["type"] === "integer") $val = (int) $val;
      if ($v["type"] === "boolean")   $val = (bool) $val;

      $values[$key] = $val;
    }

    //add activated template separeatly
    //because its value is not defined in the schema
    //below fn return its value based on diff condition
    $values["activated_template"] = $this->get_activated_template();

    return $values;
  }

  function is_maintenence_mode_on_home_page_only()
  {
    return $this->get_option("ucsm_page_setup", "whole-website") === "homepage";
  }

  function get_redirect_mode_url()
  {
    $url = $this->get_option("wpucs_redirect_mode_url", "");
    $url = empty($url) ? home_url() : $url;
    return esc_url_raw($url);
  }

  function is_redirect_mode_set()
  {
    return $this->get_option("ucsm_mode", "") === "redirect";
  }

  function is_user_allowed_to_view_maintenance_mode()
  {
    $user = wp_get_current_user();
    //logout user will always see this page
    if ($user->ID == 0) return true;

    $options_keys = ["wpucs_administrator", "wpucs_editor", "wpucs_author", "wpucs_contributor", "wpucs_subscriber"];
    $can_see = false;

    foreach ($options_keys as $key) {
      if (get_option($key, "") === "on" && in_array(str_replace('wpucs_', '', $key), $user->roles)) {
        $can_see  = true;
      }
    }

    return $can_see;
  }

  function get_activated_template()
  {
    $id = $this->get_option("activated_template_id");
    //if id is false then no template is selected. That means new install
    //then return gutenberg template type if gutenberg enabled for 'page' post type
    if ($id == null && use_block_editor_for_post_type("page")) {
      return ["template_type" => "gutenberg", "template_id" => null, "default_template" => 0];
    }

    //gutenberg disabled and no legacy template is set return html default template
    if ($id == null && !use_block_editor_for_post_type("page")) {
      return ["template_type" => "html", "template_id" => null, "default_template" => 0];
    }

    //gutenberg template name start with gutenberg_ prefix
    if (str_starts_with($id, "gutenberg_")) {
      return ["template_type" => "gutenberg", "template_id" => (int) str_replace('gutenberg_', '', $id), "default_template" => 0];
    }

    //code reach this point then return legacy template
    return ["template_type" => "html", "template_id" => (int) $id, "default_template" => 0];
  }
}
