<?php

/**
 * Displays Banner Section
 *
 * @package Magxpress
 */
$enable_banner_section = magxpress_get_option('enable_banner_section');
if (empty($enable_banner_section)) {
    return;
}
$banner_section_style = magxpress_get_option('banner_section_style');
$banner_section_cat_style_1 = magxpress_get_option('banner_section_cat_style_1');
$banner_section_cat_style_1_grid = magxpress_get_option('banner_section_cat_style_1_grid');
$banner_section_cat_style_3 = magxpress_get_option('banner_section_cat_style_3');
$banner_section_cat_style_4 = magxpress_get_option('banner_section_cat_style_4');
$banner_section_title_1 = magxpress_get_option('banner_section_title_1');
$banner_section_cat_1 = magxpress_get_option('banner_section_cat_1');
$banner_section_title_2 = magxpress_get_option('banner_section_title_2');
$banner_section_cat_2 = magxpress_get_option('banner_section_cat_2');
$banner_section_title_3 = magxpress_get_option('banner_section_title_3');
$banner_section_cat_3 = magxpress_get_option('banner_section_cat_3');
$enable_banner_cat_meta = magxpress_get_option('enable_banner_cat_meta');
$enable_banner_author_meta = magxpress_get_option('enable_banner_author_meta');
$enable_banner_date_meta = magxpress_get_option('enable_banner_date_meta');
$banner_section_cat_grid = magxpress_get_option('banner_section_cat_grid');
$banner_section_cat_list = magxpress_get_option('banner_section_cat_list');
$banner_style_1_single_qury = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($banner_section_cat_style_1)));
$banner_style_3_single_qury = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($banner_section_cat_style_3)));
$grid_post_query_style_1 = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 2, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($banner_section_cat_style_1_grid)));
$grid_post_query_style_2 = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($banner_section_cat_style_1_grid)));
$grid_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 7, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($banner_section_cat_1)));
$banner_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($banner_section_cat_2)));
$banner_grid_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($banner_section_cat_grid)));

$banner_list_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($banner_section_cat_list)));

