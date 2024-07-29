<?php
/**/
$wp_customize->add_section(
    'fullwidth_widget_section',
    array(
        'title'      => __( 'FrontPage FullWidth Area: Bottom', 'magxpress' ),
        'panel'      => 'theme_home_option_panel',
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'magxpress_options[enable_fullwidth_widget_area]',
    array(
        'default'           => $default_options['enable_fullwidth_widget_area'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_fullwidth_widget_area]',
    array(
        'label'   => __( 'Enable Fullwidth widget Section', 'magxpress' ),
        'section' => 'fullwidth_widget_section',
        'type'    => 'checkbox',
    )
);

/* Section Background Color*/
$wp_customize->add_setting(
    'magxpress_options[fullwidth_bottom_widgetarea_bgcolor]',
    array(
        'default' => $default_options['fullwidth_bottom_widgetarea_bgcolor'],
        'sanitize_callback' => 'sanitize_hex_color',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'magxpress_options[fullwidth_bottom_widgetarea_bgcolor]',
        array(
            'label' => __('Section Background Color', 'magxpress'),
            'section' => 'fullwidth_widget_section',
            'type' => 'color',
        )
    )
);


$wp_customize->add_setting(
    'magxpress_options[fullwidth_bottom_widgetarea_textcolor]',
    array(
        'default' => $default_options['fullwidth_bottom_widgetarea_textcolor'],
        'sanitize_callback' => 'sanitize_hex_color',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'magxpress_options[fullwidth_bottom_widgetarea_textcolor]',
        array(
            'label' => __('Section Text Color', 'magxpress'),
            'section' => 'fullwidth_widget_section',
            'type' => 'color',
        )
    )
);
