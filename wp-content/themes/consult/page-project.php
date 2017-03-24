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
            'post_type' => 'consult_projects');
        $servisloop = new WP_Query($args);
        ?>
        <ul class="project-list row">
            <?php while ($servisloop->have_posts()) :
            $servisloop->the_post(); ?>
            <li class="project-list-item col-md-4">
                <p class="meta-title">Banking</p>
                <ul class="project-img-slide">
                    <?php $postId = get_the_ID();?>
                    <?php $featured_img = $dynamic_featured_image->get_featured_images($postId) ?>
                    <ul class="project-img-slide">
                        <?php foreach ($featured_img as $img) { ?>
                        <li><img src="<?php echo $img;?>"></li>
                        <?php }?>
                    </ul>
                    <li><?php the_post_thumbnail() ?></li>
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
