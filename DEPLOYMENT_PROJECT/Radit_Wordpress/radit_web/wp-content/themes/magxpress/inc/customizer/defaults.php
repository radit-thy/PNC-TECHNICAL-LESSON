<?php
/**
 * Default customizer values.
 *
 * @package Magxpress
 */
if (!function_exists('magxpress_get_default_customizer_values')) :
    /**
     * Get default customizer values.
     *
     * @return array Default customizer values.
     * @since 1.0.0
     *
     */
    function magxpress_get_default_customizer_values()
    {

        $defaults = array();
        // header image section
        $defaults['enable_header_bg_overlay'] = false;
        $defaults['header_image_size'] = 'none';

        //Site title options
        $defaults['hide_title'] = false;
        $defaults['hide_tagline'] = false;
        $defaults['site_title_text_size'] = 44;
        $defaults['site_tagline_text_size'] = 16;

        // General options
        $defaults['show_lightbox_image'] = false;
        $defaults['enable_cursor_dot_outline'] = false;

        $defaults['show_preloader'] = true;
        $defaults['preloader_style'] = 'theme-preloader-spinner-2';
        $defaults['show_progressbar'] = false;
        $defaults['progressbar_position'] = 'bottom';
        $defaults['progressbar_color'] = '#f7775e';


        // header full page add
        $defaults['ed_header_ad'] = false;
        $defaults['ed_header_type'] = 'welcome-banner-default';
        $defaults['advertisement_section_title'] = esc_html__('Welcome Advertisement Message', 'magxpress');

        // Top bar.
        $defaults['enable_top_bar'] = true;
        $defaults['hide_topbar_on_mobile'] = false;

        $defaults['enable_header_date'] = true;
        $defaults['todays_date_format'] = 'l, F j Y';

        $defaults['enable_topbar_social_icons'] = true;

        $defaults['top_bar_bg_color'] = '#000000';
        $defaults['top_bar_text_color'] = '#fff';

        // Header
        $defaults['header_bg_color'] = '#000000';
        $defaults['enable_top_nav'] = true;

        $defaults['enable_random_post'] = true;
        $defaults['random_post_category'] = '';

        $defaults['enable_search_on_header'] = true;
        $defaults['header_search_btn_style'] = 'style_1';
        $defaults['enable_mini_cart_header'] = true;
        $defaults['enable_woo_my_account'] = true;
        $defaults['enable_sticky_menu'] = true;

        // Dark Mode.
        $defaults['enable_always_dark_mode'] = false;
        $defaults['enable_dark_mode'] = true;
        $defaults['enable_dark_mode_switcher'] = true;
        $defaults['dark_mode_accent_color'] = '#ED1B2F';
        $defaults['dark_mode_bg_color'] = '#1e1e1e';
        $defaults['dark_mode_text_color'] = '#ffffff';

        // ticker section
        $defaults['enable_ticker_post'] = true;
        $defaults['enable_ticker_post_image'] = true;
        $defaults['ticker_text'] = esc_html__('Breaking News', 'magxpress');
        $defaults['ticker_post_category'] = '';

        // tagged section
        $defaults['top_tagged_title'] = esc_html__('Top Tagged', 'magxpress');
        $defaults['show_top_tagged_section'] = true;
        $defaults['top_tagged_number'] = 8;

        $defaults['enable_featured_news_post'] = true;
        $defaults['enable_featured_news_counter'] = true;
        $defaults['featured_news_post_category'] = '';

        // shop page
        $defaults['enable_shop_section'] = true;
        $defaults['shop_post_title'] = __('Shop Now', 'magxpress');
        $defaults['shop_post_description'] = '';
        $defaults['shop_number_of_column'] = 4;
        $defaults['shop_number_of_product'] = 4;
        $defaults['shop_select_product_from'] = 'recent-products';
        $defaults['select_product_category'] = '';
        $defaults['shop_post_button_text'] = __('Shop Now', 'magxpress');

        // Front Page
        $defaults['front_page_enable_sidebar'] = false;
        $defaults['hide_front_page_sidebar_mobile'] = false;
        $defaults['front_page_layout'] = 'right-sidebar';

        $defaults['enable_top_widget_area'] = true;
        $defaults['top_widgetarea_bgcolor'] = '';
        $defaults['top_widgetarea_textcolor'] = '';



        $defaults['enable_3_column_widget_area'] = true;
        $defaults['three_column_widgetarea_bgcolor'] = '#ffffff';
        $defaults['three_column_widgetarea_textcolor'] = '#161616';


        $defaults['enable_2_column_widget_area'] = true;
        $defaults['two_column_widgetarea_bgcolor'] = '#ffffff';
        $defaults['two_column_widgetarea_textcolor'] = '#161616';


        $defaults['enable_fullwidth_widget_area'] = true;
        $defaults['fullwidth_bottom_widgetarea_bgcolor'] = '#ffffff';
        $defaults['fullwidth_bottom_widgetarea_textcolor'] = '#161616';


        // Front Page category
        $defaults['enable_category_section'] = false;
        $defaults['number_of_category'] = '3';
        $defaults['category_post_title'] = __('Category Section', 'magxpress');

        // front page slider section
        $defaults['enable_slider_section'] = true;
        $defaults['enable_slider_overlay'] = true;
        $defaults['slider_section_presentation_layout'] = 'site-swiper-layout-carousal';
        $defaults['banner_image_section'] = 'large';
        $defaults['number_of_slider_post_layout_1'] = '5';
        $defaults['number_of_slider_post_layout_2'] = '8';

        $defaults['slider_post_content_alignment'] = 'text-center';
        $defaults['slider_section_cat'] = '';
        $defaults['enable_slider_cat_meta'] = true;
        $defaults['enable_slider_post_description'] = false;
        $defaults['enable_slider_author_meta'] = false;
        $defaults['enable_slider_date_meta'] = true;

        // front page banner section
        $defaults['enable_banner_section'] = true;
        $defaults['banner_section_style'] = 'style-2';
        $defaults['banner_section_cat_style_1'] = '';
        $defaults['banner_section_cat_style_3'] = '';
        $defaults['banner_section_title_1'] = __('Trending Now', 'magxpress');
        $defaults['banner_section_cat_1'] = '';
        $defaults['banner_section_title_2'] = __('Featured', 'magxpress');
        $defaults['banner_section_cat_2'] = '';
        $defaults['banner_section_cat_list'] = '';
        $defaults['banner_section_cat_grid'] = '';
        $defaults['banner_section_title_3'] = __('Latest Update', 'magxpress');
        $defaults['banner_section_cat_3'] = '';
        $defaults['enable_banner_cat_meta'] = true;
        $defaults['enable_banner_author_meta'] = false;
        $defaults['enable_banner_date_meta'] = true;
        $defaults['enable_background_fix'] = false;
        $defaults['banner_bg_color'] = '#fff';
        $defaults['banner_text_color'] = '#fff';


        // front page read more section
        $defaults['enable_read_more_post_section'] = true;
        $defaults['flip_read_more_post_section'] = false;
        $defaults['read_more_post_title'] = __('More To Read', 'magxpress');
        $defaults['select_cat_for_read_more_post'] = '';
        $defaults['select_cat_for_read_more_list_post'] = '';
        $defaults['read_more_style'] = 'style-1';
        $defaults['enable_post_excerpt'] = true;
        $defaults['enable_date_meta'] = true;

        // article with separator
        $defaults['enable_article_with_separator_post_section'] = false;
        $defaults['article_with_separator_post_title'] = __('Article With Separator', 'magxpress');
        $defaults['select_cat_for_article_with_separator_post'] = '';
        $defaults['enable_date_meta'] = true;

        // article with separator
        $defaults['enable_widget_separator_section'] = false;
        $defaults['select_cat_for_widget_separator_section'] = '';
        $defaults['enable_date_meta'] = true;


        // archive options
        $defaults['global_sidebar_layout'] = 'right-sidebar';
        $defaults['hide_global_sidebar_mobile'] = false;
        $defaults['excerpt_length'] = 25;
        $defaults['enable_excerpt_read_more'] = true;
        $defaults['excerpt_read_more'] = __('[more...]', 'magxpress');


        // Single options
        $defaults['single_sidebar_layout'] = 'right-sidebar';
        $defaults['hide_single_sidebar_mobile'] = false;
        $defaults['single_post_meta'] = array('author', 'date', 'comment', 'category', 'tags');

        $defaults['show_author_info'] = true;
        $defaults['show_sticky_article_navigation'] = true;

        $defaults['show_related_posts'] = true;
        $defaults['related_posts_text'] = __('You May Also Like', 'magxpress');
        $defaults['no_of_related_posts'] = 3;
        $defaults['related_posts_orderby'] = 'date';
        $defaults['related_posts_order'] = 'desc';
        $defaults['author_posts_orderby'] = 'date';
        $defaults['author_posts_order'] = 'desc';

        $defaults['show_author_posts'] = true;
        $defaults['author_posts_text'] = __('More From Author', 'magxpress');
        $defaults['no_of_author_posts'] = 3;

        // Archive
        $defaults['archive_style'] = 'archive_style_1';
        $defaults['archive_post_meta_1'] = array('author', 'date', 'comment', 'category', 'tags');
        $defaults['archive_post_meta_2'] = array('author', 'date', 'category');
        $defaults['archive_post_meta_3'] = array('author', 'date', 'category');
        $defaults['archive_post_meta_4'] = array('category');

        // pagination
        $defaults['pagination_type'] = 'default';

        // readtime option
        $defaults['enable_read_time_option'] = true;
        $defaults['display_read_time_in'] = array('home-page', 'single-page', 'archive-page');
        $defaults['words_per_minute'] = 200;

        // footer related post
        $defaults['enable_footer_recommended_post_section'] = true;
        $defaults['footer_recommended_post_title'] = esc_html__('You May Also Like:', 'magxpress');
        $defaults['enable_category_meta'] = true;
        $defaults['enable_post_excerpt'] = false;
        $defaults['enable_date_meta'] = true;
        $defaults['enable_author_meta'] = false;
        $defaults['select_cat_for_footer_recommended_post'] = '';

        /*Footer*/
        $defaults['footer_bg_color'] = '#000000';
        $defaults['footer_text_color'] = '#fff';
        $defaults['footer_column_layout'] = 'footer_layout_2';
        $defaults['enable_footer_sticky'] = false;
        $defaults['enable_footer_image_overlay'] = false;
        $defaults['copyright_text'] = esc_html__('Copyright &copy;', 'magxpress');
        $defaults['copyright_date_format'] = 'Y';
        $defaults['enable_footer_nav'] = false;
        $defaults['enable_footer_social_nav'] = false;
        $defaults['enable_scroll_to_top'] = true;


        $defaults = apply_filters('magxpress_default_customizer_values', $defaults);
        return $defaults;
    }
endif;