<?php

// disable xdebug backtrace
if ( function_exists( 'xdebug_disable' ) ) {
	xdebug_disable();
}

if ( false !== getenv( 'WP_PLUGIN_DIR' ) ) {
	define( 'WP_PLUGIN_DIR', getenv( 'WP_PLUGIN_DIR' ) );
}

$GLOBALS['wp_tests_options'] = array(
	'active_plugins' => array( 'plugin-name/plugin-name.php' ),
);

$wp_develop_dir = null;

if ( false !== getenv( 'WP_DEVELOP_DIR' ) ) {
	$wp_develop_dir = getenv( 'WP_DEVELOP_DIR' ) . '/tests/phpunit/includes/bootstrap.php';
} else {
	$path_segments = explode( DIRECTORY_SEPARATOR, __DIR__ );
	$path_segments = array_filter( $path_segments, 'mb_strlen' );

	foreach ( $path_segments as $n => $segment ) {
		if ( ( 0 < $n ) && ( 'src' === $segment ) && ( 'wordpress' === $path_segments[ $n - 1 ] ) ) {
			break;
		}

		$wp_develop_dir .= DIRECTORY_SEPARATOR . $segment;
	}
}

require_once $wp_develop_dir . '/tests/phpunit/includes/bootstrap.php';