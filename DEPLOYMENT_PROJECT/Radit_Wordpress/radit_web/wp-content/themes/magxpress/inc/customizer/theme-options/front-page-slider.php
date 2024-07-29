<?php
/*Add Home Page Options Panel.*/
$wp_customize->add_panel(
    'theme_home_option_panel',
    array(
        'title' => __( 'Front Page Options', 'magxpress' ),
        'description' => __( 'Contains all front page settings', 'magxpress'),
        'priority' => 50
    )
);
/**/
$wp_customize->add_section(
    'home_page_slider_option',
    array(
        'title'      => __( 'Slider Section Options', 'magxpress' ),
        'panel'      => 'theme_home_option_panel',
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'magxpress_options[enable_slider_section]',
    array(
        'default'           => $default_options['enable_slider_section'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_slider_section]',
    array(
        'label'   => __( 'Enable Slider Section', 'magxpress' ),
        'section' => 'home_page_slider_option',
        'type'    => 'checkbox',
    )
);


$wp_customize->add_setting(
    'magxpress_options[slider_section_presentation_layout]',
    array(
        'default'           => $default_options['slider_section_presentation_layout'],
        'sanitize_callback' => 'magxpress_sanitize_radio',
    )
);
$wp_customize->add_control(
    new Magxpress_Radio_Image_Control(
        $wp_customize,
        'magxpress_options[slider_section_presentation_layout]',
        array(
            'label' => __( 'Slider Slider Layout', 'magxpress' ),
            'section' => 'home_page_slider_option',
            'choices' => magxpress_get_slider_layouts()
        )
    )
);


$wp_customize->add_setting(
    'magxpress_options[number_of_slider_post_layout_1]',
    array(
        'default'           => $default_options['number_of_slider_post_layout_1'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[number_of_slider_post_layout_1]',
    array(
        'label'       => __( 'Post In Slider', 'magxpress' ),
        'section'     => 'home_page_slider_option',
        'type'        => 'select',
        'choices'     => array(
            '3' => __( '3', 'magxpress' ),
            '4' => __( '4', 'magxpress' ),
            '5' => __( '5', 'magxpress' ),
            '6' => __( '6', 'magxpress' ),
        ),
        'active_callback' => 'slider_section_presentation_layout_1',

    )
);



$wp_customize->add_setting(
    'magxpress_options[number_of_slider_post_layout_2]',
    array(
        'default'           => $default_options['number_of_slider_post_layout_2'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[number_of_slider_post_layout_2]',
    array(
        'label'       => __( 'Post In Slider', 'magxpress' ),
        'section'     => 'home_page_slider_option',
        'type'        => 'select',
        'choices'     => array(
            '5' => __( '5', 'magxpress' ),
            '6' => __( '6', 'magxpress' ),
            '7' => __( '7', 'magxpress' ),
            '8' => __( '8', 'magxpress' ),
            '9' => __( '9', 'magxpress' ),
            '10' => __( '10', 'magxpress' ),
            '11' => __( '11', 'magxpress' ),
            '12' => __( '12', 'magxpress' ),
        ),
        'active_callback' => 'slider_section_presentation_layout_2',

    )
);




$wp_customize->add_setting(
    'magxpress_options[slider_post_content_alignment]',
    array(
        'default'           => $default_options['slider_post_content_alignment'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[slider_post_content_alignment]',
    array(
        'label'       => __( 'Slider Content Alignment', 'magxpress' ),
        'section'     => 'home_page_slider_option',
        'type'        => 'select',
        'choices'     => array(
            'text-right' => __( 'Align Right', 'magxpress' ),
            'text-center' => __( 'Align Center', 'magxpress' ),
            'text-left' => __( 'Align Left', 'magxpress' ),
        ),
    )
);

$wp_customize->add_setting(
    'magxpress_options[slider_section_cat]',
    array(
        'default'           => $default_options['slider_section_cat'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[slider_section_cat]',
    array(
        'label'   => __( 'Choose Slider Category', 'magxpress' ),
        'section' => 'home_page_slider_option',
            'type'        => 'select',
        'choices'     => magxpress_post_category_list(),
    )
);


$wp_customize->add_setting(
    'magxpress_options[banner_image_section]',
    array(
        'default'           => $default_options['banner_image_section'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[banner_image_section]',
    array(
        'label'       => __( 'Choose Banner Image Size', 'magxpress' ),
        'section'     => 'home_page_slider_option',
        'type'        => 'select',
        'choices'     => array(
            'large' => __( 'Large', 'magxpress' ),
            'full' => __( 'Full', 'magxpress' ),
        ),
    )
);


$wp_customize->add_setting(
    'magxpress_options[enable_slider_post_description]',
    array(
        'default'           => $default_options['enable_slider_post_description'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_slider_post_description]',
    array(
        'label'   => __( 'Enable Post Description', 'magxpress' ),
        'section' => 'home_page_slider_option',
        'type'    => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_options[enable_slider_cat_meta]',
    array(
        'default'           => $default_options['enable_slider_cat_meta'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_slider_cat_meta]',
    array(
        'label'   => __( 'Enable Category Meta', 'magxpress' ),
        'section' => 'home_page_slider_option',
        'type'    => 'checkbox',
    )
);


$wp_customize->add_setting(
    'magxpress_options[enable_slider_author_meta]',
    array(
        'default'           => $default_options['enable_slider_author_meta'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_slider_author_meta]',
    array(
        'label'   => __( 'Enable Author Meta', 'magxpress' ),
        'section' => 'home_page_slider_option',
        'type'    => 'checkbox',
    )
);


$wp_customize->add_setting(
    'magxpress_options[enable_slider_date_meta]',
    array(
        'default'           => $default_options['enable_slider_date_meta'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_slider_date_meta]',
    array(
        'label'   => __( 'Enable Date Meta', 'magxpress' ),
        'section' => 'home_page_slider_option',
        'type'    => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_options[enable_slider_overlay]',
    array(
        'default'           => $default_options['enable_slider_overlay'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_slider_overlay]',
    array(
        'label'   => __( 'Enable Slider Overlay', 'magxpress' ),
        'section' => 'home_page_slider_option',
        'type'    => 'checkbox',
    )
);