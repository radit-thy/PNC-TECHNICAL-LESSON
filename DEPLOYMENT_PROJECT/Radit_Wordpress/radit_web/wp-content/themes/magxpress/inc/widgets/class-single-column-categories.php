<?php
if (!defined('ABSPATH')) {
    exit;
}
class Magxpress_Single_Column_Categories extends Magxpress_Widget_Base
{
    /**
     * Sets up a new widget instance.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        $this->widget_cssclass = 'magxpress_single_column_widget';
        $this->widget_description = __("Displays Single colum with multiple category widget", 'magxpress');
        $this->widget_id = 'magxpress-single-column-widget';
        $this->widget_name = __('Magxpress: Single Category', 'magxpress');
        $this->settings = array(
            'title' => array(
                'type' => 'text',
                'label' => __('Title', 'magxpress'),
                'std' => __('Single Category Posts Widget', 'magxpress'),
            ),
            'select_category' => array(
                'type' => 'dropdown-taxonomies',
                'label' => __('Select Category', 'magxpress'),
                'desc' => __('If you don\'t wish to specify a category for the posts, please leave this field empty.', 'magxpress'),
                'args' => array(
                    'taxonomy' => 'category',
                    'class' => 'widefat',
                    'hierarchical' => true,
                    'show_count' => 1,
                    'show_option_all' => __('&mdash; Select &mdash;', 'magxpress'),
                ),
            ),
            'post_number' => array(
                'label' => esc_html__('No. of Posts:', 'magxpress'),
                'type' => 'number',
                'css' => 'max-width:60px;',
                'std' => 6,
                'min' => 1,
                'max' => 10,
            ),
            'show_excerpt' => array(
                'type' => 'checkbox',
                'label' => __('Show Excerpt', 'magxpress'),
                'std' => true,
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
            'date_format' => array(
                'type' => 'select',
                'label' => __('Date Format', 'magxpress'),
                'options' => array(
                    'format_1' => __('Format 1', 'magxpress'),
                    'format_2' => __('Format 2', 'magxpress'),
                ),
                'std' => 'format_2',
            ),
            'style' => array(
                'type' => 'select',
                'label' => __('Style', 'magxpress'),
                'options' => array(
                    'style_1' => __('Style 1', 'magxpress'),
                    'style_2' => __('Style 2', 'magxpress'),
                    'style_3' => __('Style 3', 'magxpress'),
                    'style_4' => __('Style 4', 'magxpress'),
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
        do_action('magxpress_before_single_column_categories');
        $post_number = absint($instance['post_number']);
        ?>
        <div class="theme-widget-panel">
            <div class="column-row">
                <?php $single_column_single_arg = array(
                    'posts_per_page' => $post_number,
                    'post_status' => 'publish',
                    'no_found_rows' => 1,
                    'ignore_sticky_posts' => 1,
                );
                if (!empty($instance['select_category']) && -1 != $instance['select_category'] && 0 != $instance['select_category']) {
                    $single_column_single_arg['tax_query'][] = array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $instance['select_category'],
                    );
                }
                $style = $instance['style']; ?>
                <div class="column column-12">
                    <?php if (!empty($instance['title'])) { ?>
                        <header class="theme-widget-header">
                            <h2 class="widget-title"><?php echo $instance['title']; ?></h2>
                        </header>
                    <?php } ?>
                    <div class="theme-widget-content">
                        <div class="theme-single-category-widget theme-widget-list <?php echo esc_attr($style); ?>">
                            <?php
                            $count = 1;
                            $magxpress_single_column_single_query = new WP_Query($single_column_single_arg);
                            if ($magxpress_single_column_single_query->have_posts()):
                                while ($magxpress_single_column_single_query->have_posts()):
                                    $magxpress_single_column_single_query->the_post();
                                    ?>
                                    <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-widget-article theme-list-post article-has-effect article-effect-slide'); ?>>
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
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <div class="entry-details">
                                            <?php if ($instance['show_category']) { ?>
                                                <div class="magxpress-meta magxpress-entry-categories">
                                                    <?php the_category( ' ' ); ?>
                                                </div>
                                            <?php } ?>
                                            <header class="entry-header mb-10">
                                                <?php the_title('<h3 class="entry-title entry-title-medium"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
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
                                            <?php if ($instance['show_excerpt']) { ?>
                                                <?php if($style == 'style_4' && $count == 1) {?>
                                                    <div class="entry-content">
                                                        <?php the_excerpt(); ?>
                                                    </div>
                                                <?php } elseif ($style == 'style_1' || $style == 'style_2' ||$style == 'style_3') { ?>
                                                    <div class="entry-content">
                                                        <?php the_excerpt(); ?>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </article>
                                <?php
                                $count++;
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        do_action('magxpress_after_single_column_categories');
        echo $args['after_widget'];
        echo ob_get_clean();
    }
}