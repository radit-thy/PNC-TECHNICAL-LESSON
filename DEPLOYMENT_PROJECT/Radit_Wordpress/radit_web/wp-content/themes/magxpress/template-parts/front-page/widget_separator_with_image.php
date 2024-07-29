<?php

/**
 * Displays recommended post on footer.
 *
 * @package Magxpress
 */
$enable_date_meta = magxpress_get_option('enable_date_meta');
$select_cat_for_widget_separator_section = magxpress_get_option('select_cat_for_widget_separator_section');
?>
<section class="site-section site-bg-separator">
    <div class="wrapper">
        <div class="column-row">
            <?php $article_with_separator_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($select_cat_for_widget_separator_section)));
            if ($article_with_separator_post_query->have_posts()) :
                while ($article_with_separator_post_query->have_posts()) : $article_with_separator_post_query->the_post();
            ?>
                    <div class="column column-3 column-sm-6 column-xs-12">
                        <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-border-radius article-bg-light'); ?>>
                            <?php if (has_post_thumbnail()) { ?>
                                <div class="entry-image entry-image-big">
                                    <a href="<?php the_permalink() ?>">
                                        <?php
                                        the_post_thumbnail('medium', array(
                                            'alt' => the_title_attribute(array(
                                                'echo' => false,
                                            )),
                                        ));
                                        ?> <!--  "thumbnail" or "medium"-->
                                    </a>
                                    <div class="magxpress-meta magxpress-entry-categories">
                                        <?php the_category(' '); ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="entry-details theme-border-radius">
                                <header class="entry-header">
                                    <?php the_title('<h3 class="entry-title entry-title-small"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                                </header>
                                <?php if ($enable_date_meta) { ?>
                                    <div class="entry-meta magxpress-meta">
                                        <?php echo esc_html(get_the_date()); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </article>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
        </div>
    </div>
</section>
<?php endif; ?>