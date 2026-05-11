<?php

namespace ultimate_comming_soon\Classes;

use ultimate_comming_soon\Classes\Singleton;

class Template_Manager extends Singleton
{
  private $url = "https://api.rstheme.com/assets/ucs_templates.json";
  // private $url = "http://192.168.1.250:8000/assets/ucs_templates.json";

  function __construct() {}

  function get_templates()
  {

    try {
      $res = wp_remote_get($this->url, [
        "headers" => ["Content-type"  => "application/json"],
        "timeout" => 60 * 2,
      ]);

      $res_status = wp_remote_retrieve_response_code($res);

      if ($res_status == 200) {
        return array("status" => true, "status_code" => $res_status, "data"  => json_decode(wp_unslash(wp_remote_retrieve_body($res)), true));
      }

      //if reach this line then res fail send fail responce
      return array("status" => false, "status_code" => $res_status, "full_res" => $res);
    } catch (\Throwable $th) {
      return array("status" => false, "status_code" => 500, "error" => "Internal server error");
    }
  }

  function get_template($id)
  {
    $templates = $this->get_templates();
    if ($templates["status"] == false) {
      return $templates;
    }

    //find templates with the same id
    $found_template = null;
    foreach ($templates["data"] as $template) {
      if (!empty($template["id"]) && $template["id"] == $id) {
        $found_template = $template;
      }
    }

    if ($found_template == null) {
      return array("status" => false, "status_code" => 404, "data" => __("Template not found"));
    }

    return array("status" => true, "status_code" => 200, "data" => $found_template);
  }
}
