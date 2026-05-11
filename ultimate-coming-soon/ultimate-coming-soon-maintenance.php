<?php

/**
 * Plugin Name: Ultimate Coming Soon & Maintenance 
 * Description: Coming Soon & Maintenance Mode Plugin For WordPress. Hide your website until it’s ready. 
 * Version: 2.0.0
 * Author URI: http://rstheme.com
 * Plugin URI: https://wordpress.org/plugins/ultimate-coming-soon/
 * Author: RSTheme
 * License: GPL v2 or later
 * License URI:http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: ultimate-coming-soon
 * Domain Path: /languages
 * Requires PHP: 7.4
 * Requires at least: 6.3
 */

defined('ABSPATH') or die('Hey, what are you doing here? You silly human!');

if (!defined("UCS_ROOT_FILE")) {
  define("UCS_ROOT_FILE", __FILE__);
}

spl_autoload_register(function ($class) {
  $prefix = 'ultimate_comming_soon\\';

  // Base directories for this namespace
  $base_dir = __DIR__ . '/includes/';

  // Does the class use the namespace prefix?
  if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
    return;
  }

  // Get the relative class name
  $relative_class = substr($class, strlen($prefix));

  // Replace namespace separators with directory separators
  $relative_path = str_replace('\\', '/', $relative_class) . '.php';
  $file = $base_dir . $relative_path;

  if (file_exists($file)) {
    require_once $file;
    return;
  }
});


//boostrap the plugin
ultimate_comming_soon\Handlers\Plugin_Boostrap::getInstance();
