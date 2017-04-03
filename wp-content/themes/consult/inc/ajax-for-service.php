<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 30.03.2017
 * Time: 14:50
 */
function service()
{
    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] +1; // следующая страница
    $services_query = new WP_Query($args);
    $result = '';

     if( $services_query->have_posts() ):
         $result .='<ul class="services-list row">';
     while ($services_query->have_posts()) :$services_query->the_post();
         $result .='<li class="services-list-item-wrap col-md-4">
                    <div class="services-list-item">
                    <div class="thumbnail-wrapp">';
         $result .= the_post_thumbnail();
         $result .= '<h4 class="title title-bold title-trasf">'. the_title() .'</h4>
                    <p class="description">'. the_content() .'</p>
                    </div>';
     endwhile; endif; wp_reset_postdata();
         $result .='</li>
                    </ul>';
    echo($_POST);
    die();
}

add_action('wp_ajax_nopriv_service', 'service');
add_action('wp_ajax_nopriv_service', 'service');