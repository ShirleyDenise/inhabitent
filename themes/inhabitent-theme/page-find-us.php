<?php
/**
 * The template for displaying the findus page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="findus">
	<div id="primary" class="content-area-findus">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>