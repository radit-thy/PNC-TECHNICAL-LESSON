<?php
/*Featured Options*/
$wp_customize->add_section(
    'featured_post_options' ,
    array(
        'title' => __( 'Featured News Options', 'magxpress' ),
        'panel' => 'magxpress_option_panel',
    )
);

$wp_customize->add_setting(
    'magxpress_options[enable_featured_news_post]',
    array(
        'default' => $default_options['enable_featured_news_post'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_featured_news_post]',
    array(
        'label' => esc_html__('Enable Featured/News Post', 'magxpress'),
        'section' => 'featured_post_options',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_options[featured_news_post_category]',
    array(
        'default'           => $default_options['featured_news_post_category'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(new Magxpress_Dropdown_Taxonomies_Control(
    $wp_customize, 
    'magxpress_options[featured_news_post_category]',
        array(
            'label'           => esc_html__('Featured/News Post Category', 'magxpress'),
            'section'         => 'featured_post_options',
        )
    )
);

$wp_customize->add_setting(
    'magxpress_options[enable_featured_news_counter]',
    array(
        'default' => $default_options['enable_featured_news_counter'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_featured_news_counter]',
    array(
        'label' => esc_html__('Enable Featured/News Counter', 'magxpress'),
        'section' => 'featured_post_options',
        'type' => 'checkbox',
    )
);
