<?php
/**
 * Theme functions and definitions
 *
 * @package irvine-news
 */

/**
 * After setup theme hook
 */
function irvine_news_theme_setup(){
    /*
     * Make child theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'irvine-news', get_stylesheet_directory() . '/languages' );	
	require get_stylesheet_directory() . '/inc/customizer/irvine-news-customizer-options.php';
}
add_action( 'after_setup_theme', 'irvine_news_theme_setup' );

/**
 * Load assets.
 */

function irvine_news_theme_css() {
	wp_enqueue_style( 'irvine-news-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('irvine-news-child-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('irvine-news-default-css', get_stylesheet_directory_uri() . "/assets/css/theme-default.css" );
    wp_enqueue_style('irvine-news-bootstrap-smartmenus-css', get_stylesheet_directory_uri() . "/assets/css/jquery.smartmenus.bootstrap-4.css" );
}
add_action( 'wp_enqueue_scripts', 'irvine_news_theme_css', 99);

/**
 * Fresh site activate
 *
 */
$fresh_site_activate = get_option( 'fresh_irvine_news_site_activate' );
if ( (bool) $fresh_site_activate === false ) {
	set_theme_mod( 'newsexo_typography_disabled', true );
	set_theme_mod( 'newsexo_menu_bar_background_color', '#111111' );
	set_theme_mod( 'newsexo_menu_bar_font_color', '#ffffff' );
	set_theme_mod( 'newsexo_menu_bar_active_color', '#1b8415' );
	set_theme_mod( 'newsexo_dropdown_menu_background_color', '#ffffff' );
	set_theme_mod( 'newsexo_menu_bar_font_active_color', '#ffffff' );
	set_theme_mod( 'newsexo_dropdown_menu_font_color', '#1f2024' );
	set_theme_mod( 'newsexo_dropdown_menu_active_color', '#1b8415' );
	set_theme_mod( 'newsexo_menubar_top_border_color', '#1b8415' );
	set_theme_mod( 'newsexo_featured_news_column_layout', '2' );
	set_theme_mod( 'newsexo_footer_background_color', '#111111' );
	set_theme_mod( 'newsexo_footer_widget_title_color', '#ffffff' );
	set_theme_mod( 'newsexo_footer_content_color', '#e0e0e0' );
	set_theme_mod( 'newsexo_footer_copright_content_color', '#e0e0e0' );
	set_theme_mod( 'newsexo_top_header_text_color', '#ffffff');
	set_theme_mod( 'newsexo_top_social_icon_color', '#ffffff');
	set_theme_mod( 'newsexo_theme_header_background_color', 'rgba(0,0,0,0.75)' );
	set_theme_mod( 'newsexo_theme_color', 'theme-green' );
	set_theme_mod( 'newsexo_top_header_bac_color', '#111111');
	set_theme_mod( 'newsexo_typography_h1_font_family', 'Cairo');
	set_theme_mod( 'newsexo_typography_h2_font_family', 'Cairo');
	set_theme_mod( 'newsexo_typography_h3_font_family', 'Cairo');
	set_theme_mod( 'newsexo_typography_h4_font_family', 'Cairo');
	set_theme_mod( 'newsexo_typography_h5_font_family', 'Cairo');
	set_theme_mod( 'newsexo_typography_h6_font_family', 'Cairo');
	set_theme_mod( 'newsexo_typography_h1_letter_spacing', '1px');
	set_theme_mod( 'newsexo_typography_h2_letter_spacing', '1px');
	set_theme_mod( 'newsexo_typography_h3_letter_spacing', '1px');
	set_theme_mod( 'newsexo_typography_h4_letter_spacing', '1px');
	set_theme_mod( 'newsexo_typography_h5_letter_spacing', '1px');
	set_theme_mod( 'newsexo_typography_h6_letter_spacing', '1px');
	
	update_option( 'fresh_irvine_news_site_activate', true );
}

/**
 * Page header
 *
 */
function irvine_news_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'irvine_news_custom_header_args', array(
		'default-image'      => get_stylesheet_directory_uri().'/assets/img/header-banner.jpg',
		'default-text-color' => 'fff',
		'width'              => 1920,
		'height'             => 500,
		'flex-height'        => true,
		'flex-width'         => true,
		'wp-head-callback'   => 'irvine_news_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'irvine_news_custom_header_setup' );

/**
 * Custom background
 *
 */
function irvine_news_custom_background_setup() {
	add_theme_support( 'custom-background', apply_filters( 'irvine_news_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
add_action( 'after_setup_theme', 'irvine_news_custom_background_setup' );


if ( ! function_exists( 'irvine_news_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see irvine_news_custom_header_setup().
	 */
	function irvine_news_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
			<?php
			// Has the text been hidden?
			if ( ! display_header_text() ) :
				?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}

			<?php
			// If the user has set a custom color for the text use that.
			else :
				?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?> !important;
			}

			<?php endif; ?>
		</style>
		<?php
	}
endif;