<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


    <div id="primary" class="content-area-home">
        <main id="main" class="site-main" role="main">
            <section class="home-hero">
                <img class="logo-home" src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" alt="Image of Inhabitent logo" />
            </section>
            <h2>Inhabitent Journal</h2>
            <div class="recent-posts">
                <?php
                    global $post;
                    $args = array( 'posts_per_page' => 3 );
                    $lastposts = get_posts( $args );
                    foreach ( $lastposts as $post ) :
                    setup_postdata( $post ); ?>
                    
                        <div class ="post-image"><?php the_post_thumbnail( 'medium' ); ?></div>
                        <div class ="post-comments"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></div>
                        <div class="post-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
                    
                        
                    <?php endforeach; 
                    wp_reset_postdata(); ?>
                </div> 
          

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php get_footer(); ?> 