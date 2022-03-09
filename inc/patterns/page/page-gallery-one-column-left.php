<?php
/**
 * Oscura: Gallery page with one column left content
 *
 * @package Oscura
 */

return array(
	'title'      => __( 'Gallery page with one column left content', 'oscura' ),
	'categories' => array( 'oscura-page' ),
	'content'    => '<!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:columns {"verticalAlignment":"bottom"} -->
	<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"75%"} -->
	<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"blockGap":"50px"}}} -->
	<div class="wp-block-group"><!-- wp:group {"className":"is-style-frame-40x30-img-a4"} -->
	<div class="wp-block-group is-style-frame-40x30-img-a4"><!-- wp:image {"id":2051,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-1-dark-red.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle dark on red in A4 landscape format', 'oscura' ) . '" class="wp-image-2051"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"className":"is-style-frame-30x40-img-a4"} -->
	<div class="wp-block-group is-style-frame-30x40-img-a4"><!-- wp:image {"id":1881,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-2.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle in A4 portrait format', 'oscura' ) . '" class="wp-image-1881"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"className":"is-style-frame-40x30-img-a4"} -->
	<div class="wp-block-group is-style-frame-40x30-img-a4"><!-- wp:image {"id":1882,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-1-red-dark.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle red on dark in A4 landscape format', 'oscura' ) . '" class="wp-image-1882"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"className":"is-style-frame-40x30-img-a4"} -->
	<div class="wp-block-group is-style-frame-40x30-img-a4"><!-- wp:image {"id":19,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-1.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle in A4 landscape format', 'oscura' ) . '" class="wp-image-19"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"className":"is-style-frame-30x40-img-a4"} -->
	<div class="wp-block-group is-style-frame-30x40-img-a4"><!-- wp:image {"id":1878,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-2-dark-red.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle dark on red in A4 portrait format', 'oscura' ) . '" class="wp-image-1878"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
