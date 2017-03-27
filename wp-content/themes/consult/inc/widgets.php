<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 27.03.2017
 * Time: 10:00
 */

function consult_widgets_init() {
    ///first widgets
    register_sidebar( array(
        'name'          => __('Sidebar'),
        'id'            => __('sidebar-1'),
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'consult' ),
        'class'         => 'sub-menu',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h5 class="title title-trasf title-light">',
        'after_title'   => '</h5>',
    ) );
}
add_action( 'widgets_init', 'consult_widgets_init' );
////  END Register Widgets