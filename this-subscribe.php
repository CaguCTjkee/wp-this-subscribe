<?php
/**
 * Plugin Name: This subscribe
 * Plugin URI: https://caguct.com/this-subscribe
 * Description: Add subscribes from email to wordpress
 * Version: 1.0.0
 * Text Domain: this-subscribe
 * Author: Oleksii Biriukov
 * Author URI: https://caguct.com/u
 * License: none
 */

// Plugin root file
if ( defined( 'FILE_OF_PL' ) === false ) {
	define( 'FILE_OF_PL', __FILE__ );
}
// Plugin root path
if ( defined( 'PL_ROOT' ) === false ) {
	define( 'PL_ROOT', realpath( dirname( FILE_OF_PL ) ) );
}
// Plugin url path
if ( defined( 'PL_URL' ) === false ) {
	define( 'PL_URL', plugin_dir_url( __FILE__ ) );
}
// DIRECTORY_SEPARATOR to DS
if ( defined( 'DS' ) === false ) {
	define( 'DS', DIRECTORY_SEPARATOR );
}
// Plugin temlate path
if ( defined( 'PL_TEMPLATES' ) === false ) {
	define( 'PL_TEMPLATES', PL_ROOT . DS . 'templates' );
}
// Plugin text domain
if ( defined( 'PL_TEXTDOMAIN' ) === false ) {
	define( 'PL_TEXTDOMAIN', 'this-subscribe' );
}

// Plugin autoload
include_once PL_ROOT . DS . 'autoload.php';

// Init plugin controller
$ThisSubscribe = new \ThisSubscribe\PluginController();
$ThisSubscribe->registers();