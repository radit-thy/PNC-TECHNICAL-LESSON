<?php
if (!defined('ABSPATH')) {
    exit;
}

class Magxpress_Tab_Posts extends Magxpress_Widget_Base
{
    /**
     * Sets up a new widget instance.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        $this->widget_cssclass = 'widget_magxpress_tab_posts';
        $this->widget_description = __("Displays Tab Widget", 'magxpress');
        $this->widget_id = 'magxpress_tab_posts';
        $this->widget_name = __('Magxpress: Tab Posts', 'magxpress');
        $this->settings = array(
            'popular_heading' => array(
                'label' => esc_html__('Popular', 'magxpress'),
                'type' => 'heading',
            ),
            'popular_number' => array(
                'label' => esc_html__('No. of Posts:', 'magxpress'),
                'type' => 'number',
                'css' => 'max-width:60px;',
                'std' => 5,
                'min' => 1,
                'max' => 10,
            ),
            'recent_heading' => array(
                'label' => esc_html__('Recent', 'magxpress'),
                'type' => 'heading',
            ),
            'recent_number' => array(
                'label' => esc_html__('No. of Posts:', 'magxpress'),
                'type' => 'number',
                'css' => 'max-width:60px;',
                'std' => 5,
                'min' => 1,
                'max' => 10,
            ),
            'comments_heading' => array(
                'label' => esc_html__('Comments', 'magxpress'),
                'type' => 'heading',
            ),
            'comments_number' => array(
                'label' => esc_html__('No. of Comments:', 'magxpress'),
                'type' => 'number',
                'css' => 'max-width:60px;',
                'std' => 5,
                'min' => 1,
                'max' => 10,
            ),
            'tagged_heading' => array(
                'label' => esc_html__('Tagged', 'magxpress'),
                'type' => 'heading',
            ),
            'select_image_size' => array(
                'label' => esc_html__('Select Image Size Featured Post:', 'magxpress'),
                'type' => 'select',
                'std' => 'medium',
                'options' => array(
                    'thumbnail' => esc_html__('Thumbnail', 'magxpress'),
                    'medium' => esc_html__('Medium', 'magxpress'),
                    'large' => esc_html__('Large', 'magxpress'),
                    'full' => esc_html__('Full', 'magxpress'),
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
        );
        parent::__construct();
    }

    /**
     * Outputs the content for the current widget instance.
     *
     * @param array $args Display arguments.
     * @param array $instance Settings for the current widget instance.
     * @since 1.0.0
     *
     */
    function widget($args, $instance)
    {
        echo $args['before_widget'];
?>
        <div class="theme-widget-tab">
            <div class="widget-tab-header">
                <ul class="tab-header-list" role="tablist">
                    <li role="presentation" tab-data="tab-popular" class="widget-tab-presentation tab-popular active">
                        <button type="button" aria-controls="<?php echo $args['widget_id']; ?>-popular-tabpanel" aria-label="<?php esc_attr_e('Popular Tab', 'magxpress'); ?>" role="tab">
                            <span class="fire-icon tab-icon">
                                <?php magxpress_theme_svg('blaze'); ?>
                            </span>
                        </button>
                    </li>
                    <li role="presentation" tab-data="tab-recent" class="widget-tab-presentation tab-recent">
                        <button type="button" aria-controls="<?php echo $args['widget_id']; ?>-recent-tabpanel" aria-label="<?php esc_attr_e('Recent Tab', 'magxpress'); ?>" role="tab">
                            <span class="flash-icon tab-icon">
                                <?php magxpress_theme_svg('star'); ?>
                            </span>
                        </button>
                    </li>
                    <li role="presentation" tab-data="tab-comments" class="widget-tab-presentation tab-comments">
                        <button type="button" aria-controls="<?php echo $args['widget_id']; ?>-comments-tabpanel" aria-label="<?php esc_attr_e('Comments Tab', 'magxpress'); ?>" role="tab">
                            <span class="comment-icon tab-icon">
                                <?php magxpress_theme_svg('comment'); ?>
                            </span>
                        </button>
                    </li>
                    <li role="presentation" tab-data="tab-tagged" class="widget-tab-presentation tab-tagged">
                        <button type="button" aria-controls="<?php echo $args['widget_id']; ?>-tagged-tabpanel" aria-label="<?php esc_attr_e('Tagged Tab', 'magxpress'); ?>" role="tab">
                            <span class="comment-icon tab-icon">
                                <?php magxpress_theme_svg('tag'); ?>
                            </span>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="widget-tab-content">
                <div id="<?php echo $args['widget_id']; ?>-popular-tabpanel" role="tabpanel" class="tab-content-panel content-tab-popular active">
                    <?php $this->render_news('popular', $instance); ?>
                </div>

                <div id="<?php echo $args['widget_id']; ?>-recent-tabpanel" role="tabpanel" class="tab-content-panel content-tab-recent">
                    <?php $this->render_news('recent', $instance); ?>
                </div>

                <div id="<?php echo $args['widget_id']; ?>-comments-tabpanel" role="tabpanel" class="tab-content-panel content-tab-comments">
                    <?php $this->render_comments($instance); ?>
                </div>

                <div id="<?php echo $args['widget_id']; ?>-tagged-tabpanel" role="tabpanel" class="tab-content-panel content-tab-tagged">
                    <?php $this->render_tagged($instance); ?>
                </div>
            </div>
        </div>
        <?php
        echo $args['after_widget'];
    }

