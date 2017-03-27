<?php
/*
 * Template Name: Project page
 */
?>
<?php get_header(); ?>
<section class="section-pd">
    <div class="container">
        <h3 class="section-title"><?php the_title(); ?></h3>
        <?php
        $args = array(
            'order' => 'ASC',
            'post_type' => 'consult_projects',
        );
        $projectsloop = new WP_Query($args);
        ?>
        <ul class="project-list row">
            <?php while ($projectsloop->have_posts()) :
            $projectsloop->the_post(); ?>
            <li class="project-list-item col-md-6">
                <p class="meta-title"><?php the_category()?></p>
                    <ul class="project-img-slide">
                        <?php if (has_post_thumbnail() ) : echo  the_post_thumbnail() ;?>
                        <?php else : ;?>
                        <?php $slider = CFS()->get('project_slid'); ?>
                        <?php foreach ($slider as $slide) { ?>
                        <li><img src="<?php echo $slide['slider_img']; ?>" alt=""></li>
                        <?php }?>
                        <?php endif ;?>
                    </ul>
                <div class="project-description">
                    <h4 class="title title-light title-trasf title-bold"><?php the_title(); ?></h4>
                    <p class="description description-light"><?php the_content(); ?></p>
                </div>
                <?php  endwhile; wp_reset_postdata(); ?>
            </li>
        </ul>
    </div>
</section>


<?php get_footer();?>
