<?php
/*
 * Template Name: Front page
 */
?>
<?php get_header(); ?>


<!-- END INTRO-->
<!--ABOUT-->
<section class="section-bg section-pd section-pd-bottom">
    <div class="container">
        <?php
        $the_slug = 'about-us';
        $args = array(
            'name'           => $the_slug,
            'post_type'      => 'page',
            'post_status'    => 'publish',
            'posts_per_page' => 1
        );
        $query = new WP_Query( $args );
        if ($query->have_posts()):?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <h3 class="section-title"><?php the_title(); ?></h3>
                <div class="col-xs-6">
                    <div class="description description-just-cnt"><?php the_excerpt(); ?></div>
                    <div class="about-btn-area start-xs">
                        <a href="<?php the_permalink(); ?>" class="btn-prime btn-prime-center">read more</a>
                    </div>
                </div>
            <?php endwhile; ?>

        <?php endif; wp_reset_postdata(); ?>

        <div class="carousel-clients">
            <?php $slider = CFS()->get('clients-slider', 11); ?>
            <?php foreach ($slider as $slide) { ?>
                <div class="carousel-client-item">
                    <img src="<?php echo $slide['client_img']; ?>" alt="">
                </div>
            <?php   } ?>
        </div>
        </div>
    </div>
</section>
<!--END ABOUT-->

<!--FEACHERS-->
<section class="section-pd section-bg-feach">
    <div class="container">
        <h3 class="section-title"><?php echo get_theme_mod('feature_title'); ?></h3>
        <?php
        $args = array(
            'post_type' => 'consult_features',
            'post__in'=> array(
                get_theme_mod('features_post_edit-one'),
                get_theme_mod('features_post_edit-two'),
                get_theme_mod('features_post_edit-three'),
                get_theme_mod('features_post_edit-four'),
                get_theme_mod('features_post_edit-one')));
        $servisloop = new WP_Query( $args);
        ?>
        <ul class="feature-list row">
            <?php while ($servisloop->have_posts()) :
            $servisloop->the_post(); ?>
            <li class="feature-list-item col-md-4">
                    <h4 class="title title-bold"><?php the_title(); ?></h4>
                    <p class="description"><?php the_excerpt(); ?></p>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
        <div class="center-btn"><a  href="/features" class="btn-prime btn-prime-center">Full feachurs</a></div>
        <div class="contact-us-area d-flex justify-content-between align-items-center">
            <p class="contact-description ">If you want to boost your business Contact us</p>
            <?php
            $url = "http://consult.loc/contact/" ;
            $page_ID = url_to_postid($url);
            ?>
            <a href="<?php the_permalink($page_ID); ?>" class="btn-prime">Boost your business</a>
        </div>
    </div>
</section>
<!-- END FEACHERS-->

<!--PORTFOLIO-->
<section class="section-bg section-pd section-pd-bottom">
    <div class="container">
        <h3 class="section-title">Projects</h3>
        <?php
        $counter = 0;
        $args = array(
            'order' => 'ASC',
            'post_type' => 'consult_projects',
            'post__in'=> array(89, 86));
        $projectsloop = new WP_Query($args);
        ?>
        <ul class="project-list row">
            <?php while ($projectsloop->have_posts()) :
            $projectsloop->the_post();
            $pjwork= CFS()->get('check_show') ;?>
            <?php if($pjwork==1) : ;?>
           <?php $counter++;
            if($counter ===1) { ?>
                <li class="project-list-item col-md-4">
           <?php }
           else { ?>
               <li class="project-list-item col-md-8">
          <?php  }?>

                <p class="meta-title"><?php the_taxonomies("'post_type' => 'consult_projects',");?></p>
                <ul class="project-img-slide">
                    <?php if (has_post_thumbnail() ) : echo  the_post_thumbnail() ;?>
                    <?php else : ;?>
                        <?php $projectslider = CFS()->get('project_slid', 89); ?>
                        <?php foreach ($projectslider as $slid) { ?>
                            <li><img src="<?php echo $slid['slider_img']; ?>" alt=""></li>
                        <?php }?>
                    <?php endif ;?>
                </ul>
                <div class="project-description">
                    <h4 class="title title-light title-trasf title-bold"><?php the_title(); ?></h4>
                    <p class="description description-light"><?php the_excerpt(); ?></p>
                </div>
                <?php else : ;?>
                <?php endif ;?>
                <?php endwhile; wp_reset_postdata(); ?>
            </li>
        </ul>
        <div class="center-btn"><a href="/project" class="btn-prime btn-prime-center">Full Projects</a></div>
    </div>
</section>
<!--END PORTFOLIO-->

