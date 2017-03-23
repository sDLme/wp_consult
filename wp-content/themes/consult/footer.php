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
                    <img src="images/consult-logo.png" alt="">
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
    <h5 class="title title-trasf title-light">Industary</h5>
    <ul class="foot-industary-list">
        <li class="foot-industary-item">Education</li>
        <li class="foot-industary-item">business</li>
        <li class="foot-industary-item">realestate</li>
        <li class="foot-industary-item">technology</li>
        <li class="foot-industary-item">banking</li>
        <li class="foot-industary-item">communication</li>
        <li class="foot-industary-item">much more</li>
    </ul>
</div>
<div class=" col-md-8 col-lg-5" >
    <h5 class="title title-trasf title-light">News letter</h5>
    <p class="description">Enter your email address to subscribe our notification of our new post & features
        by email.</p>
    <div class="contact-inputs">
        <input type="email" placeholder="Email Address" class="contact-input-item">
        <button type="submit" class="btn-prime">Subscribe</button>
    </div>
</div>
</div>
<!-- SECTION FOOTER -->
<div class="footer-foo row d-flex justify-content-between align-items-center">
    <p class="copy">Copyright © 2016 Consultplus theme.</p>
    <ul class="social-list d-flex justify-content-between">
        <li class="social-list-facebook"><a href="#">Facebook</a></li>
        <li class="social-list-twitter"><a href="#">twitter</a></li>
        <li class="social-list-instagram "><a href="#">instagram</a></li>
        <li class="social-list-linkedin"><a href="#">linkedin</a></li>
        <li class="social-list-google"><a href="#">google +</a></li>
    </ul>
</div>
<!-- END SECTION FOOTER -->
</div>
</footer>
<!--END FOOTER-->


<?php wp_footer(); ?>
</body>
</html>