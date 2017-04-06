<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 30.03.2017
 * Time: 14:50
 */
function true_load_service(){

    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] +1; // следующая страница
    $services_query = new WP_Query($args);


while ($services_query->have_posts()) :
$services_query->the_post(); ?>
<li class="services-list-item-wrap col-md-4">
    <div class="services-list-item">
        <div class="thumbnail-wrapp"><?php the_post_thumbnail() ?></div>
        <h4 class="title title-dark title-bold title-trasf"><?php the_title(); ?></h4>
        <p class="description"><?php the_content(); ?></p>
    </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
</li>
<?php

wp_die();
}

add_action('wp_ajax_service', 'true_load_service');
add_action('wp_ajax_nopriv_service', 'true_load_service');