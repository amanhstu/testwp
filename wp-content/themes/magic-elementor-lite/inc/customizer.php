<?php

/**
 * Magic Elementor Lite Theme Customizer
 *
 * @package Magic Elementor Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function Magic_elementor_lite_customize_register($wp_customize)
{

    $wp_customize->remove_control('magic_elementor_logo_position');
    $wp_customize->remove_control('magic_elementor_blog_style');

    //select sanitization function
    function sanitize_select($input, $setting)
    {
        $input = sanitize_key($input);
        $choices = $setting->manager->get_control($setting->id)->choices;
        return (array_key_exists($input, $choices) ? $input : $setting->default);
    }
    $wp_customize->add_setting('magic_elementor_lite_blog_style', array(
        'default'        => 'grid',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('magic_elementor_lite_blog_style', array(
        'label'      => __('Select Blog Style', 'magic-elementor-lite'),
        'section'    => 'magic_elementor_blog',
        'settings'   => 'magic_elementor_lite_blog_style',
        'type'       => 'select',
        'choices'    => array(
            'grid' => __('Grid Style', 'magic-elementor-lite'),
            'list' => __('List Style', 'magic-elementor-lite'),
            'classic' => __('Classic Style', 'magic-elementor-lite'),
        ),
    ));


    $wp_customize->add_setting('magic_elementor_lite_post_btntext', array(
        'default'        => __('Read More', 'magic-elementor-lite'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
        'priority'       => 15,
    ));
    $wp_customize->add_control('magic_elementor_lite_post_btntext', array(
        'label'      => __('Posts Button Text', 'magic-elementor-lite'),
        'description'     => __('You can change post button Continue Reading text.', 'magic-elementor-lite'),
        'section'    => 'magic_elementor_blog',
        'settings'   => 'magic_elementor_lite_post_btntext',
        'type'       => 'text',

    ));
}
add_action('customize_register', 'Magic_elementor_lite_customize_register', 99);
