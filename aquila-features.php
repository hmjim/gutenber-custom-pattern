<?php
/**
 * Aquila Features Plugin
 *
 * @package aquila-features
 * @author  hmjim
 *
 * @wordpress-plugin
 * Plugin Name:       Aquila Features
 * Plugin URI:        https://github.com/hmjim/itineris
 * Description:       Adds Gutenberg Blocks.
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            hmjim
 * Author URI:        https://github.com/hmjim/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       aquila-features
 * Domain Path:       /languages
 */

/**
 * Bootstrap the plugin.
 */
require_once 'vendor/autoload.php';
require_once untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/inc/custom-functions.php';

use AquilaFeatures\Plugin;

if ( class_exists( 'AquilaFeatures\Plugin' ) ) {
	$the_plugin = new Plugin();
}

register_activation_hook( __FILE__, [ $the_plugin, 'activate' ] );

register_deactivation_hook( __FILE__, [ $the_plugin, 'deactivate' ] );