    /**
     * Render news.
     *
     * @param array $types Type.
     * @param array $instance Parameters.
     * @return void
     * @since 1.0.0
     *
     */
    function render_news($types, $instance)
    {
        if (!in_array($types, array('popular', 'recent'))) {
            return;
        }
        switch ($types) {
            case 'popular':
                $cat_slug = '';
                if (isset($instance['tab_cat'])) {
                    $cat_slug = $instance['tab_cat'];
                }
                $qargs = array(
                    'posts_per_page' => $instance['popular_number'],
                    'no_found_rows' => true,
                    'orderby' => 'comment_count',
                    'category_name' => $cat_slug,
                );
                break;
            case 'recent':
                $cat_slug = '';
                if (isset($instance['tab_cat'])) {
                    $cat_slug = $instance['tab_cat'];
                }
                $qargs = array(
                    'posts_per_page' => $instance['recent_number'],
                    'no_found_rows' => true,
                    'category_name' => $cat_slug,
                );
                break;
            default:
                break;
        }
        $tab_posts_query = new WP_Query($qargs);
        $style = $instance['style'];
        if ($tab_posts_query->have_posts()) :
        ?>
            <div class="theme-tab-widget theme-widget-list <?php echo esc_attr($style); ?>">
                <?php
                while ($tab_posts_query->have_posts()) :
                    $tab_posts_query->the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-widget-article theme-list-post'); ?>>
                        <?php
                        if (has_post_thumbnail()) {
                        ?>
                            <div class="entry-image entry-image-thumbnail theme-border-radius">

                                <a href="<?php the_permalink() ?>">
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

                <?php endwhile; ?>
            </div><!-- .theme-tab-widget -->
        <?php wp_reset_postdata();
        endif;
    }

    /**
     * Render comments.
     *
     * @param array $instance Parameters.
     * @return void
     * @since 1.0.0
     *
     */
    function render_comments($instance)
    {
        $cat_slug = '';
        $post_array = array();
        if (!empty($instance['tab_cat'])) {
            $cat_slug = $instance['tab_cat'];
            $qargs = array(
                'posts_per_page' => 10,
                'no_found_rows' => true,
                'category_name' => $cat_slug,
            );
            $tab_posts_query = new WP_Query($qargs);
            if ($tab_posts_query->have_posts()) {
                while ($tab_posts_query->have_posts()) {
                    $tab_posts_query->the_post();
                    $post_array[] = get_the_ID();
                }
                wp_reset_postdata();
            }
        }
        $comment_args = array(
            'number' => $instance['comments_number'],
            'status' => 'approve',
            'post_status' => 'publish',
            'post__in' => $post_array,
        );
        $comments = get_comments($comment_args);
        ?>
        <?php if (!empty($comments)) : ?>

            <div class="theme-tab-widget theme-widget-list <?php echo esc_attr($style); ?>">
                <?php foreach ($comments as $key => $comment) : ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('theme-article-post theme-widget-article theme-list-post'); ?>>
                        <div class="entry-image entry-image-thumbnail">

                            <?php $comment_author_url = esc_url(get_comment_author_url($comment)); ?>
                            <?php if (!empty($comment_author_url)) :
                                $thumb = get_avatar_url($comment, array('size' => 100)); ?>
                                <a href="<?php echo esc_url($comment_author_url); ?>" class="data-bg data-bg-widget-thumbnail" data-background="<?php echo esc_url($thumb); ?>"></a>
                            <?php else : ?>
                                <?php echo wp_kses_post(get_avatar($comment, 130)); ?>
                            <?php endif; ?>

                        </div>
                        <div class="entry-details">
                            <div class="comments-content">
                                <?php echo wp_kses_post(get_comment_author_link($comment)); ?>
                            </div>
                            <header class="entry-header">
                                <?php the_title('<h3 class="entry-title entry-title-xsmall"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                            </header>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div><!-- .comments-list -->
        <?php endif; ?>
<?php
    }

    /**
     * Render Tagged.
     *
     * @param array $instance Parameters.
     * @return void
     * @since 1.0.0
     *
     */
    function render_tagged($instance)
    {
        $args = array(
            'smallest' => 12,
            'largest' => 18,
            'unit' => 'px',
            'format' => 'flat',
            'separator' => " ",
            'orderby' => 'count',
            'order' => 'DESC',
            'show_count' => 1,
            'echo' => false
        );
        $tag_string = wp_tag_cloud($args);
        echo $tag_string;
    }
}
