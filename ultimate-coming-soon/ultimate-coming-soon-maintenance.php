<?php
/**
 * Plugin Name: Ultimate Coming Soon & Maintenance 
 * Description: Coming Soon & Maintenance Mode Plugin For WordPress. Hide your website until it’s ready. 
 * Version: 1.0.8
 * Author URI: http://rstheme.com
 * Plugin URI: https://wordpress.org/plugins/ultimate-coming-soon/
 * Author: RSTheme
 * License: GPL v2 or later
 * License URI:http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: ultimate-coming-soon
 * Domain Path: /languages
 * Requires PHP: 7.0.0
 * Requires at least: 5.5
 */

defined('ABSPATH') or die('Hey, what are you doing here? You silly human!');

// Define Custom Constant Variables
define('UCSM_VERSION_LITE', '1.0.8');
define('UCSM_PLUGIN_DIR_LITE', plugin_dir_path(__FILE__));
define('UCSM_PLUGIN_URL_LITE', plugin_dir_url(__FILE__));
define('UCSM_FILE_LITE', __FILE__);
define('UCSM_BASENAME_LITE', plugin_basename(__FILE__));

// Get Ready Plugin Translation
function ucsm_load_textdomain_lite() {
    load_plugin_textdomain('ultimate-coming-soon', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}
add_action('plugins_loaded', 'ucsm_load_textdomain_lite');

// WP Ultimate Coming Soon Admin Menu Bar
require_once UCSM_PLUGIN_DIR_LITE . 'backend/admin-menubar.php';

//Essential Hooks
require_once UCSM_PLUGIN_DIR_LITE . 'backend/hooks/essential-hooks.php';

// All CallBack functions
require_once UCSM_PLUGIN_DIR_LITE . 'backend/callback-function.php';

// Display Coming Soon Function and Template Redirect
require_once UCSM_PLUGIN_DIR_LITE . 'backend/tabs-content/templates/frontend-part/display-template.php';

// Add settings links to the plugin page
function ucsm_custom_setting_page_links_lite($links) {
    $settings_links = array(
        sprintf("<a href='%s'>%s</a>", admin_url('admin.php?page=ucsm-general-settings-lite&tab=dashboard-lite'), __('Settings', 'ultimate-coming-soon')),
        sprintf("<a href='%s' target='_blank'>%s</a>", 'https://rstheme.com/support/', __('Support', 'ultimate-coming-soon')),
        sprintf("<a href='%s' target='_blank' style='color: #0052da; font-weight: 700;'>%s</a>", 'https://wpucs.com/', __('Go Pro', 'ultimate-coming-soon')),
  
    );

    $links = array_merge($links, $settings_links);
    return $links;
}

add_filter('plugin_action_links_' . UCSM_BASENAME_LITE, 'ucsm_custom_setting_page_links_lite');

// Display message on the login page if wpucs_enable_mode is enabled
function ucsm_display_login_message_lite($message) {
    // Check if wpucs_enable_mode is enabled
    $wpucs_enable_mode = get_option('wpucs_enable_mode');
    
    if ($wpucs_enable_mode == 1) {
        // Add your custom message
        $custom_message = '<p class="message">' . __('Ultimate Coming Soon & Maintenance Mode is ON.', 'ultimate-coming-soon') . '</p>';
        
        // Append custom message to the default login message
        $message .= $custom_message;
    }

    return $message;
}
add_filter('login_message', 'ucsm_display_login_message_lite');


