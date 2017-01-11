<?php
/**
 * Single Post Template
 * This template is used when a single post page is shown.
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

		<?php get_template_part('content', get_post_format()); ?>
		
		<?php comments_template( '', true ); ?>
					
		<?php endwhile; ?>
	
	<?php do_action('wpstart_main_bottom'); ?>
	
	<?php do_action('wpstart_main_after'); ?>
	
	<?php get_sidebar(); ?>

<?php do_action('wpstart_container_bottom'); ?>

<?php do_action('wpstart_container_after'); ?>

<?php get_footer(); ?>