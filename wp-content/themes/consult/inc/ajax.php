<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 29.03.2017
 * Time: 16:19
 */

///Ajax
function true_loadmore_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/loadmore.js', array('jquery') );
}

add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );






add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');