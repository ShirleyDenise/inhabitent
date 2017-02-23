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
                <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
            </header>

            
            <h2>Our Team</h2>
            <?php echo CFS()->get( 'about_our_team' ); ?>

            <h2>Our Story</h2>
            <?php echo CFS()->get( 'about_our_story' ); ?>
            
        </main><!-- #main -->
    </div><!-- #primary -->





<?php get_footer(); ?> 