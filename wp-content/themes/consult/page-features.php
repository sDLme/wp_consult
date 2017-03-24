<?php
/**
 *
 *Template Name: Features page
 */
?>
<?php get_header(); ?>
<section class="section-pd section-bg-feach section-pd-bottom">
    <div class="container">
        <h3 class="section-title"><?php the_title(); ?></h3>

        <?php
        $args = array('post_type' => 'consult_features');
        $servisloop = new WP_Query($args);
        ?>
        <ul class="feature-list-page feature-list row">
            <?php while ($servisloop->have_posts()) :
            $servisloop->the_post(); ?>
            <li class="feature-list-item col-md-4">
                    <h4 class="title title-bold title-trasf"><?php the_title(); ?></h4>
                    <p class="description"><?php the_content(); ?></p>
                <?php endwhile; wp_reset_postdata(); ?>
            </li>
        </ul>
    </div>
</section>

<?php get_footer(); ?>
