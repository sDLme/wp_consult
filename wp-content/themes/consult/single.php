<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 29.03.2017
 * Time: 10:57
 */
 get_header(); ?>

<section class="section-pd singl">
 <div class="container">
  <h3 class="section-title"><?php wp_title("", true); ?></h3>
  <div class="row">
  <div class="col-md-8">

  <ul class="blog-list">
   <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
     <li class="blog-list-item">
      <div class="blog-img-wrap">
       <?php if (has_post_thumbnail()) : echo the_post_thumbnail(); ?>
       <?php endif; ?>
      </div>
      <div class="blog-content">
       <p class="description"><?php the_content(); ?></p>
       <span class="blog-item-date"><?php the_time('F j, Y '); ?></span>
      </div>
     </li>
    <?php endwhile; endif;
   wp_reset_postdata() ?>
  </ul></div>
   <div class="col-md-4"><?php dynamic_sidebar( 'box-1' ); ?></div>
 </div>
 </div>
</section>


<?php get_footer(); ?>
