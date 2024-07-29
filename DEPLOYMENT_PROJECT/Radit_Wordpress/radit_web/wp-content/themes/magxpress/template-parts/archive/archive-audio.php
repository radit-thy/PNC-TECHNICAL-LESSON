<?php
/**
 * Show the appropriate content for the Audio post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magxpress
 * @since Magxpress 1.0.0
 */

$content = get_the_content();

if ( has_block( 'core/audio', $content ) ) {
	magxpress_print_first_instance_of_block( 'core/audio', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	magxpress_print_first_instance_of_block( 'core/embed', $content );
} else {
	magxpress_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
if ( absint(magxpress_get_option( 'excerpt_length' )) != '0'){
    the_excerpt();
}