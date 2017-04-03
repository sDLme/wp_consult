<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 23.03.2017
 * Time: 16:57
 */?>
<?php

add_action( 'init', 'create_project_taxonomies', 0 );
function create_project_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'works', 'taxonomy general name', 'consult' ),
        'singular_name'     => _x( 'works', 'taxonomy singular name', 'consult' ),
        'search_items'      => __( 'Search works', 'consult' ),
        'all_items'         => __( 'All works', 'consult' ),
        'parent_item'       => __( 'Parent works', 'consult' ),
        'parent_item_colon' => __( 'Parent works:', 'consult' ),
        'edit_item'         => __( 'Edit works', 'consult' ),
        'update_item'       => __( 'Update works', 'consult' ),
        'add_new_item'      => __( 'Add New works', 'consult' ),
        'new_item_name'     => __( 'New works Name', 'consult' ),
        'menu_name'         => __( 'works', 'consult' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'projects', 'with_front' => true),
    );

    register_taxonomy( 'works', array( 'consult_projects' ), $args );
}
?>