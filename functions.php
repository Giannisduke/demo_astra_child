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

	// Add bootstrap 4.6 CSS
	wp_register_style( 'bootstrap-css', get_stylesheet_directory_uri(). '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'bootstrap-css' );

	// load custom css
	wp_register_style( 'custom_css', get_stylesheet_directory_uri(). '/assets/css/custom.css');
	wp_enqueue_style( 'custom_css' );

	// load bootstrap 4.6 js
	wp_register_script('bootstrap_js', get_stylesheet_directory_uri(). '/assets/js/bootstrap.js');
	wp_enqueue_script( 'bootstrap_js' );

	// load custom js
	wp_register_script('custom_js', get_stylesheet_directory_uri(). '/assets/js/custom.js');
	wp_enqueue_script( 'custom_js' );

}
add_action ('wp_enqueue_scripts', 'load_custom_files', 10 );



function custom_hero_section() { ?>
	<!-- Section 2 Start -->
	    <section class="hero">
	        <div class="container">
	            <div class="row justify-content-center align-items-center">
	              <div class="col-12 text-center">
	                <h1><?php echo get_the_title(); ?></h1>
	                <p>Web Developer</p>
	              </div>
	            </div>
	        </div>
	    </section>
<?php }
add_action('giannis_home_function', 'custom_hero_section', 5 );

function custom_profile_section() { ?>
	<!-- Section 2 Start -->
	    <section class="profile">
	        <div class="container h-100">
	            <div class="row h-100 justify-content-start align-items-center">
	                <div class="col-12 col-lg-6 text-center">
	                    <div class="image_wrapper">
	                        <img class="image_profile" src="" />
	                    </div>
	                </div>
	                <div class="col-12 col-lg-6">
	                    <div class="container h-100">
	                        <div class="row h-100 justify-content-start align-items-center">
	                            <div class="d-flex h-75 flex-column align-items-start">
	                                <h2>Όνομα Επίθετο</h2>
	                                <span>Web Developer</span>
	                                <p>Text</p>
	                                <button type="button" class="btn btn-primary mt-auto">Primary</button>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
<?php }
add_action('giannis_home_function', 'custom_profile_section', 10 );

function custom_services_section() { ?>
	<!-- Section 3 Start -->
	    <section class="services p-5 text-center">
	        <div class="container h-100">
	            <h2 class = "p-5">Services</h2>
	            <div class="row h-100 justify-content-around align-items-center">
	                <article class="col-lg-4 text-center test">
	                    <h5>Προγραμματισμός</h5>
	                </article>
	                <article class="col-lg-4 text-center test">
	                    <h5>Σχεδίαση</h5>
	                </article>
	                <article class="col-lg-4 text-center test">
	                    <h5>Web Design</h5>
	                </article>
	                <article class="col-lg-4 text-center test">
	                    <h5>Φωτογραφία</h5>
	                </article>
	                <article class="col-lg-4 text-center test">
	                    <h5>Video</h5>
	                </article>
	                <article class="col-lg-4 text-center test">
	                    <h5>Εφαρμογές</h5>
	                </article>
	            </div>
	        </div>
	    </section>
	<!-- Section 3 End -->
<?php }
add_action('giannis_home_function', 'custom_services_section', 15 );
