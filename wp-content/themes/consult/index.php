<?php get_header(); ?>

<section class="section-pd section-bg-blog">
    <div class="container">
        <h3 class="section-title"><?php wp_title("", true); ?></h3>
       <div id="blog-ajax-container">
           <?php
        $args = array('post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 1 );
        $loop = new WP_Query($args); ?>
        <ul class="blog-list row no-gutters">
            <?php if ($loop->have_posts()): ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <li class="blog-list-item col-lg-6">
                        <div class="blog-img-wrap">
                            <?php if (has_post_thumbnail()) : echo the_post_thumbnail(); ?>
                            <?php else : endif; ?>
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
                <?php endwhile; endif;
            wp_reset_postdata() ?>
        </ul>
       </div>
        <div class="load-more-wrap center-btn" id="blog_true_loadmore">
            <a class="btn-prime btn-prime-center">Load more</a>
        </div>
        <script>
            var blog_current_page = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
            var blog_max_pages = '<?php echo $loop->max_num_pages; ?>';
        </script>
        <script>
            var blog_true_posts = '<?php echo serialize($loop->query_vars); ?>';
        </script>
    </div>
</section>
<?php get_footer(); ?>
