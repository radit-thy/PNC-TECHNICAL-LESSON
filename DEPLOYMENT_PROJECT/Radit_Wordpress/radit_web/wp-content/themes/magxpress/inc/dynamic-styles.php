<?php
/* ------------------------------------------------------------------------- *
 *  Dynamic styles
/* ------------------------------------------------------------------------- */
/*  Convert hexadecimal to rgb
/* ------------------------------------ */
if (!function_exists('magxpress_hex2rgb')) {
    function magxpress_hex2rgb($hex, $array = false)
    {
        $hex = str_replace("#", "", $hex);
        if (strlen($hex) == 3) {
            $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
            $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
            $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
        } else {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }
        $rgb = array($r, $g, $b);
        if (!$array) {
            $rgb = implode(",", $rgb);
        }
        return $rgb;
    }
}
if (!function_exists('magxpress_get_inline_css')) :
    /**
     * Outputs theme custom CSS.
     *
     * @since 1.0.0
     */
    function magxpress_get_inline_css()
    {
        $defaults = magxpress_get_default_customizer_values();
        $site_title_text_size = magxpress_get_option('site_title_text_size');
        $site_tagline_text_size = magxpress_get_option('site_tagline_text_size');
        $banner_bg_color = magxpress_get_option('banner_bg_color');
        $banner_text_color = magxpress_get_option('banner_text_color');
        $top_bar_bg_color = magxpress_get_option('top_bar_bg_color');
        $top_bar_text_color = magxpress_get_option('top_bar_text_color');
        $header_bg_color = magxpress_get_option('header_bg_color');

        $progressbar_color = magxpress_get_option('progressbar_color');

        $three_column_widgetarea_bgcolor = magxpress_get_option('three_column_widgetarea_bgcolor');
        $three_column_widgetarea_textcolor = magxpress_get_option('three_column_widgetarea_textcolor');
        $two_column_widgetarea_bgcolor = magxpress_get_option('two_column_widgetarea_bgcolor');
        $two_column_widgetarea_textcolor = magxpress_get_option('two_column_widgetarea_textcolor');
        $fullwidth_bottom_widgetarea_bgcolor = magxpress_get_option('fullwidth_bottom_widgetarea_bgcolor');
        $fullwidth_bottom_widgetarea_textcolor = magxpress_get_option('fullwidth_bottom_widgetarea_textcolor');
        
        $footer_bg_color = magxpress_get_option('footer_bg_color');
        $footer_text_color = magxpress_get_option('footer_text_color');
        ob_start();
        ?>
        <?php if ($site_title_text_size != $defaults['site_title_text_size']) : ?>
        @media (min-width: 1000px){
        .site-title {
        font-size: <?php echo esc_attr($site_title_text_size) . 'px'; ?>;
        }
        }
    <?php endif; ?>
        <?php if ($site_tagline_text_size != $defaults['site_tagline_text_size']) : ?>
        @media (min-width: 1000px){
        .site-description {
        font-size: <?php echo esc_attr($site_tagline_text_size) . 'px'; ?>;
        }
        }
    <?php endif; ?>
        <?php if ($banner_bg_color != $defaults['banner_bg_color']) : ?>
        .site-banner-section{
        background-color: <?php echo esc_attr($banner_bg_color); ?>;
        }
    <?php endif; ?>
        <?php if ($banner_text_color != $defaults['banner_text_color']) : ?>
        .site-banner-section,
        .site-banner-section a:not(:hover):not(:focus){
            color: <?php echo esc_attr($banner_text_color); ?>;
        }
    <?php endif; ?>
        <?php if ($top_bar_bg_color != $defaults['top_bar_bg_color']) : ?>
        #theme-topbar{
        background-color: <?php echo esc_attr($top_bar_bg_color); ?>;
        }
    <?php endif; ?>
        <?php if ($top_bar_text_color != $defaults['top_bar_text_color']) : ?>
        #theme-topbar,
        #theme-topbar a:not(:hover):not(:focus){
        color: <?php echo esc_attr($top_bar_text_color); ?>;
        }
    <?php endif; ?>
        <?php if ($header_bg_color != $defaults['header_bg_color']) : ?>
        .site-header{
        background-color: <?php echo esc_attr($header_bg_color); ?>;
        }
    <?php endif; ?>
        <?php if ($progressbar_color != $defaults['progressbar_color']) : ?>
        #magxpress-progress-bar{
        background-color: <?php echo esc_attr($progressbar_color); ?>;
        }
    <?php endif; ?>
        <?php if ($three_column_widgetarea_bgcolor != $defaults['three_column_widgetarea_bgcolor']) : ?>
        .three-column-widgetarea{
        background-color: <?php echo esc_attr($three_column_widgetarea_bgcolor); ?>;
        padding-bottom:4rem;
        padding-top:4rem;
        }
    <?php endif; ?>
        <?php if ($three_column_widgetarea_textcolor != $defaults['three_column_widgetarea_textcolor']) : ?>
        .three-column-widgetarea,
        .three-column-widgetarea a:not(:hover):not(:focus){
        color: <?php echo esc_attr($three_column_widgetarea_textcolor); ?>;
        }
    <?php endif; ?>
        <?php if ($two_column_widgetarea_bgcolor != $defaults['two_column_widgetarea_bgcolor']) : ?>
        .two-column-widgetarea{
        background-color: <?php echo esc_attr($two_column_widgetarea_bgcolor); ?>;
        padding-bottom:4rem;
        padding-top:4rem;
        }
    <?php endif; ?>
        <?php if ($two_column_widgetarea_textcolor != $defaults['two_column_widgetarea_textcolor']) : ?>
        .two-column-widgetarea,
        .two-column-widgetarea a:not(:hover):not(:focus){
        color: <?php echo esc_attr($two_column_widgetarea_textcolor); ?>;
        }
    <?php endif; ?>
        <?php if ($fullwidth_bottom_widgetarea_bgcolor != $defaults['fullwidth_bottom_widgetarea_bgcolor']) : ?>
        .fullwidth-widgetarea-bottom{
        background-color: <?php echo esc_attr($fullwidth_bottom_widgetarea_bgcolor); ?>;
        padding-bottom:4rem;
        padding-top:4rem;
        }
    <?php endif; ?>
        <?php if ($fullwidth_bottom_widgetarea_textcolor != $defaults['fullwidth_bottom_widgetarea_textcolor']) : ?>
        .fullwidth-widgetarea-bottom,
        .fullwidth-widgetarea-bottom a:not(:hover):not(:focus){
        color: <?php echo esc_attr($fullwidth_bottom_widgetarea_textcolor); ?>;
        }
    <?php endif; ?>
        <?php if ($footer_bg_color != $defaults['footer_bg_color']) : ?>
        .site-footer {
        background-color:  <?php echo esc_attr($footer_bg_color); ?>;
        }
    <?php endif; ?>
        <?php if ($footer_text_color != $defaults['footer_text_color']) : ?>
        .site-footer, .site-footer a:not(:hover):not(:focus) {
        color:  <?php echo esc_attr($footer_text_color); ?>;
        }
    <?php endif; ?>
        <?php
        return ob_get_clean();
    }
