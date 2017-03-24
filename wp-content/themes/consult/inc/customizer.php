<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 23.03.2017
 * Time: 16:03
 */
function consult_customize_register($wp_customize)
{
///edit section contact us
    $wp_customize->add_panel( 'Contact', array(
        'title' => __( 'Contact' ),
        'description' => __( 'Text in contact us section', 'consult' ),
    ) );
    $wp_customize->add_section('consult', array(
        "title" => __('Contact us', 'consult'),
        'priority' => 30,
        'panel' => 'Contact',
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

///social-links in footer
    $wp_customize->add_panel( 'Social-link-footer', array(
        'title' => __( 'Social-link' ),
        'description' => __( 'Social link for footer', 'consult' ),
    ) );
    $wp_customize->add_section( 'consult_social_links' , array(
        'title'      => __( 'Social links', 'consult' ),
        'priority'   => 31,
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


//Choice of post in servise section
    $wp_customize->add_section( 'services_posts' , array(
        'title'      => __( 'Services posts', 'consult' ),
        'priority'   => 31,
    ) );
    $wp_customize->add_setting( 'services_posts-edit' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_posts-edit', array(
        'label'        => __( 'Services-post', 'consult' ),
        'section'    => 'services_posts',
        'settings'   => 'services_posts-edit',
        'type'     => 'select',
        )
    ));

}

add_action( 'customize_register', 'consult_customize_register' );