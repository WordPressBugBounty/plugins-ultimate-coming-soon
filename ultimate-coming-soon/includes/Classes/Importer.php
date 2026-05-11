<?php

namespace ultimate_comming_soon\Classes;

use ultimate_comming_soon\Classes\Singleton;

class Importer extends Singleton
{
  function import($xml_file_path)
  {
    if (!file_exists($xml_file_path)) {
      return new \WP_Error("file_missing", "XML file does not exist.");
    }

    $importer = new \WP_Import();
    $importer->fetch_attachments = true;

    // disable the output
    ob_start();
    $importer->import($xml_file_path);
    ob_end_clean();

    return true;
  }

  function install_wporg_plugin($plugin_slug)
  {
    if (! is_admin()) {
      return new \WP_Error("not_admin", __("Must be run in admin area.", "ultimate-coming-soon"));
    }

    if (! current_user_can("install_plugins")) {
      return new \WP_Error("permission", __("Insufficient permissions.", "ultimate-coming-soon"));
    }

    require_once ABSPATH . "wp-admin/includes/plugin-install.php";
    require_once ABSPATH . "wp-admin/includes/class-wp-upgrader.php";
    require_once ABSPATH . "wp-admin/includes/plugin.php";

    // Check if plugin already installed
    $installed_plugins = get_plugins();

    foreach ($installed_plugins as $file => $data) {
      if (strpos($file, $plugin_slug . "/") === 0) {
        // Already installed → activate if not active
        if (! is_plugin_active($file) && current_user_can("activate_plugins")) {
          activate_plugin($file);
        }
        return true;
      }
    }

    // Get plugin info from WordPress.org
    $api = plugins_api("plugin_information", ["slug"   => $plugin_slug, "fields" => ["sections" => false]]);
    if (is_wp_error($api)) {
      return $api;
    }

    // Install plugin
    $upgrader = new \Plugin_Upgrader(new \Automatic_Upgrader_Skin());
    $result   = $upgrader->install($api->download_link);

    if (is_wp_error($result) || ! $result) {
      return new \WP_Error("install_failed", __("Plugin installation failed.", "ultimate-coming-soon"));
    }

    // Activate plugin
    if (current_user_can("activate_plugins")) {
      activate_plugin($upgrader->plugin_info());
    }

    return true;
  }
}
