<?php
/**
 * Template part for displaying post archives
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magxpress
 */
$post_format = get_post_format();
$archive_style = magxpress_get_option('archive_style');
$enabled_post_meta = array();
switch ($archive_style) {
    case 'archive_style_1':
        $enabled_post_meta = magxpress_get_option('archive_post_meta_1');
    break;
    case 'archive_style_2':
        $enabled_post_meta = magxpress_get_option('archive_post_meta_2');
    break;
    case 'archive_style_3':
        $enabled_post_meta = magxpress_get_option('archive_post_meta_3');
    break;
    case 'archive_style_4':
        $enabled_post_meta = magxpress_get_option('archive_post_meta_4');
    break;
    
    default:
        // code...
        break;
}
$class = '';
if('archive_style_4' == $archive_style){
    $class = 'data-bg magxpress-bg-image';
}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>

    <div class="article-block-wrapper">
        
        <?php get_template_part('template-parts/archive/image-archive');?>


        <header class="entry-header">

            <?php if ( in_array('category', $enabled_post_meta) && has_category() ) :?>
                <div class="magxpress-meta magxpress-entry-categories">
                    <?php the_category( ' ' ); ?>
                </div>
            <?php endif; ?>

            <?php the_title( '<h2 class="entry-title entry-title-big"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );?>

            <?php if ( 'post' === get_post_type() ) :?>

                    <?php magxpress_post_meta_info($enabled_post_meta); ?>

            <?php endif; ?>

        </header><!-- .entry-header -->

        <div class="entry-summary">
            <?php get_template_part( 'template-parts/archive/archive', $post_format ); ?>
        </div><!-- .entry-content -->

        <?php 
        if ( 'aside' != $post_format && 'status' != $post_format ) { ?>

                <?php magxpress_entry_footer($enabled_post_meta); ?>

        <?php } ?>
        
    </div><!-- .article-block-wrapper -->

</article><!-- #post-<?php the_ID(); ?> -->