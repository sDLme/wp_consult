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
    register_sidebar( array(
        'name'          => __('box-1'),
        'id'            => __('box-1'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'class'         => 'box-1',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __('box-2'),
        'id'            => __('box-2'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'class'         => 'box-2',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __('box-3'),
        'id'            => __('box-3'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'class'         => 'box-3',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'consult_widgets_init' );
////  END Register Widgets