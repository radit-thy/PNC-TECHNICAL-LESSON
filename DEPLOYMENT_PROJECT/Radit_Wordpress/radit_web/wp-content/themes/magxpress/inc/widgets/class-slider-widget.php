<?php
if (!defined('ABSPATH')) {
    exit;
}
class Magxpress_Slider_Widget extends Magxpress_Widget_Base
{
    /**
     * Sets up a new widget instance.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        $this->widget_cssclass = 'magxpress_slider_widget';
        $this->widget_description = __("Displays Slider colum with multiple category widget", 'magxpress');
        $this->widget_id = 'magxpress-slider-widget';
        $this->widget_name = __('Magxpress: Slider', 'magxpress');
        $this->settings = array(
            'title' => array(
                'type' => 'text',
                'label' => __('First Column: Title', 'magxpress'),
                'std' => __('Slider Posts Widget', 'magxpress'),
            ),
            'select_category' => array(
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
            'content_alignment' => array(
                'type' => 'select',
                'label' => __('Content Alignment', 'magxpress'),
                'options' => array(
                    'entry-align-center' => __('Align Center', 'magxpress'),
                    'entry-align-left' => __('Align Left', 'magxpress'),
                    'entry-align-right' => __('Align Right', 'magxpress'),
                ),
                'std' => 'entry-align-center',
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
            'image_size' => array(
                'type' => 'select',
                'label' => __('Choose Image Size', 'magxpress'),
                'options' => array(
                    'image_size_1' => __('Big', 'magxpress'),
                    'image_size_2' => __('Large', 'magxpress'),
                ),
                'std' => 'image_size_1',
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
            'show_arrow' => array(
                'type' => 'checkbox',
                'label' => __('Show Arrow', 'magxpress'),
                'std' => true,
            ),
            'show_dot' => array(
                'type' => 'checkbox',
                'label' => __('Show Dots', 'magxpress'),
                'std' => true,
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
        do_action('magxpress_before_slider');
        ?>
        <div class="theme-widget-panel">
            <?php $slider_column_slider_arg = array(
                'posts_per_page' => 5,
                'post_status' => 'publish',
                'no_found_rows' => 1,
                'ignore_sticky_posts' => 1,
            );
            if (!empty($instance['select_category']) && -1 != $instance['select_category'] && 0 != $instance['select_category']) {
                $slider_column_slider_arg['tax_query'][] = array(
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $instance['select_category'],
                );
            }
            ?>
            <?php
            $image_size = $instance['image_size'];
            switch ($image_size) {
                case 'image_size_1':
                    $thumbnail_class = 'entry-image-big';
                    break;
                case 'image_size_2':
                    $thumbnail_class = 'entry-image-large';
                    break;
                default:
                    $thumbnail_class = '';
            }
            ?>
            <?php if ($instance['title']) : ?>
                <header class="theme-widget-header">
                    <h2 class="widget-title"><?php echo $instance['title']; ?></h2>
                </header>
            <?php endif; ?>
            <div class="theme-widget-content">
                <div class="theme-widget-slider swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $magxpress_slider_column_slider_query = new WP_Query($slider_column_slider_arg);
                        if ($magxpress_slider_column_slider_query->have_posts()):
                            while ($magxpress_slider_column_slider_query->have_posts()):
                                $magxpress_slider_column_slider_query->the_post();
                                ?>
                                <div class="swiper-slide widget-slider-slide">
                                    <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-widget-article theme-tiles-post theme-border-radius'); ?>>
                                        <?php
                                        if (has_post_thumbnail()) {
                                            ?>
                                            <div class="entry-image <?php echo esc_attr($thumbnail_class); ?>">
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
                                                    <a href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>"
                                                       class="featured-media-fullscreen" data-glightbox="">
                                                        <?php magxpress_theme_svg('fullscreen'); ?>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <div class="entry-details">
                                            <div class="entry-details-wrapper <?php echo esc_attr($instance['content_alignment']); ?>">
                                                <?php if ($instance['show_category']) { ?>
                                                    <div class="magxpress-meta magxpress-entry-categories">
                                                        <?php the_category(' '); ?>
                                                    </div>
                                                <?php } ?>
                                                <header class="entry-header">
                                                    <?php the_title('<h3 class="entry-title entry-title-big"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                                                </header>
                                                <?php
                                                if ($instance['show_date']) {
                                                    ?>
                                                    <div class="entry-meta magxpress-meta">
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
                                                        <?php the_excerpt(); ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <?php if (!empty($instance['show_arrow']) || !empty($instance['show_dot'])) { ?>
                        <div class="theme-swiper-control swiper-control">
                            <?php if (!empty($instance['show_arrow'])) { ?>
                                <div class="swiper-button-prev widget-slider-prev"></div>
                                <div class="swiper-button-next widget-slider-next"></div>
                            <?php } ?>
                            <?php if (!empty($instance['show_dot'])) { ?>
                                <div class="swiper-pagination theme-swiper-pagination widget-slider-pagination"></div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php
        do_action('magxpress_after_slider');
        echo $args['after_widget'];
        echo ob_get_clean();
    }
}