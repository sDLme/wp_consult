<?php
/**
 *
 *Template Name: Contact us page
 */
?>
<?php get_header(); ?>
<h3 class="section-title"><?php the_title(); ?></h3>
<div class="">
    <?php  echo do_shortcode("[contact-form-7 id=\"158\" title=\"Contact us page\"]")?>
</div>
<?php get_footer();?>
