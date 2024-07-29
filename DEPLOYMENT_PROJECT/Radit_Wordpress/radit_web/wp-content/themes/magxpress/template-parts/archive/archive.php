<?php
/**
 * Show the excerpt.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magxpress
 * @since Magxpress 1.0.0
 */
if ( absint(magxpress_get_option( 'excerpt_length' )) != '0'){
    the_excerpt();
}