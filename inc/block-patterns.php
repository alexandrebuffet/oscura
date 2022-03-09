<?php
/**
 * Oscura: Block Patterns
 *
 * @since Oscura 1.0.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Oscura 1.0.0
 *
 * @return void
 */
function oscura_register_block_patterns() {
	$block_pattern_categories = array(
		'oscura-featured' => array( 'label' => __( 'Featured', 'oscura' ) ),
		'oscura-footer'   => array( 'label' => __( 'Footer', 'oscura' ) ),
		'oscura-gallery'  => array( 'label' => __( 'Gallery', 'oscura' ) ),
		'oscura-general'  => array( 'label' => __( 'General', 'oscura' ) ),
		'oscura-header'   => array( 'label' => __( 'Header', 'oscura' ) ),
		'oscura-query'    => array( 'label' => __( 'Query', 'oscura' ) ),
		'oscura-page'     => array( 'label' => __( 'Page', 'oscura' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Oscura 1.0.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'oscura_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'footer/footer-default',
		'gallery/gallery-framed-images-one-column',
		'gallery/gallery-overscroll',
		'general/general-30x40-frame-image-a4-portrait',
		'general/general-40x30-frame-image-a4-landscape',
		'general/general-feature-one-column-left',
		'general/general-one-column-left-content',
		'header/header-default',
		'header/header-v2',
		'hidden/hidden-404',
		'page/page-about',
		'page/page-gallery-one-column-left',
		'page/page-home',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Oscura 1.0.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'oscura_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {

		register_block_pattern(
			'oscura/' . $block_pattern,
			require get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' )
		);
	}
}

add_action( 'init', 'oscura_register_block_patterns', 9 );
