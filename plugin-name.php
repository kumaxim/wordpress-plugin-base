<?php

/**
 * The plugin bootstrap file
 *
 * @wordpress-plugin
 * Plugin Name:       PLUGIN NAME
 * Description:       DESCRIBE PLUGIN DOING THINGS
 * Version:           1.0
 * Author:            Maxim Kudryavtsev
 * Author URI:        https://www.upwork.com/freelancers/~01d38e15c52f399ca5
 * License:           Proprietary
 * License URI:       https://www.upwork.com/legal/
 */

// If this file is called directly, abort.
defined( 'WPINC' ) || die( 'Access restricted' );

/**
 * Define start up function
 *
 * @since 1.0.0
 */
function run_PLUGIN_NAME_c48ce1f2cbe65268365d7b3499ceeb6c() {
	// Plugin dependencies via composer
	require_once __DIR__ . '/vendor/autoload.php';

	// WRITE THINGS BELOW...

}

/**
 * Begins execution of the plugin.
 *
 * @since 1.0.0
 */
run_PLUGIN_NAME_c48ce1f2cbe65268365d7b3499ceeb6c();
