<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp-bootstrap-blog
 */
get_header(); ?>

	<div class="row">
		<div  id="main" class="col-lg-8" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single' );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</div><!-- #main -->
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
