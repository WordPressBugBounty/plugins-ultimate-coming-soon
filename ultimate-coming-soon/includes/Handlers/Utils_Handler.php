<?php

namespace ultimate_comming_soon\Handlers;

use ultimate_comming_soon\Classes\Singleton;
use ultimate_comming_soon\Classes\Options_Manager;

class Utils_Handler extends Singleton
{

  function __construct()
  {
    add_filter("plugin_action_links_" . UCS_BASENAME, [$this, "add_settings_shortcut_link"]);
    add_action("login_message", [$this, "display_login_form_notice"]);
    add_action("admin_notices", [$this, "display_admin_notice"]);
    add_action("admin_enqueue_scripts", [$this, "enqueue_scripts"]);
    add_filter("display_post_states", [$this, "add_activation_label"], 10, 2);
  }

  function add_activation_label($status, $post)
  {
    if ($post->post_type === "page") {
      $option = Options_Manager::getInstance();
      $active_template = $option->get_activated_template();
      if ($active_template["template_type"] == "gutenberg" && $active_template["template_id"] == $post->ID) {
        $status[] = "Coming Soon";
      }
    }

    return $status;
  }

  function add_settings_shortcut_link($prev_links)
  {
    $settings_links = array(
      sprintf("<a href='%s'>%s</a>", admin_url('admin.php?page=ultimate-coming-soon-dashboard'), __('Settings', 'ultimate-coming-soon')),
      sprintf("<a href='%s' target='_blank'>%s</a>", 'https://rstheme.com/support/', __('Support', 'ultimate-coming-soon')),
      sprintf("<a href='%s' target='_blank' style='color: #0052da; font-weight: 700;'>%s</a>", 'https://wpucs.com/', __('Go Pro', 'ultimate-coming-soon')),
    );
    $links = array_merge($prev_links, $settings_links);

    return $links;
  }

  function display_login_form_notice($pre_message)
  {
    // Check if wpucs_enable_mode is enabled
    $wpucs_enable_mode = get_option('wpucs_enable_mode');

    if ($wpucs_enable_mode == 1) {
      // Add your custom message
      $custom_message = '<p class="message">' . esc_html_e('Ultimate Coming Soon & Maintenance Mode is ON.', 'ultimate-coming-soon') . '</p>';
      // Append custom message to the default login message
      $pre_message .= $custom_message;
    }

    return $pre_message;
  }

  function display_admin_notice()
  {
    // Only show to administrators
    if (!current_user_can('manage_options')) {
      return;
    }

    // Check if we are on the WordPress dashboard page
    $screen = get_current_screen();
    if ($screen->base !== 'dashboard') {
      return;
    }
    $wpucs_ads = get_option('wpucs_ads');

    if ($wpucs_ads == 'on') { ?>
      <div class="ucsm-admin-notice notice notice-success is-dismissible">
        <p>
          <?php esc_html_e('Get up to', 'ultimate-coming-soon'); ?>
          <span class="ucsm-highlight"><?php esc_html_e('50% discount', 'ultimate-coming-soon'); ?></span>
          <?php esc_html_e('on 100+ trending premium WordPress Themes.', 'ultimate-coming-soon'); ?>
        </p>

        <a href="https://rstheme.com/" class="ultimate-coming-soon-button">
          <?php esc_html_e('Discover Themes Now', 'ultimate-coming-soon'); ?>
        </a>
      </div>
<?php
    }
  }

  function enqueue_scripts($hook)
  {
    if ($hook !== 'index.php') return;
    // Enqueue custom admin notice styles
    wp_enqueue_style('ucsm-admin-notice-style', UCS_ROOT_URL . 'assets/css/admin-notice.css', array(), '1.1.4', 'all');
    wp_enqueue_style('ucsm-font-family', UCS_ROOT_URL . 'assets/css/wpucs_font_family_frontend.css', array(), '1.1.4');
  }
}
