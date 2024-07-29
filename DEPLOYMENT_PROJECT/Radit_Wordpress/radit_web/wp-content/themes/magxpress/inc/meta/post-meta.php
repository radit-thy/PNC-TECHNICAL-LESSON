<?php
/**
* Sidebar Metabox.
*
* @package Magxpress
*/
if( !function_exists( 'magxpress_sanitize_sidebar_option_meta' ) ) :

    // Sidebar Option Sanitize.
    function magxpress_sanitize_sidebar_option_meta( $input ){

        $metabox_options = array( 'global-sidebar','left-sidebar','right-sidebar','no-sidebar' );
        if( in_array( $input,$metabox_options ) ){

            return $input;

        }else{

            return '';

        }
    }

endif;

if( !function_exists('magxpress_sanitize_meta_pagination') ):

    /** Sanitize Enable Disable Checkbox **/
    function magxpress_sanitize_meta_pagination( $input ) {

        $valid_keys = array('global-layout','no-navigation','norma-navigation','ajax-next-post-load');
        if ( in_array( $input , $valid_keys ) ) {
            return $input;
        }
        return '';

    }

endif;

if( !function_exists( 'magxpress_sanitize_post_layout_option_meta' ) ) :

    // Sidebar Option Sanitize.
    function magxpress_sanitize_post_layout_option_meta( $input ){

        $metabox_options = array( 'global-layout','layout-1','layout-2','layout-3' );
        if( in_array( $input,$metabox_options ) ){

            return $input;

        }else{

            return '';

        }

    }

endif;


if( !function_exists( 'magxpress_sanitize_header_overlay_option_meta' ) ) :

    // Sidebar Option Sanitize.
    function magxpress_sanitize_header_overlay_option_meta( $input ){

        $metabox_options = array( 'global-layout','enable-overlay' );
        if( in_array( $input,$metabox_options ) ){

            return $input;

        }else{

            return '';

        }

    }

endif;

add_action( 'add_meta_boxes', 'magxpress_metabox' );

if( ! function_exists( 'magxpress_metabox' ) ):


    function  magxpress_metabox() {
        
        add_meta_box(
            'theme-custom-metabox',
            esc_html__( 'Layout Settings', 'magxpress' ),
            'magxpress_post_metafield_callback',
            'post', 
            'normal', 
            'high'
        );
        add_meta_box(
            'theme-custom-metabox',
            esc_html__( 'Layout Settings', 'magxpress' ),
            'magxpress_post_metafield_callback',
            'page',
            'normal', 
            'high'
        ); 
    }

endif;

$magxpress_page_layout_options = array(
    'layout-1' => esc_html__( 'Simple Layout', 'magxpress' ),
    'layout-2' => esc_html__( 'Banner Layout', 'magxpress' ),
    'layout-3' => esc_html__( 'Hero Layout', 'magxpress' ),
);

$magxpress_post_sidebar_fields = array(
    'global-sidebar' => array(
                    'id'        => 'post-global-sidebar',
                    'value' => 'global-sidebar',
                    'label' => esc_html__( 'Global sidebar', 'magxpress' ),
                ),
    'right-sidebar' => array(
                    'id'        => 'post-left-sidebar',
                    'value' => 'right-sidebar',
                    'label' => esc_html__( 'Right sidebar', 'magxpress' ),
                ),
    'left-sidebar' => array(
                    'id'        => 'post-right-sidebar',
                    'value'     => 'left-sidebar',
                    'label'     => esc_html__( 'Left sidebar', 'magxpress' ),
                ),
    'no-sidebar' => array(
                    'id'        => 'post-no-sidebar',
                    'value'     => 'no-sidebar',
                    'label'     => esc_html__( 'No sidebar', 'magxpress' ),
                ),
);

$magxpress_post_layout_options = array(
    'layout-1' => esc_html__( 'Simple Layout', 'magxpress' ),
    'layout-2' => esc_html__( 'Banner Layout', 'magxpress' ),
    'layout-3' => esc_html__( 'Hero Layout', 'magxpress' ),

);

$magxpress_header_overlay_options = array(
    'global-layout' => esc_html__( 'Global Layout', 'magxpress' ),
    'enable-overlay' => esc_html__( 'Enable Header Overlay', 'magxpress' ),
);


