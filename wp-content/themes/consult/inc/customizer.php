<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 23.03.2017
 * Time: 16:03
 */
function consult_customize_register($wp_customize)
{
///edit front page
    $wp_customize->add_panel( 'front_page', array(
        'title' => __( 'Front Page Section' ),
        'description' => __( 'front page edit', 'consult' ),
        'priority' => 30,
    ) );

    ///intro
    $wp_customize->add_section('intro', array(
        "title" => __('Welcome section', 'consult'),
        'priority' => 30,
        'panel' => 'front_page',
    ));
    $wp_customize->add_setting('intro_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intro_title', array(
        'label' => __('Welcome Title', 'consult'),
        'section' => 'intro',
        'settings' => 'intro_title',
        'type' => 'text'
    )));

    $wp_customize->add_setting('intro_description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intro_description', array(
        'label' => __('Welcome Description', 'consult'),
        'section' => 'intro',
        'settings' => 'intro_description',
        'type' => 'text'
    )));

    $wp_customize->add_setting('intro-img-upload', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'intro-img-upload', array(
        'label' => __('Image choice', 'consult'),
        'section' => 'intro',
        'settings' => 'intro-img-upload',
    )));

    if( class_exists( 'WP_Customize_Control' ) ):
        class WP_Customize_Services_Post_Control extends WP_Customize_Control {
            public $type = 'services_post_dropdown';

            public function render_content() {

                $latest = new WP_Query( array(
                    'post_type'   => 'consult_services',
                    'post_status' => 'publish',
                    'orderby'     => 'date',
                    'order'       => 'DESC'
                ));

                ?>
                <label>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                    <select <?php $this->link(); ?>>
                        <?php
                        while( $latest->have_posts() ) {
                            $latest->the_post();
                            echo "<option " . selected( $this->value(), get_the_ID() ) . " value='" . get_the_ID() . "'>" . the_title( '', '', false ) . "</option>";
                        }
                        ?>
                    </select>
                </label>
                <?php
            }
        }
    endif;

    //Choice of post in servise section
    $wp_customize->add_section( 'services_posts' , array(
        'title'      => __( 'Services posts', 'consult' ),
        'priority'   => 31,
        'panel' => 'front_page',
    ) );
    $wp_customize->add_setting( 'services_post_edit-one' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control(  new WP_Customize_Services_Post_Control($wp_customize, 'services_post_edit-one', array(
        'label' => __( 'Service post 1', 'consult' ),
        'section' => 'services_posts',
        'settings' => 'services_post_edit-one',
        'type' => 'select',
    )));

    $wp_customize->add_setting( 'services_post_edit-two' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
    $wp_customize->add_control(  new WP_Customize_Services_Post_Control($wp_customize, 'services_post_edit-two', array(
        'label' => __( 'Service post 2', 'consult' ),
        'section' => 'services_posts',
        'settings' => 'services_post_edit-two',
        'type' => 'select',
    )));

    $wp_customize->add_setting( 'services_post_edit-three' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control(  new WP_Customize_Services_Post_Control($wp_customize, 'services_post_edit-three', array(
        'label' => __( 'Service post 3', 'consult' ),
        'section' => 'services_posts',
        'settings' => 'services_post_edit-three',
        'type' => 'select',
    )));

    /// Section TESTIMONIAL
    $wp_customize->add_section( 'testimonial_section' , array(
        'title'      => __( 'Testimonial section', 'consult' ),
        'priority'   => 30,
        'panel' => 'front_page',
    ) );
    $wp_customize->add_setting( 'testimonial_title' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'testimonial_title', array(
            'label'        => __( 'Testimonial title', 'consult' ),
            'section'    => 'testimonial_section',
            'settings'   => 'testimonial_title',
            'type'     => 'text',
    )));

////contact section
    $wp_customize->add_section('consult', array(
        "title" => __('Contact us', 'consult'),
        'priority' => 32,
        'panel' => 'front_page',
    ));

    $wp_customize->add_setting('consult-contact-email-label', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'consult-contact-email-label', array(
        'label' => __('Contact email lable', 'consult'),
        'section' => 'consult',
        'settings' => 'consult-contact-email-label',
        'type' => 'text'
    )));
    $wp_customize->add_setting('consult-contact-email', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'consult-contact-email', array(
        'label' => __('Contact email', 'consult'),
        'section' => 'consult',
        'settings' => 'consult-contact-email',
        'type' => 'input'
    )));


    $wp_customize->add_setting('consult-contact-call-label', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'consult-contact-call-label', array(
        'label' => __('Contact call us label', 'consult'),
        'section' => 'consult',
        'settings' => 'consult-contact-call-label',
        'type' => 'text'
    )));
    $wp_customize->add_setting('consult-contact-call', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'consult-contact-call', array(
        'label' => __('Contact call us', 'consult'),
        'section' => 'consult',
        'settings' => 'consult-contact-call',
        'type' => 'input'
    )));


    $wp_customize->add_setting('consult-contact-career-label', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'consult-contact-career-label', array(
        'label' => __('Contact career label ', 'consult'),
        'section' => 'consult',
        'settings' => 'consult-contact-career-label',
        'type' => 'text'
    )));
    $wp_customize->add_setting('consult-contact-career', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'consult-contact-career', array(
        'label' => __('Contact career ', 'consult'),
        'section' => 'consult',
        'settings' => 'consult-contact-career',
        'type' => 'input'
    )));


    ///Contact Page
    $wp_customize->add_section( 'contact_page' , array(
        'title'      => __( 'Contact Page', 'consult' ),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'contact_form_title' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_form_title', array(
        'label'        => __( 'Contact form title', 'consult' ),
        'section'    => 'contact_page',
        'settings'   => 'contact_form_title',
        'type'     => 'text',
    )));


    ///footer
    ///social-links in footer
    $wp_customize->add_section( 'consult_social_links' , array(
        'title'      => __( 'Social links', 'consult' ),
        'priority'   => 33,
        'panel' => 'front_page',
    ) );

    $wp_customize->add_setting( 'social_links_facebook' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_facebook', array(
        'label'        => __( 'Facebook', 'consult' ),
        'section'    => 'consult_social_links',
        'settings'   => 'social_links_facebook',
    ) ) );


    $wp_customize->add_setting( 'social_links_twitter' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_twitter', array(
        'label'        => __( 'Twitter', 'consult' ),
        'section'    => 'consult_social_links',
        'settings'   => 'social_links_twitter',
    ) ) );

    $wp_customize->add_setting( 'social_links_instagram' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_instagram', array(
        'label'        => __( 'Instagram', 'consult' ),
        'section'    => 'consult_social_links',
        'settings'   => 'social_links_instagram',
    ) ) );

    $wp_customize->add_setting( 'social_links_linkedin' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_linkedin', array(
        'label'        => __( 'Linkedin', 'consult' ),
        'section'    => 'consult_social_links',
        'settings'   => 'social_links_linkedin',
    ) ) );

    $wp_customize->add_setting( 'social_links_google' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_google', array(
        'label'        => __( 'Google', 'consult' ),
        'section'    => 'consult_social_links',
        'settings'   => 'social_links_google',
    ) ) );


    ////Footer form
    $wp_customize->add_section( 'footer-form-description' , array(
        'title'      => __( 'Footer form description', 'consult' ),
        'priority'   => 35,
    ) );

    $wp_customize->add_setting( 'form_title' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'form_title', array(
        'label'        => __( 'Form title', 'consult' ),
        'section'    => 'footer-form-description',
        'settings'   => 'form_title',
    ) ) );

    $wp_customize->add_setting( 'form_description' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'form_description', array(
        'label'        => __( 'Form description', 'consult' ),
        'section'    => 'footer-form-description',
        'settings'   => 'form_description',
        'type' => 'textarea'
    ) ) );
}
function business_head (){
    ?>
    <style type="text/css">
        .intro { background: url("<?php echo get_theme_mod('intro-img-upload'); ?>") center no-repeat;
            background-size: cover;
        ;}

    </style>
    <?php
}

add_action( 'wp_head', 'business_head');

add_action( 'customize_register', 'consult_customize_register' );