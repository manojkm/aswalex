<?php
/*
 * WPstart content extensions.
 *
 * @package WordPress
 * @subpackage WPstart
 */

/** HTML before / wpstart_html_before ********************************************************/

/**
 * wpstart_doctype
 */
if ( !function_exists( 'wpstart_doctype' ) ) {
function wpstart_doctype() { ?>
<!DOCTYPE html>
<?php }
}

/** Head top / wpstart_head_top ********************************************************/
// wpstart_head_top

/** Head bottom / wpstart_head_bottom ********************************************************/
// wpstart_head_bottom

/** WP head / wp_head() ********************************************************/
// wp_head()

/** Body top: wpstart_body_top ********************************************************/

/**
 * wpstart_wrapper_start
 */
if ( !function_exists( 'wpstart_wrapper_start' ) ) {
	function wpstart_wrapper_start() { ?>
		<div id="outerwrapper"><div id="wrapper">
	<?php
	}
}

/** Header before / wpstart_header_before ********************************************************/

/**
 * wpstart_header_before
 */
if ( !function_exists( 'wpstart_header_before' ) ) {
	function wpstart_header_before() {
	?>
	<a class="screen-reader-text skip-link sr-only" href="#content" title="<?php esc_attr_e( 'Skip to content', 'wpstart' ); ?>"><?php _e( 'Skip to content', 'wpstart' ); ?></a>
	<?php
	}
}

/** Header top / wpstart_header_top ********************************************************/

/**
 * wpstart_header_start
 */
if ( !function_exists( 'wpstart_header_start' ) ) {
	function wpstart_header_start() {
		if ( get_theme_mod( 'wpstart_fixed_header' ) ) { ?>
			<header id="header" class="site-header navbar-fixed-top" role="banner">
		<?php } else { ?>
			<header id="header" class="site-header navbar navbar-static-top" role="banner">
		<?php 
		}
	}
}

/** Header / wpstart_header ********************************************************/

/**
 * wpstart_header_content
 */
if ( !function_exists( 'wpstart_header_content' ) ) {
	function wpstart_header_content() { 
	?>
	<div class="container">
		<div class="row">
		
			<div class="site-brand">
			
			<?php if ( is_home() || is_front_page() ) { ?>
				<h1 class="site-title">
			<?php } else { ?>
				<p class="site-title">
			<?php } ?>
					<?php if ( get_theme_mod( 'wpstart_logo_url' ) ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-hide" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						<?php
						bloginfo( 'name' ); 
						wpstart_logo_image();
						?>
					</a>
					<?php } else { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						<?php bloginfo( 'name' ); ?>
					</a>
					<?php } ?>
			<?php if ( is_home() || is_front_page() ) { ?>
				</h1>
			<?php } else { ?>
				</p>
			<?php }
			
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
				
			</div><!-- .site-brand -->
	
			<?php if ( is_active_sidebar( 'header' ) ) : ?>
			
				<div class="sidebar sidebar-header" role="complementary">
					<?php dynamic_sidebar( 'header' ); ?>
				</div>
				
				<?php if ( has_nav_menu( 'menu-navigation' ) ) : ?>
				<input type="checkbox" id="navbar-navigation-toggle" />
				<label for="navbar-navigation-toggle" class="navigation-toggle" onclick>
					<span class="screen-reader-text sr-only"><?php _e( 'Navigation', 'wpstart' ); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</label>	
				<nav id="navbar-navigation" class="navigation navbar-navigation navbar-collapse" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-navigation', 'container' => false, 'menu_class' => 'menu menu-navigation nav navbar-nav navbar-left', 'fallback_cb' => false ) ); ?>
				</nav>
				<?php endif; // end has_nav_menu( 'menu-navigation' ) ?>
				
			<?php else : 
			
				if ( has_nav_menu( 'site-navigation' ) || has_nav_menu( 'menu-navigation' ) ) : ?>
				<input type="checkbox" id="navbar-navigation-toggle" />
				<label for="navbar-navigation-toggle" class="navigation-toggle" onclick>
					<span class="screen-reader-text sr-only"><?php _e( 'Navigation', 'wpstart' ); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</label>	
				<nav id="navbar-navigation" class="navigation navbar-navigation navbar-collapse" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'site-navigation', 'container' => false, 'menu_class' => 'menu site-navigation nav navbar-nav navbar-right', 'fallback_cb' => false ) ); ?>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-navigation', 'container' => false, 'menu_class' => 'menu menu-navigation nav navbar-nav navbar-left', 'fallback_cb' => false ) ); ?>
				</nav>
				<?php 
				endif; // end has_nav_menu( 'site-navigation' ) || has_nav_menu( 'menu-navigation' )
				
			endif; // end is_active_sidebar( 'header' )
			?>
		
		</div><!-- .row -->
	</div><!-- .container -->
	<?php
	}
}

