<?php
/**
 * Oscura: Home page content
 *
 * @package Oscura
 */

return array(
	'title'      => __( 'Home page content', 'oscura' ),
	'categories' => array( 'oscura-page' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"50px","padding":{"top":"100px"}}}} -->
	<div class="wp-block-group alignfull" style="padding-top:100px"><!-- wp:columns {"verticalAlignment":"bottom"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"75%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"blockGap":"50px"}}} -->
		<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"bottom"} -->
		<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"75%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:75%"><!-- wp:heading {"level":1,"fontSize":"xxxx-large"} -->
		<h1 class="has-xxxx-large-font-size">' . esc_html__( 'Hi, I\'m Walter Anderson and this is my gallery.', 'oscura' ) . '</h1>
		<!-- /wp:heading --></div>
		<!-- /wp:column -->
		
		<!-- wp:column {"verticalAlignment":"bottom","width":""} -->
		<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
		<div class="wp-block-buttons"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link" href="#overscroll-gallery">' . esc_html__( 'Scroll down 👇', 'oscura' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->
		
		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator is-style-wide"/>
		<!-- /wp:separator -->

		<!-- wp:group {"className":"is-style-frame-40x30-img-a4"} -->
		<div class="wp-block-group is-style-frame-40x30-img-a4"><!-- wp:image {"id":2051,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-1-dark-red.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle dark on red in A4 landscape format', 'oscura' ) . '" class="wp-image-2051"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:group -->
		
		</div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- wp:group {"tagName":"section","align":"full","className":"overscroll","layout":{"inherit":false}} -->
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
