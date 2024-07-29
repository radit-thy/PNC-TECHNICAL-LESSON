<?php
if (!function_exists('magxpress_is_banner_style')) :
    /**
     * Check if top bar is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_is_banner_style($control)
    {

        if ($control->manager->get_setting('magxpress_options[banner_section_style]')->value() === 'style-1') {
            return true;
        } else {
            return false;
        }
    }
endif;
if (!function_exists('slider_section_presentation_layout_1')) :
    /**
     * Check if top bar is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function slider_section_presentation_layout_1($control)
    {

        if ($control->manager->get_setting('magxpress_options[slider_section_presentation_layout]')->value() === 'site-swiper-layout-slider') {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('slider_section_presentation_layout_2')) :
    /**
     * Check if top bar is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function slider_section_presentation_layout_2($control)
    {

        if ($control->manager->get_setting('magxpress_options[slider_section_presentation_layout]')->value() === 'site-swiper-layout-carousal') {
            return true;
        } else {
            return false;
        }
    }
endif;


if (!function_exists('magxpress_is_banner_style_1')) :
    /**
     * Check if top bar is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_is_banner_style_1($control)
    {

        if ($control->manager->get_setting('magxpress_options[banner_section_style]')->value() === 'style-2') {
            return true;
        } else {
            return false;
        }
    }
endif;
if (!function_exists('magxpress_is_banner_style_3')) :
    /**
     * Check if top bar is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_is_banner_style_3($control)
    {

        if ($control->manager->get_setting('magxpress_options[banner_section_style]')->value() === 'style-3') {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('magxpress_is_banner_style_4')) :
    /**
     * Check if top bar is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_is_banner_style_4($control)
    {

        if ($control->manager->get_setting('magxpress_options[banner_section_style]')->value() === 'style-4') {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('magxpress_is_always_dark_mode')) :
    /**
     * Check if top bar is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_is_always_dark_mode($control)
    {

        if ($control->manager->get_setting('magxpress_options[enable_always_dark_mode]')->value() === false) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('magxpress_is_top_bar_enabled')) :
    /**
     * Check if top bar is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_is_top_bar_enabled($control)
    {

        if ($control->manager->get_setting('magxpress_options[enable_top_bar]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('magxpress_is_todays_date_enabled')) :
    /**
     * Check if Todays Date is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_is_todays_date_enabled($control)
    {

        if ($control->manager->get_setting('magxpress_options[enable_header_date]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('magxpress_is_show_preloader')) :
    /**
     * Check if top bar is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_is_show_preloader($control)
    {

        if ($control->manager->get_setting('magxpress_options[show_preloader]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('magxpress_is_dark_mode_enabled')) :
    /**
     * Check if Dark mode is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_is_dark_mode_enabled($control)
    {

        if ($control->manager->get_setting('magxpress_options[enable_dark_mode]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('magxpress_shop_select_product_from')) :
    /**
     * Check if author Posts is active.
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_shop_select_product_from($control)
    {
        if ($control->manager->get_setting('magxpress_options[shop_select_product_from]')->value() === 'custom') {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('magxpress_is_progressbar_enabled')) :
    /**
     * Check if progressbar is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_is_progressbar_enabled($control)
    {

        if ($control->manager->get_setting('magxpress_options[show_progressbar]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('magxpress_is_related_posts_enabled')) :
    /**
     * Check if related Posts is active.
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_is_related_posts_enabled($control)
    {
        if ($control->manager->get_setting('magxpress_options[show_related_posts]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('magxpress_is_author_posts_enabled')) :
    /**
     * Check if author Posts is active.
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_is_author_posts_enabled($control)
    {
        if ($control->manager->get_setting('magxpress_options[show_author_posts]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('magxpress_archive_poost_meta_1')) :
    /**
     * Check if author Posts is active.
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_archive_poost_meta_1($control)
    {
        if ($control->manager->get_setting('magxpress_options[archive_style]')->value() === 'archive_style_1') {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('magxpress_archive_poost_meta_2')) :
    /**
     * Check if author Posts is active.
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_archive_poost_meta_2($control)
    {
        if ($control->manager->get_setting('magxpress_options[archive_style]')->value() === 'archive_style_2') {
            return true;
        } else {
            return false;
        }
    }
endif;


if (!function_exists('magxpress_archive_poost_meta_3')) :
    /**
     * Check if author Posts is active.
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_archive_poost_meta_3($control)
    {
        if ($control->manager->get_setting('magxpress_options[archive_style]')->value() === 'archive_style_3') {
            return true;
        } else {
            return false;
        }
    }
endif;


if (!function_exists('magxpress_archive_poost_meta_4')) :
    /**
     * Check if author Posts is active.
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function magxpress_archive_poost_meta_4($control)
    {
        if ($control->manager->get_setting('magxpress_options[archive_style]')->value() === 'archive_style_4') {
            return true;
        } else {
            return false;
        }
    }
endif;