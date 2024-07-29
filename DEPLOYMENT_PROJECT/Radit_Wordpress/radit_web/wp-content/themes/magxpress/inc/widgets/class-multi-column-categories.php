<?php
if (!defined('ABSPATH')) {
    exit;
}
class Magxpress_Multi_Column_Categories extends Magxpress_Widget_Base
{
    /**
     * Sets up a new widget instance.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        $this->widget_cssclass = 'magxpress_multi_column_widget';
        $this->widget_description = __("Displays Multi colum with multiple category widget", 'magxpress');
        $this->widget_id = 'magxpress-multi-column-widget';
        $this->widget_name = __('Magxpress: Multi Categories', 'magxpress');
        $this->settings = array(
            'column_number' => array(
                'label' => esc_html__('Define No. of Column:', 'magxpress'),
                'desc' => __('Number of column you you choose the number of category with title will be shown.', 'magxpress'),
                'type' => 'number',
                'css' => 'max-width:60px;',
                'std' => 2,
                'min' => 1,
                'max' => 4,
            ),
            'title_1' => array(
                'type' => 'text',
                'label' => __('First Column: Title', 'magxpress'),
                'std' => __('Multi Categories Post Widget 1', 'magxpress'),
            ),
            'select_category_1' => array(
                'type' => 'dropdown-taxonomies',
                'label' => __('First Column: Select Category', 'magxpress'),
                'desc' => __('If you don\'t wish to specify a category for the posts, please leave this field empty.', 'magxpress'),
                'args' => array(
                    'taxonomy' => 'category',
                    'class' => 'widefat',
                    'hierarchical' => true,
                    'show_count' => 1,
                    'show_option_all' => __('&mdash; Select &mdash;', 'magxpress'),
                ),
            ),
            'title_2' => array(
                'type' => 'text',
                'label' => __('Second Column: Title', 'magxpress'),
                'std' => __('Multi Categories Post Widget 2', 'magxpress'),
            ),
            'select_category_2' => array(
                'type' => 'dropdown-taxonomies',
                'label' => __('Second Column: Select Category', 'magxpress'),
                'desc' => __('If you don\'t wish to specify a category for the posts, please leave this field empty.', 'magxpress'),
                'args' => array(
                    'taxonomy' => 'category',
                    'class' => 'widefat',
                    'hierarchical' => true,
                    'show_count' => 1,
                    'show_option_all' => __('&mdash; Select &mdash;', 'magxpress'),
                ),
            ),

            'title_3' => array(
                'type' => 'text',
                'label' => __('Second Column: Title', 'magxpress'),
                'std' => __('Multi Categories Post Widget 2', 'magxpress'),
            ),
            'select_category_3' => array(
                'type' => 'dropdown-taxonomies',
                'label' => __('Second Column: Select Category', 'magxpress'),
                'desc' => __('If you don\'t wish to specify a category for the posts, please leave this field empty.', 'magxpress'),
                'args' => array(
                    'taxonomy' => 'category',
                    'class' => 'widefat',
                    'hierarchical' => true,
                    'show_count' => 1,
                    'show_option_all' => __('&mdash; Select &mdash;', 'magxpress'),
                ),
            ),

            'title_4' => array(
                'type' => 'text',
                'label' => __('Second Column: Title', 'magxpress'),
                'std' => __('Multi Categories Post Widget 2', 'magxpress'),
            ),
            'select_category_4' => array(
                'type' => 'dropdown-taxonomies',
                'label' => __('Second Column: Select Category', 'magxpress'),
                'desc' => __('If you don\'t wish to specify a category for the posts, please leave this field empty.', 'magxpress'),
                'args' => array(
                    'taxonomy' => 'category',
                    'class' => 'widefat',
                    'hierarchical' => true,
                    'show_count' => 1,
                    'show_option_all' => __('&mdash; Select &mdash;', 'magxpress'),
                ),
            ),
            'show_featured_post' => array(
                'type' => 'checkbox',
                'label' => __('Disable Featured Post', 'magxpress'),
                'std' => false,
            ),
            'show_category' => array(
                'type' => 'checkbox',
                'label' => __('Show Category', 'magxpress'),
                'std' => true,
            ),
            'show_date' => array(
                'type' => 'checkbox',
                'label' => __('Show Date', 'magxpress'),
                'std' => true,
            ),
            'show_excerpt' => array(
                'type' => 'checkbox',
                'label' => __('Show Excerpt', 'magxpress'),
                'std' => false,
            ),
            'date_format' => array(
                'type' => 'select',
                'label' => __('Date Format', 'magxpress'),
                'options' => array(
                    'format_1' => __('Format 1', 'magxpress'),
                    'format_2' => __('Format 2', 'magxpress'),
                ),
                'std' => 'format_2',
            ),
            'show_horizontal' => array(
                'type' => 'checkbox',
                'label' => __('Horizontal Layout', 'magxpress'),
                'std' => false,
            ),
            'style' => array(
                'type' => 'select',
                'label' => __('Style', 'magxpress'),
                'options' => array(
                    'style_1' => __('Style 1', 'magxpress'),
                    'style_2' => __('Style 2', 'magxpress'),
                ),
                'std' => 'style_1',
            ),
        );
        parent::__construct();
    }
    /**
     * Output widget.
     *
     * @param array $args
     * @param array $instance
     * @see WP_Widget
     *
     */
    public function widget($args, $instance)
    {
        ob_start();
        echo $args['before_widget'];
        do_action('magxpress_before_multi_column_categories');
        $column_number = $instance['column_number'];
        $column_class_hrz = "";
?>
        <div class="theme-widget-panel">
            <div class="column-row">
                <?php for ($i = 1; $i <= $column_number; $i++) {
                    $multi_column_single_arg = array(
                        'posts_per_page' => 4,
                        'post_status' => 'publish',
                        'no_found_rows' => 1,
                        'ignore_sticky_posts' => 1,
                    );
                    if (!empty($instance['select_category_' . $i]) && -1 != $instance['select_category_' . $i] && 0 != $instance['select_category_' . $i]) {
                        $multi_column_single_arg['tax_query'][] = array(
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => $instance['select_category_' . $i]
                        );
                    }
                    $style = $instance['style'];
                    if ($instance['show_horizontal'] == true) {
                        $column_class_hrz = ' widget-column-horizontal';
                    }
                    switch ($column_number) {
                        case 1:
                            $column_class = 'column-12';
                            break;
                        case 2:
                            $column_class = 'column-6';
                            break;
                        case 3:
                            $column_class = 'column-4';
                            break;
                        case 4:
                            $column_class = 'column-3';
                            break;
                        default:
                    }
                ?>
                    <div class="column <?php echo esc_attr($column_class); ?> <?php echo esc_attr($column_class_hrz); ?> column-sm-6 column-xs-12">
                        <?php if (!empty($instance['title_' . $i])) { ?>
                            <header class="theme-widget-header">
                                <h2 class="widget-title"><?php echo $instance['title_' . $i]; ?></h2>
                            </header>
                        <?php } ?>

                        <div class="theme-widget-content">
                            <?php
                            $count = 1;
                            if ($instance['show_featured_post'] == true) {
                                $count = 2; ?>
                                <div class="theme-multi-categories-widget theme-widget-list <?php echo esc_attr($style); ?>">
                                    <?php }
                                $magxpress_multi_column_single_query = new WP_Query($multi_column_single_arg);
                                if ($magxpress_multi_column_single_query->have_posts()) :
                                    while ($magxpress_multi_column_single_query->have_posts()) :
                                        $magxpress_multi_column_single_query->the_post();
                                    ?>
                                        <?php if ($count == 1) { ?>
                                            <div class="theme-multi-categories-widget theme-widget-focus">
                                                <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-widget-article article-has-effect article-effect-slide'); ?>>
                                                    <?php
                                                    if (has_post_thumbnail()) {
                                                    ?>
                                                        <div class="entry-image entry-image-medium theme-border-radius">
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
                                                            <?php if ($instance['show_category']) { ?>
                                                                <div class="magxpress-meta magxpress-entry-categories">
                                                                    <?php the_category(' '); ?>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                    <div class="entry-details mt-10">
                                                        <?php
                                                        if ($instance['show_date']) {
                                                        ?>
                                                            <div class="entry-meta magxpress-meta magxpress-meta-date mb-10">
                                                                <?php
                                                                $date_format = $instance['date_format'];
                                                                if ('format_1' == $date_format) {
                                                                    echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'magxpress'));
                                                                } else {
                                                                    echo esc_html(get_the_date());
                                                                }
                                                                ?>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <header class="entry-header">
                                                            <?php the_title('<h3 class="entry-title entry-title-small"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                                                        </header>
                                                        <?php if ($instance['show_excerpt']) { ?>
                                                            <div class="entry-content">
                                                                <?php the_excerpt(); ?>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="theme-multi-categories-widget theme-widget-list <?php echo esc_attr($style); ?>">
                                            <?php $count++;
                                        } else { ?>
                                                <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-widget-article article-has-effect article-effect-zoom theme-list-post'); ?>>
                                                    <?php
                                                    if (has_post_thumbnail()) {
                                                    ?>
                                                        <div class="entry-image entry-image-thumbnail theme-border-radius">
                                                            <a href="<?php the_permalink() ?>" class="entry-image-link">
                                                                <?php
                                                                the_post_thumbnail('thumbnail', array(
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
                                                    <?php
                                                    }
                                                    ?>
                                                    <div class="entry-details">
                                                        <header class="entry-header mb-10">
                                                            <?php the_title('<h3 class="entry-title entry-title-xsmall"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                                                        </header>
                                                        <?php
                                                        if ($instance['show_date']) {
                                                        ?>
                                                            <div class="entry-meta magxpress-meta magxpress-meta-date">
                                                                <?php
                                                                $date_format = $instance['date_format'];
                                                                if ('format_1' == $date_format) {
                                                                    echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'magxpress'));
                                                                } else {
                                                                    echo esc_html(get_the_date());
                                                                }
                                                                ?>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </article>
                                                <?php if ($magxpress_multi_column_single_query->current_post + 1 == $magxpress_multi_column_single_query->post_count) { ?>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                            <?php
                                    endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                                </div>
                        </div>
                    <?php } ?>
                    </div>
            </div>
    <?php
        do_action('magxpress_after_multi_column_categories');
        echo $args['after_widget'];
        echo ob_get_clean();
    }
}
