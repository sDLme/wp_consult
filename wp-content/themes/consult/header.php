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
<title><?php wp_title('<<', true, 'right');?><?php bloginfo('name');?></title>
    <?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>
<body>
<main>
    <!--INTRO-->
    <section class="intro section-pd-bottom d-flex flex-column ">
        <header class="site-head">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div class="my-logo col-md-3">
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
                            'menu_class' => 'nav-info d-flex justify-content-between',
                            'container' => 'nav',
                            'container_class' => 'hidden-md-down',
                            'before' => '<li class="navigation-item">',
                            'after' => '</li>',
                        ));
                    ?>
                    <div class="nav-info d-flex justify-content-around align-items-start">
                        <a href="<?php echo get_theme_mod('consult-contact-call'); ?>" class="phone"><?php echo get_theme_mod('consult-contact-call-label'); ?></a>
                        <a href="<?php echo get_theme_mod('consult-contact-email'); ?>" class="head-contact-link"></a>
                    </div></div>
            </div>
        </header>
        <!--mobile-menu-->
        <div class="mobile-nav-wrap">
            <div class="container">
                <ul class="nav-info hidden-lg-up d-flex justify-content-between">
                    <li class="mobile-nav-item"><a href="#">Home</a></li>
                    <li class="mobile-nav-item"><a href="#">about us</a></li>
                    <li class="mobile-nav-item"><a href="#">industry</a></li>
                    <li class="mobile-nav-item"><a href="#">services</a></li>
                    <li class="mobile-nav-item"><a href="#">pages</a></li>
                    <li class="mobile-nav-item"><a href="#">Contact us</a></li>
                </ul>
            </div>
        </div>
        <!-- end mobile menu-->
        <div class="container">
            <!--intro-->
            <h2 class="site-title site-title-light">
                <span class="site-title-less">We are leading consulting company</span>
                Choose your industry
            </h2>
            <div class="intro-slide">
                <div class="intro-slide-item-wrap ">
                    <div class="intro-slide-item">
                        <img src="images/slide-intro-educate-item.png" class="intro-slide-img">
                        <h4 class="title title-bold title-light title-trasf">Education</h4>
                    </div>
                </div>
                <div class="intro-slide-item-wrap ">
                    <div class="intro-slide-item">
                        <img src="images/slide-intro-business-item.png" class="intro-slide-img">
                        <h4 class="title title-bold title-light title-trasf">Business</h4>
                    </div>
                </div>
                <div class="intro-slide-item-wrap ">
                    <div class="intro-slide-item">
                        <img src="images/slide-intro-tech-item.png" class="intro-slide-img">
                        <h4 class="title title-bold title-light title-trasf">Technology</h4>
                    </div>
                </div>
                <div class="intro-slide-item-wrap ">
                    <div class="intro-slide-item">
                        <img src="images/slide-intro-bank-item.png" class="intro-slide-img">
                        <h4 class="title title-bold title-light title-trasf">Education</h4>
                    </div>
                </div>
                <div class="intro-slide-item-wrap ">
                    <div class="intro-slide-item">
                        <img src="images/slide-intro-bank-item.png" class="intro-slide-img">
                        <h4 class="title title-bold title-light title-trasf">Education</h4>
                    </div>
                </div>
                <div class="intro-slide-item-wrap ">
                    <div class="intro-slide-item">
                        <img src="images/slide-intro-bank-item.png" class="intro-slide-img">
                        <h4 class="title title-bold title-light title-trasf">Banking</h4>
                    </div>
                </div>

            </div>
            <!--end intro-->
        </div>
    </section>