<?php
/*
 *
 */
?>
<?php get_header(); ?>
<section class="section-pd my-industri">
    <div class="container">
        <h3 class="section-title"><?php the_title(); ?></h3>
        <div class="select-taxonomy d-flex align-items-baseline justify-content-center">
            <h5 class="title title-dark title-bold">CHOOSE YOUR INDUSTRY</h5>
            <?php
        $args = array(
            'type'         => 'post',
            'child_of'     => 0,
            'parent'       => '',
            'orderby'      => 'name',
            'order'        => 'ASC',
            'hide_empty'   => 1,
            'hierarchical' => 1,
            'exclude'      => '',
            'include'      => '',
            'number'       => 0,
            'taxonomy'     => 'works',
            'pad_counts'   => false,);
        ?>
        <?php

        $categories = get_categories('taxonomy=works');
        $select = "<select name='cat' id='cat' class='postform'>n";
        $select.= "<option value='-1'>Select industry</option>n";
        foreach($categories as $category){
            if($category->count > 0){
                $select.= "<option value='".$category->slug."'>".$category->name."</option>";
            }
        }
        $select.= "</select>";
        echo $select;
        ?></div>
        <script type="text/javascript">
            var dropdown = document.getElementById("cat");
            function onCatChange() {
                if ( dropdown.options[dropdown.selectedIndex].value != -1 ) {
                    location.href = "<?php echo home_url();?>/industry/"+dropdown.options[dropdown.selectedIndex].value+"/";
                }
            }
            dropdown.onchange = onCatChange;
            </script>
        <div id="ajax-content">
            <?php
            $counter = 0;
            $args = array(
                'order' => 'ASC',
                'posts_per_page' => 2,
                'post_type' => 'consult_projects',
            );
            $projectsloop = new WP_Query($args);
            ?>
            <ul class="project-list row">
                <?php while ($projectsloop->have_posts()) :
                $projectsloop->the_post();
                $counter++;
                $pjwork= CFS()->get('check_show');
                 if($pjwork==1) : ;?>
                <li class="project-list-item col-md-6">
                    <p class="meta-title"><?php echo the_terms($post->ID,'works') ; ?></p>
                    <ul class="project-img-slide">
                        <?php if (has_post_thumbnail()) : the_post_thumbnail(); ?>
                        <?php else : ; ?>
                            <?php $slider = CFS()->get('project_slid'); ?>
                            <?php foreach ($slider as $slide) { ?>
                                <li> <img src="<?php echo $slide['slider_img']; ?>" alt=""></li>
                            <?php } ?>
                        <?php endif; ?>
                    </ul>
                    <div class="project-description">
                        <h4 class="title <?php if($counter%2 === 0) {?>title-dark<?php }?> title-trasf title-bold"><a href="<?php echo get_the_permalink(get_the_ID()) ; ?>"><?php the_title(); ?></a></h4>
                        <div class=" description-work <?php if($counter%2 === 0) {?>description-dark<?php }; ?>"><?php the_content(); ?></div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </li>
            </ul>

            <script>
                var current_page = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
                var max_pages = '<?php echo $projectsloop->max_num_pages; ?>';
            </script>
            <script>
                var true_posts = '<?php echo serialize($projectsloop->query_vars); ?>';

            </script>
        </div>
        <div class="load-more-wrap center-btn" id="true_loadmore">
            <a href="#" class="btn-prime btn-prime-center">Load more</a>
        </div>
    </div>
    </div>
</section>


<?php get_footer();?>

