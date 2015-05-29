<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://fsylum.net
 * @since             1.0.0
 * @package           Outdated_Notice
 *
 * @wordpress-plugin
 * Plugin Name:       Outdated Notice
 * Plugin URI:        http://wordpress.org/plugins/outdated-notice
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Firdaus Zahari
 * Author URI:        http://fsylum.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       outdated-notice
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-outdated-notice-activator.php
 */
function activate_outdated_notice() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-outdated-notice-activator.php';
	Outdated_Notice_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-outdated-notice-deactivator.php
 */
function deactivate_outdated_notice() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-outdated-notice-deactivator.php';
	Outdated_Notice_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_outdated_notice' );
register_deactivation_hook( __FILE__, 'deactivate_outdated_notice' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-outdated-notice.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_outdated_notice() {

	$plugin = new Outdated_Notice();
	$plugin->run();

}
run_outdated_notice();
