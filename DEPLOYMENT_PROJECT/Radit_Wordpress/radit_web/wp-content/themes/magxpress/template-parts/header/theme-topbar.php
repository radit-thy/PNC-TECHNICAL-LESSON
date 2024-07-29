<?php
/**
 * Displays the Topbar
 *
 * @package Magxpress
 */

$hide_topbar_on_mobile = magxpress_get_option('hide_topbar_on_mobile');


$enable_topbar_social_icons = magxpress_get_option('enable_topbar_social_icons');

$enable_header_date = magxpress_get_option('enable_header_date');
?>
<div id="theme-topbar" class="site-topbar theme-site-topbar <?php echo ($hide_topbar_on_mobile) ? 'hide-on-mobile': '';?>">
    <div class="wrapper">
        <div class="site-topbar-wrapper">

            <div class="site-topbar-item site-topbar-left">
                <?php if ($enable_header_date) :
                    $date_format = magxpress_get_option('todays_date_format', 'l ,  j  F Y');
                    ?>
                    <div class="site-topbar-component header-component-date">
                        <span class="date-label"><?php echo esc_html__('Today: ', 'magxpress') ?></span>
                        <?php echo date_i18n($date_format, current_time('timestamp')); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="site-topbar-item site-topbar-right">
                <?php
                if ($enable_topbar_social_icons) :
                    wp_nav_menu(
                        array(
                            'theme_location' => 'social-menu',
                            'container_class' => 'site-topbar-component topbar-component-social-navigation',
                            'fallback_cb' => false,
                            'depth' => 1,
                            'menu_class' => 'theme-social-navigation theme-menu theme-topbar-navigation',
                            'link_before' => '<span class="screen-reader-text">',
                            'link_after' => '</span>',
                        )
                    );
                endif;
                ?>
            </div>

        </div>
    </div>
</div>
