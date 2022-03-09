<?php
/**
 * Oscura: Overscroll gallery with framed images
 *
 * @package Oscura
 */

return array(
	'title'      => __( 'Overscroll gallery with framed images', 'oscura' ),
	'categories' => array( 'oscura-gallery' ),
	'content'    => '<!-- wp:group {"tagName":"section","align":"full","className":"overscroll","layout":{"inherit":false}} -->
	<section class="wp-block-group alignfull overscroll"><!-- wp:cover {"overlayColor":"background","minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"className":"position-sticky top-0 z-index-1","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-cover is-light position-sticky top-0 z-index-1" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:100vh"><span aria-hidden="true" class="has-background-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"xxx-large"} -->
	<p class="has-text-align-center has-xxx-large-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non risus non orci sagittis cursus et eu metus. Aenean laoreet augue non risus mollis, at dapibus risus lobortis.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover -->
	
	<!-- wp:group {"className":"position-relative z-index-2","layout":{"inherit":true}} -->
	<div class="wp-block-group position-relative z-index-2"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"8rem","right":"4rem","bottom":"4rem","left":"0rem"}}}} -->
	<div class="wp-block-column" style="padding-top:8rem;padding-right:4rem;padding-bottom:4rem;padding-left:0rem;flex-basis:60%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":17,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-1.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle in A4 landscape format', 'oscura' ) . '" class="wp-image-17"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"left":"4rem"}}}} -->
	<div class="wp-block-column" style="padding-left:4rem;flex-basis:40%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1881,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-2-dark-red.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle dark on red in A4 portrait format', 'oscura' ) . '" class="wp-image-1881"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"align":"full"} -->
	<div class="wp-block-columns alignfull"><!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"left":"4rem","top":"4rem","right":"4rem","bottom":"4rem"}}}} -->
	<div class="wp-block-column" style="padding-top:4rem;padding-right:4rem;padding-bottom:4rem;padding-left:4rem;flex-basis:40%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":16,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-2-dark-red.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle dark on red in A4 portrait format', 'oscura' ) . '" class="wp-image-16"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"10rem","right":"4rem","bottom":"0rem"}}}} -->
	<div class="wp-block-column" style="padding-top:10rem;padding-right:4rem;padding-bottom:0rem;flex-basis:60%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":19,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-1-red-dark.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle red on dark in A4 landscape format', 'oscura' ) . '" class="wp-image-19"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%","style":{"spacing":{"padding":{"top":"4rem","right":"4rem","bottom":"0rem","left":"0rem"}}}} -->
	<div class="wp-block-column" style="padding-top:4rem;padding-right:4rem;padding-bottom:0rem;padding-left:0rem;flex-basis:40%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1882,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-2.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle in A4 portrait format', 'oscura' ) . '" class="wp-image-1882"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"right":"8rem","top":"8rem","bottom":"8rem","left":"4rem"}}}} -->
	<div class="wp-block-column" style="padding-top:8rem;padding-right:8rem;padding-bottom:8rem;padding-left:4rem;flex-basis:60%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:image {"id":1878,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-1-dark-red.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle in A4 landscape format', 'oscura' ) . '" class="wp-image-1878"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></section>
	<!-- /wp:group -->',
);
