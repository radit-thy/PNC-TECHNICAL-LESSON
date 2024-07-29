<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Magxpress
 */

?>
<?php
if (class_exists('WooCommerce')  && (is_home() || is_front_page()) && !is_paged()) {
    get_template_part('template-parts/front-page/shop-section');
}
?>

<?php
$enable_footer_recommended_post_section = magxpress_get_option('enable_footer_recommended_post_section');
if ($enable_footer_recommended_post_section) {
    get_template_part('template-parts/footer/footer-recommended-post');
}

?>

<?php do_action('magxpress_shop_section_action'); ?>

</div> <!-- site-content-area -->


<?php
$footer_image_class = '';
$is_sticky_footer = magxpress_get_option('enable_footer_sticky');
$enable_footer_sticky = magxpress_get_option('enable_footer_sticky');
if ($enable_footer_sticky) {
    ?>
    <div class="sticky-footer-spacer"></div>
    <?php
}
$upload_footer_image = magxpress_get_option('upload_footer_image');
$enable_footer_image_overlay = magxpress_get_option('enable_footer_image_overlay');
if ($upload_footer_image) {
    $footer_image_class .= 'data-bg';
}
if ($enable_footer_image_overlay) {
    $footer_image_class .= ' footer-has-overlay';
}
?>
<footer id="colophon" class="site-footer <?php echo $footer_image_class; ?>" <?php if ($upload_footer_image) { ?> data-background="<?php echo esc_url($upload_footer_image); ?>" <?php } ?>  <?php echo ($is_sticky_footer) ? 'data-sticky-footer="true"': '';?>>

    <?php get_template_part('template-parts/footer/footer-widgets'); ?>
    <?php get_template_part('template-parts/footer/footer-info'); ?>

    <?php
    $enable_scroll_to_top = magxpress_get_option('enable_scroll_to_top');
    if ($enable_scroll_to_top) {
    ?>
        <a id="theme-scroll-to-start" href="javascript:void(0)">
            <span class="screen-reader-text"><?php _e('Scroll to top', 'magxpress'); ?></span>
            <?php magxpress_theme_svg('chevron-up'); ?>
        </a>
    <?php
    }
    ?>
    <?php
    $enable_cursor_dot_outline = magxpress_get_option('enable_cursor_dot_outline');
    if ($enable_cursor_dot_outline) { ?>
        <!-- Custom cursor -->
        <div class="cursor-dot-outline"></div>
        <div class="cursor-dot"></div>
        <!-- .Custom cursor -->
    <?php } ?>
</footer><!-- #colophon -->

<?php do_action('magxpress_after_footer'); ?>

</div><!-- #page -->

<?php do_action('magxpress_after_site'); ?>

<?php wp_footer(); ?>

</body>

</html>