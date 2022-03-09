<?php
/**
 * Oscura: 40x30 frame group with A4 image (portrait)
 *
 * @package Oscura
 */

return array(
	'title'      => __( '30x40 frame with A4 image (portrait)', 'oscura' ),
	'categories' => array( 'oscura-general' ),
	'content'    => '<!-- wp:group {"className":"is-style-frame-30x40-img-a4"} -->
	<div class="wp-block-group is-style-frame-30x40-img-a4"><!-- wp:image {"id":1881,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-2.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle in A4 portrait format', 'oscura' ) . '" class="wp-image-1881"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group -->',
);
