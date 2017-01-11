<?php
/**
 * Footer Template
 * The area of the page that contains the footer.
 *
 * @package WordPress
 * @subpackage WPstart
 */
?>

<?php 
/**
 * wpstart_content_bottom
 *
 * @hooked wpstart_content_end - 10
 */
do_action('wpstart_content_bottom');
?>

<?php do_action('wpstart_content_after'); ?>

<?php do_action('wpstart_footer_before'); ?>

<?php 
/**
 * wpstart_footer_top
 *
 * @hooked wpstart_footer_start - 10
 */
do_action('wpstart_footer_top');
?>

<?php 
/**
 * wpstart_footer
 *
 * @hooked wpstart_footer_content - 10
 */
do_action('wpstart_footer');
?>

<?php 
/**
 * wpstart_footer_bottom
 *
 * @hooked wpstart_footer_end - 10
 */
do_action('wpstart_footer_bottom');
?>

<?php do_action('wpstart_footer_after'); ?>

<?php 
/**
 * wpstart_body_bottom
 *
 * @hooked wpstart_wrapper_end - 10
 */
do_action('wpstart_body_bottom');
?>

<?php wp_footer(); ?>

</body>
</html>