$list_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 6, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($banner_section_cat_3)));
$banner_query_style_4 = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($banner_section_cat_style_4)));
if ((is_home() || is_front_page()) && !is_paged()) {
    $enable_background_fix = magxpress_get_option('enable_background_fix');
    $upload_banner_bg_image = magxpress_get_option('upload_banner_bg_image');
    $image_fix_class = '';
    if ($enable_background_fix) {
        $image_fix_class = "data-bg-fixed ";
    }
    if (!empty($upload_banner_bg_image)) {
        $image_fix_class .= " data-bg";
    }
}
?>
<?php switch ($banner_section_style) {
    case 'style-1': ?>
        <section class="site-section site-banner-section site-banner-layout-1 <?php echo esc_attr($image_fix_class); ?>" data-background="<?php echo esc_url($upload_banner_bg_image); ?>">
            <div class="wrapper">
                <div class="column-row column-row-small">
                    <div class="column column-6 column-sm-12">
                        <div class="main-banner-slider swiper">
                            <div class="swiper-wrapper">
                                <?php
                                if ($banner_style_1_single_qury->have_posts()) :
                                    while ($banner_style_1_single_qury->have_posts()) : $banner_style_1_single_qury->the_post();
                                ?>
                                        <div class="swiper-slide">
                                            <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-border-radius article-has-effect article-effect-shine theme-tiles-post'); ?>>
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <div class="entry-image entry-image-large">
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php
                                                            the_post_thumbnail('large', array(
                                                                'alt' => the_title_attribute(array(
                                                                    'echo' => false,
                                                                )),
                                                            ));
                                                            ?>
                                                        </a>
                                                        <?php if (magxpress_get_option('show_lightbox_image')) { ?>
                                                            <a href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="featured-media-fullscreen" data-glightbox="">
                                                                <?php magxpress_theme_svg('fullscreen'); ?>
                                                            </a>
                                                        <?php } ?>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="entry-details">
                                                    <?php if ($enable_banner_cat_meta) { ?>
                                                        <div class="magxpress-meta magxpress-entry-categories">
                                                            <?php the_category(' '); ?>
                                                        </div>
                                                    <?php } ?>
                                                    <header class="entry-header">
                                                        <?php the_title('<h2 class="entry-title entry-title-big"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                                    </header>
                                                    <?php if ($enable_banner_date_meta) {
                                                        magxpress_posted_on();
                                                    } ?>
                                                    <?php if ($enable_banner_author_meta) {
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
                            <div class="theme-swiper-control swiper-control">
                                <div class="swiper-button-prev banner-button-prev"></div>
                                <div class="swiper-button-next banner-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-3 column-sm-12">
                        <div class="column-row column-row-small">
                            <?php
                            if ($grid_post_query_style_1->have_posts()) :
                                while ($grid_post_query_style_1->have_posts()) : $grid_post_query_style_1->the_post();
                            ?>
                                    <div class="column column-12 column-xs-12">
                                        <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-border-radius article-has-effect article-effect-slide theme-tiles-post'); ?>>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="entry-image entry-image-medium">
                                                    <a href="<?php the_permalink() ?>" class="entry-image-link">
                                                        <?php
                                                        the_post_thumbnail('medium_large', array(
                                                            'alt' => the_title_attribute(array(
                                                                'echo' => false,
                                                            )),
                                                        ));
                                                        ?>
                                                    </a>
                                                    <?php if (magxpress_get_option('show_lightbox_image')) { ?>
                                                        <a href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="featured-media-fullscreen" data-glightbox="">
                                                            <?php magxpress_theme_svg('fullscreen'); ?>
                                                        </a>
                                                    <?php } ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="entry-details">
                                                <?php if ($enable_banner_cat_meta) { ?>
                                                    <div class="magxpress-meta magxpress-entry-categories">
                                                        <?php the_category(' '); ?>
                                                    </div>
                                                <?php } ?>
                                                <header class="entry-header">
                                                    <?php the_title('<h2 class="entry-title entry-title-small"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                                </header>
                                                <?php if ($enable_banner_date_meta) {
                                                    magxpress_posted_on();
                                                } ?>
                                                <?php if ($enable_banner_author_meta) {
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
                    </div>
                    <div class="column column-3 column-sm-12">
                        <div class="column-row column-row-small">
                            <?php
                            if ($grid_post_query_style_2->have_posts()) :
                                while ($grid_post_query_style_2->have_posts()) : $grid_post_query_style_2->the_post();
                            ?>
                                    <div class="column column-12 column-xs-12">
                                        <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post article-has-effect article-effect-zoom theme-article-section'); ?>>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="entry-image theme-border-radius entry-image-thumbnail">
                                                    <a href="<?php the_permalink() ?>" class="entry-image-link">
                                                        <?php
                                                        the_post_thumbnail('medium_large', array(
                                                            'alt' => the_title_attribute(array(
                                                                'echo' => false,
                                                            )),
                                                        ));
                                                        ?>
                                                    </a>
                                                    <?php if (magxpress_get_option('show_lightbox_image')) { ?>
                                                        <a href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="featured-media-fullscreen" data-glightbox="">
                                                            <?php magxpress_theme_svg('fullscreen'); ?>
                                                        </a>
                                                    <?php } ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="entry-details">
                                                <?php if ($enable_banner_cat_meta) { ?>
                                                    <div class="magxpress-meta magxpress-entry-categories">
                                                        <?php the_category(' '); ?>
                                                    </div>
                                                <?php } ?>
                                                <header class="entry-header">
                                                    <?php the_title('<h2 class="entry-title entry-title-small"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                                </header>
                                                <?php if ($enable_banner_date_meta) {
                                                    magxpress_posted_on();
                                                } ?>
                                                <?php if ($enable_banner_author_meta) {
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
                    </div>
                </div>
            </div>
        </section>
    <?php break;
    case 'style-2': ?>
        <section class="site-section site-banner-section site-banner-layout-2 <?php echo esc_attr($image_fix_class); ?>" data-background="<?php echo esc_url($upload_banner_bg_image); ?>">
            <div class="wrapper">
                <div class="column-row">
                    <div class="column column-3 column-sm-12 theme-sticky-component">
                        <?php if ($banner_section_title_1) { ?>
                            <header class="section-header site-section-header">
                                <h2 class="site-section-title">
                                    <?php echo esc_html($banner_section_title_1); ?>
                                </h2>
                            </header>
                        <?php } ?>
                        <div class="section-content site-section-content">
                            <?php
                            $count = 1;
                            if ($grid_post_query->have_posts()) :
                                while ($grid_post_query->have_posts()) : $grid_post_query->the_post();
                            ?>
                                    <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-article-post-highlights article-has-effect article-effect-slide mb-20'); ?>>
                                        <?php if ($count <= 2) { ?>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="entry-image theme-border-radius entry-image-medium mb-15">
                                                    <a href="<?php the_permalink() ?>" class="entry-image-link">
                                                        <?php
                                                        the_post_thumbnail('medium_large', array(
                                                            'alt' => the_title_attribute(array(
                                                                'echo' => false,
                                                            )),
                                                        ));
                                                        ?>
                                                    </a>
                                                    <?php if (magxpress_get_option('show_lightbox_image')) { ?>
                                                        <a href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="featured-media-fullscreen" data-glightbox="">
                                                            <?php magxpress_theme_svg('fullscreen'); ?>
                                                        </a>
                                                    <?php } ?>
                                                </div>
                                            <?php endif; ?>
                                        <?php } ?>

                                        <div class="entry-details">
                                            <?php if ($enable_banner_cat_meta) { ?>
                                                <div class="magxpress-meta magxpress-entry-categories">
                                                    <?php the_category(' '); ?>
                                                </div>
                                            <?php } ?>
                                            <header class="entry-header">
                                                <?php the_title('<h2 class="entry-title entry-title-small"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                            </header>
                                            <?php if ($enable_banner_date_meta) {
                                                magxpress_posted_on();
                                            } ?>
                                            <?php if ($enable_banner_author_meta) {
                                                magxpress_posted_by();
                                            } ?>
                                        </div>
                                    </article>
                            <?php
                                    $count++;
                                endwhile;
                                wp_reset_postdata();
                            endif; ?>
                        </div>
                    </div>
                    <div class="column column-9 column-sm-12 theme-sticky-component">
                        <div class="column-row">
                            <div class="column column-9 column-sm-12 theme-sticky-component column-border-lr">

                                <?php if ($banner_section_title_2) { ?>
                                    <header class="section-header site-section-header">
                                        <h2 class="site-section-title">
                                            <?php echo esc_html($banner_section_title_2); ?>
                                        </h2>

                                        <div class="site-section-controls">
                                            <div class="theme-swiper-button banner-button-prev">
                                                <?php magxpress_theme_svg('chevron-left'); ?>
                                            </div>
                                            <div class="theme-swiper-button banner-button-next">
                                                <?php magxpress_theme_svg('chevron-right'); ?>
                                            </div>
                                        </div>

                                    </header>
                                <?php } ?>
                                <div class="site-banner-area site-banner-upper">
                                    <div class="main-banner-slider swiper">
                                        <div class="swiper-wrapper">
                                            <?php
                                            if ($banner_post_query->have_posts()) :
                                                while ($banner_post_query->have_posts()) : $banner_post_query->the_post();
                                            ?>
                                                    <div class="swiper-slide">
                                                        <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post banner-article-post article-has-effect article-effect-shine'); ?>>
                                                            <?php if (has_post_thumbnail()) : ?>
                                                                <div class="entry-image theme-border-radius entry-image-big">
                                                                    <a href="<?php the_permalink() ?>">
                                                                        <?php
                                                                        the_post_thumbnail('large', array(
                                                                            'alt' => the_title_attribute(array(
                                                                                'echo' => false,
                                                                            )),
                                                                        ));
                                                                        ?>
                                                                    </a>
                                                                    <?php if (magxpress_get_option('show_lightbox_image')) { ?>
                                                                        <a href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="featured-media-fullscreen" data-glightbox="">
                                                                            <?php magxpress_theme_svg('fullscreen'); ?>
                                                                        </a>
                                                                    <?php } ?>
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="entry-details">
                                                                <?php if ($enable_banner_cat_meta) { ?>
                                                                    <div class="magxpress-meta magxpress-entry-categories">
                                                                        <?php the_category(' '); ?>
                                                                    </div>
                                                                <?php } ?>
                                                                <header class="entry-header">
                                                                    <?php the_title('<h2 class="entry-title entry-title-big"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                                                </header>
                                                                <?php if ($enable_banner_date_meta) {
                                                                    magxpress_posted_on();
                                                                } ?>
                                                                <?php if ($enable_banner_author_meta) {
                                                                    magxpress_posted_by();
                                                                } ?>
                                                                <?php
                                                                if (has_excerpt()) {
                                                                    the_excerpt();
                                                                } else {
                                                                    echo '<p>';
                                                                    echo esc_html(wp_trim_words(get_the_content(), 50, '...'));
                                                                    echo '</p>';
                                                                } ?>
                                                            </div>
                                                        </article>
                                                    </div>
                                            <?php
                                                endwhile;
                                                wp_reset_postdata();
                                            endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="site-banner-area site-banner-middle">
                                    <div class="column-row">
                                        <?php if ($banner_grid_post_query->have_posts()) :
                                            while ($banner_grid_post_query->have_posts()) : $banner_grid_post_query->the_post();
                                        ?>
                                                <div class="column column-4 column-sm-12 mb-sm-30">
                                                    <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post article-has-effect article-effect-shine'); ?>>

                                                        <div class="entry-details">
                                                            <?php if ($enable_banner_cat_meta) { ?>
                                                                <div class="magxpress-meta magxpress-entry-categories">
                                                                    <?php the_category(' '); ?>
                                                                </div>
                                                            <?php } ?>
                                                            <header class="entry-header">
                                                                <?php the_title('<h2 class="entry-title entry-title-medium"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                                            </header>

                                                            <?php
                                                            if (has_excerpt()) {
                                                                the_excerpt();
                                                            } else {
                                                                echo '<p>';
                                                                echo esc_html(wp_trim_words(get_the_content(), 30, '...'));
                                                                echo '</p>';
                                                            } ?>

                                                            <?php if ($enable_banner_date_meta) {
                                                                magxpress_posted_on();
                                                            } ?>
                                                            <?php if ($enable_banner_author_meta) {
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
                                </div>
                                <div class="site-banner-area site-banner-lower">
                                    <?php if ($banner_list_post_query->have_posts()) :
                                        while ($banner_list_post_query->have_posts()) : $banner_list_post_query->the_post();
                                    ?>
                                            <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post article-has-effect theme-list-post article-effect-shine'); ?>>
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <div class="entry-image theme-border-radius entry-image-medium">
                                                        <a href="<?php the_permalink() ?>">
                                                            <?php
                                                            the_post_thumbnail('medium_large', array(
                                                                'alt' => the_title_attribute(array(
                                                                    'echo' => false,
                                                                )),
                                                            ));
                                                            ?>
                                                        </a>
                                                        <?php if (magxpress_get_option('show_lightbox_image')) { ?>
                                                            <a href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="featured-media-fullscreen" data-glightbox="">
                                                                <?php magxpress_theme_svg('fullscreen'); ?>
                                                            </a>
                                                        <?php } ?>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="entry-details">
                                                    <?php if ($enable_banner_cat_meta) { ?>
                                                        <div class="magxpress-meta magxpress-entry-categories">
                                                            <?php the_category(' '); ?>
                                                        </div>
                                                    <?php } ?>
                                                    <header class="entry-header">
                                                        <?php the_title('<h2 class="entry-title  "><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                                    </header>
                                                    <?php if ($enable_banner_date_meta) {
                                                        magxpress_posted_on();
                                                    } ?>
                                                    <?php if ($enable_banner_author_meta) {
                                                        magxpress_posted_by();
                                                    } ?>

                                                    <?php
                                                    if (has_excerpt()) {
                                                        the_excerpt();
                                                    } else {
                                                        echo '<p>';
                                                        echo esc_html(wp_trim_words(get_the_content(), 30, '...'));
                                                        echo '</p>';
                                                    } ?>
                                                </div>
                                            </article>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif; ?>
                                </div>
                            </div>
                            <div class="column column-3 column-sm-12 theme-sticky-component">
                                <?php if ($banner_section_title_3) { ?>
                                    <header class="section-header site-section-header">
                                        <h2 class="site-section-title">
                                            <?php echo esc_html($banner_section_title_3); ?>
                                        </h2>
                                    </header>
                                <?php } ?>
                                <?php
                                if ($list_post_query->have_posts()) :
                                    while ($list_post_query->have_posts()) : $list_post_query->the_post();
                                ?>
                                        <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post article-has-effect article-effect-zoom mb-20'); ?>>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="entry-image entry-image-small theme-border-radius mb-10">
                                                    <a href="<?php the_permalink() ?>">
                                                        <?php
                                                        the_post_thumbnail('medium', array(
                                                            'alt' => the_title_attribute(array(
                                                                'echo' => false,
                                                            )),
                                                        ));
                                                        ?>
                                                    </a>
                                                    <?php if (magxpress_get_option('show_lightbox_image')) { ?>
                                                        <a href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="featured-media-fullscreen" data-glightbox="">
                                                            <?php magxpress_theme_svg('fullscreen'); ?>
                                                        </a>
                                                    <?php } ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="entry-details">
                                                <header class="entry-header">
                                                    <?php the_title('<h3 class="entry-title entry-title-small"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                                                </header>
                                                <?php if ($enable_banner_date_meta) {
                                                    magxpress_posted_on();
                                                } ?>
                                                <?php if ($enable_banner_author_meta) {
                                                    magxpress_posted_by();
                                                } ?>
                                            </div>
                                        </article>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php break;
    case 'style-3': ?>
        <section class="site-section site-banner-section site-banner-layout-3 <?php echo esc_attr($image_fix_class); ?>" data-background="<?php echo esc_url($upload_banner_bg_image); ?>">
            <div class="wrapper">
                <div class="column-grid column-grid-template">
                    <?php
                    $i = '1';
                    if ($banner_style_3_single_qury->have_posts()) :
                        while ($banner_style_3_single_qury->have_posts()) : $banner_style_3_single_qury->the_post();
                            $banner_article_class = "entry-image-medium";
                            $banner_title_class = "entry-title-medium";
                            if ($i == 1 || $i == 4) {
                                $banner_article_class = "entry-image-large";
                                $banner_title_class = "entry-title-big";
                            }
                    ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post article-has-effect article-effect-shine theme-tiles-post theme-article-post-' . $i); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="entry-image <?php echo esc_attr($banner_article_class); ?>">
                                        <a href="<?php the_permalink() ?>">
                                            <?php
                                            the_post_thumbnail('medium_large', array(
                                                'alt' => the_title_attribute(array(
                                                    'echo' => false,
                                                )),
                                            ));
                                            ?>
                                        </a>
                                        <?php if (magxpress_get_option('show_lightbox_image')) { ?>
                                            <a href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="featured-media-fullscreen" data-glightbox="">
                                                <?php magxpress_theme_svg('fullscreen'); ?>
                                            </a>
                                        <?php } ?>
                                    </div>
                                <?php endif; ?>
                                <div class="entry-details">
                                    <?php if ($enable_banner_cat_meta) { ?>
                                        <div class="magxpress-meta magxpress-entry-categories">
                                            <?php the_category(' '); ?>
                                        </div>
                                    <?php } ?>
                                    <header class="entry-header">
                                        <?php the_title('<h2 class="entry-title ' . $banner_title_class . ' "><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                    </header>
                                    <?php if ($enable_banner_date_meta) {
                                        magxpress_posted_on();
                                    } ?>
                                    <?php if ($enable_banner_author_meta) {
                                        magxpress_posted_by();
                                    } ?>
                                </div>
                            </article>
                    <?php
                            $i++;
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </section>
    <?php break;
    case 'style-4': ?>
        <section class="site-section site-banner-section site-banner-layout-4 <?php echo esc_attr($image_fix_class); ?>" data-background="<?php echo esc_url($upload_banner_bg_image); ?>">
            <div class="wrapper">
                <div class="column-grid column-grid-template">
                    <?php
                    $i = '1';
                    if ($banner_query_style_4->have_posts()) :
                        while ($banner_query_style_4->have_posts()) : $banner_query_style_4->the_post();
                            $banner_article_class = "entry-image-medium";
                            $banner_title_class = "entry-title-medium";
                            if ($i == 1) {
                                $banner_article_class = "entry-image-large";
                                $banner_title_class = "entry-title-big";
                            }
                    ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post article-has-effect article-effect-shine theme-tiles-post theme-article-post-' . $i); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="entry-image <?php echo esc_attr($banner_article_class); ?>">
                                        <a href="<?php the_permalink() ?>">
                                            <?php
                                            the_post_thumbnail('large', array(
                                                'alt' => the_title_attribute(array(
                                                    'echo' => false,
                                                )),
                                            ));
                                            ?>
                                        </a>
                                        <?php if (magxpress_get_option('show_lightbox_image')) { ?>
                                            <a href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="featured-media-fullscreen" data-glightbox="">
                                                <?php magxpress_theme_svg('fullscreen'); ?>
                                            </a>
                                        <?php } ?>
                                    </div>
                                <?php endif; ?>
                                <div class="entry-details">
                                    <?php if ($enable_banner_cat_meta) { ?>
                                        <div class="magxpress-meta magxpress-entry-categories">
                                            <?php the_category(' '); ?>
                                        </div>
                                    <?php } ?>
                                    <header class="entry-header">
                                        <?php the_title('<h2 class="entry-title ' . $banner_title_class . '"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                    </header>
                                    <?php if ($enable_banner_date_meta) {
                                        magxpress_posted_on();
                                    } ?>
                                    <?php if ($enable_banner_author_meta) {
                                        magxpress_posted_by();
                                    } ?>
                                </div>
                            </article>
                    <?php
                            $i++;
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </section>
<?php break;
    default:
        // code...
        break;
} ?>