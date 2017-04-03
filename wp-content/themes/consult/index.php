<?php get_header(); ?>

<section class="section-pd section-bg-blog">
    <div class="container">
        <h3 class="section-title"><?php wp_title("", true); ?></h3>
        <?php
        $args = array('post_type' => 'post', 'order' => 'ASC', );
        $loop = new WP_Query($args); ?>
        <ul class="blog-list row no-gutters">
            <?php if ($loop->have_posts()): ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <li class="blog-list-item col-lg-6">
                        <div class="blog-img-wrap">
                            <?php if (has_post_thumbnail()) : echo the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="blog-content">
                            <span class="blog-item-date"><?php the_time('F j, Y '); ?></span>
                           <?php the_title('
                                        <h4 class="title title-bold title-trasf">
                                        <a href="' . esc_url(get_permalink()) . '" rel="bookmark" >', '</a>
                                        </h4>'); ?>

                            <p class="description"><?php the_excerpt(); ?></p>
                        </div>
                    </li>
                <?php endwhile; endif;
            wp_reset_postdata() ?>
        </ul>
    </div>
</section>
<?php get_footer(); ?>
