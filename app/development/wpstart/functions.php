<?php
/*
 * WPstart functions and definitions.
 *
 * @package WordPress
 * @subpackage WPstart
 */

/**
 * WPstart setup.
 */
if( !function_exists( 'wpstart_setup' ) ) {
	function wpstart_setup() {

		// Allows theme developers to link a custom stylesheet file to the TinyMCE visual editor.
		add_editor_style( 'css/editor-style.css' );

		// This feature enables post and comment RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// This feature enables Custom_Backgrounds support for a theme.
		add_theme_support( 'custom-background', array() );
			
		// This feature allows the use of HTML5 markup for the comment forms, search forms and comment lists.
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
		
		// This feature enables Post Formats support for a Theme.
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
		
		// Enable support for Post Thumbnails, and declare 'wpstart-large' size.
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 150, 150, true ); // default post thumbnails: 150 pixels wide by 150 pixels tall, crop mode
		add_image_size( 'wpstart-large', 780, 780, true );
		
		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );
		
		// Sets the maximum allowed width for any content in the theme, like oEmbeds and images.
		global $content_width; 
		if ( ! isset( $content_width ) ) { 
			$content_width = 700; 
		}		
	
		// Makes WPstart available for translation.
		load_theme_textdomain( 'wpstart', get_template_directory() . '/languages' );
		
		// Adds support for a navigation menu.
		register_nav_menus( array(
			'site-navigation' 	=> __( 'Navigation', 'wpstart' ),
			'menu-navigation' 	=> __( 'Navigation Menu', 'wpstart' )
		) );
	}
}
add_action( 'after_setup_theme', 'wpstart_setup' );

/**
 * Enqueue scripts and styles.
 */
function wpstart_enqueue_scripts_and_styles() {
	// Support for threaded comments.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/**
	 * Enqueue Respond script.
	 * A fast & lightweight polyfill for min/max-width CSS3 Media Queries (for IE 6-8, and more)
	 *
	 * @link: https://github.com/scottjehl/Respond
	 */
	wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond/respond.min.js', array(), '1.4.2', false);
	
	// Load main stylesheet.
	wp_enqueue_style( 'wpstart-style', get_stylesheet_uri(), array(), '1.2.7', 'all' );
}
add_action( 'wp_enqueue_scripts', 'wpstart_enqueue_scripts_and_styles' );


//Enqueue scripts
if (!function_exists('theme_name_bower_scripts')) :
function theme_name_bower_scripts() {
  // bower:js
  wp_enqueue_script('vendor/jquery/dist/jquery.js', get_stylesheet_directory_uri() . '/vendor/jquery/dist/jquery.js', false, false, true);
  wp_enqueue_script('vendor/bootstrap/dist/js/bootstrap.js', get_stylesheet_directory_uri() . '/vendor/bootstrap/dist/js/bootstrap.js', false, false, true);
  // endbower
}
add_action('wp_enqueue_scripts', 'theme_name_bower_scripts');
endif;

//Enqueue styles
if (!function_exists('theme_name_bower_styles')) :
function theme_name_bower_styles() {
  // bower:css
  wp_enqueue_style('vendor/bootstrap/dist/css/bootstrap.css', get_stylesheet_directory_uri() . '/vendor/bootstrap/dist/css/bootstrap.css');
  // endbower
}
add_action('wp_enqueue_scripts', 'theme_name_bower_styles');
endif;

/**
 * Adds home link to wp page menu.
 */
function wpstart_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'wpstart_page_menu_args' );

/**
 * "Read more" link.
 */
if ( !function_exists( 'wpstart_read_more_link' ) ) {
	function wpstart_read_more_link() {
		return ' <a href="'. esc_url( get_permalink() ) . '" class="read-more" title="' . the_title_attribute( array('echo' => 0, 'before' => '', 'after' => '')) . '"><span>' . __( 'Continue reading', 'wpstart' ) . ' <span class="screen-reader-text sr-only">' . get_the_title() . '</span> <span class="meta-nav">&rarr;</span></span></a>';
	}
}

