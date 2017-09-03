<?php

/**
 * Redirect to Getting Started page on theme activation
 */
function tar_redirect_on_activation() {
	global $pagenow;

	if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) {

		wp_redirect( admin_url( "themes.php?page=tar-getting-started" ) );

	}
}
add_action( 'admin_init', 'tar_redirect_on_activation' );

function tar_start_load_admin_scripts() {

	// Load styles only on our page
	global $pagenow;
	if( 'themes.php' != $pagenow )
		return;

	wp_register_style( 'tar-getting-started', get_template_directory_uri() . '/inc/dashboard/tar-info-dashboard.css', false, '1.0.0' );
	wp_enqueue_style( 'tar-getting-started' );
}

add_action( 'admin_enqueue_scripts', 'tar_start_load_admin_scripts' );


/* Hook a menu under Appearance */
function tar_getting_started_menu() {
	add_theme_page(
		esc_attr__( 'Tar: Get Started', 'tar' ),
		esc_attr__( 'Tar: Get Started', 'tar' ),
		'manage_options',
		'tar-getting-started',
		'tar_getting_started'
	);
}

add_action( 'admin_menu', 'tar_getting_started_menu' );



/**
 * Theme Info Page
 */
function tar_getting_started() {

	// Theme info
	$theme = wp_get_theme( 'tar' );
?>

		<div class="wrap getting-started">
		<div class="getting-started__header">
		<div class="row">
			<div class="col-md-5 intro">
				<h2><?php esc_html_e( 'Welcome to Tar', 'tar' ); ?></h2>
				<p>Version: <?php echo $theme['Version'];?></p>
				<span class="intro__version">
				<?php esc_html_e( 'Thank you for installing Tar! You can now build your own lightweight & blazing fast website within mintues.', 'tar' ); ?> 
				</span>

			<!-- <div class="club-discount"> 
				<p><strong> --><?php //esc_html_e( 'Exclusive 15% Discount!', 'tar' ); ?><!-- </strong></p> -->
				<!-- <p> --><?php
						//$themes_link = '<code><strong>15PERCENT</strong></code>';
						//printf( __( 'Use the code %s to get 15&#37; off when you purchase Tar Pro! For <strong>this month only</strong>', 'tar' ), $themes_link );
					?>
				<!-- </p>
			</div> 
			</div> -->

		<!-- 	<div class="col-md-7">
			<div class="dashboard__block block--pro">
				<h3>Why buy Tar pro</h3>
				<img src="<?php echo get_template_directory_uri() . '/assets/images/front-page-layouts.jpg'; ?>" alt="<?php esc_html_e( 'Why Upgrade To Tar Pro', 'tar' ); ?>" />
			</div>
			</div> -->
			<h3 class="dashboard__why_buy">Why Upgrade To Tar Pro</h3>
			<div class="col-md-12 text-block" style="padding-top: 2%;">
			<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/front-page-layouts.jpg'; ?>" alt="<?php esc_html_e( 'Why Upgrade To Tar Pro', 'tar' ); ?>" />
					</div>
					<div class="col-md-5 dashboard-upgrade-right">
					<h2 class="dashboard-upgrade-title">Overall 30+ Beautiful Layouts</h2>
					<span class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/tar#buy_pro" target="_blank">Upgrade</a></span>
					<p>Beautiful layouts to create absolutely stunning websites</p>
					<div class="dashboard-upgrade-benefit">
					<ul>
						<li>No hassle! Spend less time building website</li>
						<li>Check out the <a target="_blank" href="<?php echo esc_url('https://asphaltthemes.com/tar#demos'); ?>">Tar Demo Templates</a></li>
					</ul>

					</div>
					</div>
			</div>
			</div>

			<div class="clearfix"></div>
			<div class="dashboard_div_divider"></div>
			<div class="col-md-12 text-block no-bottom-margin">
			<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/PC1.jpg'; ?>" alt="<?php esc_html_e( 'Plugin Compatibility', 'tar' ); ?>">
					</div>
					<div class="col-md-5 dashboard-upgrade-right">
					<h2 class="dashboard-upgrade-title">Popular Plugin Compatibility</h2>
					<span class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/tar#buy_pro" target="_blank">Upgrade</a></span>
					<p>You can install & use plugins without conflict</p>
					<div class="dashboard-upgrade-benefit">
					<ul>
						<li>Installed popular plugins will add extra functionality</li>
						<li>Say goodbye to plugin conflict</li>
					</ul>

					</div>
					</div>
			</div>
			</div>
			<div class="clearfix"></div><div class="dashboard_div_divider"></div>
			<div class="col-md-12 text-block no-bottom-margin">
				<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/customize.jpg'; ?>" alt="<?php esc_html_e( 'Lots of Customization Option', 'tar' ); ?>">
					</div>
					<div class="col-md-5 dashboard-upgrade-right">
					<h2 class="dashboard-upgrade-title">Lots of Customization Option</h2>
					<span class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/tar#buy_pro" target="_blank">Upgrade</a></span>
					<p>With Tar Pro you get</p>
					<div class="dashboard-upgrade-benefit">
					<ul>
						<li>17 Shortcodes</li>
						<li>500+ Font Awesome Icons</li>
						<li>300+ Google Fonts</li>
						<li>Integrated SEO Schema Markup</li>
						<li>30+ overall layout</li>
						<li>Drag & Drop Frontpage Sections</li>
						<li>TinyMCE Buttons for 3 WP default Shortcode</li>
						<li>6 widget areas</li>
						<li>10 popular plugin compatibility</li>
					</ul>

					</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div><div class="dashboard_div_divider"></div>
		</div>
		</div>

			<div class="col-md-12 tar__upgrade-info-box no-top-margin">
			<div class="row flexify--center">
				<div class="col-md-7">
					<h2>Upgrade To Get The Most Out Of Tar</h2>
					<p>Stop paying for features you will never use. Build a beautiful & lightweight Website with Tar Pro. Upgrade now, comes with 14 refund policy.</p>
				</div>

				<div class="col-md-5 dashboard-cta-right">
					<a class="theme__cta--download--pro" href="<?php echo esc_url('https://asphaltthemes.com/tar#buy_pro'); ?>">Upgrade Now</a>
					<!-- <a class="theme__cta--demo" href="<?php echo esc_url('demo.atlantisthemes.com'); ?>">Live Demo</a> -->
				</div>
			</div>
			</div>



		<div class="dashboard__blocks">
			<div class="col-md-4">
				<h3>Get Support</h3>
				<ol>
					<li>Tar <a href="<?php echo esc_url('https://asphaltthemes.com/docs/upgrading-to-tar-pro/upgrading-to-tar-pro/'); ?>">Documentation</a></li>
					<li>WordPress.org <a href="<?php echo esc_url('https://wordpress.org/support/theme/tar'); ?>">Support Forum</a></li>
					<li><a href="<?php echo esc_url('https://asphaltthemes.com/contact/'); ?>">Email Support</a> (Pro Users)</li>
				</ol>
			</div>

			<div class="col-md-4">
				<h3>Getting Started</h3>
				<ol>
					<li>Start <a href="<?php echo esc_url( admin_url('customize.php') ); ?>">Customizing</a> your website</li>
					<li>Upgrade to Pro to unlock all features</li>
				</ol>
			</div>

			<div class="col-md-4">
				<h3>Theme Documentation</h3>
				<ol>
					<li><a href="<?php echo esc_url('https://asphaltthemes.com/docs/upgrading-to-tar-pro/how-to-setup-front-page/'); ?>">How To Set up the Front Page</a></li>
					<li><a href="<?php echo esc_url('https://asphaltthemes.com/docs/upgrading-to-tar-pro/upgrading-to-tar-pro/'); ?>">Upgrading To Tar Pro</a></li>
					<li><a href="<?php echo esc_url('https://asphaltthemes.com/docs/upgrading-to-tar-pro/upgrading-to-tar-pro/basic-site-settings/'); ?>">Basic Site Settings</a></li>
				</ol>
			</div>
		</div>

		</div><!-- .getting-started -->

	<?php
}