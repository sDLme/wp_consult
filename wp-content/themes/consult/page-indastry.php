<?php
/**
 *
 * Template Name: Indastry-page
 */
get_header(); ?>
<section class="section-pd  section-pd-bottom">
    <div class="container">
        <h3 class="section-title"><?php wp_title("", true); ?></h3>
        <?php
        $args = array('post_type' => 'page',
                      'post_parent' => '15');
        $servisloop = new WP_Query($args);
        ?>
        <ul class="row">
            <?php while ($servisloop->have_posts()) :
            $servisloop->the_post(); ?>
            <li class="feature-list-item col-md-6">
                <h4 class="title title-bold title-trasf"><?php the_title(); ?></h4>
                <p class="description"><?php the_content(); ?></p>
                <?php endwhile; wp_reset_postdata(); ?>
            </li>
        </ul>
    </div>
</section>
<?php
get_footer(); ?>