/** Header bottom / wpstart_header_bottom ********************************************************/

/**
 * wpstart_header_end
 */
if ( !function_exists( 'wpstart_header_end' ) ) {
	function wpstart_header_end() {
	?>
	</header><!-- #header -->
	<?php
	}
}

/** Header after / wpstart_header_after ********************************************************/
// wpstart_header_after


/** Content before / wpstart_content_before ********************************************************/
// wpstart_content_before

/** Content top / wpstart_content_top ********************************************************/

/**
 * wpstart_content_start
 */
if ( !function_exists( 'wpstart_content_start' ) ) {
	function wpstart_content_start() { 
	?>
	<div id="content" class="site-content">
	<?php
	}
}

/** Container before / wpstart_container_before ********************************************************/
// wpstart_container_before

/** Container top / wpstart_container_top ********************************************************/

/**
 * wpstart_container_start
 */
if ( !function_exists( 'wpstart_container_start' ) ) {
	function wpstart_container_start() { 
		if ( is_archive() || is_search() ) { ?>
			<section class="container">
				<div class="row">
		<?php } else { ?>
			<div class="container">
				<div class="row">
		<?php }
	}
}

/** Main before / wpstart_main_before ********************************************************/
// wpstart_main_before

/** Main top / wpstart_main_top ********************************************************/

/**
 * wpstart_main_start
 */
if ( !function_exists( 'wpstart_main_start' ) ) {
	function wpstart_main_start() { 
		?>
		<main id="main" class="site-main" role="main">
		<?php
	}
}

/** Entries ********************************************************/

/**
 * wpstart_page_title
 */
if ( !function_exists( 'wpstart_page_title' ) ) {
	function wpstart_page_title() {

	if ( is_404() ) { ?>

		<header class="page-header">
			<?php if ( is_search() ) { ?>

				<h1 class="page-title">
					<?php _e( 'No posts found.', 'wpstart' ); ?>
				</h1>

			<?php } else { ?>
			
				<h1 class="page-title">
					<?php _e( 'Page not found.', 'wpstart' ); ?>
				</h1>
				
			<?php } ?>
		</header><!-- .page-header -->
		
	<?php } elseif ( is_archive() ) { ?>
	
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->

	<?php } elseif ( is_home() && ! is_front_page() ) { ?>

		<header class="page-header">
			<h1 class="page-title screen-reader-text sr-only"><?php single_post_title(); ?></h1>
		</header><!-- .page-header -->
					
	<?php } elseif ( is_search() ) { ?>
	
		<header class="page-header">
			<h1 class="page-title"><?php printf( __( 'Search results for: %s', 'wpstart' ), get_search_query() ); ?></h1>
		</header><!-- .page-header -->
		
		<?php
		}
	}
}

/**
 * wpstart_entry_start
 */
if ( !function_exists( 'wpstart_entry_start' ) ) {
	function wpstart_entry_start() {
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
	}
}

/**
 * wpstart_entry_header_start
 */
if ( !function_exists( 'wpstart_entry_header_start' ) ) {
	function wpstart_entry_header_start() {
	?>
	<header class="entry-header">
	<?php
	}
}

/**
 * wpstart_entry_title
 */
if ( !function_exists( 'wpstart_entry_title' ) ) {
	function wpstart_entry_title() {
	if ( is_single() || is_page() ) { ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php } else { ?>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>	
	<?php }
	}
}

/**
 * wpstart_meta_date
 */
if ( !function_exists( 'wpstart_meta_date' ) ) {
	function wpstart_meta_date() {
	if ( is_single() ) { 
		printf('<span class="meta-date"><span class="meta-date-prep">' . __( 'Published on', 'wpstart' ) . '</span> %1$s',
			sprintf( '<time datetime="%1$s">%2$s</time></span> ',
				esc_attr( get_the_date( 'c' ) ),
				get_the_date()
			)
		);
	} else {
		printf('<span class="meta-date"><span class="meta-date-prep">' . __( 'Published on', 'wpstart' ) . '</span> %1$s',
			sprintf( '<a href="%1$s" rel="bookmark"><time datetime="%2$s">%3$s</time></a></span> ',
				get_permalink(),
				esc_attr( get_the_date( 'c' ) ),
				get_the_date()
			)
		);
	}
	}
}

