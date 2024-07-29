<?php
$wp_customize->add_section(
    'archive_options' ,
    array(
        'title' => __( 'Archive Options', 'magxpress' ),
        'panel' => 'magxpress_option_panel',
    )
);

/* Global Layout*/
$wp_customize->add_setting(
    'magxpress_options[global_sidebar_layout]',
    array(
        'default'           => $default_options['global_sidebar_layout'],
        'sanitize_callback' => 'magxpress_sanitize_radio',
    )
);
$wp_customize->add_control(
    new Magxpress_Radio_Image_Control(
        $wp_customize,
        'magxpress_options[global_sidebar_layout]',
        array(
            'label' => __( 'Global Sidebar Layout', 'magxpress' ),
            'section' => 'archive_options',
            'choices' => magxpress_get_general_layouts()
        )
    )
);

// Hide Side Bar on Mobile
$wp_customize->add_setting(
    'magxpress_options[hide_global_sidebar_mobile]',
    array(
        'default'           => $default_options['hide_global_sidebar_mobile'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[hide_global_sidebar_mobile]',
    array(
        'label'       => __( 'Hide Global Sidebar on Mobile', 'magxpress' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_section_seperator_archive_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magxpress_Seperator_Control(
        $wp_customize,
        'magxpress_section_seperator_archive_1',
        array(
            'settings' => 'magxpress_section_seperator_archive_1',
            'section' => 'archive_options',
        )
    )
);

/* Archive Style */
$wp_customize->add_setting(
    'magxpress_options[archive_style]',
    array(
        'default'           => $default_options['archive_style'],
        'sanitize_callback' => 'magxpress_sanitize_radio',
    )
);
$wp_customize->add_control(
    new Magxpress_Radio_Image_Control(
        $wp_customize,
        'magxpress_options[archive_style]',
        array(
            'label'	=> __( 'Archive Style', 'magxpress' ),
            'section' => 'archive_options',
            'choices' => magxpress_get_archive_layouts()
        )
    )
);

$wp_customize->add_setting(
    'magxpress_section_seperator_archive_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magxpress_Seperator_Control(
        $wp_customize,
        'magxpress_section_seperator_archive_2',
        array(
            'settings' => 'magxpress_section_seperator_archive_2',
            'section' => 'archive_options',
        )
    )
);

/* Archive Meta */
$wp_customize->add_setting(
    'magxpress_options[archive_post_meta_1]',
    array(
        'default'           => $default_options['archive_post_meta_1'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox_multiple',
    )
);
$wp_customize->add_control(
    new Magxpress_Checkbox_Multiple(
        $wp_customize,
        'magxpress_options[archive_post_meta_1]',
        array(
            'label'	=> __( 'Archive Post Meta', 'magxpress' ),
            'description'	=> __( 'Please select which post meta data you would like to appear on the listings for archived posts.', 'magxpress' ),
            'section' => 'archive_options',
            'choices' => array(
                'author' => __( 'Author', 'magxpress' ),
                'date' => __( 'Date', 'magxpress' ),
                'comment' => __( 'Comment', 'magxpress' ),
                'category' => __( 'Category', 'magxpress' ),
                'tags' => __( 'Tags', 'magxpress' ),
            ),
            'active_callback' => 'magxpress_archive_poost_meta_1',
        )

    )
);
/* Archive Meta */
$wp_customize->add_setting(
    'magxpress_options[archive_post_meta_2]',
    array(
        'default'           => $default_options['archive_post_meta_2'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox_multiple',
    )
);
$wp_customize->add_control(
    new Magxpress_Checkbox_Multiple(
        $wp_customize,
        'magxpress_options[archive_post_meta_2]',
        array(
            'label' => __( 'Archive Post Meta', 'magxpress' ),
            'description'   => __( 'Please select which post meta data you would like to appear on the listings for archived posts.', 'magxpress' ),
            'section' => 'archive_options',
            'choices' => array(
                'author' => __( 'Author', 'magxpress' ),
                'date' => __( 'Date', 'magxpress' ),
                'category' => __( 'Category', 'magxpress' ),
            ),
            'active_callback' => 'magxpress_archive_poost_meta_2',

        )
    )
);

/* Archive Meta */
$wp_customize->add_setting(
    'magxpress_options[archive_post_meta_3]',
    array(
        'default'           => $default_options['archive_post_meta_3'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox_multiple',
    )
);
$wp_customize->add_control(
    new Magxpress_Checkbox_Multiple(
        $wp_customize,
        'magxpress_options[archive_post_meta_3]',
        array(
            'label' => __( 'Archive Post Meta', 'magxpress' ),
            'description'   => __( 'Please select which post meta data you would like to appear on the listings for archived posts.', 'magxpress' ),
            'section' => 'archive_options',
            'choices' => array(
                'author' => __( 'Author', 'magxpress' ),
                'date' => __( 'Date', 'magxpress' ),
                'category' => __( 'Category', 'magxpress' ),
            ),
            'active_callback' => 'magxpress_archive_poost_meta_3',

        )
    )
);

/* Archive Meta */
$wp_customize->add_setting(
    'magxpress_options[archive_post_meta_4]',
    array(
        'default'           => $default_options['archive_post_meta_4'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox_multiple',
    )
);
$wp_customize->add_control(
    new Magxpress_Checkbox_Multiple(
        $wp_customize,
        'magxpress_options[archive_post_meta_4]',
        array(
            'label' => __( 'Archive Post Meta', 'magxpress' ),
            'description'   => __( 'Please select which post meta data you would like to appear on the listings for archived posts.', 'magxpress' ),
            'section' => 'archive_options',
            'choices' => array(
                'category' => __( 'Category', 'magxpress' ),
            ),
            'active_callback' => 'magxpress_archive_poost_meta_4',

        )
    )
);

$wp_customize->add_setting(
    'magxpress_section_seperator_archive_3',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magxpress_Seperator_Control(
        $wp_customize,
        'magxpress_section_seperator_archive_3',
        array(
            'settings' => 'magxpress_section_seperator_archive_3',
            'section' => 'archive_options',
        )
    )
);

$wp_customize->add_setting('magxpress_options[excerpt_length]',
    array(
        'default'           => $default_options['excerpt_length'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'magxpress_sanitize_number_range',
    )
);
$wp_customize->add_control('magxpress_options[excerpt_length]',
    array(
        'label'       => esc_html__('Excerpt Length', 'magxpress'),
        'description'       => esc_html__( 'Max number of words. Set it to 0 to disable. (step-1)', 'magxpress' ),
        'section'     => 'archive_options',
        'type'        => 'range',
        'input_attrs' => array(
                       'min'   => 0,
                       'max'   => 100,
                       'step'   => 1,
                    ),
    )
);

$wp_customize->add_setting(
    'magxpress_options[enable_excerpt_read_more]',
    array(
        'default'           => $default_options['enable_excerpt_read_more'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_excerpt_read_more]',
    array(
        'label'       => __( 'Enable Read More on Excerpt', 'magxpress' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_options[excerpt_read_more]',
    array(
        'default'           => $default_options['excerpt_read_more'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magxpress_options[excerpt_read_more]',
    array(
        'label'    => __( 'Excerpt Readmore Button Text', 'magxpress' ),
        'section'  => 'archive_options',
        'type'     => 'text',
    )
);