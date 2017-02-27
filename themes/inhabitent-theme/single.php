<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="single">
		<div id="primary" class="content-area-single">
			<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

				<div class="social-btn">
						<div type="button" class="black-button-social">
							<i class="fa fa-facebook"><span class="action-social">Like</span></i>
						</div>
						<div type="button" class="black-button-social">
							<i class="fa fa-twitter"><span class="action-social">Tweet</span></i>
						</div>
						<div type="button" class="black-button-social">
							<i class="fa fa-pinterest"><span class="action-social">Pin</span></i>
						</div>
				</div>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						 comments_template();?>
				<?php endif;
					
				?>
				




			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
