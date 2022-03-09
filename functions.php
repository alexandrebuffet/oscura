<?php
/**
 * Oscura functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Oscura
 * @since Oscura 1.0.0
 */

/**
 * The theme version.
 *
 * @since Oscura 1.0.0
 */
define( 'OSCURA_VERSION', wp_get_theme()->get( 'Version' ) );

if ( ! function_exists( 'oscura_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Oscura 1.0.0
	 *
	 * @return void
	 */
	function oscura_setup() {

		// Load translations.
		load_theme_textdomain( 'oscura', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style(
			array(
				'style.css',
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

		/*
		* Load additional block styles.
		* See details on how to add more styles in the readme.txt.
		*/
		$styled_blocks = array( 'group', 'image', 'post-author', 'post-template', 'post-terms', 'post-title', 'query-pagination', 'site-title', 'term-description' );
		foreach ( $styled_blocks as $block_name ) {
			$args = array(
				'handle' => "oscura-$block_name",
				'src'    => get_theme_file_uri( "assets/css/blocks/$block_name/style.css" ),
				'ver'    => OSCURA_VERSION,
				$args['path'] = get_theme_file_path( "assets/css/blocks/$block_name/style.css" ),
			);
			// Replace the "core" prefix if you are styling blocks from plugins.
			wp_enqueue_block_style( "core/$block_name", $args );
		}
	}
}

add_action( 'after_setup_theme', 'oscura_setup' );

if ( ! function_exists( 'oscura_styles' ) ) {

	/**
	 * Enqueue styles.
	 *
	 * @since Oscura 1.0.0
	 *
	 * @return void
	 */
	function oscura_styles() {

		// Register theme style.
		wp_register_style(
			'oscura-style',
			get_template_directory_uri() . '/style.css',
			array(),
			OSCURA_VERSION
		);

		// Add fonts styles inline.
		wp_add_inline_style( 'oscura-style', oscura_get_fonts_styles() );

		// Enqueue theme style.
		wp_enqueue_style( 'oscura-style' );

	}
}

add_action( 'wp_enqueue_scripts', 'oscura_styles' );

if ( ! function_exists( 'oscura_editor_styles' ) ) {
	/**
	 * Enqueue editor styles.
	 *
	 * @since Oscura 1.0.0
	 *
	 * @return void
	 */
	function oscura_editor_styles() {

		// Add fonts styles inline.
		wp_add_inline_style( 'wp-block-library', oscura_get_fonts_styles() );

	}
}

add_action( 'admin_init', 'oscura_editor_styles' );

if ( ! function_exists( 'oscura_get_fonts_styles' ) ) {
	/**
	 * Get font face styles.
	 * Called by functions oscura_styles() and oscura_editor_styles().
	 *
	 * @since Oscura 1.0.0
	 *
	 * @return string
	 */
	function oscura_get_fonts_styles() {

		$font_face_style = "
		@font-face{
			font-family: 'Krona One';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/krona-one/krona-one-v12-latin-regular.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'DM Sans';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/dm-sans/dm-sans-v10-latin-regular.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'DM Sans';
			font-weight: 400;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/dm-sans/dm-sans-v10-latin-italic.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'DM Sans';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/dm-sans/dm-sans-v10-latin-700.woff2' ) . "') format('woff2');
		}
		@font-face{
			font-family: 'DM Sans';
			font-weight: 700;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/dm-sans/dm-sans-v10-latin-700-italic.woff2' ) . "') format('woff2');
		}
		";

		return apply_filters( 'oscura_font_face_style', $font_face_style );

	}
}

if ( ! function_exists( 'oscura_preload_webfonts' ) ) {

	/**
	 * Preloads the web fonts to improve performance.
	 *
	 * @since Oscura 1.0.0
	 *
	 * @return void
	 */
	function oscura_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/dm-sans/dm-sans-v10-latin-regular.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}
}

add_action( 'wp_head', 'oscura_preload_webfonts' );

/**
 * Replace the default " [&hellip;]" string displayed after trimmed excerpt with simple ellipsis HTML entity code.
 *
 * @since Oscura 1.0.0
 * @param string $more_string The string shown within the more link.
 *
 * @return string
 */
function oscura_excerpt_more( $more_string ) {
	return apply_filters( 'oscura_excerpt_more', '&hellip;' );
}

add_filter( 'excerpt_more', 'oscura_excerpt_more' );

/**
 * Remove default archive title prefix.
 * @see https://developer.wordpress.org/reference/hooks/get_the_archive_title_prefix/
 * 
 * @since Oscura 1.0.0
 * @return false
 */
add_filter( 'get_the_archive_title_prefix', '__return_false' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';
