<?php

function theme_enqueue_styles() {

    $parent_style = 'twentyfifteen';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'twentyfifteen-child',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );

    // remove <p> from catagory description
    remove_filter('term_description','wpautop');

    // wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    // wp_enqueue_style( 'style-css', get_stylesheet_directory_uri() . '/bootstrap/style.css' );
    // wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '3.0.0', true );


    
    // wp_enqueue_script( 'sydney-main-child', get_template_directory_uri() . '/js/main.js', array('jquery'), true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 999);
