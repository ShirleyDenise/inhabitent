<?php
/**
* Template Name: About Page
*
* @package Inhabitent Theme
*/

get_header(); ?>



    <div id="primary" class="content-area-about">
        <main id="main" class="site-main-about" role="main">
        
            <header class="page-header">
                <?php the_title( '<h1 class="about-title">', '</h1>' ); ?>
            </header>

            <div class="text-about">
                <h2>Our Story</h2>
                <?php echo CFS()->get( 'about_our_story' ); ?>

                <h2>Our Team</h2>
                <?php echo CFS()->get( 'about_our_team' ); ?>
        
            </div>
            
        </main><!-- #main -->
    </div><!-- #primary -->





<?php get_footer(); ?> 