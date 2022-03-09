<?php
/**
 * Oscura: 40x30 frame group with A4 image (landscape)
 *
 * @package Oscura
 */

return array(
	'title'      => __( '40x30 frame with A4 image (landscape)', 'oscura' ),
	'categories' => array( 'oscura-general' ),
	'content'    => '<!-- wp:group {"className":"is-style-frame-40x30-img-a4"} -->
	<div class="wp-block-group is-style-frame-40x30-img-a4"><!-- wp:image {"id":1882,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-1.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle in A4 landscape format', 'oscura' ) . '" class="wp-image-1882"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group -->',
);
