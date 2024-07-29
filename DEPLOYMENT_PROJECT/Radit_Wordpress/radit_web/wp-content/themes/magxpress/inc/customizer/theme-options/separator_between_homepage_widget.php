<?php
/**/
$wp_customize->add_section(
    'widget_separator_section',
    array(
        'title'      => __( 'Widget Separator with Post', 'magxpress' ),
        'panel'      => 'theme_home_option_panel',
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'magxpress_options[enable_widget_separator_section]',
    array(
        'default'           => $default_options['enable_widget_separator_section'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_widget_separator_section]',
    array(
        'label'   => __( 'Enable widget Separator Post Section', 'magxpress' ),
        'section' => 'widget_separator_section',
        'type'    => 'checkbox',
    )
);


$wp_customize->add_setting(
    'magxpress_options[select_cat_for_widget_separator_section]',
    array(
        'default'           => $default_options['select_cat_for_widget_separator_section'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[select_cat_for_widget_separator_section]',
    array(
        'label'   => __( 'Choose Widget Separator Post Category', 'magxpress' ),
        'section' => 'widget_separator_section',
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
        'section' => 'widget_separator_section',
        'type'    => 'checkbox',
    )
);
