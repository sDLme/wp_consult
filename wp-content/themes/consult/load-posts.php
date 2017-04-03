<div id="ajax-content">
   <?php
// Цикл
if ( $query->have_posts() ) { ?>
<ul class="catalog-list">
    <?php while ( $query->have_posts() ) {
        $query->the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <div class="catalog-img-wrap">
                    <?php if( get_field('w_image') ): ?>
                        <img src="<?php the_field('w_image'); ?>" />
                    <?php endif; ?>
                    <div class="catalog-btn-wrap">
                        <span class="btn-prod-more"><span>More Details</span></span>
                    </div>
                </div>
                <h3 class="catalog-prod-name"><?php echo get_the_title(); ?></h3>
            </a>
        </li>
    <?php } } else { ?>
        <h3> Wine not found</h3>
    <?php } ?>
</ul>
<script>
    var current_page = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
    var max_pages = '<?php echo $query->max_num_pages; ?>';
</script>
<script>
    var true_posts = '<?php echo serialize($query->query_vars); ?>';
</script>
</div>

<div class="load-more-wrap" id="true_loadmore">
    <span>Load more</span>
</div>


