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

        <div id="feature-ajax-container">
            <?php
            $args = array('post_type' => 'consult_features', 'posts_per_page' => 3);
            $feachloop = new WP_Query($args);
            ?>
            <ul class="feature-list-page services-list row">
                <?php while ($feachloop->have_posts()) :
                $feachloop->the_post(); ?>
                <li class="feature-list-item col-md-4">
                    <h4 class="title title-bold title-trasf"><?php the_title(); ?></h4>
                    <p class="description"><?php the_content(); ?></p>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </li>
            </ul>
            <script>
                var features_current_page = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
                var features_max_pages = '<?php echo $feachloop->max_num_pages; ?>';
            </script>
            <script>
                var features_true_posts = '<?php echo serialize($feachloop->query_vars); ?>';
            </script>
        </div>
        <div class="load-more-wrap center-btn" id="features_true_loadmore">
            <a class="btn-prime btn-prime-center">Load more</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
