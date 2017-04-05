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
                                        <li class="mobile-nav-item"><a href="/">Home</a></li>
                                        <li class="mobile-nav-item"><a href="/about-us">about us</a></li>
                                        <li class="mobile-nav-item"><a href="#">industry</a></li>
                                        <li class="mobile-nav-item"><a href="/services">services</a></li>
                                        <li class="mobile-nav-item"><a href="#">pages</a></li>
                                        <li class="mobile-nav-item"><a href="/contact">Contact us</a></li>
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

            <?php if ( is_front_page() ) : ?>
            <div class="intro-slide">
                <?php
                $args = array(
                    'type'         => 'post',
                    'child_of'     => 0,
                    'hide_empty'   => 0,
                    'hierarchical' => 1,
                    'exclude'      => '',
                    'include'      => '',
                    'number'       => 0,
                    'taxonomy'     => 'works',
                    'pad_counts'   => false,
                );
                $categories = get_categories( $args );
                if( $categories ){
                foreach( $categories as $cat ){ ?>
                <div class="intro-slide-item-wrap ">
                   <?php // получаем ID термина на странице термина
                    $term_id = get_queried_object_id();

                    // получим ID картинки из метаполя термина
                    $image_id = get_term_meta( $cat->term_id, '_thumbnail_id', 1 );

                    // ссылка на полный размер картинки по ID вложения
                    $image_url = wp_get_attachment_image_url( $image_id, 'full' );

                    ;?>

                        <div class="intro-slide-item">

                                <?php echo '<img src="'. $image_url .'" alt="" />'; ?>
                            <h4 class="title title-bold title-light title-trasf"><?php  echo $cat->cat_name ?></h4>
                        </div>
                </div>
                <?php }}?>
                <?php endif; ?>
            </div>
            <!--end intro-->
        </div>
    </section>

