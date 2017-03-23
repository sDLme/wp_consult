<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 23.03.2017
 * Time: 15:39
 */

//Services
function create_services_type() {
    $args=array(
        $labels = array(
            'name' => __( 'services' ),
            'singular_name' => __( 'Service' ),
            'menu_name'          => _x( 'Services', 'admin menu' ),
            'name_admin_bar'     => _x( 'Services', 'add new on admin bar' ),
            'add_new'            => _x( 'Add New Services', 'testimonial' ),
            'add_new_item'       => __( 'Add New Services' ),
            'new_item'           => __( 'New Services' ),
            'edit_item'          => __( 'Edit Service' ),
            'view_item'          => __( 'View Service' ),
            'all_items'          => __( 'All Services' ),
            'search_items'       => __( 'Search Service'),
            'parent_item_colon'  => __( 'Parent Service:' ),
            'not_found'          => __( 'No Service found.' ),
            'not_found_in_trash' => __( 'No Service found in Trash.' )
        ),
        'labels'             => $labels,
        'description'        => __( 'Description.' ),
        'public' => true,
        'rewrite' => array('slug' => 'services'),
        'supports' => array( 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' )
    );
    register_post_type( 'consult_services', $args );
}
add_action( 'init', 'create_services_type' );

//Testimonials
function create_testimonial_type() {
    $args=array(
        $labels = array(
            'name' => __( 'testimonials' ),
            'singular_name' => __( 'testimonial' ),
            'menu_name'          => _x( 'Testimonials', 'admin menu' ),
            'name_admin_bar'     => _x( 'Testimonials', 'add new on admin bar' ),
            'add_new'            => _x( 'Add New', 'testimonial' ),
            'add_new_item'       => __( 'Add New Testimonial' ),
            'new_item'           => __( 'New Testimonial' ),
            'edit_item'          => __( 'Edit Testimonial' ),
            'view_item'          => __( 'View Testimonial' ),
            'all_items'          => __( 'All Testimonials' ),
            'search_items'       => __( 'Search Testimonial'),
            'parent_item_colon'  => __( 'Parent Testimonial:' ),
            'not_found'          => __( 'No Testimonial found.' ),
            'not_found_in_trash' => __( 'No Testimonial found in Trash.' )
        ),
        'labels'             => $labels,
        'description'        => __( 'Description.' ),
        'public' => true,
        'rewrite' => array('slug' => 'testimonials'),
        'supports' => array( 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' )
    );
    register_post_type( 'consult_testimonial', $args );
}
add_action( 'init', 'create_testimonial_type' );