<!--SERVISES-->
<section class="section-bg-serv section-pd section-pd-bottom">
    <div class="container">
        <h3 class="section-title">Services</h3>
        <?php
        $args = array(
            'post_type' => 'consult_services',
            'post__in'=> array(get_theme_mod('services_post_edit-one'),get_theme_mod('services_post_edit-two'),get_theme_mod('services_post_edit-three'))
        );
        $servisloop = new WP_Query( $args);
        ?>

        <ul class="services-list row">
            <?php while ($servisloop->have_posts()) :
            $servisloop->the_post(); ?>
            <li class="services-list-item-wrap col-md-4">
                <div class="services-list-item">
                    <div class="thumbnail-wrapp">
                        <?php the_post_thumbnail()?>
                    </div>
                    <h4 class="title title-bold title-trasf"><?php the_title(); ?></h4>
                    <p class="description"><?php the_excerpt(); ?></p>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </li>
        </ul>
        <div class="center-btn">
            <a  href="/services" class="btn-prime btn-prime-center">Full Services</a>
        </div>
        </div>
</section>
<!--END SERVICES-->
<!--TESTIMONIAL-->
<section class="section-bg-test-col">
    <div class="container test-wrapp">
        <h3 class="section-title site-title-light"><?php echo get_theme_mod('testimonial_title', 'TESTIMONIAL'); ?></h3>
        <div class="slide-testimon-wrap">
            <?php
            $args = array('post_type' => 'consult_testimonial', 'posts_per_page' => 3);
            $loop = new WP_Query($args);
            ?>
            <div class="slide-testimon">
                <?php while ($loop->have_posts()) :?>
                <div class="slide-testimon-item">
                    <?php $loop->the_post(); ?>
                    <p class="description description-light"><?php the_content(); ?></p>
                    <span <?php post_class('slide-testimon-item-name'); ?>><?php  echo get_post_meta($post->ID, 'client_name', true);?></span>
                    <span <?php post_class('slide-testimon-item-meta'); ?>><?php  echo get_post_meta($post->ID, 'client_position', true);?></span>
                </div>

                <?php endwhile; wp_reset_postdata()?>
            </div>
        </div>
    </div>
</section>
<!--END TESTIMONIAL-->
<!--BLOG-->
<section class="section-bg-blog section-pd section-pd-bottom">
    <div class="container">
        <h3 class="section-title">Blog</h3>
        <?php
        $args = array('post_type' => 'post',  'order' => 'ASC', 'posts_per_page' => 2);
        $loop = new WP_Query($args); ?>
        <ul class="blog-list row no-gutters">
            <?php if ($loop->have_posts()): ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post();?>
            <li class="blog-list-item col-lg-6">
                <div class="blog-img-wrap">
                    <?php if (has_post_thumbnail() ) : echo  the_post_thumbnail() ;?>
                   <?php endif; ?>
                </div>
                <div class="blog-content">
                    <span class="blog-item-date">February 22, 2016 </span>
                    <h4 class="title title-bold title-trasf"><?php the_title(); ?></h4>
                    <p class="description"><?php the_excerpt(); ?></p>
                </div>
            </li>
                <?php endwhile; endif; wp_reset_postdata() ?>
        </ul>
        <a href="/blog" class="btn-prime btn-prime-center">Full Blog</a>
    </div>
</section>
<!--END BLOG-->
<!--CONTACT US-->
<section class="section-bg section-pd section-pd-bottom ">
    <div class="container">
        <h3 class="section-title">Quick contact</h3>
        <ul class="contact-list row">
            <li class="contact-list-item-wrap col-md-4">
                <div class="contact-list-item">
                    <h4 class="title title-bold">Email</h4>
                    <a href="<?php echo get_theme_mod('consult-contact-email'); ?>" class="contact-atr"><?php echo get_theme_mod('consult-contact-email-label'); ?></a>
                </div>
            </li>
            <li class="contact-list-item-wrap col-md-4 ">
                <div class="contact-list-item">
                    <h4 class="title title-bold">Call Us</h4>
                    <a href="tel:<?php echo get_theme_mod('consult-contact-call'); ?>" class="contact-atr"><?php echo get_theme_mod('consult-contact-call-label'); ?></a>
                </div>
            </li>
            <li class="contact-list-item-wrap col-md-4">
                <div class="contact-list-item">
                    <h4 class="title title-bold">Career</h4>
                    <a href="mailto:<?php echo get_theme_mod('consult-contact-career'); ?>" class="contact-atr"><?php echo get_theme_mod('consult-contact-career-label'); ?></a>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--END CONTACT US-->
</main>
<?php get_footer();?>

