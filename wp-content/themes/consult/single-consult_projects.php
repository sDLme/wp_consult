<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 06.04.2017
 * Time: 14:02
 */

 get_header(); ?>
    <section class="section-pd single-project">
        <div class="container">
            <h3 class="section-title"><?php wp_title("", true); ?></h3>
            <div id="ajax-content">
                <?php $counter = 0; ?>
                <ul class="project-list row ">
                    <?php while (have_posts()) :the_post();
                    $counter++ ;?>
                    <li class="project-list-item col-md-8 offset-2 ">
                        <p class="meta-title"><?php echo the_terms($post->ID,'works') ; ?></p>
                        <ul class="project-img-slide">
                            <?php if (has_post_thumbnail()) : the_post_thumbnail(); ?>
                            <?php else : ; ?>
                                <?php $slider = CFS()->get('project_slid'); ?>
                                <?php foreach ($slider as $slide) { ?>
                                    <li> <img src="<?php echo $slide['slider_img']; ?>" alt=""></li>
                                <?php } ?>
                            <?php endif; ?>
                        </ul>
                        <div class="project-description">
                            <h4 class="title <?php if($counter%2 === 0) {?>title-dark<?php }?> title-trasf title-bold"><a href="<?php echo get_the_permalink(get_the_ID()) ; ?>"><?php the_title(); ?></a></h4>
                            <div class=" description-work <?php if($counter%2 === 0) {?>description-dark<?php }; ?>"><?php the_content(); ?></div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </li>
                </ul>
        </div>
        </div>
        </div>
    </section>


<?php get_footer(); ?>