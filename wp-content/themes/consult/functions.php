<?php

function consult_scripts() {
    wp_enqueue_style( 'consult-style', get_stylesheet_uri() );

    wp_enqueue_script( 'tether', get_template_directory_uri() . '/libs/bootstrap/tether.min.js', array() , false, true );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/bootstrap.min.js', array(), false, true );

    wp_enqueue_script( 'slick', get_template_directory_uri() . '/libs/slick/slick.min.js', array(), false, true );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), false, true );

    wp_register_script( 'theme_script', get_template_directory_uri() . '/loadmore.js' );

    wp_localize_script( 'theme_script', 'params', array(
        'ajax_url' => admin_url( 'admin-ajax.php' )
    ) );

    wp_enqueue_style( 'style', get_template_directory_uri() . '/style/main.css');


    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"), false, '1.12.2');
        wp_enqueue_script('jquery');
    }
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'consult_scripts' );


///FEATURED IMG
add_theme_support( 'post-thumbnails' );
///END FETURED IMG

add_theme_support( 'custom-logo');

///MENU
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Top Menu' ),
            'foot-menu' => __( 'Foot Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
////END MENU

//exerpt for pages
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
	     add_post_type_support( 'page', 'excerpt' );
	}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/custom-post-type.php';
/**
 * Custom taxonomy for this theme.
 */
require get_template_directory() . '/inc/taxonomy.php';
/**
 * Customaizer tags for this theme.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Widgets tags for this theme.
 */
require get_template_directory() . '/inc/widgets.php';

require get_template_directory() . '/inc/ajax.php';

