<?php
/**/
$wp_customize->add_section(
    'read_more_post_section',
    array(
        'title'      => __( 'Read More Post', 'magxpress' ),
        'panel'      => 'theme_home_option_panel',
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'magxpress_options[enable_read_more_post_section]',
    array(
        'default'           => $default_options['enable_read_more_post_section'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_read_more_post_section]',
    array(
        'label'   => __( 'Enable Read More Post Section', 'magxpress' ),
        'section' => 'read_more_post_section',
        'type'    => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_options[read_more_post_title]',
    array(
        'default'           => $default_options['read_more_post_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magxpress_options[read_more_post_title]',
    array(
        'label'    => __( 'Read More Posts Title', 'magxpress' ),
        'section'  => 'read_more_post_section',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'magxpress_options[flip_read_more_post_section]',
    array(
        'default'           => $default_options['flip_read_more_post_section'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[flip_read_more_post_section]',
    array(
        'label'   => __( 'Flip Read More Post Section', 'magxpress' ),
        'section' => 'read_more_post_section',
        'type'    => 'checkbox',
    )
);



$wp_customize->add_setting(
    'magxpress_options[select_cat_for_read_more_post]',
    array(
        'default'           => $default_options['select_cat_for_read_more_post'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[select_cat_for_read_more_post]',
    array(
        'label'   => __( 'Choose Read More Grid Post Category', 'magxpress' ),
        'section' => 'read_more_post_section',
            'type'        => 'select',
        'choices'     => magxpress_post_category_list(),
    )
);


$wp_customize->add_setting(
    'magxpress_options[select_cat_for_read_more_list_post]',
    array(
        'default'           => $default_options['select_cat_for_read_more_list_post'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[select_cat_for_read_more_list_post]',
    array(
        'label'   => __( 'Choose Read More List Post Category', 'magxpress' ),
        'section' => 'read_more_post_section',
            'type'        => 'select',
        'choices'     => magxpress_post_category_list(),
    )
);

$wp_customize->add_setting(
    'magxpress_options[read_more_style]',
    array(
        'default'           => $default_options['read_more_style'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[read_more_style]',
    array(
        'label'       => __( 'Select Style', 'magxpress' ),
        'section'     => 'read_more_post_section',
        'type'        => 'select',
        'choices'     => array(
            'style-1' => __( 'Style 1', 'magxpress' ),
            'style-2' => __( 'Style 2', 'magxpress' ),
        ),
    )
);


$wp_customize->add_setting(
    'magxpress_options[enable_date_meta]',
    array(
        'default'           => $default_options['enable_date_meta'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_date_meta]',
    array(
        'label'   => __( 'Enable Date Meta', 'magxpress' ),
        'section' => 'read_more_post_section',
        'type'    => 'checkbox',
    )
);

