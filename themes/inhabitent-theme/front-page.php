<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
     <section class="home-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" alt="Image of Inhabitent logo" />
    </section>

    <div id="primary" class="content-area-home">
        <main id="main" class="site-main" role="main">
            
            <?php
                global $post;
                $args = array( 'posts_per_page' => 3 );
                $lastposts = get_posts( $args );
                foreach ( $lastposts as $post ) :
                setup_postdata( $post ); ?>
                    <?php the_post_thumbnail( 'medium' ); ?>
                    <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> 
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    
                    
                <?php endforeach; 
                wp_reset_postdata(); ?>
          

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php get_footer(); ?> 