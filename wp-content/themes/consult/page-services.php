<?php
/**
 *
 * Template Name: services-page
 */
?>
<?php get_header(); ?>
<section class=" section-bg-serv section-pd section-pd-bottom">
    <div class="container">
        <h3 class="section-title">Services</h3>

        <?php
        $args = array('post_type' => 'consult_services', 'posts_per_page' => 100);
        $servisloop = new WP_Query($args);
        ?>
        <ul class="services-list row">
            <?php while ($servisloop->have_posts()) :
            $servisloop->the_post(); ?>
            <li class="services-list-item-wrap col-md-4">
                <div class="services-list-item">
                    <div class="thumbnail-wrapp"><?php the_post_thumbnail() ?></div>
                    <h4 class="title title-bold title-trasf"><?php the_title(); ?></h4>
                    <p class="description"><?php the_content(); ?></p>
                </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </li>
        </ul>
    </div>
</section>

<?php get_footer();?>
