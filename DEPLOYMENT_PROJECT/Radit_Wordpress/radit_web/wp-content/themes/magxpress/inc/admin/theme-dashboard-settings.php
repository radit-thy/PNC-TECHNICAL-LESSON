<?php
/**
 * Theme activation.
 * @package Magxpress
 * Theme Dashboard [Free VS Pro]
 */
function magxpress_free_vs_pro_html() {
	ob_start();
	?>
	<div class="theme-admin-title"><?php esc_html_e( 'Differences between Magxpress and Magxpress Pro', 'magxpress' ); ?></div>
	<div class="theme-admin-description"><?php esc_html_e( 'Here are some of the differences between Magxpress and Magxpress Pro:', 'magxpress' ); ?></div>

	<table class="freemium-comparison-table">
		<thead>
			<tr>
				<th><?php esc_html_e( 'Feature', 'magxpress' ); ?></th>
				<th><?php esc_html_e( 'Magxpress', 'magxpress' ); ?></th>
				<th><?php esc_html_e( 'Magxpress Pro', 'magxpress' ); ?></th>
			</tr>
		</thead>
		<tbody>
            <tr>
                <td><?php esc_html_e( 'Responsive Design', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Multiple Blog Layouts', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Live editing in Customizer', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'One Click Demo Import', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>

            <tr>
                <td><?php esc_html_e( 'Access to all Google Fonts', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Access to Color Options', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
			<tr>
				<td><?php esc_html_e( 'Preloader Option', 'magxpress' ); ?></td>
				<td><span class="theme-dashboard-badge">2</span></td>
				<td><span class="theme-dashboard-badge">5</span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Multiple Header Options', 'magxpress' ); ?></td>
				<td><span class="theme-dashboard-badge">3 Layouts</span></td>
				<td><span class="theme-dashboard-badge">5 Layouts</span></td>
			</tr>
            <tr>
                <td><?php esc_html_e( 'Logo and Title Customization', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Header Image', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Custom Widgets', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Frontpage Banner', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge">2 Layouts</span></td>
                <td><span class="theme-dashboard-badge">3 Layouts</span></td>
            </tr>
			<tr>
				<td><?php esc_html_e( 'Hide Theme Credit Link', 'magxpress' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Extra Widget Area', 'magxpress' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Instagram Module', 'magxpress' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Twitter Module', 'magxpress' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Table of Contents', 'magxpress' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Share Buttons', 'magxpress' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Maintenance mode', 'magxpress' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Hooks system', 'magxpress' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
            <tr>
                <td><?php esc_html_e( 'Translations Ready', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'SEO Optimized', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'RTL Compatibility', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'WooCommerce Compatibility', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Breadcrumbs Module', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Gutenberg Compatibility', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Footer Widgets Section', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Display Related Posts', 'magxpress' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
			<tr>
				<td><?php esc_html_e( 'Support', 'magxpress' ); ?></td>
				<td><span class="theme-dashboard-badge">Normal Support</span></td>
				<td><span class="theme-dashboard-badge">Dedicated Priority Support</span></td>
			</tr>
		</tbody>
	</table>

	<div class="theme-admin-separator"></div>

	<h4>
		<a href="https://www.themeinwp.com/theme/magxpress-pro/#compare-all-features" target="_blank">
			<?php esc_html_e( 'How Magxpress and Magxpress Pro are different from each other - here\'s the complete list.', 'magxpress' ); ?>
		</a>
	</h4>

	<div class="theme-admin-separator"></div>

    <div class="theme-admin-button-wrap">
		<a href="https://www.themeinwp.com/theme/magxpress-pro/" class="button theme-admin-button admin-button-primary">
			<?php esc_html_e( 'Get Magxpress Pro Today', 'magxpress' ); ?>
		</a>
    </div>
	<?php
	return ob_get_clean();
}

/**
 * Theme Dashboard Settings
 *
 * @param array $settings The settings.
 */
function magxpress_dashboard_settings( $settings ) {

	// Starter.

	// Hero.
	$settings['hero_title']       = esc_html__( 'Welcome to Magxpress', 'magxpress' );
	$settings['hero_themes_desc'] = esc_html__( 'Your installation of Magxpress is complete and ready for use. We\'ve prepared a unique onboarding process through our Getting started page. It helps you get started and configure your upcoming website with ease. Let\'s make it shine!', 'magxpress' );
	$settings['hero_desc']        = esc_html__( 'Magxpress is now installed and ready to go. To help you with the next step, we\'ve gathered together on this page all the resources you might need. We hope you enjoy using Magxpress.', 'magxpress' );
	$settings['hero_image']       = get_template_directory_uri() . '/inc/admin/dashboard/images/welcome-banner.png';

	// Tabs.
	$settings['tabs'] = array(
		array(
			'name'    => esc_html__( 'Theme Features', 'magxpress' ),
			'type'    => 'features',
			'visible' => array( 'free', 'pro' ),
			'data' => array(
                array(
                    'name' => esc_html__('Add Background Image', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=background_image'),
                ),
                array(
                    'name' => esc_html__('Add Widgets', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[panel]=widgets'),
                ),
                array(
                    'name' => esc_html__('Change Site Title or Logo', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=title_tagline'),
                ),
                array(
                    'name' => esc_html__('Topbar Options', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=topbar_options'),
                ),
                array(
                    'name' => esc_html__('Header Options', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=header_options'),
                ),
                array(
                    'name' => esc_html__('Progressbar Options', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=progressbar_options'),
                ),
                array(
                    'name' => esc_html__('Color Options', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=colors'),
                ),
                array(
                    'name' => esc_html__('Archive Options', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=archive_options'),
                ),
                array(
                    'name' => esc_html__('Single Options', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=single_options'),
                ),
                array(
                    'name' => esc_html__('Pagination Options', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=pagination_options'),
                ),
                array(
                    'name' => esc_html__('Footer Options', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=footer_options'),
                ),
                array(
                    'name' => esc_html__('Read Time Options', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=read_time_options'),
                ),
                array(
                    'name' => esc_html__('Dark/Light Mode Options', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=dark_mode_options'),
                ),
                array(
                    'name' => esc_html__('Preloader Options', 'magxpress'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=preloader_options'),
                ),
            ),
		),
		array(
			'name'    => esc_html__( 'Free vs PRO', 'magxpress' ),
			'type'    => 'html',
			'visible' => array( 'free' ),
			'data'    => magxpress_free_vs_pro_html(),
		),
		array(
			'name'    => esc_html__( 'Performance optimization tools', 'magxpress' ),
			'type'    => 'performance',
			'visible' => array( 'free', 'pro' ),
		),
	);
	
	$settings['tabs'][0]['data'] = array_merge( $settings['tabs'][0]['data'], array(
		array(
			'name'          => esc_html__( 'Typography Option', 'magxpress' ),
			'type'          => 'pro',
			'customize_uri' => '/wp-admin/customize.php?autofocus[section]=typography_options',
		),
        array(
            'name'          => esc_html__( 'Remove Footer credits', 'magxpress' ),
            'type'          => 'pro',
            'customize_uri' => admin_url( '/customize.php?autofocus[section]=footer_options' ),
        ),
		array(
			'name'          => esc_html__( 'Extra Widget Area', 'magxpress' ),
			'type'          => 'pro',
            'customize_uri' => admin_url('/customize.php?autofocus[panel]=widgets'),
		),
		array(
			'name'          => esc_html__( 'Google Maps', 'magxpress' ),
			'type'          => 'pro',
			'customize_uri' => '/wp-admin/customize.php?autofocus[section]=magxpress_pro_maps',
		),
        array(
            'name'          => esc_html__( 'Instagram Module', 'magxpress' ),
            'type'          => 'pro',
            'customize_uri' => '/wp-admin/options-general.php?page=premiumkits_connect',
            'text'			=> __( 'Display the Instagram feed in your website', 'magxpress' ) . '<div><a target="_blank" href="https://docs.themeinwp.com/docs/premiumkits/social-integrations/instagram-integration/">' . __( 'Documentation article', 'magxpress' ) . '</a></div>',
        ),
        array(
            'name'          => esc_html__( 'Twitter Module', 'magxpress' ),
            'type'          => 'pro',
            'customize_uri' => '/wp-admin/options-general.php?page=premiumkits_connect&tab=twitter',
            'text'			=> __( 'Display the Twitter feed in your website', 'magxpress' ) . '<div><a target="_blank" href="https://docs.themeinwp.com/docs/premiumkits/social-integrations/twitter-integration/">' . __( 'Documentation article', 'magxpress' ) . '</a></div>',
        ),
        array(
            'name'          => esc_html__( 'Table of Contents', 'magxpress' ),
            'type'          => 'pro',
            'customize_uri' => '/wp-admin/options-general.php?page=premiumkits_table_of_contents',
            'text'			=> __( 'Display table of contents automatically on single post based on the headings tags.', 'magxpress' ) . '<div><a target="_blank" href="https://docs.themeinwp.com/docs/premiumkits/content-presentation/table-of-contents/">' . __( 'Documentation article', 'magxpress' ) . '</a></div>',
        ),
        array(
            'name'          => esc_html__( 'Share Buttons', 'magxpress' ),
            'type'          => 'pro',
            'customize_uri' => '/wp-admin/options-general.php?page=premiumkits_share_buttons',
            'text'			=> __( 'Allow visitors to share your content via email and social media.', 'magxpress' ) . '<div><a target="_blank" href="https://docs.themeinwp.com/docs/premiumkits/social-integrations/share-buttons/">' . __( 'Documentation article', 'magxpress' ) . '</a></div>',
        ),
        array(
            'name'          => esc_html__( 'Maintenance mode', 'magxpress' ),
            'type'          => 'pro',
            'customize_uri' => '/wp-admin/options-general.php?page=premiumkits_coming_soon',
            'text'			=> __( 'Display a user-friendly coming soon notice to visitors ', 'magxpress' ) . '<div><a target="_blank" href="https://docs.themeinwp.com/docs/premiumkits/utilities/coming-soon/">' . __( 'Documentation article', 'magxpress' ) . '</a></div>',
        ),
	) );

	// Documentation.
	$settings['documentation_link'] = 'https://docs.themeinwp.com/docs/magxpress/';

	// Promo.
	$settings['promo_title']  = esc_html__( 'Upgrade to Pro', 'magxpress' );
	$settings['promo_desc']   = esc_html__( 'Take Magxpress to a whole other level by upgrading to the Pro version.', 'magxpress' );
	$settings['promo_button'] = esc_html__( 'Discover Magxpress Pro', 'magxpress' );
	$settings['promo_link']   = 'https://themeinwp.com/theme/magxpress-pro';

	// Review.
	$settings['review_link']       = 'https://wordpress.org/support/theme/magxpress/reviews/';
	$settings['suggest_idea_link'] = 'https://www.themeinwp.com/contact-us/';

	// Support.
	$settings['support_link']     = 'https://wordpress.org/support/theme/magxpress/';
	$settings['support_pro_link'] = 'https://www.themeinwp.com/support/';

	// Community.
	$settings['community_link'] = 'https://www.facebook.com/themeinwp/';

	$theme = wp_get_theme();
	// Changelog.
	$settings['changelog_version'] = $theme->version;
	$settings['changelog_link']    = 'https://themeinwp.com/changelog/magxpress/';

	return $settings;
}
add_filter( 'thd_register_settings', 'magxpress_dashboard_settings' );