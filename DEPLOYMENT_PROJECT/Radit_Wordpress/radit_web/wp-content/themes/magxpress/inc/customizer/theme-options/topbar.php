<?php
$wp_customize->add_section(
   'topbar_options' ,
    array(
        'title' => __( 'Topbar Options', 'magxpress' ),
        'panel' => 'magxpress_option_panel',
    )
);

/*Enable Top Bar*/
$wp_customize->add_setting(
    'magxpress_options[enable_top_bar]',
    array(
        'default'           => $default_options['enable_top_bar'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_top_bar]',
    array(
        'label'    => __( 'Enable Top Bar', 'magxpress' ),
        'section'  => 'topbar_options',
        'type'     => 'checkbox',
    )
);

/*Hide Top Bar on Mobile*/
$wp_customize->add_setting(
    'magxpress_options[hide_topbar_on_mobile]',
    array(
        'default'           => $default_options['hide_topbar_on_mobile'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[hide_topbar_on_mobile]',
    array(
        'label'    => __( 'Hide Top Bar on Mobile', 'magxpress' ),
        'section'  => 'topbar_options',
        'type'     => 'checkbox',
        'active_callback'  => 'magxpress_is_top_bar_enabled'
    )
);

/*Enable Top Social Nav*/
$wp_customize->add_setting(
    'magxpress_options[enable_topbar_social_icons]',
    array(
        'default'           => $default_options['enable_topbar_social_icons'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_topbar_social_icons]',
    array(
        'label'    => __( 'Enable Top Bar Social Nav Menu', 'magxpress' ),
        'description' => sprintf( __( 'You can add/edit social nav menu from <a href="%s">here</a>.', 'magxpress' ), "javascript:wp.customize.control( 'nav_menu_locations[social-menu]' ).focus();" ),
        'section'  => 'topbar_options',
        'type'     => 'checkbox',
        'active_callback'  => 'magxpress_is_top_bar_enabled'
    )
);

/*Enable Search*/
$wp_customize->add_setting(
    'magxpress_options[enable_search_on_header]',
    array(
        'default'           => $default_options['enable_search_on_header'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_search_on_header]',
    array(
        'label'    => __( 'Enable Search Icon', 'magxpress' ),
        'section'  => 'topbar_options',
        'type'     => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_section_seperator_header_3',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magxpress_Seperator_Control(
        $wp_customize,
        'magxpress_section_seperator_header_3',
        array(
            'settings' => 'magxpress_section_seperator_header_3',
            'section' => 'topbar_options',
        )
    )
);

$wp_customize->add_setting(
    'magxpress_options[enable_random_post]',
    array(
        'default' => $default_options['enable_random_post'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_random_post]',
    array(
        'label' => esc_html__('Enable Random Post', 'magxpress'),
        'section' => 'topbar_options',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_options[random_post_category]',
    array(
        'default'           => $default_options['random_post_category'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(new Magxpress_Dropdown_Taxonomies_Control(
    $wp_customize, 
    'magxpress_options[random_post_category]',
        array(
            'label'           => esc_html__('Random Post Category', 'magxpress'),
            'section'         => 'topbar_options',
        )
    )
);


/*Enable Today's Date*/
$wp_customize->add_setting(
    'magxpress_options[enable_header_date]',
    array(
        'default'           => $default_options['enable_header_date'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_header_date]',
    array(
        'label'    => __( 'Enable Today\'s Date', 'magxpress' ),
        'section'  => 'topbar_options',
        'type'     => 'checkbox',
        'active_callback'  => 'magxpress_is_top_bar_enabled'
    )
);

/*Todays Date Format*/
$wp_customize->add_setting(
    'magxpress_options[todays_date_format]',
    array(
        'default'           => $default_options['todays_date_format'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magxpress_options[todays_date_format]',
    array(
        'label'    => __( 'Today\'s Date Format', 'magxpress' ),
        'description' => sprintf( wp_kses( __( '<a href="%s" target="_blank">Date and Time Formatting Documentation</a>.', 'magxpress' ), array(  'a' => array( 'href' => array(), 'target' => array() ) ) ), esc_url( 'https://wordpress.org/support/article/formatting-date-and-time' ) ),
        'section'  => 'topbar_options',
        'type'     => 'text',
        'active_callback'  =>  function( $control ) {
            return (
                magxpress_is_top_bar_enabled( $control )
                &&
                magxpress_is_todays_date_enabled( $control )
            );
        }
    )
);


/*Top Bar background Color*/
$wp_customize->add_setting(
    'magxpress_options[top_bar_bg_color]',
    array(
        'default' => $default_options['top_bar_bg_color'],
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'magxpress_options[top_bar_bg_color]',
        array(
            'label' => __('Top Bar Background Color', 'magxpress'),
            'section' => 'topbar_options',
            'type' => 'color',
            'active_callback'  => 'magxpress_is_top_bar_enabled'
        )
    )
);

$wp_customize->add_setting(
    'magxpress_options[top_bar_text_color]',
    array(
        'default' => $default_options['top_bar_text_color'],
        'sanitize_callback' => 'sanitize_hex_color',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'magxpress_options[top_bar_text_color]',
        array(
            'label' => __('Top Bar Text Color', 'magxpress'),
            'section' => 'topbar_options',
            'type' => 'color',
            'active_callback'  => 'magxpress_is_top_bar_enabled'
        )
    )
);

/* ========== Progressbar Section. ==========*/
$wp_customize->add_section(
    'progressbar_options',
    array(
        'title' => __( 'Progressbar Options', 'magxpress' ),
        'panel' => 'magxpress_option_panel',
    )
);
/*Show progressbar*/
$wp_customize->add_setting(
    'magxpress_options[show_progressbar]',
    array(
        'default'           => $default_options['show_progressbar'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[show_progressbar]',
    array(
        'label'   => __( 'Show Progressbar', 'magxpress' ),
        'section' => 'progressbar_options',
        'type'    => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_options[progressbar_position]',
    array(
        'default'           => $default_options['progressbar_position'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[progressbar_position]',
    array(
        'label'           => __( 'Progressbar Position', 'magxpress' ),
        'section'         => 'progressbar_options',
        'type'            => 'select',
        'choices'         => array(
            'top'    => __( 'Top', 'magxpress' ),
            'bottom' => __( 'Bottom of the browser window', 'magxpress' ),
        ),
        'active_callback' => 'magxpress_is_progressbar_enabled',
    )
);

$wp_customize->add_setting(
    'magxpress_options[progressbar_color]',
    array(
        'default'           => $default_options['progressbar_color'],
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'magxpress_options[progressbar_color]',
        array(
            'label'           => __( 'Progressbar Color', 'magxpress' ),
            'section'         => 'progressbar_options',
            'type'            => 'color',
            'active_callback' => 'magxpress_is_progressbar_enabled',
        )
    )
);