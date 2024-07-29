<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function magxpress_widgets_init() {
    $sidebar_args['sidebar'] = array(
        'name'          => __( 'Sidebar', 'magxpress' ),
        'id'            => 'sidebar-1',
        'description' => __( 'The sidebar will display any widgets that are added to this region.', 'magxpress' ),
    );

    $sidebar_args['offcanvas_sidebar'] = array(
        'name'          => __( 'Offcanvas Widget', 'magxpress' ),
        'id'            => 'magxpress-offcanvas-widget',
        'description' => __( 'Any widgets that are placed in this area will be displayed on the offcanvas sidebar.', 'magxpress' ),
    );

    $sidebar_args['frontpage_top_fullwidth_area'] = array(
        'name'        => __( 'FrontPage FullWidth Area: Top', 'magxpress' ),
        'id'          => 'frontpage-fullwidth-top-area',
        'description' => __( 'The widgets added to this region will only be visible on main sidebar of the Front Page.', 'magxpress' ),
    );

    $sidebar_args['frontpage_threecol_sidebar_left'] = array(
        'name'        => __( 'FrontPage Left Sidebar: 3 Column Layout', 'magxpress' ),
        'id'          => 'magxpress-3-col-leftarea',
        'description' => __( 'The widgets added to this region will only be visible on main sidebar of the Front Page.', 'magxpress' ),
    );
    $sidebar_args['frontpage_threecol_sidebar_main'] = array(
        'name'        => __( 'FrontPage Main Content: 3 Column Layout', 'magxpress' ),
        'id'          => 'magxpress-sidebar-area',
        'description' => __( 'The widgets added to this region will only be visible on the sidebar of the Front Page.', 'magxpress' ),
    );
    $sidebar_args['frontpage_threecol_sidebar_right'] = array(
        'name'        => __( 'FrontPage Right Sidebar: 3 Column Layout', 'magxpress' ),
        'id'          => 'magxpress-3-col-rightarea',
        'description' => __( 'The widgets added to this region will only be visible on the sidebar of the Front Page.', 'magxpress' ),
    );

    $sidebar_args['frontpage_main_sidebar_area'] = array(
        'name'        => __( 'FrontPage Main Content: 2 Column Layout', 'magxpress' ),
        'id'          => 'front-page-main-content-area',
        'description' => __( 'The widgets added to this region will only be visible on main sidebar of the Front Page.', 'magxpress' ),
    );
    $sidebar_args['frontpage_sidebar_area'] = array(
        'name'        => __( 'FrontPage Sidebar: 2 Column Layout', 'magxpress' ),
        'id'          => 'front-page-sidebar-area',
        'description' => __( 'The widgets added to this region will only be visible on the sidebar of the Front Page.', 'magxpress' ),
    );

    $sidebar_args['frontpage_bottom_fullwidth_area'] = array(
        'name'        => __( 'FrontPage FullWidth Area: Bottom', 'magxpress' ),
        'id'          => 'frontpage-fullwidth-bottom-area',
        'description' => __( 'The widgets added to this region will only be visible on main sidebar of the Front Page.', 'magxpress' ),
    );


    /*Get the footer column from the customizer*/
    $footer_column_layout = magxpress_get_option('footer_column_layout');
    if($footer_column_layout){
        switch ($footer_column_layout) {
            case "footer_layout_1":
                $footer_column = 4;
                break;
            case "footer_layout_2":
            case "footer_layout_5":
                $footer_column = 3;
                break;
            case "footer_layout_3":
            case "footer_layout_4":
            case "footer_layout_6":
                $footer_column = 2;
                break;
            default:
                $footer_column = 4;
        }
    }else{
        $footer_column = 4;
    }

    $cols = intval( apply_filters( 'magxpress_footer_widget_columns', $footer_column ) );

    for ( $j = 1; $j <= $cols; $j++ ) {
        $footer   = sprintf( 'footer_%d', $j );

        $footer_region_name = sprintf( __( 'Footer Column %1$d', 'magxpress' ), $j );
        $footer_region_description = sprintf( __( 'Widgets added here will appear in column %1$d of the footer.', 'magxpress' ), $j );

        $sidebar_args[ $footer ] = array(
            'name'        => $footer_region_name,
            'id'          => sprintf( 'footer-%d', $j ),
            'description' => $footer_region_description,
        );
    }


    $sidebar_args = apply_filters( 'magxpress_sidebar_args', $sidebar_args );

    foreach ( $sidebar_args as $sidebar => $args ) {
        $widget_tags = array(
            'before_widget' => '<div id="%1$s" class="widget magxpress-widget %2$s"><div class="widget-content">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        );

        /**
         * Dynamically generated filter hooks. Allow changing widget wrapper and title tags. See example below.
         */
        $filter_hook = sprintf( 'magxpress_%s_widget_tags', $sidebar );
        $widget_tags = apply_filters( $filter_hook, $widget_tags );

        if ( is_array( $widget_tags ) ) {
            register_sidebar( $args + $widget_tags );
        }
    }
}
add_action( 'widgets_init', 'magxpress_widgets_init' );