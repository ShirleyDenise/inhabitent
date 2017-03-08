<?php
/**
* The template for displaying archive pages.
*
* @package RED_Starter_Theme
*/
get_header(); ?>

	<div id="primary" class="products-content-area">
		<main id="main" class="products-site-main" role="main">
		
		<div class="Shop-stuff">
			<?php if ( have_posts() ) : ?>

				<header class="products-header">
                    <?php $term = get_queried_object(); ?>
                            <h1 class="page-title">
                                <?php echo $term -> slug; ?>
                            </h1>
                                <!--the_archive_title( '<h1 class="page-title">', '</h1>' );-->
                            <?php    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                            ?>

			</header><!-- .page-header -->
			<div class="products-wrapper">
				<?php /* Start the Loop */ ?>
				

				<?php while ( have_posts() ) : the_post(); ?>

				
					<div class="product-item"><div class ="post-image-shop"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a></div>
					<div class="product-info">
						<div class="post-title-shop"><h3><?php the_title(); ?></h3></div>    
						<p><?php echo CFS()->get('product_price'); ?></p>
					</div>
					</div>
				

				<?php endwhile; ?>
			

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>