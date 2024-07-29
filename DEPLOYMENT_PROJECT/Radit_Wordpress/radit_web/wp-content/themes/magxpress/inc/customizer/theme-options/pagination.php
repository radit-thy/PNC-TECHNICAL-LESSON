<?php
$wp_customize->add_section(
    'pagination_options' ,
    array(
        'title' => __( 'Pagination Options', 'magxpress' ),
        'panel' => 'magxpress_option_panel',
    )
);

/* Pagination Type*/
$wp_customize->add_setting(
    'magxpress_options[pagination_type]',
    array(
        'default'           => $default_options['pagination_type'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[pagination_type]',
    array(
        'label'       => __( 'Pagination Type', 'magxpress' ),
        'section'     => 'pagination_options',
        'type'        => 'select',
        'choices'     => array(
            'default' => __( 'Default (Older / Newer Post)', 'magxpress' ),
            'numeric' => __( 'Numeric', 'magxpress' ),
            'ajax_load_on_click' => __( 'Load more post on click', 'magxpress' ),
            'ajax_load_on_scroll' => __( 'Load more posts on scroll', 'magxpress' ),
        ),
    )
);
