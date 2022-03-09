<?php
/**
 * Oscura: Block Styles
 *
 * @since Oscura 1.0.0
 */

/**
 * Registers block styles.
 *
 * @since Oscura 1.0.0
 *
 * @return void
 */
function oscura_register_block_styles() {

	$block_styles = array(
		'core/group'               => array(
			array(
				'name'  => 'frame-40x30-img-a4',
				'label' => __( '40x30 frame with A4 image', 'oscura' ),
			),
			array(
				'name'  => 'frame-30x40-img-a4',
				'label' => __( '30x40 frame with A4 image', 'oscura' ),
			),
			array(
				'name'  => 'frame-40x40-img-30x30',
				'label' => __( '40x40 frame with 30x30 image', 'oscura' ),
			),
		),
		'core/image'               => array(
			array(
				'name'  => 'aspect-ratio-1:1',
				'label' => __( '1:1 Ratio', 'oscura' ),
			),
			array(
				'name'  => 'aspect-ratio-3:2',
				'label' => __( '3:2 Ratio', 'oscura' ),
			),
			array(
				'name'  => 'aspect-ratio-2:3',
				'label' => __( '2:3 Ratio', 'oscura' ),
			),
		),
		'core/post-terms'          => array(
			array(
				'name'  => 'default',
				'label' => __( 'Default', 'oscura' ),
			),
			array(
				'name'       => 'labels',
				'label'      => __( 'Labels', 'oscura' ),
				'is_default' => true,
			),
		),
	);

	/**
	 * Filters the theme block styles.
	 *
	 * @since Oscura 1.0.0
	 *
	 * @param array[] $block_styles {
	 *     An associative array of block styles, keyed by block name.
	 *
	 *     @type array[] $styles {
	 *         An array of block styles.
	 *
	 *         @type string $name The identifier of the style used to compute a CSS class..
	 *         @type string $label A human-readable label for the style..
	 *     }
	 * }
	 */
	$block_styles = apply_filters( 'oscura_block_styles', $block_styles );

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style ) {
			register_block_style(
				$block,
				$style
			);
		}
	}
}

add_action( 'init', 'oscura_register_block_styles', 9 );
