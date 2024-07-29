<?php
/*Preloader Options*/
$wp_customize->add_section(
    'preloader_options' ,
    array(
        'title' => __( 'Preloader Options', 'magxpress' ),
        'panel' => 'magxpress_option_panel',
    )
);

/*Show Preloader*/
$wp_customize->add_setting(
    'magxpress_options[show_preloader]',
    array(
        'default'           => $default_options['show_preloader'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[show_preloader]',
    array(
        'label'    => __( 'Show Preloader', 'magxpress' ),
        'section'  => 'preloader_options',
        'type'     => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_options[preloader_style]',
    array(
        'default'           => $default_options['preloader_style'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[preloader_style]',
    array(
        'label'       => __( 'Preloader Style', 'magxpress' ),
        'section'     => 'preloader_options',
        'type'        => 'select',
        'choices'     => array(
            'theme-preloader-spinner-1' => __( 'Style 1', 'magxpress' ),
            'theme-preloader-spinner-2' => __( 'Style 2', 'magxpress' ),
        ),
        'active_callback' => 'magxpress_is_show_preloader',

    )
);
