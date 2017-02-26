<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package matemati4ka
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row ksa-posts">
					<div class="col-lg-8 col-md-8 col-sm-8">

						<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', get_post_format() );
							if(function_exists('wp_pagenavi')) { wp_pagenavi(); }

				//			the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile; // End of the loop.
						?>

					</div><!-- col-lg-8 -->
					<?php get_sidebar(); ?>
				</div><!-- .row -->
			</div> <!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
