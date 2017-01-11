<?php
/**
 * Header Template
 * The area of the page that contains the header.
 *
 * @package WordPress
 * @subpackage WPstart
 */
?>

<?php 
/**
 * wpstart_html_before
 *
 * @hooked wpstart_doctype - 10
 */
do_action( 'wpstart_html_before' ); 
?>

<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<?php do_action('wpstart_head_top'); ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php
	/**
	 * Include html5shiv.
	 * This script is the defacto way to enable use of HTML5 sectioning elements in legacy Internet Explorer.
	 *
	 * @link https://github.com/aFarkas/html5shiv
	 */	
	?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv/html5shiv.min.js?ver=3.7.3" type="text/javascript"></script>
	<![endif]-->

	<!-- WPstart v1.2.7 - http://wordpress.org/themes/wpstart -->

	<?php do_action('wpstart_head_bottom'); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
/**
 * wpstart_body_top
 *
 * @hooked wpstart_wrapper_start - 10
 */
do_action('wpstart_body_top');
?>

<?php do_action('wpstart_header_before'); ?>

	<?php 
	/**
	 * wpstart_header_top
	 *
	 * @hooked wpstart_header_start - 10
	 */
	do_action('wpstart_header_top');
	?>

		<?php 
		/**
		 * wpstart_header
		 *
		 * @hooked wpstart_header_content - 10
		 */
		do_action('wpstart_header');
		?>

	<?php 
	/**
	 * wpstart_header_bottom
	 *
	 * @hooked wpstart_header_end - 10
	 */
	do_action('wpstart_header_bottom');
	?>

	<?php 
	/**
	 * wpstart_header_after
	 */
	do_action('wpstart_header_after');
	?>

	<?php do_action('wpstart_content_before'); ?>

	<?php 
	/**
	 * wpstart_content_top
	 *
	 * @hooked wpstart_content_start - 10
	 */
	do_action('wpstart_content_top');
	?>