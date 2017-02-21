<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }
    return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

    // custom login for theme
function wp_admin_logo() {
     echo '<style type="text/css">                                                                   
         #login h1 a { 
			 background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important; 
         	 height: 53px !important; width: 300px !important;  background-size: contain !important;
		 }  
		 #login .button.button-primary {
			 background-color: #248A83;
		 }                          
     </style>';
}
add_action('login_head', 'wp_admin_logo');
function admin_logo_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'admin_logo_url' );