<?php 

/**
 * Theme support
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

/**
 * Styles and scripts
 */
function a2j_styles_and_scripts() {

    // Styles
    wp_enqueue_style( 'a2j-main', get_stylesheet_uri(), array(), '1.0' );

    // Scripts
    wp_enqueue_script( 'form', get_template_directory_uri() . '/src/javascript/contactForm.js', array(), '1.0', true );
    wp_enqueue_script( 'menu', get_template_directory_uri() . '/src/javascript/menu.js', array(), '1.0', true );
    wp_enqueue_script( 'portfolio', get_template_directory_uri() . '/src/javascript/portfolioScroll.js', array(), '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'a2j_styles_and_scripts' );

add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Register menus
 */
if ( ! function_exists( 'a2j_register_nav_menu' ) ) {

	function a2j_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'a2j' ),
	    	'footer_menu'  => __( 'Footer Menu', 'a2j' ),
		) );
	}
	add_action( 'after_setup_theme', 'a2j_register_nav_menu', 0 );
}