<?php
/**
 *
 *Template Name: industry page
 */
?>
<?php get_header(); ?>
    <section class="section-bg section-pd section-pd-bottom">
        <div class="container">
            <h3 class="section-title"><?php the_title(); ?></h3>
            <div class="entry-content">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content() ?>
                    <?php endwhile; endif;
                wp_reset_postdata(); ?>
            </div>

            <div class="carousel-clients">
            <?php $slider = CFS()->get('clients-slider'); ?>
            <?php foreach ($slider as $slide) { ?>
                    <div class="carousel-client-item">
                        <img src="<?php echo $slide['client_img']; ?>" alt="">
                    </div>
             <?php   } ?>
            </div>

        </div>
    </section>
    </main>

<?php get_footer(); ?>