/**
 * "Read more" link: replace "[...]" with "..." in automatically generated excerpts.
 */
if ( !function_exists( 'wpstart_auto_excerpt_more' ) ) {
	function wpstart_auto_excerpt_more( $more ) {
		return '&hellip;' . wpstart_read_more_link();
	}
}
add_filter( 'excerpt_more', 'wpstart_auto_excerpt_more' );

/**
 * "Read more" link: add "Read more" link to custom post excerpts.
 */
if ( !function_exists( 'wpstart_custom_excerpt_more' ) ) {
	function wpstart_custom_excerpt_more( $output ) {
		if ( has_excerpt() && ! is_attachment() ) {
			$output .= wpstart_read_more_link();
		}
		return $output;
	}
}
add_filter( 'get_the_excerpt', 'wpstart_custom_excerpt_more' );

/**
 * wp_title() filter for more specific title element text.
 */
function wpstart_wp_title( $title, $sep ) {
	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	return $title;
}
add_filter( 'wp_title', 'wpstart_wp_title', 10, 2 );

/**
 * wpstart_render_title
 * Add backwards compatibility for wp_title, prior to version 4.1.
 */
if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function wpstart_render_title() { ?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php 
	}
	add_action( 'wp_head', 'wpstart_render_title' );
}

/**
 * Register widget areas.
 */
