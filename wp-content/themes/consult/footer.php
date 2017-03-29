<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 23.03.2017
 * Time: 11:56
 */?>

<footer class="section-bg-foot-bg section-pd">
    <div class="container">
        <div class="row">
            <div class="foot-logo col-12 col-md-4 col-lg-3 d-flex align-items-center">
                <div class="foot-img-logo">
                    <?php
                    if ( function_exists( 'the_custom_logo' ) )
                        the_custom_logo();?>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <h5 class="title title-trasf title-light">navigation</h5>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'foot-menu',
                        'menu' => 'footer-menu',
                        'menu_class' => 'foot-nav-list',
                        container => false,
                        'before' => '<li class="foot-nav-item">',
                        'after' => '</li>',
                    ));
                ?>
</div>
<div class="col-6 col-sm-6 col-md-4 col-lg-2">
    <?php get_sidebar(); ?>
</div>
<div class=" col-md-8 col-lg-5" >
    <h5 class="title title-trasf title-light"><?php echo get_theme_mod('form_title'); ?></h5>
    <p class="description"><?php echo get_theme_mod('form_description'); ?></p>
    <div class="contact-inputs">
        <?php  echo do_shortcode("[contact-form-7 id=\"153\" title=\"Contact form footer\"]")?>
    </div>
</div>
</div>
<!-- SECTION FOOTER -->
<div class="footer-foo row d-flex justify-content-between align-items-center">
    <p class="copy">Copyright © 2016 Consultplus theme.</p>
    <ul class="social-list d-flex justify-content-between">

        <li class="social-list-facebook"><a href="<?php echo get_theme_mod('social_links_facebook'); ?>">Facebook</a></li>

        <li class="social-list-twitter"><a href="<?php echo get_theme_mod('social_links_twitter'); ?>">twitter</a></li>

        <li class="social-list-instagram"><a href="<?php echo get_theme_mod('social_links_instagram'); ?>">instagram</a></li>

        <li class="social-list-linkedin"><a href="<?php echo get_theme_mod('social_links_linkedin'); ?>">linkedin</a></li>

        <li class="social-list-google"><a href="<?php echo get_theme_mod('social_links_google'); ?>">google +</a></li>
    </ul>
</div>
<!-- END SECTION FOOTER -->
</div>
</footer>
<!--END FOOTER-->


<?php wp_footer(); ?>
</body>
</html>