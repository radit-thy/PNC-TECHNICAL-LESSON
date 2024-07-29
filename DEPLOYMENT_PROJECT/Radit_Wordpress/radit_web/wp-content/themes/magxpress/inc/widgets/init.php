<?php

/* Theme Widget sidebars. */
require get_template_directory() . '/inc/widgets/widgets.php';
require get_template_directory() . '/inc/widgets/widget-base/widgetbase.php';

require get_template_directory() . '/inc/widgets/class-recent-widget.php';
require get_template_directory() . '/inc/widgets/class-social-widget.php';
require get_template_directory() . '/inc/widgets/class-author-widget.php';
require get_template_directory() . '/inc/widgets/class-tab-widget.php';
require get_template_directory() . '/inc/widgets/class-multi-column-categories.php';
require get_template_directory() . '/inc/widgets/class-single-column-categories.php';
require get_template_directory() . '/inc/widgets/class-fullwidth-metro.php';
require get_template_directory() . '/inc/widgets/class-slider-widget.php';
require get_template_directory() . '/inc/widgets/class-carousel-widget.php';
require get_template_directory() . '/inc/widgets/class-fullwidth-widget.php';

/* Register site widgets */
if ( ! function_exists( 'magxpress_widgets' ) ) :
    /**
     * Load widgets.
     *
     * @since 1.0.0
     */
    function magxpress_widgets() {
        register_widget( 'Magxpress_Recent_Posts' );
        register_widget( 'Magxpress_Social_Menu' );
        register_widget( 'Magxpress_Author_Info' );
        register_widget( 'Magxpress_Tab_Posts' );
        register_widget( 'Magxpress_Multi_Column_Categories' );
        register_widget( 'Magxpress_Single_Column_Categories' );
        register_widget( 'Magxpress_Slider_Widget' );
        register_widget( 'Magxpress_Carousel_Widget' );
        register_widget( 'Magxpress_Fullwidth_Widget' );
        register_widget( 'Magxpress_Fullwidth_Metro' );
    }
endif;
add_action( 'widgets_init', 'magxpress_widgets' );