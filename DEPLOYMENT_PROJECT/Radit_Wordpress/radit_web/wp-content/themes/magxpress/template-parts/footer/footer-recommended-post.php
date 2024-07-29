<?php

/**
 * Displays recommended post on footer.
 *
 * @package Magxpress
 */
$enable_category_meta = magxpress_get_option('enable_category_meta');
$enable_date_meta = magxpress_get_option('enable_date_meta');
$enable_post_excerpt = magxpress_get_option('enable_post_excerpt');
$enable_author_meta = magxpress_get_option('enable_author_meta');
$footer_recommended_post_title = magxpress_get_option('footer_recommended_post_title');
$select_cat_for_footer_recommended_post = magxpress_get_option('select_cat_for_footer_recommended_post');
?>
<section class="site-section site-recommendation-section">
    <div class="wrapper">
        <div class="column-row">
            <div class="column column-12">
                <header class="section-header site-section-header">
                    <h2 class="site-section-title">
                        <?php echo esc_html($footer_recommended_post_title); ?>
                    </h2>
                    <div class="site-section-controls">
                        <div class="theme-swiper-button recommendation-button-prev">
                            <?php magxpress_theme_svg('chevron-left'); ?>
                        </div>
                        <div class="theme-swiper-button recommendation-button-next">
                            <?php magxpress_theme_svg('chevron-right'); ?>
                        </div>
                    </div>
                </header>
            </div>
        </div>
        <div class="recommendation-wrapper">
            <div class="recommendation-slider swiper">
                <div class="swiper-wrapper">
                    <?php $footer_recommended_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 8, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($select_cat_for_footer_recommended_post)));
                    if ($footer_recommended_post_query->have_posts()) :
                        while ($footer_recommended_post_query->have_posts()) : $footer_recommended_post_query->the_post();
                    ?>
                            <div class="swiper-slide">
                                <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-recommended-post theme-border-radius article-has-effect article-effect-slide'); ?>>

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
                                        <?php if ($enable_category_meta) { ?>
                                            <div class="magxpress-meta magxpress-entry-categories">
                                                <?php the_category(' '); ?>
                                            </div>
                                        <?php } ?>
                                        <header class="entry-header">
                                            <?php the_title('<h3 class="entry-title entry-title-small"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                                        </header>
                                        <?php if ($enable_post_excerpt) { ?>
                                            <div class="entry-content">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        <?php } ?>
                                        <div class="magxpress-meta-group">
                                            <?php if ($enable_date_meta) {
                                                magxpress_posted_on();
                                            } ?>
                                            <?php if ($enable_author_meta) {
                                                magxpress_posted_by();
                                            } ?>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                </div>
            </div>
            <div class="theme-swiper-control swiper-control">
                <div class="swiper-pagination theme-swiper-pagination recommendation-pagination"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>