/**
 * Callback function for post option.
*/
if( ! function_exists( 'magxpress_post_metafield_callback' ) ):
    
    function magxpress_post_metafield_callback() {
        global $post, $magxpress_post_sidebar_fields, $magxpress_post_layout_options,  $magxpress_page_layout_options, $magxpress_header_overlay_options;
        $post_type = get_post_type($post->ID);
        wp_nonce_field( basename( __FILE__ ), 'magxpress_post_meta_nonce' ); ?>
        
        <div class="metabox-main-block">

            <div class="metabox-navbar">
                <ul>

                    <li>
                        <a id="metabox-navbar-appearance"  class="metabox-navbar-active" href="javascript:void(0)">

                            <?php esc_html_e('Appearance Settings', 'magxpress'); ?>

                        </a>
                    </li>

                    <?php if ($post_type != 'page') { ?>
                        <li>
                            <a id="metabox-navbar-general" href="javascript:void(0)">

                                <?php esc_html_e('General Settings', 'magxpress'); ?>

                            </a>
                        </li>
                    <?php } ?>


                    <?php if( $post_type == 'post' && class_exists('Booster_Extension_Class') ): ?>
                        <li>
                            <a id="twp-tab-booster" href="javascript:void(0)">

                                <?php esc_html_e('Booster Extension Settings', 'magxpress'); ?>

                            </a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>

            <div class="twp-tab-content">

                <div id="metabox-navbar-general-content" class="metabox-content-wrap">

                    <div class="metabox-opt-panel">

                        <h3 class="meta-opt-title"><?php esc_html_e('Sidebar Layout','magxpress'); ?></h3>

                        <div class="metabox-opt-wrap metabox-opt-wrap-alt">

                            <?php
                            $magxpress_post_sidebar = esc_html( get_post_meta( $post->ID, 'magxpress_post_sidebar_option', true ) ); 
                            if( $magxpress_post_sidebar == '' ){ $magxpress_post_sidebar = 'global-sidebar'; }

                            foreach ( $magxpress_post_sidebar_fields as $magxpress_post_sidebar_field) { ?>

                                <label class="description">

                                    <input type="radio" name="magxpress_post_sidebar_option" value="<?php echo esc_attr( $magxpress_post_sidebar_field['value'] ); ?>" <?php if( $magxpress_post_sidebar_field['value'] == $magxpress_post_sidebar ){ echo "checked='checked'";} if( empty( $magxpress_post_sidebar ) && $magxpress_post_sidebar_field['value']=='right-sidebar' ){ echo "checked='checked'"; } ?>/>&nbsp;<?php echo esc_html( $magxpress_post_sidebar_field['label'] ); ?>

                                </label>

                            <?php } ?>

                        </div>

                    </div>

                </div>


                <div id="metabox-navbar-appearance-content" class="metabox-content-wrap metabox-content-wrap-active">

                    <?php if( $post_type == 'page' ): ?>

                        <div class="metabox-opt-panel">

                            <h3 class="meta-opt-title"><?php esc_html_e('Banner Layout','magxpress'); ?></h3>

                            <div class="metabox-opt-wrap metabox-opt-wrap-alt">

                                <?php
                                $magxpress_page_layout = esc_html( get_post_meta( $post->ID, 'magxpress_page_layout', true ) ); 
                                if( $magxpress_page_layout == '' ){ $magxpress_page_layout = 'layout-1'; }

                                foreach ( $magxpress_page_layout_options as $key => $magxpress_page_layout_option) { ?>

                                    <label class="description">
                                        <input type="radio" name="magxpress_page_layout" value="<?php echo esc_attr( $key ); ?>" <?php if( $key == $magxpress_page_layout ){ echo "checked='checked'";} ?>/>&nbsp;<?php echo esc_html( $magxpress_page_layout_option ); ?>
                                    </label>

                                <?php } ?>

                            </div>

                        </div>

                        <div class="metabox-opt-panel">

                            <h3 class="meta-opt-title"><?php esc_html_e('Header Overlay','magxpress'); ?></h3>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                <?php
                                $magxpress_ed_header_overlay = esc_attr( get_post_meta( $post->ID, 'magxpress_ed_header_overlay', true ) ); ?>

                                <input type="checkbox" id="magxpress-header-overlay" name="magxpress_ed_header_overlay" value="1" <?php if( $magxpress_ed_header_overlay ){ echo "checked='checked'";} ?>/>

                                <label for="magxpress-header-overlay"><?php esc_html_e( 'Enable Header Overlay','magxpress' ); ?></label>

                            </div>

                        </div>

                    <?php endif; ?>

                    <?php if( $post_type == 'post' ): ?>

                        <div class="metabox-opt-panel">

                            <h3 class="meta-opt-title"><?php esc_html_e('Header Title Layout','magxpress'); ?></h3>

                            <div class="metabox-opt-wrap metabox-opt-wrap-alt">

                                <?php
                                $magxpress_post_layout = esc_html( get_post_meta( $post->ID, 'magxpress_post_layout', true ) ); 

                                foreach ( $magxpress_post_layout_options as $key => $magxpress_post_layout_option) { ?>

                                    <label class="description">
                                        <input type="radio" name="magxpress_post_layout" value="<?php echo esc_attr( $key ); ?>" <?php if( $key == $magxpress_post_layout ){ echo "checked='checked'";} ?>/>&nbsp;<?php echo esc_html( $magxpress_post_layout_option ); ?>
                                    </label>

                                <?php } ?>

                            </div>

                        </div>

                        <div class="metabox-opt-panel">

                            <h3 class="meta-opt-title"><?php esc_html_e('Header Overlay','magxpress'); ?></h3>

                            <div class="metabox-opt-wrap metabox-opt-wrap-alt">

                                <?php
                                $magxpress_header_overlay = esc_html( get_post_meta( $post->ID, 'magxpress_header_overlay', true ) ); 
                                if( $magxpress_header_overlay == '' ){ $magxpress_header_overlay = 'global-layout'; }

                                foreach ( $magxpress_header_overlay_options as $key => $magxpress_header_overlay_option) { ?>

                                    <label class="description">
                                        <input type="radio" name="magxpress_header_overlay" value="<?php echo esc_attr( $key ); ?>" <?php if( $key == $magxpress_header_overlay ){ echo "checked='checked'";} ?>/>&nbsp;<?php echo esc_html( $magxpress_header_overlay_option ); ?>
                                    </label>

                                <?php } ?>

                            </div>

                        </div>

                    <?php endif; ?>

                </div>

                <?php if( $post_type == 'post' && class_exists('Booster_Extension_Class') ):

                    
                    $magxpress_ed_post_views = esc_html( get_post_meta( $post->ID, 'magxpress_ed_post_views', true ) );
                    $magxpress_ed_post_read_time = esc_html( get_post_meta( $post->ID, 'magxpress_ed_post_read_time', true ) );
                    $magxpress_ed_post_like_dislike = esc_html( get_post_meta( $post->ID, 'magxpress_ed_post_like_dislike', true ) );
                    $magxpress_ed_post_author_box = esc_html( get_post_meta( $post->ID, 'magxpress_ed_post_author_box', true ) );
                    $magxpress_ed_post_social_share = esc_html( get_post_meta( $post->ID, 'magxpress_ed_post_social_share', true ) );
                    $magxpress_ed_post_reaction = esc_html( get_post_meta( $post->ID, 'magxpress_ed_post_reaction', true ) );
                    $magxpress_ed_post_rating = esc_html( get_post_meta( $post->ID, 'magxpress_ed_post_rating', true ) );
                    ?>

                    <div id="twp-tab-booster-content" class="metabox-content-wrap">

                        <div class="metabox-opt-panel">

                            <h3 class="meta-opt-title"><?php esc_html_e('Booster Extension Plugin Content','magxpress'); ?></h3>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="magxpress-ed-post-views" name="magxpress_ed_post_views" value="1" <?php if( $magxpress_ed_post_views ){ echo "checked='checked'";} ?>/>
                                    <label for="magxpress-ed-post-views"><?php esc_html_e( 'Disable Post Views','magxpress' ); ?></label>

                            </div>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="magxpress-ed-post-read-time" name="magxpress_ed_post_read_time" value="1" <?php if( $magxpress_ed_post_read_time ){ echo "checked='checked'";} ?>/>
                                    <label for="magxpress-ed-post-read-time"><?php esc_html_e( 'Disable Post Read Time','magxpress' ); ?></label>

                            </div>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="magxpress-ed-post-like-dislike" name="magxpress_ed_post_like_dislike" value="1" <?php if( $magxpress_ed_post_like_dislike ){ echo "checked='checked'";} ?>/>
                                    <label for="magxpress-ed-post-like-dislike"><?php esc_html_e( 'Disable Post Like Dislike','magxpress' ); ?></label>

                            </div>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="magxpress-ed-post-author-box" name="magxpress_ed_post_author_box" value="1" <?php if( $magxpress_ed_post_author_box ){ echo "checked='checked'";} ?>/>
                                    <label for="magxpress-ed-post-author-box"><?php esc_html_e( 'Disable Post Author Box','magxpress' ); ?></label>

                            </div>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="magxpress-ed-post-social-share" name="magxpress_ed_post_social_share" value="1" <?php if( $magxpress_ed_post_social_share ){ echo "checked='checked'";} ?>/>
                                    <label for="magxpress-ed-post-social-share"><?php esc_html_e( 'Disable Post Social Share','magxpress' ); ?></label>

                            </div>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="magxpress-ed-post-reaction" name="magxpress_ed_post_reaction" value="1" <?php if( $magxpress_ed_post_reaction ){ echo "checked='checked'";} ?>/>
                                    <label for="magxpress-ed-post-reaction"><?php esc_html_e( 'Disable Post Reaction','magxpress' ); ?></label>

                            </div>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="magxpress-ed-post-rating" name="magxpress_ed_post_rating" value="1" <?php if( $magxpress_ed_post_rating ){ echo "checked='checked'";} ?>/>
                                    <label for="magxpress-ed-post-rating"><?php esc_html_e( 'Disable Post Rating','magxpress' ); ?></label>

                            </div>

                        </div>

                    </div>

                <?php endif; ?>
                
            </div>

        </div>  
            
    <?php }
