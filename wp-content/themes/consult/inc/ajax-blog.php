<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 04.04.2017
 * Time: 17:02
 */
function blog_load_feature(){

    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] +1; // следующая страница
    $blog_query = new WP_Query($args);


    while ($blog_query->have_posts()) :
        $blog_query->the_post(); ?>
        <li class="blog-list-item col-lg-6">
            <div class="blog-img-wrap">
                <?php if (has_post_thumbnail()) : echo the_post_thumbnail(); ?>
                <?php endif; ?>
            </div>
            <div class="blog-content">
                <span class="blog-item-date"><?php the_time('F j, Y '); ?></span>
                <?php the_title('
                                        <h4 class="title title-dark title-bold title-trasf">
                                        <a href="' . esc_url(get_permalink()) . '" rel="bookmark" >', '</a>
                                        </h4>'); ?>
                <p class="description"><?php the_excerpt(); ?></p>
            </div>
        </li>
    <?php endwhile;
    wp_reset_postdata();


    wp_die();
}

add_action('wp_ajax_blog-load', 'blog_load_feature');
add_action('wp_ajax_nopriv_blog-load', 'blog_load_feature');