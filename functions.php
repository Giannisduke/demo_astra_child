<?php
/**
 * Astra child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function load_custom_files() {
	wp_register_style( 'custom_css', get_stylesheet_directory_uri(). '/assets/css/custom.css');
	wp_enqueue_style( 'custom_css' );
}
add_action ('wp_enqueue_scripts', 'load_custom_files', 10 );
