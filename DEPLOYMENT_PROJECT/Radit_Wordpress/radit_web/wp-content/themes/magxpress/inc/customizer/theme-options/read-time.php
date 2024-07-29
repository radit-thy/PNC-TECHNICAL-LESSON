<?php
$widgets_link = admin_url( 'widgets.php' );

/*Add footer theme option*/
$wp_customize->add_section(
    'read_time_options' ,
    array(
        'title' => __( 'Read Time Options', 'magxpress' ),
        'panel' => 'magxpress_option_panel',
    )
);
$wp_customize->add_setting(
    'magxpress_options[enable_read_time_option]',
    array(
        'default'           => $default_options['enable_read_time_option'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_read_time_option]',
    array(
        'label'       => __( 'Enable Read Time Option', 'magxpress' ),
        'section'     => 'read_time_options',
        'type'        => 'checkbox',
    )
);

/*Display read time in*/
$wp_customize->add_setting(
    'magxpress_options[display_read_time_in]',
    array(
        'default'           => $default_options['display_read_time_in'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox_multiple',
    )
);
$wp_customize->add_control(
    new Magxpress_Checkbox_Multiple(
        $wp_customize,
        'magxpress_options[display_read_time_in]',
        array(
            'label' => __( 'Display Read Time', 'magxpress' ),
            'section' => 'read_time_options',
            'choices' => array(
                'home-page' => __('Homepage', 'magxpress'),
                'single-page' => __('Single Page', 'magxpress'),
                'archive-page' => __('Archive Page', 'magxpress'),
            )
        )
    )
);


$wp_customize->add_setting(
    'magxpress_options[words_per_minute]',
    array(
        'default' => $default_options['words_per_minute'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'magxpress_options[words_per_minute]',
    array(
        'label' => __('Words Per Minute', 'magxpress'),
        'description' => __('Number of Words per minut', 'magxpress'),
        'section' => 'read_time_options',
        'type' => 'number',
        'input_attrs' => array('min' => 1, 'max' => 300, 'style' => 'width: 150px;'),
    )
);
