<?php

function consult_scripts() {
    wp_enqueue_style( 'consult-style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'tether', get_template_directory_uri() . '/libs/bootstrap/tether.min.js', array('jquery') , false, true );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/bootstrap.min.js', array('jquery'), false, true );

    wp_enqueue_script( 'slick', get_template_directory_uri() . '/libs/slick/slick.min.js', array('jquery'), false, true );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery', 'slick'), false, true );

    wp_enqueue_script( 'consult_script', get_template_directory_uri() . '/js/loadmore.js', array('jquery'), false, true  );
    wp_enqueue_script( 'service_script', get_template_directory_uri() . '/js/load-service.js', array('jquery'), false, true  );
    wp_enqueue_script( 'feach_script', get_template_directory_uri() . '/js/load-feach.js', array('jquery'), false, true  );
    wp_enqueue_script( 'blog_script', get_template_directory_uri() . '/js/load-blog.js', array('jquery'), false, true  );

    wp_localize_script( 'service_script', 'wp_vars', array(
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



//поддержка групировки ссылок
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

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


//add taxonomy name to widget in footer
// Сначала мы создаем функцию
function list_terms_custom_taxonomy( $atts ) {

// Внутри функции мы извлекаем параметр произвольной таксономии нашего шорткода

    extract( shortcode_atts( array(
        'custom_taxonomy' => 'works',
    ), $atts ) );

    $args = array(
        taxonomy => $custom_taxonomy,
        title_li => '',
    );

// Оборачиваем ее в маркированный список
    $date = '<ul>';
    $categories = get_categories($args);
    foreach ($categories as $category) {

        $date .= '<li class="page_item"><a href="/industry/' .  $category->slug . '">' .  $category->cat_name . '</a></li>';
    }
    $date .= '</ul>';
    return $date;
}

// Добавляем шорткод, который исполняет нашу функцию
add_shortcode( 'ct_terms', 'list_terms_custom_taxonomy' );

//Разрешаем выполнение шорткодов в текстовых виджетах

add_filter('widget_text', 'do_shortcode');
//////
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/custom-post-type.php';
/**
 * Custom taxonomy for this theme.
 */
require get_template_directory() . '/inc/custom-reg-tax.php';
/**
 * Customaizer tags for this theme.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Widgets tags for this theme.
 */
require get_template_directory() . '/inc/widgets.php';

require get_template_directory() . '/inc/ajax.php';

require get_template_directory() . '/inc/ajax-for-service.php';

require get_template_directory() . '/inc/meta-for-taxonomy.php';

require get_template_directory() . '/inc/ajax-feature.php';
require get_template_directory() . '/inc/ajax-blog.php';













if (!function_exists('write_log')) {
    function write_log ( $log )  {
        if ( true === WP_DEBUG ) {
            if ( is_array( $log ) || is_object( $log ) ) {
                error_log( print_r( $log, true ) );
            } else {
                error_log( $log );
            }
        }
    }
}

