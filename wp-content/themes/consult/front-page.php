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

        <!--<div class="carousel-clients">
            <div class="carousel-client-item"><img src="images/slide-client-code-item.png"></div>
            <div class="carousel-client-item"><img src="images/slide-client-video.png"></div>
            <div class="carousel-client-item"><img src="images/slide-client-audio.png"></div>
            <div class="carousel-client-item"><img src="images/slide-client-grafic.png"></div>
            <div class="carousel-client-item"><img src="images/slide-client-photo.png"></div>
            <div class="carousel-client-item"><img src="images/slide-client-code-item.png"></div>
            <div class="carousel-client-item"><img src="images/slide-client-audio.png"></div>
            <div class="carousel-client-item"><img src="images/slide-client-audio.png"></div>
            <div class="carousel-client-item"><img src="images/slide-client-grafic.png"></div>
            <div class="carousel-client-item"><img src="images/slide-client-photo.png"></div>
        </div>-->
    </div>
</section>
<!--END ABOUT-->

<!--FEACHERS-->
<section class="section-pd section-bg-feach">
    <div class="container">
        <h3 class="section-title">our features</h3>
        <ul class="feature-list">
            <li class="feature-list-item">
                <h4 class="title title-bold">24 hour support</h4>
                <p class="description"> containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including </p>
            </li>
            <li class="feature-list-item">
                <h4 class="title title-bold">Business boosting</h4>
                <p class="description"> established fact that a reader will be distracted by
                    the readable content of a page when looking </p>
            </li>
            <li class="feature-list-item">
                <h4 class="title title-bold">FUll security</h4>
                <p class="description"> Lorem Ipsum is simply dummy text of the printing and
                    typesetting
                    industry.
                    Lorem Ipsum has been the industry's </p>
            </li>
            <li class="feature-list-item">
                <h4 class="title title-bold">Creative process</h4>
                <p class="description">There are many variations of passages of Ipsum avail
                    able, but the majority have suffered alteration.</p>
            </li>
        </ul>
        <div class="contact-us-area d-flex justify-content-between align-items-center">
            <p class="contact-description ">If you want to boost your business Contact us</p>
            <a href="mailto:info@consultplus.com?subject=Business question" class="btn-prime">Boost your business</a>
        </div>
    </div>
</section>
<!-- END FEACHERS-->

<!--PORTFOLIO-->
<section class="section-bg section-pd section-pd-bottom">
    <div class="container">
        <h3 class="section-title">Projects</h3>
        <ul class="project-list row">
            <li class="project-list-item col-md-4">
                <p class="meta-title">Banking</p>
                <img src="images/progect-item-one.jpg" alt="">
                <div class="project-description">
                    <h4 class="title title-light title-trasf title-bold">Project Heading</h4>
                    <p class="description description-light">Popularised in the 1960s with the release
                        Letraset sheets containing.</p>
                </div>
            </li>
            <li class="project-list-item col-md-8">
                <p class="meta-title">Real Estate</p>
                <ul class="project-img-slide">
                    <li><img src="images/progect-item-two.jpg" alt=""></li>
                    <li><img src="images/progect-item-two.jpg" alt=""></li>
                    <li><img src="images/progect-item-two.jpg" alt=""></li>
                </ul>
                <div class="project-description">
                    <h4 class="title title-trasf title-bold">Project Heading</h4>
                    <p class="description">Popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages. fact that a reader will be distracted by the readable of a page when.</p>
                </div>
            </li>
        </ul>
        <button class="btn-prime btn-prime-center">Full Projects</button>
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
            'post__in'=> array(44,46,48));
        $servisloop = new WP_Query( $args);
        ?>
        <ul class="services-list row">
            <?php while ($servisloop->have_posts()) :
            $servisloop->the_post(); ?>
            <li class="services-list-item-wrap col-md-4">
                <div class="services-list-item">
                    <div class="thumbnail-wrapp"><?php the_post_thumbnail()?></div><!-- i dont know about this img, important or not. I made important -->
                    <h4 class="title title-bold title-trasf"><?php the_title(); ?></h4>
                    <p class="description"><?php the_excerpt(); ?></p>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </li>
        </ul>
        <button class="btn-prime btn-prime-center">Full Services</button>
    </div>
</section>
<!--END SERVISES-->
<!--TESTIMONIAL-->
<section class="section-bg-test-col">
    <div class="container test-wrapp">
        <h3 class="section-title site-title-light">Testimonial</h3>
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
        <ul class="blog-list row no-gutters">
            <li class="blog-list-item col-lg-6 d-flex">
                <div class="blog-img-wrap">
                    <img src="images/blog-list-item-one.jpg" alt="">
                </div>
                <div class="blog-content">
                    <span class="blog-item-date">February 22, 2016 </span>
                    <h4 class="title title-bold title-trasf">Blog Heading here</h4>
                    <p class="description">Established fact that a reader will be distracted by the readable of a
                        page when looking at its layout...</p>
                </div>
            </li>
            <li class="blog-list-item col-lg-6">
                <div class="blog-content">
                    <span class="blog-item-date">February 22, 2016 </span>
                    <h4 class="title title-bold title-trasf">Blog Heading here</h4>
                    <p class="description">Established fact that a reader will be distracted by the readable of a
                        page when looking at its layout...</p>
                </div>
            </li>
        </ul>
        <button class="btn-prime btn-prime-center">Full Blog</button>
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
                    <a href="mailto:info@consultplus.com?subject=Business question" class="contact-atr">info@consultplus.com</a>
                </div>
            </li>
            <li class="contact-list-item-wrap col-md-4 ">
                <div class="contact-list-item">
                    <h4 class="title title-bold">Call Us</h4>
                    <a href="tel:+91 8879 8767 990" class="contact-atr">+91 8879 8767 990</a>
                </div>
            </li>
            <li class="contact-list-item-wrap col-md-4">
                <div class="contact-list-item">
                    <h4 class="title title-bold">Career</h4>
                    <a href="mailto:consult@career.com?subject=Career question" class="contact-atr">consult@career.com</a>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--END CONTACT US-->
</main>
<?php get_footer();?>

