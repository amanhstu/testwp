<?php
/*This file is part of Magic Elementor child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/
$magic_elementor_lite_theme = wp_get_theme();
if (!defined('MAGIC_ELEMENTOR_LIGHT_VERSION')) {
	// Replace the version number of the theme on each release.
	define('MAGIC_ELEMENTOR_LIGHT_VERSION', $magic_elementor_lite_theme->get('Version'));
}

function magic_elementor_lite_fonts_url()
{
	$fonts_url = '';

	$font_families = array();

	$font_families[] = 'Poppins:400,600';
	$font_families[] = 'Roboto:400,600,700';

	$query_args = array(
		'family' => urlencode(implode('|', $font_families)),
		'subset' => urlencode('latin,latin-ext'),
	);

	$fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');

	return esc_url_raw($fonts_url);
}


function magic_elementor_lite_enqueue_child_styles()
{
	wp_enqueue_style('magic-elementor-lite-google-font', magic_elementor_lite_fonts_url(), array(), null);
	wp_enqueue_style('magic-elementor-lite-parent-style', get_template_directory_uri() . '/style.css', array('magic-elementor-google-font', 'magic-elementor-main-style'), '', 'all');
	wp_enqueue_style('magic-elementor-lite-main', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), MAGIC_ELEMENTOR_LIGHT_VERSION, 'all');
}
add_action('wp_enqueue_scripts', 'magic_elementor_lite_enqueue_child_styles');





add_filter('excerpt_more', 'magic_elementor_lite_exerpt_empty_string', 999);
function magic_elementor_lite_exerpt_empty_string($more)
{
	if (is_admin()) {
		return $more;
	}
	return '';
}

// newsxpaper mene style
function magic_elementor_lite_header_output()
{

?>
	<div class="menu-bar text-left">
		<div class="mg-wrapper">
			<div class="menu-bar-inside">
				<div class="head-logo">
					<?php if (has_custom_logo()) : ?>
						<div class="site-branding brand-logo">
							<?php the_custom_logo(); ?>
						</div>
					<?php endif; ?>
					<?php
					if (display_header_text() == true || (display_header_text() == true && is_customize_preview())) : ?>
						<div class="site-branding brand-text">
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
							<?php
							$magic_elementor_description = get_bloginfo('description', 'display');
							if ($magic_elementor_description || is_customize_preview()) :
							?>
								<p class="site-description">
									<?php echo $magic_elementor_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
									?>
								</p>
							<?php endif; ?>
						</div><!-- .site-branding -->
					<?php endif; ?>
				</div>
				<div class="magic-elementor-container menu-inner">
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'menu_id'        => 'magic-elementor-menu',
							'menu_class'        => 'magic-elementor-menu',
						));
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</div>

<?php
}
add_action('magic_elementor_lite_header', 'magic_elementor_lite_header_output');

require get_stylesheet_directory() . '/inc/customizer.php';

require get_stylesheet_directory() . '/inc/info/class-customize.php';

if (is_admin()) {
	require_once trailingslashit(get_stylesheet_directory()) . 'inc/about/about.php';
}
