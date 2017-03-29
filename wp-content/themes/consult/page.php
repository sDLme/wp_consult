<?php

 ?>
<?php get_header(); ?>
    <section class="section-bg section-pd section-pd-bottom my-page">
        <div class="container">
            <h3 class="section-title"><?php wp_title("", true); ?></h3>
            <div class="entry-content">
                <?php if (have_posts()): ?>
                <?php while (have_posts()) :
                the_post(); ?>
                <div class="col-md-12">
                    <div class="blog-img-wrap">
                        <?php if (has_post_thumbnail()) : echo the_post_thumbnail(); ?>
                        <?php endif; ?>
                    </div>
                    <div class="blog-content">
                        <p class="description"><?php the_content(); ?></p>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
    </section>
    </main>
 <?php
         get_footer(); ?>