endif;
if (!function_exists('magxpress_get_dark_mode_inline_css')) :
    /**
     * Outputs theme dark mode custom CSS.
     *
     * @since 1.0.0
     */
    function magxpress_get_dark_mode_inline_css()
    {
        $defaults = magxpress_get_default_customizer_values();
        $dark_mode_accent_color = magxpress_get_option('dark_mode_accent_color');
        $dark_mode_bg_color = magxpress_get_option('dark_mode_bg_color');
        $dark_mode_text_color = magxpress_get_option('dark_mode_text_color');
        ob_start();
        ?>
        <?php if ($dark_mode_bg_color !== $defaults['dark_mode_bg_color']) : ?>
        :root {
        --theme-darkmode-bg-color: <?php echo esc_attr($dark_mode_bg_color); ?>
        }
    <?php endif; ?>
        <?php if ($dark_mode_text_color !== $defaults['dark_mode_text_color']) : ?>
        :root {
        --theme-darkmode-text-color: <?php echo esc_attr($dark_mode_text_color); ?>
        }
    <?php endif; ?>
        <?php if ($dark_mode_accent_color !== $defaults['dark_mode_accent_color']) : ?>
        :root {
        --theme-darkmode-accent-color: <?php echo esc_attr($dark_mode_accent_color); ?>;
        }
    <?php endif; ?>
        <?php
        $css = ob_get_clean();
        return $css;
    }
endif;
