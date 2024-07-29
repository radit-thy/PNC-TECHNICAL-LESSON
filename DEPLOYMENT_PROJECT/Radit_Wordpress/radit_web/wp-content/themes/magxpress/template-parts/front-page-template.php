<?php
/*
*Template Name: Homepage Template
*/
get_header();
$enable_3_column_widget_area = magxpress_get_option('enable_3_column_widget_area');

if ($enable_3_column_widget_area && (is_active_sidebar('magxpress-3-col-leftarea') || is_active_sidebar('magxpress-sidebar-area') || is_active_sidebar('magxpress-3-col-rightarea'))) { ?>
    <section class="site-section three-column-widgetarea">
        <div class="wrapper">
            <div class="column-row">
                <?php if (is_active_sidebar('magxpress-3-col-leftarea')) : ?>
                    <div class="column column-3 column-sm-6 column-xs-12 order-sm-2 theme-widgetarea theme-widgetarea-small theme-sticky-component">
                        <?php dynamic_sidebar('magxpress-3-col-leftarea'); ?>
                    </div>
                <?php endif; ?>
                <?php if (is_active_sidebar('magxpress-sidebar-area')) : ?>
                    <div class="column column-6 column-sm-12 column-xs-12 order-sm-1 theme-widgetarea theme-widgetarea-medium theme-sticky-component">
                        <?php dynamic_sidebar('magxpress-sidebar-area'); ?>
                    </div>
                <?php endif; ?>
                <?php if (is_active_sidebar('magxpress-3-col-rightarea')) : ?>
                    <div class="column column-3 column-sm-6 column-xs-12 order-sm-3 theme-widgetarea theme-widgetarea-small theme-sticky-component">
                        <?php dynamic_sidebar('magxpress-3-col-rightarea'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php }

$enable_article_with_separator_post_section = magxpress_get_option('enable_article_with_separator_post_section');
if ($enable_article_with_separator_post_section) {
    get_template_part('template-parts/front-page/article_with_separator');
}
?>


    <main id="site-content" role="main">
        <?php if (is_active_sidebar('front-page-main-content-area') || is_active_sidebar('front-page-sidebar-area')) { ?>
            <section class="site-section two-column-widgetarea">
                <div class="wrapper">
                    <?php if (is_active_sidebar('front-page-main-content-area')) : ?>
                        <div id="primary"
                             class="content-area theme-widgetarea theme-widgetarea-medium theme-sticky-component">
                            <?php dynamic_sidebar('front-page-main-content-area'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (is_active_sidebar('front-page-sidebar-area')) : ?>
                        <aside id="secondary"
                               class="widget-area theme-widgetarea theme-widgetarea-small theme-sticky-component">
                            <?php dynamic_sidebar('front-page-sidebar-area'); ?>
                        </aside>
                    <?php endif; ?>
                </div>
            </section>
        <?php } ?>

        <?php
        $enable_widget_separator_section = magxpress_get_option('enable_widget_separator_section');
        if ($enable_widget_separator_section) {
            get_template_part('template-parts/front-page/widget_separator_with_image');
        } ?>

        <?php if (is_active_sidebar('frontpage-fullwidth-bottom-area')) : ?>
            <section class="site-section fullwidth-widgetarea-bottom">
                <div class="theme-widgetarea theme-widgetarea-full">
                    <div class="wrapper">
                    <?php dynamic_sidebar('frontpage-fullwidth-bottom-area'); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </main>


<?php get_footer();
