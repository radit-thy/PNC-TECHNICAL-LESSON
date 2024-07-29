<?php
/**/
$wp_customize->add_section(
    'article_with_separator_post_section',
    array(
        'title'      => __( 'Article With Separator Post', 'magxpress' ),
        'panel'      => 'theme_home_option_panel',
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'magxpress_options[enable_article_with_separator_post_section]',
    array(
        'default'           => $default_options['enable_article_with_separator_post_section'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_article_with_separator_post_section]',
    array(
        'label'   => __( 'Enable Article With Separator Post Section', 'magxpress' ),
        'section' => 'article_with_separator_post_section',
        'type'    => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_options[article_with_separator_post_title]',
    array(
        'default'           => $default_options['article_with_separator_post_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magxpress_options[article_with_separator_post_title]',
    array(
        'label'    => __( 'Article With Separator Posts Title', 'magxpress' ),
        'section'  => 'article_with_separator_post_section',
        'type'     => 'text',
    )
);


$wp_customize->add_setting(
    'magxpress_options[select_cat_for_article_with_separator_post]',
    array(
        'default'           => $default_options['select_cat_for_article_with_separator_post'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[select_cat_for_article_with_separator_post]',
    array(
        'label'   => __( 'Choose Article With Separator Post Category', 'magxpress' ),
        'section' => 'article_with_separator_post_section',
            'type'        => 'select',
        'choices'     => magxpress_post_category_list(),
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
        'section' => 'article_with_separator_post_section',
        'type'    => 'checkbox',
    )
);