endif;

// Save metabox value.
add_action( 'save_post', 'magxpress_save_post_meta' );

if( ! function_exists( 'magxpress_save_post_meta' ) ):

    function magxpress_save_post_meta( $post_id ) {

        global $post, $magxpress_post_sidebar_fields, $magxpress_post_layout_options, $magxpress_header_overlay_options,  $magxpress_page_layout_options;

        if ( !isset( $_POST[ 'magxpress_post_meta_nonce' ] ) || !wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['magxpress_post_meta_nonce'] ) ), basename( __FILE__ ) ) ){

            return;

        }

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){

            return;

        }
            
        if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {  

            if ( !current_user_can( 'edit_page', $post_id ) ){  

                return $post_id;

            }

        }elseif( !current_user_can( 'edit_post', $post_id ) ) {

            return $post_id;

        }


        foreach ( $magxpress_post_sidebar_fields as $magxpress_post_sidebar_field ) {  
            

                $old = esc_html( get_post_meta( $post_id, 'magxpress_post_sidebar_option', true ) ); 
                $new = isset( $_POST['magxpress_post_sidebar_option'] ) ? magxpress_sanitize_sidebar_option_meta( wp_unslash( $_POST['magxpress_post_sidebar_option'] ) ) : '';

                if ( $new && $new != $old ){

                    update_post_meta ( $post_id, 'magxpress_post_sidebar_option', $new );

                }elseif( '' == $new && $old ) {

                    delete_post_meta( $post_id,'magxpress_post_sidebar_option', $old );

                }

            
        }

        $twp_disable_ajax_load_next_post_old = esc_html( get_post_meta( $post_id, 'twp_disable_ajax_load_next_post', true ) ); 
        $twp_disable_ajax_load_next_post_new = isset( $_POST['twp_disable_ajax_load_next_post'] ) ? magxpress_sanitize_meta_pagination( wp_unslash( $_POST['twp_disable_ajax_load_next_post'] ) ) : '';

        if( $twp_disable_ajax_load_next_post_new && $twp_disable_ajax_load_next_post_new != $twp_disable_ajax_load_next_post_old ){

            update_post_meta ( $post_id, 'twp_disable_ajax_load_next_post', $twp_disable_ajax_load_next_post_new );

        }elseif( '' == $twp_disable_ajax_load_next_post_new && $twp_disable_ajax_load_next_post_old ) {

            delete_post_meta( $post_id,'twp_disable_ajax_load_next_post', $twp_disable_ajax_load_next_post_old );

        }


        foreach ( $magxpress_post_layout_options as $magxpress_post_layout_option ) {  
            
            $magxpress_post_layout_old = esc_html( get_post_meta( $post_id, 'magxpress_post_layout', true ) ); 
            $magxpress_post_layout_new = isset( $_POST['magxpress_post_layout'] ) ? magxpress_sanitize_post_layout_option_meta( wp_unslash( $_POST['magxpress_post_layout'] ) ) : '';

            if ( $magxpress_post_layout_new && $magxpress_post_layout_new != $magxpress_post_layout_old ){

                update_post_meta ( $post_id, 'magxpress_post_layout', $magxpress_post_layout_new );

            }elseif( '' == $magxpress_post_layout_new && $magxpress_post_layout_old ) {

                delete_post_meta( $post_id,'magxpress_post_layout', $magxpress_post_layout_old );

            }
            
        }



        foreach ( $magxpress_header_overlay_options as $magxpress_header_overlay_option ) {  
            
            $magxpress_header_overlay_old = esc_html( get_post_meta( $post_id, 'magxpress_header_overlay', true ) ); 
            $magxpress_header_overlay_new = isset( $_POST['magxpress_header_overlay'] ) ? magxpress_sanitize_header_overlay_option_meta( wp_unslash( $_POST['magxpress_header_overlay'] ) ) : '';

            if ( $magxpress_header_overlay_new && $magxpress_header_overlay_new != $magxpress_header_overlay_old ){

                update_post_meta ( $post_id, 'magxpress_header_overlay', $magxpress_header_overlay_new );

            }elseif( '' == $magxpress_header_overlay_new && $magxpress_header_overlay_old ) {

                delete_post_meta( $post_id,'magxpress_header_overlay', $magxpress_header_overlay_old );

            }
            
        }


        $magxpress_ed_post_views_old = esc_html( get_post_meta( $post_id, 'magxpress_ed_post_views', true ) ); 
        $magxpress_ed_post_views_new = isset( $_POST['magxpress_ed_post_views'] ) ? absint( wp_unslash( $_POST['magxpress_ed_post_views'] ) ) : '';

        if ( $magxpress_ed_post_views_new && $magxpress_ed_post_views_new != $magxpress_ed_post_views_old ){

            update_post_meta ( $post_id, 'magxpress_ed_post_views', $magxpress_ed_post_views_new );

        }elseif( '' == $magxpress_ed_post_views_new && $magxpress_ed_post_views_old ) {

            delete_post_meta( $post_id,'magxpress_ed_post_views', $magxpress_ed_post_views_old );

        }



        $magxpress_ed_post_read_time_old = esc_html( get_post_meta( $post_id, 'magxpress_ed_post_read_time', true ) ); 
        $magxpress_ed_post_read_time_new = isset( $_POST['magxpress_ed_post_read_time'] ) ? absint( wp_unslash( $_POST['magxpress_ed_post_read_time'] ) ) : '';

        if ( $magxpress_ed_post_read_time_new && $magxpress_ed_post_read_time_new != $magxpress_ed_post_read_time_old ){

            update_post_meta ( $post_id, 'magxpress_ed_post_read_time', $magxpress_ed_post_read_time_new );

        }elseif( '' == $magxpress_ed_post_read_time_new && $magxpress_ed_post_read_time_old ) {

            delete_post_meta( $post_id,'magxpress_ed_post_read_time', $magxpress_ed_post_read_time_old );

        }



        $magxpress_ed_post_like_dislike_old = esc_html( get_post_meta( $post_id, 'magxpress_ed_post_like_dislike', true ) ); 
        $magxpress_ed_post_like_dislike_new = isset( $_POST['magxpress_ed_post_like_dislike'] ) ? absint( wp_unslash( $_POST['magxpress_ed_post_like_dislike'] ) ) : '';

        if ( $magxpress_ed_post_like_dislike_new && $magxpress_ed_post_like_dislike_new != $magxpress_ed_post_like_dislike_old ){

            update_post_meta ( $post_id, 'magxpress_ed_post_like_dislike', $magxpress_ed_post_like_dislike_new );

        }elseif( '' == $magxpress_ed_post_like_dislike_new && $magxpress_ed_post_like_dislike_old ) {

            delete_post_meta( $post_id,'magxpress_ed_post_like_dislike', $magxpress_ed_post_like_dislike_old );

        }



        $magxpress_ed_post_author_box_old = esc_html( get_post_meta( $post_id, 'magxpress_ed_post_author_box', true ) ); 
        $magxpress_ed_post_author_box_new = isset( $_POST['magxpress_ed_post_author_box'] ) ? absint( wp_unslash( $_POST['magxpress_ed_post_author_box'] ) ) : '';

        if ( $magxpress_ed_post_author_box_new && $magxpress_ed_post_author_box_new != $magxpress_ed_post_author_box_old ){

            update_post_meta ( $post_id, 'magxpress_ed_post_author_box', $magxpress_ed_post_author_box_new );

        }elseif( '' == $magxpress_ed_post_author_box_new && $magxpress_ed_post_author_box_old ) {

            delete_post_meta( $post_id,'magxpress_ed_post_author_box', $magxpress_ed_post_author_box_old );

        }



        $magxpress_ed_post_social_share_old = esc_html( get_post_meta( $post_id, 'magxpress_ed_post_social_share', true ) ); 
        $magxpress_ed_post_social_share_new = isset( $_POST['magxpress_ed_post_social_share'] ) ? absint( wp_unslash( $_POST['magxpress_ed_post_social_share'] ) ) : '';

        if ( $magxpress_ed_post_social_share_new && $magxpress_ed_post_social_share_new != $magxpress_ed_post_social_share_old ){

            update_post_meta ( $post_id, 'magxpress_ed_post_social_share', $magxpress_ed_post_social_share_new );

        }elseif( '' == $magxpress_ed_post_social_share_new && $magxpress_ed_post_social_share_old ) {

            delete_post_meta( $post_id,'magxpress_ed_post_social_share', $magxpress_ed_post_social_share_old );

        }



        $magxpress_ed_post_reaction_old = esc_html( get_post_meta( $post_id, 'magxpress_ed_post_reaction', true ) ); 
        $magxpress_ed_post_reaction_new = isset( $_POST['magxpress_ed_post_reaction'] ) ? absint( wp_unslash( $_POST['magxpress_ed_post_reaction'] ) ) : '';

        if ( $magxpress_ed_post_reaction_new && $magxpress_ed_post_reaction_new != $magxpress_ed_post_reaction_old ){

            update_post_meta ( $post_id, 'magxpress_ed_post_reaction', $magxpress_ed_post_reaction_new );

        }elseif( '' == $magxpress_ed_post_reaction_new && $magxpress_ed_post_reaction_old ) {

            delete_post_meta( $post_id,'magxpress_ed_post_reaction', $magxpress_ed_post_reaction_old );

        }



        $magxpress_ed_post_rating_old = esc_html( get_post_meta( $post_id, 'magxpress_ed_post_rating', true ) ); 
        $magxpress_ed_post_rating_new = isset( $_POST['magxpress_ed_post_rating'] ) ? absint( wp_unslash( $_POST['magxpress_ed_post_rating'] ) ) : '';

        if ( $magxpress_ed_post_rating_new && $magxpress_ed_post_rating_new != $magxpress_ed_post_rating_old ){

            update_post_meta ( $post_id, 'magxpress_ed_post_rating', $magxpress_ed_post_rating_new );

        }elseif( '' == $magxpress_ed_post_rating_new && $magxpress_ed_post_rating_old ) {

            delete_post_meta( $post_id,'magxpress_ed_post_rating', $magxpress_ed_post_rating_old );

        }

        foreach ( $magxpress_page_layout_options as $magxpress_post_layout_option ) {  
        
            $magxpress_page_layout_old = sanitize_text_field( get_post_meta( $post_id, 'magxpress_page_layout', true ) ); 
            $magxpress_page_layout_new = isset( $_POST['magxpress_page_layout'] ) ? magxpress_sanitize_post_layout_option_meta( wp_unslash( $_POST['magxpress_page_layout'] ) ) : '';

            if ( $magxpress_page_layout_new && $magxpress_page_layout_new != $magxpress_page_layout_old ){

                update_post_meta ( $post_id, 'magxpress_page_layout', $magxpress_page_layout_new );

            }elseif( '' == $magxpress_page_layout_new && $magxpress_page_layout_old ) {

                delete_post_meta( $post_id,'magxpress_page_layout', $magxpress_page_layout_old );

            }
            
        }

        $magxpress_ed_header_overlay_old = absint( get_post_meta( $post_id, 'magxpress_ed_header_overlay', true ) ); 
        $magxpress_ed_header_overlay_new = isset( $_POST['magxpress_ed_header_overlay'] ) ? absint( wp_unslash( $_POST['magxpress_ed_header_overlay'] ) ) : '';

        if ( $magxpress_ed_header_overlay_new && $magxpress_ed_header_overlay_new != $magxpress_ed_header_overlay_old ){

            update_post_meta ( $post_id, 'magxpress_ed_header_overlay', $magxpress_ed_header_overlay_new );

        }elseif( '' == $magxpress_ed_header_overlay_new && $magxpress_ed_header_overlay_old ) {

            delete_post_meta( $post_id,'magxpress_ed_header_overlay', $magxpress_ed_header_overlay_old );

        }

    }

endif;   