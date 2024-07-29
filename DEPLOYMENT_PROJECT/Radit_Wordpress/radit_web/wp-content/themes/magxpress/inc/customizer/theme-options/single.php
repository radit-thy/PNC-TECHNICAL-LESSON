<?php

$wp_customize->add_section(
    'single_options' ,
    array(
        'title' => __( 'Single Options', 'magxpress' ),
        'panel' => 'magxpress_option_panel',
    )
);

/* Global Layout*/
$wp_customize->add_setting(
    'magxpress_options[single_sidebar_layout]',
    array(
        'default'           => $default_options['single_sidebar_layout'],
        'sanitize_callback' => 'magxpress_sanitize_radio',
    )
);
$wp_customize->add_control(
    new Magxpress_Radio_Image_Control(
        $wp_customize,
        'magxpress_options[single_sidebar_layout]',
        array(
            'label' => __( 'Single Sidebar Layout', 'magxpress' ),
            'section' => 'single_options',
            'choices' => magxpress_get_general_layouts()
        )
    )
);

// Hide Side Bar on Mobile
$wp_customize->add_setting(
    'magxpress_options[hide_single_sidebar_mobile]',
    array(
        'default'           => $default_options['hide_single_sidebar_mobile'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[hide_single_sidebar_mobile]',
    array(
        'label'       => __( 'Hide Single Sidebar on Mobile', 'magxpress' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_section_seperator_single_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magxpress_Seperator_Control(
        $wp_customize,
        'magxpress_section_seperator_single_1',
        array(
            'settings' => 'magxpress_section_seperator_single_1',
            'section'       => 'single_options',
        )
    )
);

/* Post Meta */
$wp_customize->add_setting(
    'magxpress_options[single_post_meta]',
    array(
        'default'           => $default_options['single_post_meta'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox_multiple',
    )
);
$wp_customize->add_control(
    new Magxpress_Checkbox_Multiple(
        $wp_customize,
        'magxpress_options[single_post_meta]',
        array(
            'label' => __( 'Single Post Meta', 'magxpress' ),
            'description'   => __( 'Choose the post meta you want to be displayed on post detail page', 'magxpress' ),
            'section' => 'single_options',
            'choices' => array(
                'author' => __( 'Author', 'magxpress' ),
                'date' => __( 'Date', 'magxpress' ),
                'comment' => __( 'Comment', 'magxpress' ),
                'category' => __( 'Category', 'magxpress' ),
                'tags' => __( 'Tags', 'magxpress' ),
            )
        )
    )
);



$wp_customize->add_setting(
    'magxpress_section_seperator_single_5',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magxpress_Seperator_Control(
        $wp_customize,
        'magxpress_section_seperator_single_5',
        array(
            'settings' => 'magxpress_section_seperator_single_5',
            'section'       => 'single_options',
        )
    )
);


$wp_customize->add_setting(
    'magxpress_options[show_sticky_article_navigation]',
    array(
        'default'           => $default_options['show_sticky_article_navigation'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[show_sticky_article_navigation]',
    array(
        'label'    => __( 'Show Sticky Article Navigation', 'magxpress' ),
        'section'  => 'single_options',
        'type'     => 'checkbox',
    )
);

/*Show Author Info Box start
*-------------------------------*/
$wp_customize->add_setting(
    'magxpress_section_seperator_single_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magxpress_Seperator_Control(
        $wp_customize,
        'magxpress_section_seperator_single_2',
        array(
            'settings' => 'magxpress_section_seperator_single_2',
            'section'       => 'single_options',
        )
    )
);

$wp_customize->add_setting(
    'magxpress_options[show_author_info]',
    array(
        'default'           => $default_options['show_author_info'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[show_author_info]',
    array(
        'label'    => __( 'Show Author Info Box', 'magxpress' ),
        'section'  => 'single_options',
        'type'     => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_section_seperator_single_3',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magxpress_Seperator_Control(
        $wp_customize,
        'magxpress_section_seperator_single_3',
        array(
            'settings' => 'magxpress_section_seperator_single_3',
            'section'       => 'single_options',
        )
    )
);

/*Show Related Posts
*-------------------------------*/
$wp_customize->add_setting(
    'magxpress_options[show_related_posts]',
    array(
        'default'           => $default_options['show_related_posts'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[show_related_posts]',
    array(
        'label'    => __( 'Show Related Posts', 'magxpress' ),
        'section'  => 'single_options',
        'type'     => 'checkbox',
    )
);

/*Related Posts Text.*/
$wp_customize->add_setting(
    'magxpress_options[related_posts_text]',
    array(
        'default'           => $default_options['related_posts_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magxpress_options[related_posts_text]',
    array(
        'label'    => __( 'Related Posts Text', 'magxpress' ),
        'section'  => 'single_options',
        'type'     => 'text',
        'active_callback' => 'magxpress_is_related_posts_enabled',
    )
);

/* Number of Related Posts */
$wp_customize->add_setting(
    'magxpress_options[no_of_related_posts]',
    array(
        'default'           => $default_options['no_of_related_posts'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magxpress_options[no_of_related_posts]',
    array(
        'label'       => __( 'Number of Related Posts', 'magxpress' ),
        'section'     => 'single_options',
        'type'        => 'number',
        'active_callback' => 'magxpress_is_related_posts_enabled',
    )
);

/*Related Posts Orderby*/
$wp_customize->add_setting(
    'magxpress_options[related_posts_orderby]',
    array(
        'default'           => $default_options['related_posts_orderby'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[related_posts_orderby]',
    array(
        'label'       => __( 'Orderby', 'magxpress' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices' => array(
            'date' => __('Date', 'magxpress'),
            'id' => __('ID', 'magxpress'),
            'title' => __('Title', 'magxpress'),
            'rand' => __('Random', 'magxpress'),
        ),
        'active_callback' => 'magxpress_is_related_posts_enabled',
    )
);

/*Related Posts Order*/
$wp_customize->add_setting(
    'magxpress_options[related_posts_order]',
    array(
        'default'           => $default_options['related_posts_order'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[related_posts_order]',
    array(
        'label'       => __( 'Order', 'magxpress' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices' => array(
            'asc' => __('ASC', 'magxpress'),
            'desc' => __('DESC', 'magxpress'),
        ),
        'active_callback' => 'magxpress_is_related_posts_enabled',
    )
);

$wp_customize->add_setting(
    'magxpress_section_seperator_single_4',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magxpress_Seperator_Control(
        $wp_customize,
        'magxpress_section_seperator_single_4',
        array(
            'settings' => 'magxpress_section_seperator_single_4',
            'section'       => 'single_options',
        )
    )
);
/*Show Author Posts
*-----------------------------------------*/
$wp_customize->add_setting(
    'magxpress_options[show_author_posts]',
    array(
        'default'           => $default_options['show_author_posts'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[show_author_posts]',
    array(
        'label'    => __( 'Show Author Posts', 'magxpress' ),
        'section'  => 'single_options',
        'type'     => 'checkbox',
    )
);

/*Author Posts Text.*/
$wp_customize->add_setting(
    'magxpress_options[author_posts_text]',
    array(
        'default'           => $default_options['author_posts_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magxpress_options[author_posts_text]',
    array(
        'label'    => __( 'Author Posts Text', 'magxpress' ),
        'section'  => 'single_options',
        'type'     => 'text',
        'active_callback' => 'magxpress_is_author_posts_enabled',
    )
);

/* Number of Author Posts */
$wp_customize->add_setting(
    'magxpress_options[no_of_author_posts]',
    array(
        'default'           => $default_options['no_of_author_posts'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magxpress_options[no_of_author_posts]',
    array(
        'label'       => __( 'Number of Author Posts', 'magxpress' ),
        'section'     => 'single_options',
        'type'        => 'number',
        'active_callback' => 'magxpress_is_author_posts_enabled',
    )
);

/*Author Posts Orderby*/
$wp_customize->add_setting(
    'magxpress_options[author_posts_orderby]',
    array(
        'default'           => $default_options['author_posts_orderby'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[author_posts_orderby]',
    array(
        'label'       => __( 'Orderby', 'magxpress' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices' => array(
            'date' => __('Date', 'magxpress'),
            'id' => __('ID', 'magxpress'),
            'title' => __('Title', 'magxpress'),
            'rand' => __('Random', 'magxpress'),
        ),
        'active_callback' => 'magxpress_is_author_posts_enabled',
    )
);

/*Author Posts Order*/
$wp_customize->add_setting(
    'magxpress_options[author_posts_order]',
    array(
        'default'           => $default_options['author_posts_order'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[author_posts_order]',
    array(
        'label'       => __( 'Order', 'magxpress' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices' => array(
            'asc' => __('ASC', 'magxpress'),
            'desc' => __('DESC', 'magxpress'),
        ),
        'active_callback' => 'magxpress_is_author_posts_enabled',
    )
);