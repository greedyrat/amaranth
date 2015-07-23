<?php
/**
 * @package WPContacts\Main
 */

/**
 * Plugin Name: WordPress Contacts 
 * Version: 0.1.1
 * Plugin URI: Yet.
 * Description: Customer management plugin for any samll markets.
 * Author: Team Greedyrat
 * Author URI:
 * Text Domain:
 * Domain Path: /languages/
 * License: Undefined
 */

/** Plugin Version */
defined('WP_CONTACTS_VERSION', '0.1.1');

if ( ! defined('WPCON_FILE')) {
	define('WPCON_FILE', __FILE__);
}

if ( ! defined('WPCON_PATH')) {
	defined('WPCON_PATH', plugin_dir_path(WPCON_FILE));
}
