<?php
/**
 * All Pages Template
 * This template is used when a page is shown.
 *
 * @package WordPress
 * @subpackage WPstart
 */
get_header(); ?>

<?php do_action('wpstart_container_before'); ?>

<?php do_action('wpstart_container_top'); ?>

	<?php do_action('wpstart_main_before'); ?>
	
	<?php do_action('wpstart_main_top'); ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
		
		<?php do_action('wpstart_entry_before'); ?>
		
			<?php do_action('wpstart_entry_top'); ?>
		
			<?php do_action('wpstart_entry_content'); ?>
					
			<?php do_action('wpstart_entry_bottom'); ?>

		<?php do_action('wpstart_entry_after'); ?>
		
		<?php comments_template( '', true ); ?>

		<?php endwhile; ?>
	
	<?php do_action('wpstart_main_bottom'); ?>
	
	<?php do_action('wpstart_main_after'); ?>
	
	<?php get_sidebar(); ?>

<?php do_action('wpstart_container_bottom'); ?>

<?php do_action('wpstart_container_after'); ?>
	
<?php get_footer(); ?>