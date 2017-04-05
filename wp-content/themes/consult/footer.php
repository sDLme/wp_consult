<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 23.03.2017
 * Time: 11:56
 */?>
</main>
<footer class="section-bg-foot-bg section-pd" xmlns="http://www.w3.org/1999/html">
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
                        'container' => false,
                        'before' => '<li class="foot-nav-item">',
                        'after' => '</li>',
                    ));
                ?>
</div>
<div class="col-6 col-sm-6 col-md-4 col-lg-2">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
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

        <?php
        $social_links_facebook = get_theme_mod('social_links_facebook');
        if( $social_links_facebook) { ;?>
        <li class="social-list-facebook">
            <a href="<?php echo $social_links_facebook; ?>">Facebook</a>
        </li>
        <?php }; ?>
        <?php
        $social_links_twitter = get_theme_mod('social_links_twitter');
        if( $social_links_twitter) {  ?>
        <li class="social-list-twitter">
            <a href="<?php echo get_theme_mod('social_links_twitter'); ?>">twitter</a>
        </li>
        <?php }; ?>
        <?php
        $social_links_instagram = get_theme_mod('social_links_instagram');
        if( $social_links_instagram ) {  ?>
        <li class="social-list-instagram">
            <a href="<?php echo $social_links_instagram; ?>">instagram</a>
        </li>
        <?php }; ?>
        <?php
        $social_links_linkedin = get_theme_mod('social_links_linkedin');
        if( $social_links_linkedin) {  ?>
        <li class="social-list-linkedin">
            <a href="<?php echo get_theme_mod('social_links_linkedin'); ?>">linkedin</a>
        </li>
        <?php }; ?>
        <?php
        $social_links_google = get_theme_mod('social_links_google');
        if( $social_links_google) {  ?>
        <li class="social-list-google">
            <a href="<?php echo get_theme_mod('social_links_google'); ?>">google +</a>
        </li>
        <?php }; ?>
    </ul>
</div>
<!-- END SECTION FOOTER -->
</div>
</footer>
<!--END FOOTER-->


<?php wp_footer(); ?>
<!-- HelloPreload http://hello-site.ru/preloader/ -->
<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background: #2574A9 url(http://hello-site.ru//main/images/preloads/ball-triangle.svg) center center no-repeat;background-size:41px;}</style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
<!-- HelloPreload http://hello-site.ru/preloader/ -->
</body>
</html>