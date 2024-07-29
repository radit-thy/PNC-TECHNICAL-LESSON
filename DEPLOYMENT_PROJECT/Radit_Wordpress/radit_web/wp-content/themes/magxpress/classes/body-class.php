<?php
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function magxpress_body_classes( $classes ) {
    global $post;
    $post_type = "";
    if (!empty($post)) {
        $post_type = get_post_type($post->ID);
    }
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

    if ( is_active_sidebar( 'magxpress-offcanvas-widget' ) ) {
        $classes[] = 'has-offcanvas-sidebar';
    }

    $enable_always_dark_mode = magxpress_get_option('enable_always_dark_mode');
    if ($enable_always_dark_mode) {
        $classes[] = ' magxpress-force-dark';
    }

    // Get the color mode of the site.
    $enable_dark_mode = magxpress_get_option( 'enable_dark_mode' );
    if ( $enable_dark_mode ) {
        $classes[] = 'magxpress-dark-mode';
    } else {
        $classes[] = 'magxpress-light-mode';
    }
    if ($post_type == 'product') {
        if ( ! is_active_sidebar( 'shop-sidebar' ) ) {
            $classes[] = 'no-sidebar';
        } else {
            $page_layout = magxpress_get_page_layout();
            if('no-sidebar' != $page_layout ){
                $classes[] = 'has-sidebar '.esc_attr($page_layout);
            }
        }
    } else {
        if ($post_type != 'page') { 
        	$page_layout = magxpress_get_page_layout();
            if('no-sidebar' != $page_layout ){
                $classes[] = 'has-sidebar '.esc_attr($page_layout);
            }else{

                $classes[] = esc_attr($page_layout);
            }
        }
    }

    if (is_page_template('template-parts/front-page-template.php')) {
        $page_layout = magxpress_get_page_layout();
        if('no-sidebar' != $page_layout ){
            $classes[] = 'has-sidebar '.esc_attr($page_layout);
        }else{

            $classes[] = esc_attr($page_layout);
        }
    }


	return $classes;
}
add_filter( 'body_class', 'magxpress_body_classes' );
