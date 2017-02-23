<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="products-content-area">
		<main id="main" class="products-site-main" role="main">
		

		<?php if ( have_posts() ) : ?>

			<header class="products-header">
				<h1 class="page-title">Shop Stuff</h1>
				<ul class="product-type-li">
					<li>
						<p>
							<a href="">Do</a>
						</p>
					</li>
					<li>
						<p>
							<a href="">Eat</a>
						</p>

					</li>
					<li>
						<p>
							<a href="">Sleep</a>
						</p>

					</li>
					<li>
						<p>
							<a href="">Wear</a>
						</p>

					</li>
				</ul>
				<!--<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>-->
				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class ="post-image"><?php the_post_thumbnail( 'medium' ); ?></div>
                <div class="post-title"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>    
				<p><?php echo CFS()->get('product_price'); ?></p>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
