<?php
$wp_customize->add_setting(
    'magxpress_options[enable_header_bg_overlay]',
    array(
        'default'           => $default_options['enable_header_bg_overlay'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_header_bg_overlay]',
    array(
        'label'    => __( 'Enable Image Overlay', 'magxpress' ),
        'section'  => 'header_image',
        'type'     => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_options[header_image_size]',
    array(
        'default'           => $default_options['header_image_size'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[header_image_size]',
    array(
        'label'       => __( 'Select Header Size', 'magxpress' ),
        'description' => __( 'Some options related to header may not show in the front-end based on header style chosen.', 'magxpress' ),

        'section'     => 'header_image',
        'type'        => 'select',
        'choices'     => array(
            'none' => __( 'Default', 'magxpress' ),
            'small' => __( 'Small', 'magxpress' ),
            'medium' => __( 'Medium', 'magxpress' ),
            'large' => __( 'Large', 'magxpress' ),
        ),
    )
);
/*Header Options*/
$wp_customize->add_section(
    'header_options' ,
    array(
        'title' => __( 'Header Options', 'magxpress' ),
        'panel' => 'magxpress_option_panel',
    )
);

$wp_customize->add_setting(
    'magxpress_section_seperator_header_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magxpress_Seperator_Control(
        $wp_customize,
        'magxpress_section_seperator_header_1',
        array(
            'settings' => 'magxpress_section_seperator_header_1',
            'section' => 'header_options',
        )
    )
);

$wp_customize->add_setting(
    'magxpress_options[upload_header_add_image]',
    array(
        'default'           => '',
        'sanitize_callback' => 'magxpress_sanitize_image',
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'magxpress_options[upload_header_add_image]',
        array(
            'label'           => __( 'Upload Header Advertisement Image', 'magxpress' ),
            'section'         => 'header_options',
        )
    )
);

$wp_customize->add_setting(
    'magxpress_options[ad_header_banner_link]',
    array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'magxpress_options[ad_header_banner_link]',
    array(
        'label'           => __( 'Advertisement Link', 'magxpress' ),
        'section'         => 'header_options',
        'type'            => 'text',
        'description'     => __( 'Leave empty if you don\'t want the image to have a link', 'magxpress' ),
    )
);

$wp_customize->add_setting(
    'magxpress_section_seperator_header_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magxpress_Seperator_Control(
        $wp_customize,
        'magxpress_section_seperator_header_2',
        array(
            'settings' => 'magxpress_section_seperator_header_2',
            'section' => 'header_options',
        )
    )
);

/*Enable Sticky Menu*/
$wp_customize->add_setting(
    'magxpress_options[enable_sticky_menu]',
    array(
        'default'           => $default_options['enable_sticky_menu'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_sticky_menu]',
    array(
        'label'    => __( 'Enable Sticky Menu', 'magxpress' ),
        'section'  => 'header_options',
        'type'     => 'checkbox',
    )
);


$wp_customize->add_setting(
    'magxpress_section_seperator_header_4',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Magxpress_Seperator_Control(
        $wp_customize,
        'magxpress_section_seperator_header_4',
        array(
            'settings' => 'magxpress_section_seperator_header_4',
            'section' => 'header_options',
        )
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
        'section'  => 'header_options',
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
            'section' => 'header_options',
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
        'section' => 'header_options',
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
            'section'         => 'header_options',
        )
    )
);


if(class_exists( 'WooCommerce' )){
    
    /*Enable Mini Cart Icon on header*/
    $wp_customize->add_setting(
        'magxpress_options[enable_mini_cart_header]',   
        array(
            'default'           => $default_options['enable_mini_cart_header'],
            'sanitize_callback' => 'magxpress_sanitize_checkbox',
        )
    );
    $wp_customize->add_control(
        'magxpress_options[enable_mini_cart_header]',
        array(
            'label'    => __( 'Enable Mini Cart Icon', 'magxpress' ),
            'section'  => 'header_options',
            'type'     => 'checkbox',
        )
    );

    /*Enable Myaccount Link*/
    $wp_customize->add_setting(
        'magxpress_options[enable_woo_my_account]',   
        array(
            'default'           => $default_options['enable_woo_my_account'],
            'sanitize_callback' => 'magxpress_sanitize_checkbox',
        )
    );
    $wp_customize->add_control(
        'magxpress_options[enable_woo_my_account]',
        array(
            'label'    => __( 'Enable My Account Icon', 'magxpress' ),
            'section'  => 'header_options',
            'type'     => 'checkbox',
        )
    );
}