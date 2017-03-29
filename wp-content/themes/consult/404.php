<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 29.03.2017
 * Time: 10:24
 */
 get_header(); ?>
    <section class="section-bg section-pd section-pd-bottom my-page">
        <div class="container">
            <h3 class="section-title"><?php wp_title("", true); ?></h3>
            <div class="row">
                <div class="col-md-8">
                    <div class="entry-content">
                        <p class="error"> NO content sorry</p>
                    </div>
                </div>
                <div class="col-md-4"><?php dynamic_sidebar('box-1'); ?></div>
            </div>
    </section>
    </main>
<?php
         get_footer(); ?>