/**
 * wpstart_meta_author
 */
if ( !function_exists( 'wpstart_meta_author' ) ) {
	function wpstart_meta_author() {
	if ( !is_page() ) {
		printf( '<span class="meta-author"><span class="author vcard"><span class="meta-author-prep">%1$s </span><a href="%2$s" class="url fn n" title="%3$s">%4$s</a></span></span>',
			__( 'Author', 'wpstart' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'wpstart' ), get_the_author() ),
			get_the_author()
		);
	}
	}
}

/**
 * wpstart_meta_comments
 */
if ( !function_exists( 'wpstart_meta_comments' ) ) {
	function wpstart_meta_comments() {
	if ( !is_page() ) {
		if ( comments_open() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			echo '<span class="meta-comments">';
				comments_popup_link( __( 'Leave a comment', 'wpstart' ), __( '1 Comment', 'wpstart' ), __( '% Comments', 'wpstart' ), 'meta-comments-link' );
			echo '</span>';
		endif;
		}
	}
}

/**
 * wpstart_entry_header_end
 */
if ( !function_exists( 'wpstart_entry_header_end' ) ) {
	function wpstart_entry_header_end() {
	?>
	</header><!-- .entry-header -->
	<?php
	}
}

/**
 * wpstart_entry_content_start
 */
if ( !function_exists( 'wpstart_entry_content_start' ) ) {
	function wpstart_entry_content_start() {
		if ( is_attachment() ) { ?>
			<div class="entry-attachment">
		<?php } elseif ( is_single() || is_page() ) { ?>
			<div class="entry-content">
		<?php } else { ?>
			<div class="entry-summary">
		<?php }
	}
}

/**
 * wpstart_entry_content_thumbnail
 */
if ( !function_exists( 'wpstart_entry_content_thumbnail' ) ) {
	function wpstart_entry_content_thumbnail() {
		if ( is_single() ) {
			if ( has_post_thumbnail() ) { ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'wpstart-large' ); ?>
			</div>
			<?php }
		} else {
			if ( has_post_thumbnail() ) { ?>
				<a href="<?php the_permalink(); ?>" class="post-thumbnail" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail( 'wpstart-large' ); ?></a>
			<?php }
		}
	}
}

/**
 * wpstart_entry_content
 */
if ( !function_exists( 'wpstart_entry_content' ) ) {
	function wpstart_entry_content() {	
		if ( is_attachment() ) {
			if ( wp_attachment_is_image() ) : ?>
				<a href="<?php echo wp_get_attachment_url(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>">
					<img class="aligncenter" src="<?php echo wp_get_attachment_url(); ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
				</a>
			<?php else: ?>
				<a href="<?php echo wp_get_attachment_url(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>"><?php echo basename( get_permalink() ); ?></a>
			<?php endif;
		} elseif ( is_single() || is_page() ) {
			the_content();
			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-prep">' . __( 'Pages:', 'wpstart' ) . '</span>', 'after' => '</div>', 'link_before' => '<span class="page-numbers">', 'link_after'  => '</span>' ) );
		} else {
			the_excerpt();
		}
	}
}

/**
 * wpstart_entry_content_end
 */
if ( !function_exists( 'wpstart_entry_content_end' ) ) {
	function wpstart_entry_content_end() {
		if ( is_attachment() ) { ?>
			</div><!-- .entry-attachment -->
		<?php } elseif ( is_single() || is_page() ) { ?>
			</div><!-- .entry-content -->
		<?php } else { ?>
			</div><!-- .entry-summary -->
		<?php }
	}
}

/**
 * wpstart_entry_footer_start
 */
if ( !function_exists( 'wpstart_entry_footer_start' ) ) {
	function wpstart_entry_footer_start() {
	?>
	<footer class="entry-footer">
	<?php
	}
}

/**
 * wpstart_meta_dimensions
 */
if ( !function_exists( 'wpstart_meta_dimensions' ) ) {
	function wpstart_meta_dimensions() {
	if ( is_attachment() && wp_attachment_is_image() ) {
		$metadata = wp_get_attachment_metadata();

		printf( '<span class="meta-dimensions"><span class="meta-dimensions-prep">%1$s </span><a href="%2$s" title="%3$s">%4$s &times; %5$s</a></span>',
			__( 'Original dimensions', 'wpstart' ),
			esc_url( wp_get_attachment_url() ),
			esc_attr( __( 'Link to image', 'wpstart' ) ),
			$metadata['width'],
			$metadata['height']
		);
	}
	}
}

/**
 * wpstart_meta_categories
 */
