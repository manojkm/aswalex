<?php
/**
 * Implement a custom header for WPstart.
 *
 * @link http://codex.wordpress.org/Custom_Headers
 *
 * @package WordPress
 * @subpackage WPstart
 */

/**
 * Set up the WordPress core custom header arguments and settings.
 */
function wpstart_custom_header_setup() {
	$args = array(
		'default-image'          => get_template_directory_uri() . '/images/headers/default.png',
		'random-default'         => false,
		'width'                  => 1600,
		'height'                 => 50,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '333333',
		'header-text'            => true,
		'uploads'                => true,		
		'wp-head-callback'       => 'wpstart_header_style',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);

	// Adds support for a custom header image.
	add_theme_support( 'custom-header', $args );

	/*
	 * Register a default header to be displayed by the custom header admin UI.
	 * The %s is replaced with theme template directory URI.
	 * To reference a image in a child theme (ie in the stylesheet directory), use %2$s instead of %s.
	 */
	register_default_headers( array(
		'default' => array(
			'url'           => '%s/images/headers/default.png',
			'thumbnail_url' => '%s/images/headers/default-thumbnail.png',
			'description'   => __( 'Default', 'wpstart' )
		),
		'black' => array(
			'url'           => '%s/images/headers/black.png',
			'thumbnail_url' => '%s/images/headers/black-thumbnail.png',
			'description'   => _x( 'Black', 'header image description', 'wpstart' )
		),
		'blue' => array(
			'url'           => '%s/images/headers/blue.png',
			'thumbnail_url' => '%s/images/headers/blue-thumbnail.png',
			'description'   => _x( 'Blue', 'header image description', 'wpstart' )
		),
		'brown' => array(
			'url'           => '%s/images/headers/brown.png',
			'thumbnail_url' => '%s/images/headers/brown-thumbnail.png',
			'description'   => _x( 'Brown', 'header image description', 'wpstart' )
		),
		'gray' => array(
			'url'           => '%s/images/headers/gray.png',
			'thumbnail_url' => '%s/images/headers/gray-thumbnail.png',
			'description'   => _x( 'Gray', 'header image description', 'wpstart' )
		),
		'green' => array(
			'url'           => '%s/images/headers/green.png',
			'thumbnail_url' => '%s/images/headers/green-thumbnail.png',
			'description'   => _x( 'Green', 'header image description', 'wpstart' )
		),
		'orange' => array(
			'url'           => '%s/images/headers/orange.png',
			'thumbnail_url' => '%s/images/headers/orange-thumbnail.png',
			'description'   => _x( 'Orange', 'header image description', 'wpstart' )
		),
		'pink' => array(
			'url'           => '%s/images/headers/pink.png',
			'thumbnail_url' => '%s/images/headers/pink-thumbnail.png',
			'description'   => _x( 'Pink', 'header image description', 'wpstart' )
		),
		'purple' => array(
			'url'           => '%s/images/headers/purple.png',
			'thumbnail_url' => '%s/images/headers/purple-thumbnail.png',
			'description'   => _x( 'Purple', 'header image description', 'wpstart' )
		),
		'red' => array(
			'url'           => '%s/images/headers/red.png',
			'thumbnail_url' => '%s/images/headers/red-thumbnail.png',
			'description'   => _x( 'Red', 'header image description', 'wpstart' )
		),
		'silver' => array(
			'url'           => '%s/images/headers/silver.png',
			'thumbnail_url' => '%s/images/headers/silver-thumbnail.png',
			'description'   => _x( 'Silver', 'header image description', 'wpstart' )
		),
		'tan' => array(
			'url'           => '%s/images/headers/tan.png',
			'thumbnail_url' => '%s/images/headers/tan-thumbnail.png',
			'description'   => _x( 'Tan', 'header image description', 'wpstart' )
		),
		'white' => array(
			'url'           => '%s/images/headers/white.png',
			'thumbnail_url' => '%s/images/headers/white-thumbnail.png',
			'description'   => _x( 'White', 'header image description', 'wpstart' )
		),
		'yellow' => array(
			'url'           => '%s/images/headers/yellow.png',
			'thumbnail_url' => '%s/images/headers/yellow-thumbnail.png',
			'description'   => _x( 'Yellow', 'header image description', 'wpstart' )
		),
	) );
}
add_action( 'after_setup_theme', 'wpstart_custom_header_setup' );

/**
 * Styles the header displayed on front-end.
 */
if ( !function_exists( 'wpstart_header_style' ) ) {
	function wpstart_header_style() {
		$header_image = get_header_image();
		$header_textcolor = get_header_textcolor();
		
		// If header image is not set and header text color is set to default (no custom options are set), let's bail.
		// Header text color is then shown from style.css settings.
		if ( empty( $header_image ) && $header_textcolor == get_theme_support( 'custom-header', 'default-text-color' ) )
			return;
		?>
		<style type="text/css" id="wpstart-header-style">
		<?php
			// If custom header is set.
			if ( ! empty( $header_image ) ) :
		?>
			.site-header {
				background: url(<?php header_image(); ?>) no-repeat scroll top;
				background-size: 1600px auto;
				min-height: 50px;
			}
		<?php
			endif;
			
			// If there is no header text.
			if ( ! display_header_text() ) :
		?>
			.site-title,
			.site-title a,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
			
			.site-brand {
				min-height: 50px;
			}
		<?php
			endif;

			// If is set a custom color for the header text.
			if ( ! empty( $header_textcolor ) ) :
		?>
			.site-title a {
				color: #<?php echo esc_attr( $header_textcolor ); ?>;
			}
		<?php endif; ?>
		</style>
	<?php
	}
}