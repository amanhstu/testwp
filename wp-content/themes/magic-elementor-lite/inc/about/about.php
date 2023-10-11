<?php

/**
 * About setup
 *
 * @package Magic Elementor
 */

require_once trailingslashit(get_stylesheet_directory()) . 'inc/about/class.about.php';

if (!function_exists('magic_elementor_lite_about_setup')) :

	/**
	 * About setup.
	 *
	 * @since 1.0.0
	 */
	function magic_elementor_lite_about_setup()
	{
		$theme = wp_get_theme();
		$xtheme_name = $theme->get('Name');
		$xtheme_domain = $theme->get('TextDomain');
		if ($xtheme_domain == 'x-magazine') {
			$theme_slug = $xtheme_domain;
		} else {
			$theme_slug = 'magic-elementor-lite';
		}



		$config = array(
			// Menu name under Appearance.
			'menu_name'               => sprintf(esc_html__('%s Info', 'magic-elementor-lite'), $xtheme_name),
			// Page title.
			'page_name'               => sprintf(esc_html__('%s Info', 'magic-elementor-lite'), $xtheme_name),
			/* translators: Main welcome title */
			'welcome_title'         => sprintf(esc_html__('Welcome to %s! - Version ', 'magic-elementor-lite'), $theme['Name']),
			// Main welcome content
			// Welcome content.
			'welcome_content' => sprintf(esc_html__('%1$s is now installed and ready to use. We want to make sure you have the best experience using the theme and that is why we gathered here all the necessary information for you. Thanks for using our theme!', 'magic-elementor-lite'), $theme['Name']),

			// Tabs.
			'tabs' => array(
				'getting_started' => esc_html__('Getting Started', 'magic-elementor-lite'),
				'recommended_actions' => esc_html__('Recommended Actions', 'magic-elementor-lite'),
				'useful_plugins'  => esc_html__('Useful Plugins', 'magic-elementor-lite'),
				'free_pro'  => esc_html__('Free Vs Pro', 'magic-elementor-lite'),
			),

			// Quick links.
			'quick_links' => array(
				'xmagazine_url' => array(
					'text'   => esc_html__('UPGRADE Magic Elementor PRO', 'magic-elementor-lite'),
					'url'    => 'https://wpthemespace.com/product/magic-elementor-pro/?add-to-cart=7944',
					'button' => 'danger',
				),

			),

			// Getting started.
			'getting_started' => array(
				'one' => array(
					'title'       => esc_html__('Demo Content', 'magic-elementor-lite'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('Demo content is pro feature. To import sample demo content, %1$s plugin should be installed and activated. After plugin is activated, visit Import Demo Data menu under Appearance.', 'magic-elementor-lite'), esc_html__('One Click Demo Import', 'magic-elementor-lite')),
					'button_text' => esc_html__('UPGRADE For  Demo Content', 'magic-elementor-lite'),
					'button_url'  => 'https://wpthemespace.com/product/magic-elementor-pro/?add-to-cart=7944',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),

				'two' => array(
					'title'       => esc_html__('Theme Options', 'magic-elementor-lite'),
					'icon'        => 'dashicons dashicons-admin-customizer',
					'description' => esc_html__('Theme uses Customizer API for theme options. Using the Customizer you can easily customize different aspects of the theme.', 'magic-elementor-lite'),
					'button_text' => esc_html__('Customize', 'magic-elementor-lite'),
					'button_url'  => wp_customize_url(),
					'button_type' => 'primary',
				),
				'three' => array(
					'title'       => esc_html__('Show Video', 'magic-elementor-lite'),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf(esc_html__('You may show Magic Elementor short video for better understanding', 'magic-elementor-lite'), esc_html__('One Click Demo Import', 'magic-elementor-lite')),
					'button_text' => esc_html__('Show video', 'magic-elementor-lite'),
					'button_url'  => 'https://www.youtube.com/watch?v=Bcf5Ve1eObE',
					'button_type' => 'primary',
					'is_new_tab'  => true,
				),
				'five' => array(
					'title'       => esc_html__('Set Widgets', 'magic-elementor-lite'),
					'icon'        => 'dashicons dashicons-tagcloud',
					'description' => esc_html__('Set widgets in your sidebar, Offcanvas as well as footer.', 'magic-elementor-lite'),
					'button_text' => esc_html__('Add Widgets', 'magic-elementor-lite'),
					'button_url'  => admin_url() . '/widgets.php',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
				'six' => array(
					'title'       => esc_html__('Theme Preview', 'magic-elementor-lite'),
					'icon'        => 'dashicons dashicons-welcome-view-site',
					'description' => esc_html__('You can check out the theme demos for reference to find out what you can achieve using the theme and how it can be customized. Theme demo only work in pro theme', 'magic-elementor-lite'),
					'button_text' => esc_html__('View Demo', 'magic-elementor-lite'),
					'button_url'  => 'https://afx.fullsitediting.com/demos',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
				'seven' => array(
					'title'       => esc_html__('Contact Support', 'magic-elementor-lite'),
					'icon'        => 'dashicons dashicons-sos',
					'description' => esc_html__('Got theme support question or found bug or got some feedbacks? Best place to ask your query is the dedicated Support forum for the theme.', 'magic-elementor-lite'),
					'button_text' => esc_html__('Contact Support', 'magic-elementor-lite'),
					'button_url'  => 'https://wpthemespace.com/support/',
					'button_type' => 'link',
					'is_new_tab'  => true,
				),
			),

			'useful_plugins'        => array(
				'description' => esc_html__('Theme supports some helpful WordPress plugins to enhance your site. But, please enable only those plugins which you need in your site. For example, enable WooCommerce only if you are using e-commerce.', 'magic-elementor-lite'),
				'already_activated_message' => esc_html__('Already activated', 'magic-elementor-lite'),
				'version_label' => esc_html__('Version: ', 'magic-elementor-lite'),
				'install_label' => esc_html__('Install and Activate', 'magic-elementor-lite'),
				'activate_label' => esc_html__('Activate', 'magic-elementor-lite'),
				'deactivate_label' => esc_html__('Deactivate', 'magic-elementor-lite'),
				'content'                   => array(
					array(
						'slug' => 'magical-addons-for-elementor',
						'icon' => 'svg',
					),
					array(
						'slug' => 'magical-products-display'
					),
					array(
						'slug' => 'magical-posts-display'
					),
					array(
						'slug' => 'click-to-top'
					),
					array(
						'slug' => 'gallery-box',
						'icon' => 'svg',
					),
					array(
						'slug' => 'magical-blocks'
					),
					array(
						'slug' => 'easy-share-solution',
						'icon' => 'svg',
					),
					array(
						'slug' => 'wp-edit-password-protected',
						'icon' => 'svg',
					),
				),
			),
			// Required actions array.
			'recommended_actions'        => array(
				'install_label' => esc_html__('Install and Activate', 'magic-elementor-lite'),
				'activate_label' => esc_html__('Activate', 'magic-elementor-lite'),
				'deactivate_label' => esc_html__('Deactivate', 'magic-elementor-lite'),
				'content'            => array(
					'magical-blocks' => array(
						'title'       => __('Magical Posts Display', 'magic-elementor-lite'),
						'description' => __('Now you can add or update your site elements very easily by Magical Products Display. Supercharge your Elementor block with highly customizable Magical Blocks For WooCommerce.', 'magic-elementor-lite'),
						'plugin_slug' => 'magical-products-display',
						'id' => 'magical-posts-display'
					),
					'go-pro' => array(
						'title'       => '<a target="_blank" class="activate-now button button-danger" href="https://wpthemespace.com/product/magic-elementor-pro/?add-to-cart=7944">' . __('UPGRADE Magic Elementor PRO', 'magic-elementor-lite') . '</a>',
						'description' => __('You will get more frequent updates and quicker support with the Pro version.', 'magic-elementor-lite'),
						//'plugin_slug' => 'x-instafeed',
						'id' => 'go-pro'
					),

				),
			),
			// Free vs pro array.
			'free_pro'                => array(
				'free_theme_name'     => $xtheme_name,
				'pro_theme_name'      => $xtheme_name . __(' Pro', 'magic-elementor-lite'),
				'pro_theme_link'      => 'https://wpthemespace.com/product/newsx-paper-pro/',
				/* translators: View link */
				'get_pro_theme_label' => sprintf(__('Get %s', 'magic-elementor-lite'), 'Magic Elementor Pro'),
				'features'            => array(
					array(
						'title'       => esc_html__('Daring Design for Devoted Readers', 'magic-elementor-lite'),
						'description' => esc_html__('Magic Elementor\'s design helps you stand out from the crowd and create an experience that your readers will love and talk about. With a flexible home page you have the chance to easily showcase appealing content with ease.', 'magic-elementor-lite'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Mobile-Ready For All Devices', 'magic-elementor-lite'),
						'description' => esc_html__('Magic Elementor makes room for your readers to enjoy your articles on the go, no matter the device their using. We shaped everything to look amazing to your audience.', 'magic-elementor-lite'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Home slider', 'magic-elementor-lite'),
						'description' => esc_html__('Magic Elementor gives you extra slider feature. You can create awesome home slider in this theme.', 'magic-elementor-lite'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Widgetized Sidebars To Keep Attention', 'magic-elementor-lite'),
						'description' => esc_html__('Magic Elementor comes with a widget-based flexible system which allows you to add your favorite widgets over the Sidebar as well as on offcanvas too.', 'magic-elementor-lite'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Auto Set-up Feature', 'magic-elementor-lite'),
						'description' => esc_html__('You can import demo site only one click so you can setup your site like demo very easily.', 'magic-elementor-lite'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Multiple Header Layout', 'magic-elementor-lite'),
						'description' => esc_html__('Magic Elementor gives you extra ways to showcase your header with miltiple layout option you can change it on the basis of your requirement', 'magic-elementor-lite'),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('One Click Demo install', 'magic-elementor-lite'),
						'description' => esc_html__('You can import demo site only one click so you can setup your site like demo very easily.', 'magic-elementor-lite'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Extra Drag and drop support', 'magic-elementor-lite'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advanced News Filter', 'magic-elementor-lite'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('News/posts Carousel', 'magic-elementor-lite'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Diffrent Style Blog', 'magic-elementor-lite'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Flexible Home Page Design', 'magic-elementor-lite'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Pro Service Section', 'magic-elementor-lite'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Animation Home Text', 'magic-elementor-lite'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Customizer Options', 'magic-elementor-lite'),
						'description' => esc_html__('Advance control for each element gives you different way of customization and maintained you site as you like and makes you feel different.', 'magic-elementor-lite'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('Advance Pagination', 'magic-elementor-lite'),
						'description' => esc_html__('Multiple Option of pagination via customizer can be obtained on your site like Infinite scroll, Ajax Button On Click, Number as well as classical option are available.', 'magic-elementor-lite'),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),

					array(
						'title'       => esc_html__('Premium Support and Assistance', 'magic-elementor-lite'),
						'description' => esc_html__('We offer ongoing customer support to help you get things done in due time. This way, you save energy and time, and focus on what brings you happiness. We know our products inside-out and we can lend a hand to help you save resources of all kinds.', 'magic-elementor-lite'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__('No Credit Footer Link', 'magic-elementor-lite'),
						'description' => esc_html__('You can easily remove the Theme: Magic Elementor by Magic Elementor copyright from the footer area and make the theme yours from start to finish.', 'magic-elementor-lite'),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
				),
			),

		);

		magic_elementor_lite_About::init($config);
	}

endif;

add_action('after_setup_theme', 'magic_elementor_lite_about_setup');


/**
 * Pro notice text
 *
 */
function magic_elementor_lite_pnotice_output()
{

?>
	<div class="mgadin-hero">
		<div class="mge-info-content">
			<div class="mge-info-hello">
				<?php
				$current_theme = wp_get_theme();
				$current_theme_name = $current_theme->get('Name');
				$current_user = wp_get_current_user();

				$demo_link = esc_url('https://mgpro.fullsitediting.com/demos');
				$pro_link = esc_url('https://wpthemespace.com/product/magic-elementor-pro/?add-to-cart=7944');


				esc_html_e('Hello, ', 'magic-elementor-lite');
				echo esc_html($current_user->display_name);
				?>

				<?php esc_html_e('👋🏻', 'magic-elementor-lite'); ?>
			</div>
			<div class="mge-info-desc">
				<div><?php printf(esc_html__('Attention all Magic Elementor users! 🚨 Upgrade to Magic Elementor Pro today and enjoy premade demos, one-click demo import, custom Elementor premium widgets, and so much more. With the pro version, you can take your website to the next level and truly stand out from the competition.', 'magic-elementor-lite'), $current_theme_name); ?></div>
				<div class="mge-offer"><?php printf(esc_html__('Don\'t miss out on these incredible features - upgrade to Magic Elementor Pro now! ', 'magic-elementor-lite'), $current_theme_name); ?></div>
			</div>
			<div class="mge-info-actions">
				<a href="<?php echo esc_url($pro_link); ?>" target="_blank" class="button button-primary upgrade-btn">
					<?php esc_html_e('Upgrade Pro', 'magic-elementor-lite'); ?>
				</a>
				<a href="<?php echo esc_url($demo_link); ?>" target="_blank" class="button button-primary demo-btn">
					<?php esc_html_e('View Details', 'magic-elementor-lite'); ?>
				</a>
				<button class="button button-info btnend"><?php esc_html_e('Dismiss this notice', 'magic-elementor-lite') ?></button>
			</div>

		</div>

	</div>
<?php
}


//Admin notice 
function magic_elementor_lite_new_optins_texts()
{
	global $pagenow;
	$hide_date = get_option('magic_elementor_lite_proinfo_hidedate1');
	if (!empty($hide_date)) {
		$clickhide = round((time() - strtotime($hide_date)) / 24 / 60 / 60);
		if ($clickhide < 25) {
			return;
		}
	}
	if ($pagenow == 'themes.php') {
		return;
	}

?>
	<div class="mgadin-notice notice notice-success mgadin-theme-dashboard mgadin-theme-dashboard-notice mge is-dismissible meis-dismissible">
		<?php magic_elementor_lite_pnotice_output(); ?>
	</div>
<?php

}
add_action('admin_notices', 'magic_elementor_lite_new_optins_texts');


function magic_elementor_lite_new_optins_texts_init()
{
	if (isset($_GET['mgenotice']) && $_GET['mgenotice'] == 1) {
		update_option('magic_elementor_lite_proinfo_hidedate1', current_time('mysql'));
	}
}
add_action('init', 'magic_elementor_lite_new_optins_texts_init');
