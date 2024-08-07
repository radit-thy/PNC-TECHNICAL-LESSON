<?php
$enable_footer_nav = magxpress_get_option('enable_footer_nav');
$enable_footer_social_nav = magxpress_get_option('enable_footer_social_nav');
?>
<div class="theme-footer-bottom">
    <div class="wrapper">
        <div class="theme-author-credit">
            <div class="theme-copyright-info">
                <?php
                $copyright_text = magxpress_get_option('copyright_text');
                if ($copyright_text):
                    echo wp_kses_post($copyright_text);
                endif;
                $copyright_date_format = magxpress_get_option('copyright_date_format', 'Y');
                if ($copyright_date_format) {
                    echo ' ' . date_i18n($copyright_date_format, current_time('timestamp'));
                }
                $active_theme = wp_get_theme();
                $active_theme_textdomain = esc_html($active_theme->get('TextDomain'));
                printf(esc_html__(' %1$s.', 'magxpress'), $active_theme_textdomain);
                ?>
            </div><!-- .theme-copyright-info -->
            <div class="theme-credit-info">
                <?php printf(esc_html__('Designed & Developed by %1$s', 'magxpress'), '<a href="https://themeinwp.com/" target = "_blank" rel="designer">ThemeinWP Team</a>'); ?>
            </div><!-- .theme-credit-info -->
        </div><!-- .theme-author-credit-->
        <?php if ($enable_footer_nav): ?>
            <div class="site-footer-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container_class' => 'footer-navigation',
                    'fallback_cb' => false,
                    'depth' => 1,
                    'menu_class' => 'theme-footer-navigation theme-menu theme-footer-navigation'
                ));
                ?>
            </div>
        <?php endif; ?>
        <?php if ($enable_footer_social_nav): ?>
            <div class="site-footer-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'social-menu',
                    'container_class' => 'footer-social-navigation',
                    'fallback_cb' => false,
                    'depth' => 1,
                    'menu_class' => 'theme-social-navigation theme-menu theme-footer-navigation',
                    'link_before' => '<span class="screen-reader-text">',
                    'link_after' => '</span>',
                ));
                ?>
            </div>
        <?php endif; ?>
    </div>
</div><!-- .theme-footer-bottom-->
