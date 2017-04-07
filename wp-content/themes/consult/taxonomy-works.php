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
            <h3 class="section-title industry"><?php wp_title("", true); ?></h3>
            <div id="ajax-content">

                <ul class="project-list d-flex justify-content-center">

                    <?php
                    $counter = 0;
                    while (have_posts()) : the_post();
                    $counter++;
                    $pjwork= CFS()->get('check_show') ;?>
                    <?php if($pjwork==1) : ;?>
                    <li class="project-list-item col-md-6">
                        <p class="meta-title"><?php echo the_terms($post->ID,'works') ; ?></p>
                        <ul class="project-img-slide">
                            <?php if (has_post_thumbnail()) : echo the_post_thumbnail(); ?>
                            <?php else : ; ?>
                                <?php $slider = CFS()->get('project_slid'); ?>
                                <?php foreach ($slider as $slide) { ?>
                                    <li> <img src="<?php echo $slide['slider_img']; ?>" alt=""></li>
                                <?php } ?>
                            <?php endif; ?>
                        </ul>
                        <div class="project-description">
                            <h4 class="title <?php if($counter%2 === 0) {?>title-dark<?php }?> title-light title-trasf title-bold"><a href="<?php echo get_the_permalink(get_the_ID()) ; ?>"><?php the_title(); ?></a></h4>
                            <p class="description description-light"><?php the_content(); ?></p>
                        </div>
                        <?php else : ;?>
                        <?php endif ;?>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </li>
                </ul>

                <script>
                    var current_page = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
                    var max_pages = '<?php echo $projectsloop->max_num_pages; ?>';
                </script>
                <script>
                    var true_posts = '<?php echo serialize($projectsloop->query_vars); ?>';
                </script>
            </div>
            <div class="load-more-wrap center-btn" id="true_loadmore">
                <a href="#" class="btn-prime btn-prime-center">Load more</a>
            </div>
    </section>

<?php get_footer();?>