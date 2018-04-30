<?php /*
================================================================================
The Ball 2002 Child Theme Functions
================================================================================
AUTHOR: Christian Wach <needle@haystack.co.uk>
--------------------------------------------------------------------------------
NOTES

Theme amendments and overrides.

--------------------------------------------------------------------------------
*/



// set our version here
define( 'THEBALL2002_VERSION', '1.0.5' );



/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since 1.0
 */
if ( ! isset( $content_width ) ) { $content_width = 660; }



/**
 * Augment the Base Theme's setup function.
 *
 * @since 1.0
 */
function theball2002_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be added to the /languages/ directory of the child theme.
	 */
	load_theme_textdomain(
		'theball2002',
		get_stylesheet_directory() . '/languages'
	);

}

// add after theme setup hook
add_action( 'after_setup_theme', 'theball2002_setup' );



/**
 * Add child theme's CSS file(s).
 *
 * @since 1.0
 */
function theball2002_enqueue_styles() {

	// enqueue file
	wp_enqueue_style(
		'theball2002_css',
		get_stylesheet_directory_uri() . '/assets/css/style-overrides.css',
		array( 'theball_screen_css' ),
		THEBALL2002_VERSION, // version
		'all' // media
	);

}

// add a filter for the above
add_filter( 'wp_enqueue_scripts', 'theball2002_enqueue_styles', 105 );



/**
 * Override image of The Ball.
 *
 * @since 1.0
 *
 * @param str $default The existing markup for the image file.
 * @return str $default The modified markup for the image file.
 */
function theball2002_theball_image( $default ) {

	// ignore default and set our own
	return '<a href="' . get_option( 'home' ) . '" title="' . __( 'Home', 'theball2002' ) . '" class="ball_image">' .
			'<img src="' . get_stylesheet_directory_uri() . '/assets/images/interface/the_ball_2002.png" ' .
				 'alt="' . esc_attr( __( 'The Ball 2002', 'theball2002' ) ) . '" ' .
				 'title="' . esc_attr( __( 'The Ball 2002', 'theball2002' ) ) . '" ' .
				 'style="width: 100px; height: 100px;" ' .
				 'id="the_ball_header" />' .
			'</a>' ;

}

// add a filter for the above
add_filter( 'theball_image', 'theball2002_theball_image', 10, 1 );



/**
 * Override supporters footer template file.
 *
 * @since 1.0
 *
 * @param str $default The default path to the template file.
 * @return str $default The modified path to the template file.
 */
function theball2002_supporters_file( $default ) {

	// return our theme's supporters list file
	return get_stylesheet_directory() . '/assets/includes/supporters_2002.php';

}

// add a filter for the above
add_filter( 'theball_supporters', 'theball2002_supporters_file', 10, 1 );



/**
 * Override video width.
 *
 * @since 1.0
 */
function theball2002_video_width( $default ) {

	// return full width
	return 640;

}

// add a filter for the above
add_filter( 'sofvm_video_width', 'theball2002_video_width', 10, 1 );



/**
 * Override video height.
 *
 * @since 1.0
 */
function theball2002_video_height( $default ) {

	// return full height
	return 480;

}

// add a filter for the above
add_filter( 'sofvm_video_height', 'theball2002_video_height', 10, 1 );



/**
 * Override active menu item for a custom post type.
 *
 * @since 1.0
 */
function theball2002_change_page_menu_classes( $menu ) {

	// access post
	global $post;

	// is this our video post type?
	if ( get_post_type( $post ) == 'sofvm_video' ) {

		// remove all current_page_parent classes
		$menu = str_replace( 'current_page_parent', '', $menu );

		// add the current_page_parent class to the page we want
		$menu = str_replace( 'menu-item-499', 'menu-item-499 current_page_parent', $menu );

	}

	// --<
	return $menu;

}

// add a filter for the above
add_filter( 'wp_nav_menu', 'theball2002_change_page_menu_classes', 10, 1 );



/**
 * Override topics title.
 *
 * @since 1.0
 */
function theball2002_topics( $default ) {

	// return our theme's supporters list file
	return __( 'Countries', 'theball2002' );

}

// add a filter for the above
add_filter( 'theball_topics_title', 'theball2002_topics', 10, 1 );



