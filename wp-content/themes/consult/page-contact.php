<?php
/**
 *
 *Template Name: Contact us page
 */
?>
<?php get_header(); ?>
<section class="contact-form section-pd ">
        <h3 class="section-title"><?php the_title(); ?></h3>
    <div class="container">
        <div class=" contact-wrapp d-flex justify-content-around align-items-start">
            <div class="form">
                <h4 class="title title-dark title-trasf contact-title"><?php echo get_theme_mod('contact_form_title'); ?></h4>
                <?php echo do_shortcode("[contact-form-7 id=\"158\" title=\"Contact us page\"]") ?>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/d/embed?mid=1mAKX4iBDfVEgOcjmWaKLqd11XCs" width="100%"
                        height="480"></iframe>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
