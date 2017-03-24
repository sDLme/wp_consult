<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 23.03.2017
 * Time: 16:03
 */
function consult_customize_register($wp_customize)
{
    ///возможность редактировать секцию
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
}

add_action( 'customize_register', 'consult_customize_register' );