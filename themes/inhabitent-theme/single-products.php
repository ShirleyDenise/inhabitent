<?php
/**
 * The template for displaying single products.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		      <article class="single_product_wrapper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		      	<header class="product-image">
		      		<?php if ( has_post_thumbnail() ) : ?>
		      			<?php the_post_thumbnail( 'large' ); ?>
		      		<?php endif; ?>

		      	</header><!-- .entry-header -->

		      	<div class="product-entry">
							<?php the_title( '<h1 class="product-title">', '</h1>' ); ?>
							<p class="single-price"><?php echo CFS()->get('product_price'); ?></p>
		      		<div class="single-content"><?php the_content(); ?></div>
		      	</div><!-- .entry-content -->
		      </article><!-- #post-## -->




		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>