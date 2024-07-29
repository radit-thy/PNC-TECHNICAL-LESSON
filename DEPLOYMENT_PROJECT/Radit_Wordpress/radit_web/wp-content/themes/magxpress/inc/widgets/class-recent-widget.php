<?php
if (!defined('ABSPATH')) {
    exit;
}
class Magxpress_Recent_Posts extends Magxpress_Widget_Base
{
    /**
     * Sets up a new widget instance.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        $this->widget_cssclass = 'widget_magxpress_recent_posts';
        $this->widget_description = __("Displays recent posts with an image", 'magxpress');
        $this->widget_id = 'magxpress_recent_posts';
        $this->widget_name = __('Magxpress: Recent Posts', 'magxpress');
        $this->settings = array(
            'title' => array(
                'type' => 'text',
                'label' => __('Title', 'magxpress'),
                'std' => __('Recent Posts Widget', 'magxpress'),
            ),
            'post_settings_heading'   => array(
                'type'  => 'heading',
                'label' => __('Post Settings', 'magxpress'),
            ),
            'category' => array(
                'type' => 'dropdown-taxonomies',
                'label' => __('Select Category', 'magxpress'),
                'desc' => __('Leave empty if you don\'t want the posts to be category specific', 'magxpress'),
                'args' => array(
                    'taxonomy' => 'category',
                    'class' => 'widefat',
                    'hierarchical' => true,
                    'show_count' => 1,
                    'show_option_all' => __('&mdash; Select &mdash;', 'magxpress'),
                ),
            ),
            'number' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 1,
                'max' => '',
                'std' => 5,
                'label' => __('Number of posts to show', 'magxpress'),
            ),
            'orderby' => array(
                'type' => 'select',
                'std' => 'date',
                'label' => __('Order by', 'magxpress'),
                'options' => array(
                    'date' => __('Date', 'magxpress'),
                    'ID' => __('ID', 'magxpress'),
                    'title' => __('Title', 'magxpress'),
                    'rand' => __('Random', 'magxpress'),
                ),
            ),
            'order' => array(
                'type' => 'select',
                'std' => 'desc',
                'label' => __('Order', 'magxpress'),
                'options' => array(
                    'asc' => __('ASC', 'magxpress'),
                    'desc' => __('DESC', 'magxpress'),
                ),
            ),
            'show_counter' => array(
                'type' => 'checkbox',
                'label' => __('Show Counter', 'magxpress'),
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
                ),
                'std' => 'style_1',
            ),
        );
        parent::__construct();
    }
    /**
     * Query the posts and return them.
     * @param array $args
     * @param array $instance
     * @return WP_Query
     */
    public function get_posts($args, $instance)
    {
        $number = !empty($instance['number']) ? absint($instance['number']) : $this->settings['number']['std'];
        $orderby = !empty($instance['orderby']) ? sanitize_text_field($instance['orderby']) : $this->settings['orderby']['std'];
        $order = !empty($instance['order']) ? sanitize_text_field($instance['order']) : $this->settings['order']['std'];
        $query_args = array(
            'posts_per_page' => $number,
            'post_status' => 'publish',
            'no_found_rows' => 1,
            'orderby' => $orderby,
            'order' => $order,
            'ignore_sticky_posts' => 1
        );
        if (!empty($instance['category']) && -1 != $instance['category'] && 0 != $instance['category']) {
            $query_args['tax_query'][] = array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $instance['category'],
            );
        }
        return new WP_Query(apply_filters('magxpress_recent_posts_query_args', $query_args));
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
        $count = 1;
        if (($posts = $this->get_posts($args, $instance)) && $posts->have_posts()) {
            echo $args['before_widget'];
            do_action('magxpress_before_recent_posts_with_image');
            $style = $instance['style'];
            $post_thumbnail_size = "thumbnail";
            if ($style == 'style_3') {
                $post_thumbnail_size = "medium_large";
            }
?>
            <?php if ($instance['title']) : ?>
                <header class="theme-widget-header">
                    <h2 class="widget-title"><?php echo esc_html($instance['title']); ?></h2>
                </header>
            <?php endif; ?>
            <div class="theme-recent-widget theme-widget-list <?php echo esc_attr($style); ?>">
                <?php
                while ($posts->have_posts()) : $posts->the_post();
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-widget-article theme-list-post'); ?>>
                        <?php
                        if (has_post_thumbnail()) {
                        ?>
                            <div class="entry-image entry-image-thumbnail theme-border-radius">
                                <a href="<?php the_permalink() ?>">
                                    <?php
                                    the_post_thumbnail($post_thumbnail_size, array(
                                        'alt' => the_title_attribute(array(
                                            'echo' => false,
                                        )),
                                    ));
                                    ?>
                                    <?php if ($instance['show_counter']) { ?>
                                        <span class="theme-article-count"><?php echo absint($count); ?></span>
                                    <?php } ?>
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
                            <header class="entry-header">
                                <?php the_title('<h3 class="entry-title entry-title-xsmall"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                            </header>
                            <?php
                            if ($instance['show_date']) {
                            ?>
                                <div class="entry-meta magxpress-meta magxpress-meta-date mt-10">
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
                <?php $count++;
                endwhile;
                wp_reset_postdata(); ?>
            </div>
<?php
            do_action('magxpress_after_recent_posts_with_image');
            echo $args['after_widget'];
        }
        echo ob_get_clean();
    }
}
