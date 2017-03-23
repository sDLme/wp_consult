<?php
/**
 *
 *
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
        </div>
    </section>
    </main>

<?php get_footer(); ?>