function wpstart_widgets_init() {
	// Sidebar
	register_sidebar( array(
		'name' => __( 'Sidebar', 'wpstart' ),
		'id' => 'sidebar-1',
		'description' => __( 'Sidebar', 'wpstart' ),
		'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Header
	register_sidebar( array(
		'name' => __( 'Header', 'wpstart' ),
		'id' => 'header',
		'description' => __( 'Header', 'wpstart' ),
		'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Footer
	register_sidebar( array(
		'name' => __( 'Footer', 'wpstart' ),
		'id' => 'footer',
		'description' => __( 'Footer', 'wpstart' ),
		'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Colophon
	register_sidebar( array(
		'name' => __( 'Colophon', 'wpstart' ),
		'id' => 'colophon',
		'description' => __( 'Colophon', 'wpstart' ),
		'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'wpstart_widgets_init' );

/** WPstart Hooks ********************************************************/

/**
 * HTML before
 */
add_action( 'wpstart_html_before', 'wpstart_doctype', 10 );

/**
 * Head top
 */
// wpstart_head_top

/**
 * Head bottom
 */
// wpstart_head_bottom

/**
 * WP head
 */
// wp_head()

/**
 * Body top
 */
add_action( 'wpstart_body_top', 'wpstart_wrapper_start', 10 );

/**
 * Header before
 */
add_action( 'wpstart_header_before', 'wpstart_header_before', 10 );

/**
 * Header top
 */
add_action( 'wpstart_header_top', 'wpstart_header_start', 10 );

/**
 * Header
 */
add_action( 'wpstart_header', 'wpstart_header_content', 10 );

/**
 * Header bottom
 */
add_action( 'wpstart_header_bottom', 'wpstart_header_end', 10 );

/**
 * Header after
 */
// wpstart_header_after

/**
 * Content before
 */
// wpstart_content_before

/**
 * Content top
 */
add_action( 'wpstart_content_top', 'wpstart_content_start', 10 );

/**
 * Container before
 */
// wpstart_container_before

/**
 * Container top
 */
add_action( 'wpstart_container_top', 'wpstart_container_start', 10 );

/**
 * Main before
 */
// wpstart_main_before

/**
 * Main top
 */
add_action ( 'wpstart_main_top', 'wpstart_main_start', 10 );

/**
 * Entries
 */
add_action( 'wpstart_entry_loop_before', 'wpstart_page_title', 10 );
add_action( 'wpstart_entry_before', 'wpstart_entry_start', 10 );
add_action( 'wpstart_entry_top', 'wpstart_entry_header_start', 10 );
add_action( 'wpstart_entry_top', 'wpstart_entry_title', 20 );
add_action( 'wpstart_entry_top', 'wpstart_meta_date', 30 );
add_action( 'wpstart_entry_top', 'wpstart_meta_author', 40 );
add_action( 'wpstart_entry_top', 'wpstart_meta_comments', 50 );
add_action( 'wpstart_entry_top', 'wpstart_entry_header_end', 60 );
add_action( 'wpstart_entry_content', 'wpstart_entry_content_start', 10 );
add_action( 'wpstart_entry_content', 'wpstart_entry_content_thumbnail', 20 );
add_action( 'wpstart_entry_content', 'wpstart_entry_content', 30 );
add_action( 'wpstart_entry_content', 'wpstart_entry_content_end', 40 );
add_action( 'wpstart_entry_bottom', 'wpstart_entry_footer_start', 10 );
add_action( 'wpstart_entry_bottom', 'wpstart_meta_dimensions', 20 );
add_action( 'wpstart_entry_bottom', 'wpstart_meta_categories', 30 );
add_action( 'wpstart_entry_bottom', 'wpstart_meta_tags', 40 );
add_action( 'wpstart_entry_bottom', 'wpstart_edit_post_link', 50 );
add_action( 'wpstart_entry_bottom', 'wpstart_author_info', 60 );
add_action( 'wpstart_entry_bottom', 'wpstart_entry_footer_end', 70 );
add_action( 'wpstart_entry_after', 'wpstart_entry_end', 10 );
add_action( 'wpstart_entry_loop_after', 'wpstart_pagination', 10 );
add_action( 'wpstart_entry_no_results_not_found', 'wpstart_entry_no_results_not_found', 10 );

/**
 * Comments before
 */
// wpstart_comments_before

/**
 * Comments after
 */
// wpstart_comments_after
 
/**
 * Main bottom
 */
add_action ( 'wpstart_main_bottom', 'wpstart_main_end', 10 );

/**
 * Main after
 */
// wpstart_main_after

/**
 * Sidebars before
 */
// wpstart_sidebars_before

/**
 * Sidebar top
 */
// wpstart_sidebar_top

/**
 * Sidebar bottom
 */
// wpstart_sidebar_bottom

/**
 * Sidebars after
 */
// wpstart_sidebars_after

/**
 * Container bottom
 */
add_action ( 'wpstart_container_bottom', 'wpstart_container_end', 10 );

/**
 * Container after
 */
// wpstart_container_after

/**
 * Content bottom
 */
add_action( 'wpstart_content_bottom', 'wpstart_content_end', 10 );

/**
 * Content after
 */
// wpstart_content_after

/**
 * Footer before
 */
// wpstart_footer_before

/**
 * Footer top
 */
add_action( 'wpstart_footer_top', 'wpstart_footer_start', 10 );

/**
 * Footer
 */
add_action( 'wpstart_footer', 'wpstart_footer_content', 10 );

/**
 * Footer bottom
 */
add_action( 'wpstart_footer_bottom', 'wpstart_footer_end', 10 );

/**
 * Footer after
 */
// wpstart_footer_after
 
/**
 * Body bottom
 */
add_action( 'wpstart_body_bottom', 'wpstart_wrapper_end', 10 );

/**
 * WP footer
 */
// wp_footer()

/**
 * Content extensions
 */
require_once( get_template_directory() . '/inc/content-extensions.php');

/**
 * Custom header
 */
require( get_template_directory() . '/inc/custom-header.php' );

/**
 * Meta box post layout
 */
require( get_template_directory() . '/inc/post-custom-meta-post-layout.php' );

/**
 * Meta box site layout
 */
require( get_template_directory() . '/inc/post-custom-meta-site-layout.php' );