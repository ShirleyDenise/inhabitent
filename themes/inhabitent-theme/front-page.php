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
                <!--<img class="logo-home" src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" alt="Image of Inhabitent logo" />-->
            </section>
             
             <div class="shop-stuff">
                <h2>Shop Stuff</h2>
                
                <div class="product-type">
                    <?php
                    $terms = get_terms( array(
                    'taxonomy' => 'product_type',
                    'oderby' => 'name',
                    'hide_empty' => false) );
                    ?>

                    <?php	foreach ( $terms as $term ): ?>
                    
                        <div class="product-type-wrapper">
                            <h3 class="product_sub_catagories"></h3>
                            <img src="<?php echo get_template_directory_uri();?>/images/product-type-icons/<?php echo $term->slug; ?>.svg" alt="">
                            <p> <?php echo $term->description; ?> </p>
                            <a class="stuff-btn" href="<?php echo get_term_link($term, '$product_type') ?>">
                            <?php	echo	$term->name; ?>
                            </a>
                            

                            
                        </div>
                            <?php endforeach; wp_reset_postdata(); ?>
                    </div>
             </div>

            <h2>Inhabitent Journal</h2>
            <div class="recent-posts">
                <?php
                    global $post;
                    $args = array( 'posts_per_page' => 3 );
                    $lastposts = get_posts( $args );
                    foreach ( $lastposts as $post ) :
                    setup_postdata( $post ); ?>
                    <ul>
                        <li>
                            <div class="wrapper-image">
                                 <div class ="post-image"><?php the_post_thumbnail( 'medium' ); ?></div>
                            </div>
                            <div class="wrapper-post">
                                  <div class ="post-comments"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></div>
                                  <div class="post-title"><h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
                                  <a class="black-button" href="<?php the_permalink(); ?>">Read Entry</a>
                            </div>
                        </li>
                    </ul>
                        
                    <?php endforeach; 
                    wp_reset_postdata(); ?>
                </div> 

                <div class="latest-adventures">
                    <h2>Latest adventures</h2>
                </div>
          

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php get_footer(); ?> 