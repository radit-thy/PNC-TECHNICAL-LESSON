<?php

/**
 * Displays recommended post on footer.
 *
 * @package Magxpress
 */
$enable_date_meta = magxpress_get_option('enable_date_meta');
$enable_post_excerpt = magxpress_get_option('enable_post_excerpt');
$read_more_post_title = magxpress_get_option('read_more_post_title');
$read_more_style = magxpress_get_option('read_more_style');
$select_cat_for_read_more_post = magxpress_get_option('select_cat_for_read_more_post');
$select_cat_for_read_more_list_post = magxpress_get_option('select_cat_for_read_more_list_post');
$flip_read_more_post_section = magxpress_get_option('flip_read_more_post_section');
$column_class = 'column-3';
$article_class = 'theme-default-post mb-20';
$image_class = 'entry-image-small';
$article_title_class = 'entry-title-small';
if ($read_more_style == 'style-2') {
    $column_class = 'column-4';
    $article_class = 'theme-list-post';
    $image_class = 'entry-image-thumbnail';
    $article_title_class = 'entry-title-small';
}
$order_column_class = "column-order-1";
$order_column_class_1 = "column-order-2 column-border-l";
if ($flip_read_more_post_section) {
    $order_column_class = "column-order-2 column-border-r";
    $order_column_class_1 = "column-order-1";
}
?>
<?php if ($read_more_style == 'style-2') {
    $counter = 9;
} else {
    $counter = 8;
}
?>
<section class="site-section site-section-spacer site-section-more">
    <div class="wrapper">
        <header class="section-header section-header-center site-section-header">
            <h2 class="site-section-title">
                <?php echo esc_html($read_more_post_title); ?>
            </h2>
        </header>
        <div class="column-row">
            <div class="column column-9 column-sm-12 <?php echo esc_attr($order_column_class); ?>">
                <div class="column-row column-row-small">
                    <?php $more_to_read_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' =>  $counter, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($select_cat_for_read_more_post)));
                    if ($more_to_read_post_query->have_posts()) :
                        while ($more_to_read_post_query->have_posts()) : $more_to_read_post_query->the_post();
                    ?>
                            <div class="column <?php echo $column_class; ?> column-sm-6 column-xs-12">
                                <article id="read-more-<?php the_ID(); ?>" <?php post_class('theme-article-post article-has-effect article-effect-zoom ' . $article_class); ?>>
                                    <?php if (has_post_thumbnail()) { ?>
                                        <div class="entry-image theme-border-radius <?php echo $image_class; ?> mb-10">
                                            <a href="<?php the_permalink() ?>" class="entry-image-link">
                                                <?php
                                                the_post_thumbnail('medium', array(
                                                    'alt' => the_title_attribute(array(
                                                        'echo' => false,
                                                    )),
                                                ));
                                                ?>
                                            </a>
                                            <?php if ($read_more_style != 'style-2') { ?>
                                                <div class="magxpress-meta magxpress-entry-categories">
                                                    <?php the_category(' '); ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <div class="entry-details">
                                        <?php if ($read_more_style == 'style-2') { ?>
                                            <div class="magxpress-meta magxpress-entry-categories">
                                                <?php the_category(' '); ?>
                                            </div>
                                        <?php } ?>
                                        <header class="entry-header">
                                            <?php the_title('<h3 class="entry-title ' . $article_title_class . '"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                                        </header>
                                        <?php if ($enable_date_meta) { ?>
                                            <div class="entry-meta magxpress-meta magxpress-meta-date">
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
                    <?php endif; ?>
                </div>
            </div>
            <div class="column column-3 column-sm-12 <?php echo esc_attr($order_column_class_1); ?>">
                <?php $more_to_read_list_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5, 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($select_cat_for_read_more_list_post)));
                if ($more_to_read_list_post_query->have_posts()) :
                    while ($more_to_read_list_post_query->have_posts()) : $more_to_read_list_post_query->the_post();
                ?>
                        <article id="read-more-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-list-post'); ?>>

                            <div class="entry-details">
                                <header class="entry-header">
                                    <?php the_title('<h3 class="entry-title entry-title-medium"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                                </header>

                                <?php if ($enable_date_meta) { ?>
                                    <div class="entry-meta magxpress-meta magxpress-meta-date">
                                        <?php echo esc_html(get_the_date()); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>