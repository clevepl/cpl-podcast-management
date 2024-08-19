<?php

namespace cpl\podcast_management;

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://skorasaur.us
 * @since             1.0.1
 * @package          Podcast Episode Management
 *
 * @wordpress-plugin
 * Plugin Name:       CPL Podcast Episode Management
 * Plugin URI:        https://github.com/clevepl/cpl-podcast-management
 * Description:       Providing Post Registration & Patterns for CPL's Podcasts
 * Requires PHP:      7.2+
 * Version:           1.2.0
 * Author:            Will Skora & The CPL Team
 * Author URI:        https://github.com/clevepl/cpl-podcast-management
 * License:           GPL-3.0+
 * License URI:       https://choosealicense.com/licenses/gpl-3.0/
 * Text Domain:       cpl-podcast-management
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// not sure if this a standard?
define( 'CPL_POD_MGMT_VERSION', '1.2.0' );

// set the base directory
define( 'CPL_POD_MGMT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );


require_once( CPL_POD_MGMT_PLUGIN_DIR . 'register-post-type.php' );
require_once( CPL_POD_MGMT_PLUGIN_DIR . 'block-pattern.php' );

add_action( 'init', __NAMESPACE__ . '\cpl_register_podcast_episode' );
add_action( 'init', __NAMESPACE__ . '\cpl_register_block_patterns' );
add_action( 'init', __NAMESPACE__ . '\cpl_register_block_pattern_categories' );


// https://codex.wordpress.org/Function_Reference/register_post_type#Flushing_Rewrite_on_Activation
// This is to flush rewrites so if I decide to change the path of the CPT, it will auotmatically
// do it on plugin activation
function my_rewrite_flush() {
	// First, we "add" the custom post type via the above written function.
	// Note: "add" is written with quotes, as CPTs don't get added to the DB,
	// They are only referenced in the post_type column with a post entry,
	// when you add a post of this CPT.
	cpl_register_podcast_episode();

	// ATTENTION: This is *only* done during plugin activation hook in this example!
	// You should *NEVER EVER* do this on every page load!!
	\flush_rewrite_rules();
}
register_activation_hook( __FILE__, __NAMESPACE__ . '\my_rewrite_flush' );
