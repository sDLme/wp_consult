<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 29.03.2017
 * Time: 16:19
 */

///Ajax


function true_load_posts()
{
    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] +1 ;
    $projects_query = new WP_Query($args);
    $result = '';
    $counter = 0;
         if( $projects_query->have_posts() ):
             while( $projects_query->have_posts() ) : $projects_query->the_post();
             global $post;
                 $counter++;
                $pjwork= CFS()->get('check_show');
                if($pjwork==1) :
             $post_terms = get_the_terms($post->ID, 'works');
             $post_terms_names = array_map( function($term) {
                 return $term->name;
             }, $post_terms);
             $post_terms_names = implode(' ', $post_terms_names);

             $result .=
             '<li class="project-list-item col-md-6">
                 <p class="meta-title"><a href="'. get_the_permalink(get_the_ID()) .'" >' . $post_terms_names . '</a></p>
                 <ul class="project-img-slide">';
             if (has_post_thumbnail()) {
                 $result .= get_the_post_thumbnail();
             } else {
                    $slider = CFS()->get('project_slid');
                    foreach ($slider as $slide) {
                        $result .= '<li><img src="' . $slide['slider_img'] . '" alt=""></li>';
                    }
             }
         $result .= '</ul>
        <div class="project-description">
            <h4 class="title title-light title-trasf title-bold"><a href="'. get_the_permalink(get_the_ID()) .'" >' . get_the_title() . '</a></h4>
            <p class="description description-light">' . get_the_content() . '</p>
        </div>
        </li>';
        endif; endwhile; endif;
    wp_reset_postdata();

    echo $result;
    wp_die();
}
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');