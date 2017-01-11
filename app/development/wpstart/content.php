<?php
/**
 * Content Template
 * This template is used for displaying content.
 *
 * @package WordPress
 * @subpackage WPstart
 */
?>

<?php if ( is_single() ) { ?>

<?php do_action('wpstart_entry_before'); ?>

	<?php do_action('wpstart_entry_top'); ?>
		
	<?php do_action('wpstart_entry_content'); ?>
					
	<?php do_action('wpstart_entry_bottom'); ?>

<?php do_action('wpstart_entry_after'); ?>
	
<?php do_action('wpstart_entry_loop_after'); ?>

<?php } else { ?>

<?php do_action('wpstart_entry_before'); ?>

	<?php do_action('wpstart_entry_top'); ?>

	<?php do_action('wpstart_entry_content'); ?>
					
	<?php do_action('wpstart_entry_bottom'); ?>
	
<?php do_action('wpstart_entry_after'); ?>

<?php } ?>