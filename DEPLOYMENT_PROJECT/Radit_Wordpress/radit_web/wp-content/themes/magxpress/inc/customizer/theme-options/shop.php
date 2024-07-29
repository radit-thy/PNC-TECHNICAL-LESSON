<?php
$wp_customize->add_section(
    'home_page_shop_option',
    array(
        'title'      => __( 'Shop  Section Options', 'magxpress' ),
        'panel'      => 'theme_home_option_panel',
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'magxpress_options[enable_shop_section]',
    array(
        'default'           => $default_options['enable_shop_section'],
        'sanitize_callback' => 'magxpress_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'magxpress_options[enable_shop_section]',
    array(
        'label'   => __( 'Enable Shop Section', 'magxpress' ),
        'section' => 'home_page_shop_option',
        'type'    => 'checkbox',
    )
);

$wp_customize->add_setting(
    'magxpress_options[shop_post_title]',
    array(
        'default'           => $default_options['shop_post_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magxpress_options[shop_post_title]',
    array(
        'label'    => __( 'Shop Post Title', 'magxpress' ),
        'section'  => 'home_page_shop_option',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'magxpress_options[shop_post_description]',
    array(
        'default'           => $default_options['shop_post_description'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magxpress_options[shop_post_description]',
    array(
        'label'    => __( 'Shop Post Description', 'magxpress' ),
        'section'  => 'home_page_shop_option',
        'type'     => 'textarea',
    )
);

$wp_customize->add_setting(
    'magxpress_options[shop_select_product_from]',
    array(
        'default'           => $default_options['shop_select_product_from'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[shop_select_product_from]',
    array(
        'label'       => __( 'Select Product From', 'magxpress' ),
        'section'     => 'home_page_shop_option',
        'type'        => 'select',
        'choices' => array(
            'custom'            => __('Custom Select', 'magxpress'),
            'recent-products'   => __('Recent Products', 'magxpress'),
            'popular-products'  => __('Popular Products', 'magxpress'),
            'sale-products'     => __('Sale Products', 'magxpress'),
        )
    )
);


$wp_customize->add_setting(
    'magxpress_options[select_product_category]',
    array(
        'default'           => $default_options['select_product_category'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[select_product_category]',
    array(
        'label'   => __( 'Select Product Category', 'magxpress' ),
        'section' => 'home_page_shop_option',
        'type'        => 'select',
        'choices'     => magxpress_woocommerce_product_cat(),
        'active_callback' => 'magxpress_shop_select_product_from'
    )
);

$wp_customize->add_setting(
    'magxpress_options[shop_number_of_column]',
    array(
        'default'           => $default_options['shop_number_of_column'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[shop_number_of_column]',
    array(
        'label'       => __( 'Select Number Of Column', 'magxpress' ),
        'section'     => 'home_page_shop_option',
        'type'        => 'select',
        'choices' => array(
            '2'  => __('2', 'magxpress'),
            '3'  => __('3', 'magxpress'),
            '4'  => __('4', 'magxpress'),
        )
    )
);

$wp_customize->add_setting(
    'magxpress_options[shop_number_of_product]',
    array(
        'default'           => $default_options['shop_number_of_product'],
        'sanitize_callback' => 'magxpress_sanitize_select',
    )
);
$wp_customize->add_control(
    'magxpress_options[shop_number_of_product]',
    array(
        'label'       => __( 'Select Number Of Product', 'magxpress' ),
        'section'     => 'home_page_shop_option',
        'type'        => 'select',
        'choices' => array(
            '2'  => __('2', 'magxpress'),
            '3'  => __('3', 'magxpress'),
            '4'  => __('4', 'magxpress'),
            '5'  => __('5', 'magxpress'),
            '6'  => __('6', 'magxpress'),
            '7'  => __('7', 'magxpress'),
            '8'  => __('8', 'magxpress'),
            '9'  => __('9', 'magxpress'),
            '10'  => __('10', 'magxpress'),
            '11'  => __('11', 'magxpress'),
            '12'  => __('12', 'magxpress'),
        )
    )
);

$wp_customize->add_setting(
    'magxpress_options[shop_post_button_text]',
    array(
        'default'           => $default_options['shop_post_button_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'magxpress_options[shop_post_button_text]',
    array(
        'label'    => __( 'Shop section Button Text', 'magxpress' ),
        'section'  => 'home_page_shop_option',
        'type'     => 'text',
    )
);
$wp_customize->add_setting(
    'magxpress_options[shop_post_button_url]',
    array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'magxpress_options[shop_post_button_url]',
    array(
        'label'           => __( 'Button Link', 'magxpress' ),
        'section'         => 'home_page_shop_option',
        'type'            => 'text',
        'description'     => __( 'Leave empty if you don\'t want the image to have a link', 'magxpress' ),
    )
);