if ( !function_exists( 'wpstart_meta_categories' ) ) {
	function wpstart_meta_categories() {
	if ( !is_page() || !is_attachment() ) {
		$categories_list = get_the_category_list( ', ' );
		if ( $categories_list ) {
			printf( '<span class="meta-categories"><span class="meta-categories-prep">%1$s </span>%2$s</span>',
				__( 'Categories', 'wpstart' ),
				$categories_list
			);
		}
	}
	}
}

/**
 * wpstart_meta_tags
 */
if ( !function_exists( 'wpstart_meta_tags' ) ) {
	function wpstart_meta_tags() {
	if ( !is_page() || !is_attachment() ) {
		$tags_list = get_the_tag_list( '', ', ' );
		if ( $tags_list ) {
			printf( '<span class="meta-tags"><span class="meta-tags-prep">%1$s </span>%2$s</span>',
				__( 'Tags', 'wpstart' ),
				$tags_list
			);
		}
	}
	}
}

/**
 * wpstart_edit_post_link
 */
if ( !function_exists( 'wpstart_edit_post_link' ) ) {
	function wpstart_edit_post_link() {
		edit_post_link( __( 'Edit', 'wpstart' ) . ' <span class="edit-link">' . get_the_title() . '</span>', '<span class="post-edit-link">', '</span>' );	
	}
}

/**
 * wpstart_author_info
 */
if ( !function_exists( 'wpstart_author_info' ) ) {
	function wpstart_author_info() { 
	if ( is_single() && get_the_author_meta( 'description' ) ) { ?>
	<div class="author-info">
		<div class="author-avatar">
			<?php
			$author_bio_avatar_size = apply_filters( 'wpstart_author_bio_avatar_size', 64 );
			echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
			?>
		</div><!-- .author-avatar -->
		<div class="author-description">
			<h2 class="author-title"><?php the_author(); ?></h2>
			<p class="author-bio">
				<?php the_author_meta( 'description' ); ?>
				<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="author-link" rel="author">
					<?php printf( __( 'View all posts by %s', 'wpstart' ), get_the_author() ); ?>
				</a>
			</p>
		</div><!-- .author-description -->
	</div><!-- .meta-author-info -->
	<?php
	}
	}
}

/**
 * wpstart_entry_footer_end
 */
if ( !function_exists( 'wpstart_entry_footer_end' ) ) {
	function wpstart_entry_footer_end() {
	?>
	</footer><!-- .entry-footer -->
	<?php
	}
}

/**
 * wpstart_entry_end
 */
if ( !function_exists( 'wpstart_entry_end' ) ) {
	function wpstart_entry_end() {
		?>
		</article><!-- #post -->
		<?php
	}
}

/**
 * wpstart_pagination
 */
if ( !function_exists( 'wpstart_pagination' ) ) {
	function wpstart_pagination() {
		if ( is_attachment() ) {
			the_post_navigation( array(
				'prev_text' => '<span class="meta-nav">' . __( 'Published in', 'wpstart' ) . '</span> <span class="post-title">%title</span>',
			) );
			
		} elseif ( is_single() ) {
		
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'wpstart' ) . '</span> ' .
					'<span class="screen-reader-text sr-only">' . __( 'Next post:', 'wpstart' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'wpstart' ) . '</span> ' .
					'<span class="screen-reader-text sr-only">' . __( 'Previous post:', 'wpstart' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
			
		} else {
			
			if ( function_exists('wp_pagenavi') ) { wp_pagenavi(); } else { 
				// Pagination arguments, {@see paginate_links()}.
				// @link http://codex.wordpress.org/Function_Reference/paginate_links
				the_posts_pagination( array(
					'prev_text'          => __( 'Previous', 'wpstart' ),
					'next_text'          => __( 'Next', 'wpstart' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text sr-only">' . __( 'Page', 'wpstart' ) . ' </span>',
				) );
			}
		}
	}
}

/**
 * wpstart_entry_no_results_not_found
 */
if ( !function_exists( 'wpstart_entry_no_results_not_found' ) ) {
	function wpstart_entry_no_results_not_found() {
		?>
		<article id="post-0" class="post no-results not-found">
			<header class="page-header">
				<h1 class="page-title">
				<?php if ( is_search() ) { ?>
					<?php _e( 'No posts found.', 'wpstart' ); ?>
				<?php } else { ?>
					<?php _e( 'Page not found.', 'wpstart' ); ?>
				<?php } ?>
				</h1>
			</header><!-- .page-header -->
			<div class="page-content">
			<?php if ( is_search() ) { ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'wpstart' ); ?></p>
				<?php get_search_form(); ?>
			<?php } else { ?>
				<?php get_search_form(); ?>
			<?php } ?>
			</div>
		</article><!-- #post -->
		<?php
	}
}

