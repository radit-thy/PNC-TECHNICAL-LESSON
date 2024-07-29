<?php
if (!defined('ABSPATH')) {
    exit;
}
class Magxpress_Carousel_Widget extends Magxpress_Widget_Base
{
    /**
     * Sets up a new widget instance.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        $this->widget_cssclass = 'magxpress_carousel_widget';
        $this->widget_description = __("Displays Carousel column with multiple category widget", 'magxpress');
        $this->widget_id = 'magxpress-carousel-widget';
        $this->widget_name = __('Magxpress: Carousel', 'magxpress');
        $this->settings = array(
            'title' => array(
                'type' => 'text',
                'label' => __('First Column: Title', 'magxpress'),
                'std' => __('Carousel Posts Widget', 'magxpress'),
            ),
            'select_category' => array(
                'type' => 'dropdown-taxonomies',
                'label' => __('First Column: Select Category', 'magxpress'),
                'desc' => __("If you don't wish to specify a category for the posts, please leave this field empty.", 'magxpress'),
                'args' => array(
                    'taxonomy' => 'category',
                    'class' => 'widefat',
                    'hierarchical' => true,
                    'show_count' => 1,
                    'show_option_all' => __('&mdash; Select &mdash;', 'magxpress'),
                ),
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
            'slides_per_view' => array(
                'type' => 'select',
                'label' => __('slidesPerView', 'magxpress'),
                'options' => array(
                    'carousal-slides-1' => __('1', 'magxpress'),
                    'carousal-slides-2' => __('2', 'magxpress'),
                    'carousal-slides-3' => __('3', 'magxpress'),
                    'carousal-slides-4' => __('4', 'magxpress'),
                    'carousal-slides-5' => __('5', 'magxpress'),
                ),
                'std' => 'carousal-slides-2',
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
                    'image_size_1' => __('Small', 'magxpress'),
                    'image_size_2' => __('Medium', 'magxpress'),
                    'image_size_3' => __('Big', 'magxpress'),
                    'image_size_4' => __('Large', 'magxpress'),
                ),
                'std' => 'image_size_2',
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
        do_action('magxpress_before_carousel');
        $style = $instance['style'];
        $showArrow = !empty($instance['show_arrow']);
        $showCategory = !empty($instance['show_category']);
        $showDate = !empty($instance['show_date']);
        $dateDiffText = '';
        if ($showDate) {
            $dateDiffText = esc_html(human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'magxpress'));
        }
?>
        <div class="theme-widget-panel">
            <?php $carousel_column_carousel_arg = array(
                'posts_per_page' => 12,
                'post_status' => 'publish',
                'no_found_rows' => 1,
                'ignore_sticky_posts' => 1,
            );
            if (!empty($instance['select_category']) && -1 != $instance['select_category'] && 0 != $instance['select_category']) {
                $carousel_column_carousel_arg['tax_query'][] = array(
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $instance['select_category'],
                );
            } ?>
            <?php
            $image_size = $instance['image_size'];
            switch ($image_size) {
                case 'image_size_1':
                    $thumbnail_class = 'entry-image-small';
                    break;
                case 'image_size_2':
                    $thumbnail_class = 'entry-image-medium';
                    break;
                case 'image_size_3':
                    $thumbnail_class = 'entry-image-big';
                    break;
                case 'image_size_4':
                    $thumbnail_class = 'entry-image-large';
                    break;
                default:
                    $thumbnail_class = '';
            }
            ?>
            <?php if (!empty($instance['title'])) { ?>
                <header class="theme-widget-header">
                    <div class="theme-widget-title">
                        <h2 class="widget-title"><?php echo $instance['title']; ?></h2>
                    </div>
                </header>
            <?php } ?>
            <div class="theme-widget-content">
                <div class="theme-widget-carousel swiper <?php echo esc_attr($instance['slides_per_view']); ?>">
                    <div class="swiper-wrapper">
                        <?php
                        $magxpress_carousel_column_carousel_query = new WP_Query($carousel_column_carousel_arg);
                        if ($magxpress_carousel_column_carousel_query->have_posts()) :
                            while ($magxpress_carousel_column_carousel_query->have_posts()) :
                                $magxpress_carousel_column_carousel_query->the_post();
                        ?>
                                <div class="swiper-slide widget-carousel-slide <?php echo esc_attr($style); ?>">
                                    <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-widget-article article-has-effect'); ?>>
                                        <?php
                                        if (has_post_thumbnail()) {
                                        ?>
                                            <div class="entry-image <?php echo esc_attr($thumbnail_class); ?> theme-border-radius">
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
                                        <?php
                                        }
                                        ?>
                                        <div class="entry-details mt-15">
                                            <?php if ($instance['show_category']) { ?>
                                                <div class="magxpress-meta magxpress-entry-categories">
                                                    <?php the_category(' '); ?>
                                                </div>
                                            <?php } ?>
                                            <header class="entry-header">
                                                <?php the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                                            </header>
                                            <?php
                                            if ($instance['show_date']) {
                                            ?>
                                                <div class="entry-meta magxpress-meta mb-15">
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
                                </div>
                        <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>

                    <div class="theme-swiper-control swiper-control mt-30">
                        <?php if (!empty($instance['show_arrow'])) { ?>
                            <div class="swiper-button-prev swiper-button-transparent widget-carousel-prev">
                            </div>
                            <div class="swiper-button-next swiper-button-transparent widget-carousel-next">
                            </div>
                        <?php } ?>

                        <?php if (!empty($instance['show_dot'])) { ?>
                            <div class="swiper-pagination theme-swiper-pagination widget-carousel-pagination"></div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
<?php
        do_action('magxpress_after_carousel');
        echo $args['after_widget'];
        echo ob_get_clean();
    }
}
