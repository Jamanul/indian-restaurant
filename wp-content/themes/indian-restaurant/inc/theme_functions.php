<?php
function ir_customize_register($wp_customize)
{
    $wp_customize->add_section('ir_hero_area', array(
        'title' => __('Hero_area_img', 'sakib'),
        'description' => __('If you are interested, you can change the hero img here.', 'sakib'),
    ));

    // Add a setting for the logo
    $wp_customize->add_setting('ir_hero_img', array(
        'default' => get_template_directory_uri() . './images/image 19.png', // Using get_template_directory_uri() for the URL
    ));

    // Add a control for uploading the logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ir_hero_img', array(
        'label' => __('Hero img Upload', 'sakib'),
        'description' => __('Upload img here. If you are interested, you can change it here.', 'sakib'),
        'setting' => 'ir_hero_img',
        'section' => 'ir_hero_area',
    )));
    $wp_customize->add_section('ir_cover_area', array(
        'title' => __('Cover Area Img', 'sakib'),
        'description' => __('Change the cover background image here.', 'sakib'),
    ));

    $wp_customize->add_setting('ir_cover_area_img', array(
        'default' => get_template_directory_uri() . '/images/cover-photo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ir_cover_area_img', array(
        'label' => __('Cover Background Image Upload', 'sakib'),
        'description' => __('Upload the cover image here.', 'sakib'),
        'settings' => 'ir_cover_area_img',
        'section' => 'ir_cover_area',
    )));

    $wp_customize->add_section('ir_hero_area', array(
        'title' => __('Hero_area_img', 'sakib'),
        'description' => __('If you are interested, you can change the hero img here.', 'sakib'),
    ));

    // Add a setting for the logo
    $wp_customize->add_setting('ir_hero_img', array(
        'default' => get_template_directory_uri() . './images/image 19.png', // Using get_template_directory_uri() for the URL
    ));

    // Add a control for uploading the logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ir_hero_img', array(
        'label' => __('Hero img Upload', 'sakib'),
        'description' => __('Upload img here. If you are interested, you can change it here.', 'sakib'),
        'setting' => 'ir_hero_img',
        'section' => 'ir_hero_area',
    )));
}

add_action('customize_register', 'ir_customize_register');