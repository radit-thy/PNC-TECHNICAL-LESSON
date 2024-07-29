<?php
/**
 * Displays Header Featured Post
 *
 * @package Magxpress
 */
$enable_featured_news_post = magxpress_get_option('enable_featured_news_post');
if (empty($enable_featured_news_post)) {
    return;
}
$enable_featured_news_counter = magxpress_get_option('enable_featured_news_counter');
$featured_news_post_category = magxpress_get_option('featured_news_post_category');
$featured_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4, 'post__not_in' => get_option("sticky_posts"), 'category__in' => $featured_news_post_category));
$count = 1;
if ($featured_post_query->have_posts()): ?>
    <div class="site-header-area header-featured-area">
        <div class="wrapper">
            <div class="column-row">
                <?php while ($featured_post_query->have_posts()):
                    $featured_post_query->the_post();
                    ?>
                    <div class="column column-3 column-md-6 column-sm-6 column-xs-12 mb-md-20 mb-sm-20">
                        <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-list-post article-has-effect article-effect-slide'); ?>>
                            <?php if (has_post_thumbnail() && ($enable_featured_post_image = true)) { ?>
                                <div class="entry-image entry-image-thumbnail">
                                    <a href="<?php the_permalink() ?>" class="entry-image-link">
                                        <?php
                                        the_post_thumbnail('medium', array(
                                            'alt' => the_title_attribute(array(
                                                'echo' => false,
                                            )),
                                        ));
                                        ?>
                                    </a>
                                    <?php if ($enable_featured_news_counter) { ?>
                                        <span class="theme-article-count"><?php echo absint($count); ?></span>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <div class="entry-details">
                                <?php the_title('<h3 class="entry-title entry-title-small"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>

                                <?php
                                    magxpress_posted_on();
                                 ?>
                            </div>
                        </article>
                    </div>
                <?php 
                $count++;
            endwhile; ?>

            </div>
        </div>
    </div>
    <?php
    wp_reset_postdata();
endif;