/** Comments before ********************************************************/
// wpstart_comments_before

/** Comments after ********************************************************/
// wpstart_comments_after

/** Sidebars before ********************************************************/
// wpstart_sidebars_before

/** Sidebar top ********************************************************/
// wpstart_sidebar_top

/** Sidebar bottom ********************************************************/
// wpstart_sidebar_bottom

/** Sidebars after ********************************************************/
// wpstart_sidebars_after

/** Main bottom / wpstart_main_bottom ********************************************************/

/**
 * wpstart_main_end
 */
if ( !function_exists( 'wpstart_main_end' ) ) {
	function wpstart_main_end() { 
		?>
		</main><!-- #main -->
		<?php
	}
}

/** Main after / wpstart_main_after ********************************************************/
// wpstart_main_after

/** Container bottom / wpstart_container_bottom ********************************************************/

/**
 * wpstart_container_end
 */
if ( !function_exists( 'wpstart_container_end' ) ) {
	function wpstart_container_end() { 
		if ( is_archive() || is_search() ) { ?>
				</div><!-- .row -->
			</section><!-- .container -->
		<?php } else { ?>
				</div><!-- .row -->
			</div><!-- .container -->
		<?php }
	}
}
	
/** Container after / wpstart_container_after ********************************************************/
// wpstart_container_after

/** Content bottom / wpstart_content_bottom ********************************************************/

/**
 * wpstart_content_end
 */
if ( !function_exists( 'wpstart_content_end' ) ) {
	function wpstart_content_end() { 
		?>
		</div></div><!-- #content -->
		<?php
	}
}

/** Content after / wpstart_content_after ********************************************************/
// wpstart_content_after

/** Footer before / wpstart_footer_before ********************************************************/
// wpstart_footer_before

/** Footer top / wpstart_footer_top ********************************************************/

/**
 * wpstart_footer_start
 */
if ( !function_exists( 'wpstart_footer_start' ) ) {
	function wpstart_footer_start() { 
		?>
		<footer id="footer" class="site-footer" role="contentinfo">
		<?php
	}
}

/** Footer / wpstart_footer ********************************************************/

/**
 * wpstart_footer_content
 */
if ( !function_exists( 'wpstart_footer_content' ) ) {
	function wpstart_footer_content() { 
	?>
	
	<?php if ( is_active_sidebar( 'footer' ) ) { ?>
	<div class="container">
		<div class="row">
			<?php get_sidebar('footer'); ?>
		</div><!-- .row -->
	</div><!-- .container -->
	<?php } ?>
	
	<?php if ( is_active_sidebar( 'colophon' ) ) : ?>
	<div id="colophon" class="colophon">
		<div class="container">
			<div class="row">
				<div class="sidebar sidebar-colophon">
					<?php dynamic_sidebar( 'colophon' ); ?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .container -->
	<?php else: ?>
	<div class="colophon">
		<div class="container">
			<div class="row">
				<div class="sidebar sidebar-colophon">
					<aside id="text" class="widget-container widget_text">		
						<div class="textwidget">
							<p>&copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-info" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a><!-- . <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpstart' ) ); ?>" class="site-generator" title="<?php esc_attr_e( 'Powered by WordPress', 'wpstart' ); ?>"><?php esc_attr_e( 'Powered by WordPress', 'wpstart' ); ?></a> &amp; <a href="http://demo.krusze.com/wpstart/" class="site-webdesign" title="WPstart Theme">WPstart Theme</a>. --></p>	
						</div>
					</aside>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .colophon -->
	<?php endif; ?>
	<?php
	}
}

/** Footer bottom / wpstart_footer_bottom ********************************************************/

/**
 * wpstart_footer_end
 */
if ( !function_exists( 'wpstart_footer_end' ) ) {
	function wpstart_footer_end() { 
	?>
	</footer><!-- #footer -->
	<?php
	}
}

/** Footer after / wpstart_footer_after ********************************************************/
// wpstart_footer_after

/** Body bottom / wpstart_body_bottom ********************************************************/

/**
 * wpstart_wrapper_end
 */
if ( !function_exists( 'wpstart_wrapper_end' ) ) {
	function wpstart_wrapper_end() { 
	?>
	</div><!-- #wrapper -->
	<?php
	}
}

/** WP footer / wp_footer() ********************************************************/
// wp_footer()