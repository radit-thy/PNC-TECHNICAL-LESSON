<?php
/**
 * Displays Slider Section
 *
 * @package Magxpress
 */
$enable_slider_overlay = magxpress_get_option('enable_slider_overlay');
$slider_section_cat = magxpress_get_option('slider_section_cat');
$slider_section_presentation_layout = magxpress_get_option('slider_section_presentation_layout');
$number_of_slider_post_layout_1 = magxpress_get_option('number_of_slider_post_layout_1');
$number_of_slider_post_layout_2 = magxpress_get_option('number_of_slider_post_layout_2');
$banner_image_section = magxpress_get_option('banner_image_section');
$enable_slider_cat_meta = magxpress_get_option('enable_slider_cat_meta');
$enable_slider_author_meta = magxpress_get_option('enable_slider_author_meta');
$enable_slider_date_meta = magxpress_get_option('enable_slider_date_meta');
$enable_slider_post_description = magxpress_get_option('enable_slider_post_description');
$slider_post_content_alignment = magxpress_get_option('slider_post_content_alignment');
$slider_wrapper_class = ($slider_section_presentation_layout == 'site-swiper-layout-slider') ? 'wrapper-fluid' : 'wrapper';
$featured_image = "";
$slider_overlay_class = '';
if ($enable_slider_overlay) {
    $slider_overlay_class = 'data-bg-overlay';
}
?>
<section class="site-section site-swiper-section">
    <div class="<?php echo esc_attr($slider_wrapper_class); ?>">
        <div class="<?php echo esc_attr($slider_section_presentation_layout); ?> theme-swiper-slider swiper">
            <?php if ($slider_section_presentation_layout == 'site-swiper-layout-slider') { ?>
                <div class="swiper-wrapper">
                    <?php $slider_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => absint($number_of_slider_post_layout_1), 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($slider_section_cat)));
                    if ($slider_post_query->have_posts()):
                        while ($slider_post_query->have_posts()): $slider_post_query->the_post();
                            ?>
                            <div class="swiper-slide banner-slider-align  <?php echo $slider_post_content_alignment; ?>">
                                <article id="swiper-slide-<?php the_ID(); ?>" <?php post_class('theme-article-post'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="entry-image entry-image-large">
                                        <div class="<?php echo $slider_overlay_class; ?>"></div>
                                        <a href="<?php the_permalink() ?>" class="entry-image-link">
                                            <?php
                                            the_post_thumbnail('full', array(
                                                'alt' => the_title_attribute(array(
                                                    'echo' => false,
                                                )),
                                            ));
                                            ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <div class="slider-content">
                                        <?php if ($enable_slider_cat_meta) { ?>
                                            <div class="magxpress-meta magxpress-entry-categories">
                                                <?php the_category(' '); ?>
                                            </div>
                                        <?php } ?>
                                        <header class="entry-header">
                                            <?php the_title('<h2 class="entry-title entry-title-large"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                        </header>
                                        <?php if ($enable_slider_post_description) { ?>
                                            <div class="">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ($enable_slider_date_meta) {
                                            magxpress_posted_on();
                                        } ?>
                                        <?php if ($enable_slider_author_meta) {
                                            magxpress_posted_by();
                                        } ?>
                                </div>
                                </article>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            <?php } else { ?>
                <div class="swiper-wrapper">
                    <?php $slider_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => absint($number_of_slider_post_layout_2), 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($slider_section_cat)));
                    if ($slider_post_query->have_posts()):
                        while ($slider_post_query->have_posts()): $slider_post_query->the_post();
                            ?>
                            <div class="swiper-slide banner-slider-align <?php echo $slider_post_content_alignment; ?>">
                                <article id="swiper-slide-<?php the_ID(); ?>" <?php post_class('theme-article-post'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="entry-image entry-image-big theme-border-radius">
                                        <div class="<?php echo $slider_overlay_class; ?>"></div>
                                        <a href="<?php the_permalink() ?>" class="entry-image-link">
                                            <?php
                                            the_post_thumbnail('medium_large', array(
                                                'alt' => the_title_attribute(array(
                                                    'echo' => false,
                                                )),
                                            ));
                                            ?>
                                        </a>

                                        <?php if ($enable_slider_cat_meta) { ?>
                                            <div class="magxpress-meta magxpress-entry-categories">
                                                <?php the_category(' '); ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php endif; ?>

                                <div class="slider-content">

                                    <header class="entry-header">
                                        <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                    </header>
                                    <?php if ($enable_slider_post_description) { ?>
                                        <div class="">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    <?php } ?>
                                    <?php if ($enable_slider_date_meta) {
                                        magxpress_posted_on();
                                    } ?>
                                    <?php if ($enable_slider_author_meta) {
                                        magxpress_posted_by();
                                    } ?>
                                </div>
                                </article>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            <?php } ?>
            <!-- Control -->
            <div class="theme-swiper-control swiper-control">
                <div class="swiper-button-prev slider-button-prev"></div>
                <div class="swiper-button-next slider-button-next"></div>
                <div class="swiper-pagination theme-swiper-pagination theme-slider-pagination"></div>
            </div>
        </div>
</section>