<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 23.03.2017
 * Time: 11:52
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('', true, 'right');?><?php bloginfo('name');?></title>
<?php wp_head(); ?>


</head>
<body>
<main>
    <!--INTRO-->

    <section class="<?php if (!is_front_page() ) :  ?>other-height<?php  endif ;?> intro section-pd-bottom d-flex flex-column ">
        <header class="site-head">
            <div class="container">
                <div class=" d-flex justify-content-between flex-wrap align-items-baseline  ">
                    <div class="my-logo ">
                        <a href="/">
                            <?php
                            if ( function_exists( 'the_custom_logo' ) )
                                the_custom_logo();?>
                        </a>
                    </div>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'header-menu',
                            'menu' => 'header-menu',
                            'menu_class' => ' nav-info d-flex justify-content-between',
                            'container' => 'nav',
                            'container_class' => '  hidden-md-down',
                            'before' => '<li class="navigation-item">',
                            'after' => '</li>',
                        ));?>
                    <div class=" nav-info d-flex justify-content-around align-items-start hidden-xs-down">
                        <a href="tel:<?php echo get_theme_mod('consult-contact-call-label'); ?>" class="phone"><?php echo get_theme_mod('consult-contact-call-label'); ?></a>
                        <a href="<?php echo get_theme_mod('consult-contact-email'); ?>" class="head-contact-link"></a>
                    </div>
                    <!--mobile-menu-->
                    <nav class="navbar navbar-default" role="navigation">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header my-nav-position">
                                <button type="button" class="navbar-toggle hidden-lg-up navbar-btn manu-mob" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="collapse navbar-collapse  my-nav-bar-position" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav my-nav-flex navbar-left">
                                        <li class="mobile-nav-item"><a href="#">Home</a></li>
                                        <li class="mobile-nav-item"><a href="#">about us</a></li>
                                        <li class="mobile-nav-item"><a href="#">industry</a></li>
                                        <li class="mobile-nav-item"><a href="#">services</a></li>
                                        <li class="mobile-nav-item"><a href="#">pages</a></li>
                                        <li class="mobile-nav-item"><a href="#">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>

                    </nav>
                    <!-- end mobile menu-->
                </div>
            </div>
        </header>
        </div>
        <div class="container">
            <!--intro-->
            <h2 class="site-title site-title-light">
                <span class="site-title-less"><?php echo get_theme_mod('intro_title'); ?></span>
                <?php echo get_theme_mod('intro_description'); ?>
            </h2>
           <?php $args = array(
                'order' => 'ASC',
                'post_type' => 'page',
                'post__in'=> array(
                    get_theme_mod('intro_slide_one'),
                    get_theme_mod('intro_slide_two'),
                    get_theme_mod('intro_slide_three'),
                    get_theme_mod('intro_slide_four'),
                    get_theme_mod('intro_slide_five'))
            );
            $slideloop = new WP_Query( $args );?>
            <?php if ( is_front_page() ) : ?>
            <div class="intro-slide">
                <?php while ($slideloop->have_posts()) :?>
                <div class="intro-slide-item-wrap ">
                        <div class="intro-slide-item">

                            <?php $slideloop->the_post(); ?>
                            <?php the_post_thumbnail() ;?>
                            <h4 class="title title-bold title-light title-trasf"><?php the_title(); ?></h4>

                        </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <!--end intro-->
        </div>
    </section>

