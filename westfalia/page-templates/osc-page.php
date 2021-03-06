<?php
/**
 * Template Name: Full-width OSC Page Template, No Sidebar
 *
 * Description: Westfalia loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Westfalia
 * @since Westfalia 1.0
 */

  require(get_template_directory() . '/template_top.php');
?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'osc' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php require(get_template_directory() . '/template_bottom.php'); ?>
