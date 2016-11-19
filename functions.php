<? php
/**
 * InMotion functions and definitions
 *
 * @package inmotion
 */

if ( ! function_exists( 'inmotion_setup' ) ) :

	function inmotion_setup() {

		/**
                 * Add default posts and comments RSS feed links to head
                 */
                add_theme_support( 'automatic-feed-links' );
 
                /**
                 * Enable support for Post Thumbnails
                 */
                add_theme_support( 'post-thumbnails' );
 
	}

endif; // inmotion_setup
add_action( 'after_setup_theme', 'inmotion_setup' );

/**
 * Enqueue scripts and styles
 */
function inmotion_scripts_and_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'inmotion_scripts_and_styles' );