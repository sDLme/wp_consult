<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 04.04.2017
 * Time: 15:46
 */
function true_load_feature(){

    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] +1; // следующая страница
    $feature_query = new WP_Query($args);


    while ($feature_query->have_posts()) :
        $feature_query->the_post(); ?>
        <li class="feature-list-item col-md-4">
        <h4 class="title title-dark title-bold title-trasf"><?php the_title(); ?></h4>
        <p class="description"><?php the_content(); ?></p>
    <?php endwhile;
    wp_reset_postdata(); ?>
    </li>
    <?php

    wp_die();
}

add_action('wp_ajax_feature-load', 'true_load_feature');
add_action('wp_ajax_nopriv_feature-load', 'true_load_feature');