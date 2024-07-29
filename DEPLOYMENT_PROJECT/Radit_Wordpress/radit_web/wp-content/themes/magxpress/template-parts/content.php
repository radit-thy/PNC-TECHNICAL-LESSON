<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magxpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if (is_single()) {
		global $post;
		$magxpress_post_layout = esc_html(get_post_meta($post->ID, 'magxpress_post_layout', true));
		if (empty($magxpress_post_layout)) {
			$magxpress_post_layout = 'layout-1';
		}
		if ($magxpress_post_layout == "layout-1") { ?>
			<header class="entry-header has-box-shadow">
				<?php
				if (is_singular()) :
					the_title('<h1 class="entry-title entry-title-xlarge">', '</h1>');
				else :
					the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif;

				if ('post' === get_post_type()) :
				?>

                <?php
                magxpress_posted_on();
                magxpress_posted_by();
                ?>

				<?php endif; ?>
			</header><!-- .entry-header -->

			<?php magxpress_post_thumbnail(); ?>

		<?php } ?>
	<?php } else { ?>
		<header class="entry-header">
			<?php
			if (is_singular()) :
				the_title('<h1 class="entry-title entry-title-large">', '</h1>');
			else :
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			endif;

			if ('post' === get_post_type()) :
			?>

            <?php
            magxpress_posted_on();
            magxpress_posted_by();
            ?>

			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php magxpress_post_thumbnail(); ?>
	<?php } ?>
	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'magxpress'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'magxpress'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php magxpress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->