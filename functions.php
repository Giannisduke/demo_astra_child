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
	// load custom css
	wp_register_style( 'custom_css', get_stylesheet_directory_uri(). '/assets/css/custom.css');
	wp_enqueue_style( 'custom_css' );

	// load custom js
	wp_register_script('custom_js', get_stylesheet_directory_uri(). '/assets/js/custom.js');
	wp_enqueue_script( 'custom_js' );
}
add_action ('wp_enqueue_scripts', 'load_custom_files', 10 );



function custom_text() {

}
add_action('giannis_custom_fumction', 'custom_text');
