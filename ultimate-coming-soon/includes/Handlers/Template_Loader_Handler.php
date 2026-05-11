<?php

namespace ultimate_comming_soon\Handlers;

use ultimate_comming_soon\Classes\Singleton;
use ultimate_comming_soon\Classes\Options_Manager;

class Template_Loader_Handler extends Singleton
{

  private $option_manager = null;

  function __construct()
  {
    // add_action("template_redirect", [$this, "redirect_to_comming_soon_page"]);
    add_filter("template_include", [$this, "load_blank_template_with_content"], 99999);
    $this->option_manager = Options_Manager::getInstance();
  }

  function load_blank_template_with_content($template)
  {
    //if not enable then return dont do anything
    if (! $this->option_manager->is_maintenance_mode_enable()) return $template;
    //if user not allowed to see, then return
    if (!$this->option_manager->is_user_allowed_to_view_maintenance_mode()) return $template;
    //if only show on home page. if current req is not for home then return
    if ($this->option_manager->is_maintenence_mode_on_home_page_only() && !is_front_page()) return $template;
    //if redirect mode is selected from setting then dont load custom template just redirect
    if ($this->option_manager->is_redirect_mode_set()) {
      global $wp;
      $redirect_url = $this->option_manager->get_redirect_mode_url();
      $current_url = home_url(add_query_arg([], $wp->request));

      if ($redirect_url && $redirect_url !== $current_url) {
        wp_redirect($redirect_url);
        exit;
      }
    }

    //every check passed now redirect to comming soon template
    $_template = $this->option_manager->get_activated_template();

    if ($_template["template_type"] == "gutenberg") {
      $tem = $this->fetch_block_template($_template);
    } else if ($_template["template_type"] == "html") {
      //legacy template will always return null.
      //infect its never return. before return it will load the 
      //template and exit(); if not find the template then it will return null
      $tem = $this->fetch_legacy_html_template($_template);
    }

    if ($tem) return $tem;

    return $template;
  }

  function fetch_block_template($template)
  {
    set_query_var("ultimate_comming_soon", $template);
    $template = UCS_ROOT_DIR . "includes/blank_template.php";
    if (file_exists($template)) {
      //return custom template with page content
      return $template;
    }

    return null;
  }

  function fetch_legacy_html_template($template)
  {
    if ($template["template_id"] !== null) {
      $template_file = UCS_ROOT_DIR . 'templates/comingsoon' . $template["template_id"] . '/index.php';

      //use hook for pro plugin to overwrite template location 
      $template_file = apply_filters("ucs_legacy_template_before_load", $template_file, $template);

      if (file_exists($template_file)) {
        include($template_file);
        exit();
      }
    } else {
      $default_template_file = UCS_ROOT_DIR . 'templates/comingsoon0/index.php';

      if (file_exists($default_template_file)) {
        include($default_template_file);
        exit();
      }
    }

    return null;
  }
}
