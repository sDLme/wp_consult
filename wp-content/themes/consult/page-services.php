<?php
/**
 *
 * Template Name: services-page
 */
?>
<?php get_header(); ?>
<section class=" section-bg-serv section-pd section-pd-bottom">
    <div class="container">
        <h3 class="section-title"><?php the_title(); ?></h3>
      <div id="service-ajax-content">
          <?php
        $args = array('post_type' => 'consult_services', 'posts_per_page' => 3);
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
          <script>
              var servise_current_page = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
              var servise_max_pages = '<?php echo $servisloop->max_num_pages; ?>';
          </script>
          <script>
              var servise_true_posts = '<?php echo serialize($servisloop->query_vars); ?>';

          </script>
      </div>
    </div>
    <div class="load-more-wrap center-btn" id="service_true_loadmore">
        <a href="/" class="btn-prime btn-prime-center">Load more</a>
    </div>
    </div>
</section>

<?php get_footer();?>
