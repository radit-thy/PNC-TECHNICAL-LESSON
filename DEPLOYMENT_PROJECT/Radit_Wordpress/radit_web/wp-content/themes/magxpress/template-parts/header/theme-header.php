<?php
/**
 * Displays the site header.
 *
 * @package Magxpress
 */

$wrapper_classes  = 'site-header theme-site-header';

$enable_header_bg_overlay = magxpress_get_option('enable_header_bg_overlay');
$header_image_size = magxpress_get_option('header_image_size');
$enable_top_bar = magxpress_get_option('enable_top_bar');
?>

<?php

get_template_part('template-parts/header/components/header-ticker');

if ($enable_top_bar) {
    get_template_part('template-parts/header/theme-topbar');
}
if ($enable_header_bg_overlay) {
    $wrapper_classes .= ' header-has-overlay';
}
$wrapper_classes .= ' header-has-height-'. $header_image_size;
if (!empty(get_header_image())) {
    $wrapper_classes .= ' data-bg';
}
?>
<header id="masthead" class="<?php echo esc_attr($wrapper_classes); ?> " <?php if (!empty(get_header_image())) { ?> data-background="<?php echo esc_url(get_header_image()); ?>" <?php } ?>>
    <?php get_template_part('template-parts/header/styles/style-1'); ?>
</header>
<?php get_template_part('template-parts/header/components/header-trending-tags'); ?>
<?php get_template_part('template-parts/header/components/theme-featured-post'); ?>

<?php get_template_part('template-parts/header/components/header-offcanvas-widget'); ?>
<?php get_template_part('template-parts/header/components/header-offcanvas'); ?>
<?php get_template_part('template-parts/header/components/header-search'); ?>


