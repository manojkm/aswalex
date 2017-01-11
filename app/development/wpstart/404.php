<?php
/**
 * 404 Template
 * This template is used when a 404 page is shown.
 *
 * @package WordPress
 * @subpackage WPstart
 */
get_header(); ?>

<?php do_action('wpstart_container_before'); ?>

<?php do_action('wpstart_container_top'); ?>

	<?php do_action('wpstart_main_before'); ?>
	
	<?php do_action('wpstart_main_top'); ?>
	
		<?php do_action('wpstart_entry_no_results_not_found'); ?>
	
	<?php do_action('wpstart_main_bottom'); ?>
	
	<?php do_action('wpstart_main_after'); ?>
	
	<?php get_sidebar(); ?>
	
<?php do_action('wpstart_container_bottom'); ?>

<?php do_action('wpstart_container_after'); ?>

<?php get_footer(); ?>