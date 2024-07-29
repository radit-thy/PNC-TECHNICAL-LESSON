<?php
/**/
$wp_customize->add_section(
    'top_widget_section',
    array(
        'title'      => __( 'Top Widget Area', 'magxpress' ),
        'panel'      => 'theme_home_option_panel',
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'magxpress_options[enable_top_widget_area]',
    array(
        'default'           => $default_options['enable_top_widget_area'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_top_widget_area]',
    array(
        'label'   => __( 'Enable Top widget Section', 'magxpress' ),
        'section' => 'top_widget_section',
        'type'    => 'checkbox',
    )
);

/* Section Background Color*/
$wp_customize->add_setting(
    'magxpress_options[top_widgetarea_bgcolor]',
    array(
        'default' => $default_options['top_widgetarea_bgcolor'],
        'sanitize_callback' => 'sanitize_hex_color',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'magxpress_options[top_widgetarea_bgcolor]',
        array(
            'label' => __('Section Background Color', 'magxpress'),
            'section' => 'top_widget_section',
            'type' => 'color',
        )
    )
);


$wp_customize->add_setting(
    'magxpress_options[top_widgetarea_textcolor]',
    array(
        'default' => $default_options['top_widgetarea_textcolor'],
        'sanitize_callback' => 'sanitize_hex_color',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'magxpress_options[top_widgetarea_textcolor]',
        array(
            'label' => __('Section Text Color', 'magxpress'),
            'section' => 'top_widget_section',
            'type' => 'color',
        )
    )
);