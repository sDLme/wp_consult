<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 03.04.2017
 * Time: 10:50
 */
 get_header(); ?>
    <section class="section-pd">
        <div class="container">
            <h3 class="section-title"><?php wp_title("", true); ?></h3>
            <div class="row">
            <?php

            if(have_posts()) : while(have_posts()) : the_post();?>

                <h4 class="title  title-trasf title-bold" ><?php the_title(); ?></h4>

               <?php echo '<div class="entry-content">';

                the_content();

                echo '</div>';

            endwhile; endif; ?>
            </div>
        </div>
    </section>


<?php get_footer();?>