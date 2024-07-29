<?php
/**
 * Displays progressbar
 *
 * @package Magxpress
 */

$show_progressbar = magxpress_get_option( 'show_progressbar' );

if ( $show_progressbar ) :
	$progressbar_position = magxpress_get_option( 'progressbar_position' );
	echo '<div id="magxpress-progress-bar" class="theme-progress-bar ' . esc_attr( $progressbar_position ) . '"></div>';
endif;
