<?php
/*Header Options*/
$wp_customize->add_section(
    'general_settings' ,
    array(
        'title' => __( 'General Settings', 'magxpress' ),
        'panel' => 'magxpress_option_panel',
    )
);

/*Show Preloader*/
$wp_customize->add_setting(
    'magxpress_options[show_lightbox_image]',
    array(
        'default'           => $default_options['show_lightbox_image'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[show_lightbox_image]',
    array(
        'label'    => __( 'Show LightBox Image', 'magxpress' ),
        'section'  => 'general_settings',
        'type'     => 'checkbox',
    )
);


$wp_customize->add_setting(
    'magxpress_options[enable_cursor_dot_outline]',
    array(
        'default' => $default_options['enable_cursor_dot_outline'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_cursor_dot_outline]',
    array(
        'label' => esc_html__('Enable Cursor Dot Outline', 'magxpress'),
        'section' => 'general_settings',
        'type' => 'checkbox',
    )
);
