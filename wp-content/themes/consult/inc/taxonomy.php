<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 23.03.2017
 * Time: 16:57
 */?>
<?php
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_page_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_page_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Sup-page', 'taxonomy general name', 'consult' ),
        'singular_name'     => _x( 'Sup-page', 'taxonomy singular name', 'consult' ),
        'search_items'      => __( 'Search Sup-page', 'consult' ),
        'all_items'         => __( 'All Sup-page', 'consult' ),
        'parent_item'       => __( 'Parent Sup-page', 'consult' ),
        'parent_item_colon' => __( 'Parent Sup-page:', 'consult' ),
        'edit_item'         => __( 'Edit Sup-page', 'consult' ),
        'update_item'       => __( 'Update Sup-page', 'consult' ),
        'add_new_item'      => __( 'Add New Sup-page', 'consult' ),
        'new_item_name'     => __( 'New Sup-page Name', 'consult' ),
        'menu_name'         => __( 'Sup-page', 'consult' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'consult' ),
    );

    register_taxonomy( 'Sup-page', array( 'page' ), $args );
};

add_action( 'init', 'create_project_taxonomies', 0 );
function create_project_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'project', 'taxonomy general name', 'consult' ),
        'singular_name'     => _x( 'project', 'taxonomy singular name', 'consult' ),
        'search_items'      => __( 'Search project', 'consult' ),
        'all_items'         => __( 'All project', 'consult' ),
        'parent_item'       => __( 'Parent project', 'consult' ),
        'parent_item_colon' => __( 'Parent project:', 'consult' ),
        'edit_item'         => __( 'Edit project', 'consult' ),
        'update_item'       => __( 'Update project', 'consult' ),
        'add_new_item'      => __( 'Add New project', 'consult' ),
        'new_item_name'     => __( 'New project Name', 'consult' ),
        'menu_name'         => __( 'projects', 'consult' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'Sup-page' ),
    );

    register_taxonomy( 'project', array( 'consult_projects' ), $args );
}
?>