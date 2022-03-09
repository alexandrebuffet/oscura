<?php
/**
 * Oscura: Feature one column left
 *
 * @package Oscura
 */

return array(
	'title'      => __( 'Feature one column left', 'oscura' ),
	'categories' => array( 'oscura-featured' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"50px","padding":{"top":"100px"}}}} -->
	<div class="wp-block-group alignfull" style="padding-top:100px"><!-- wp:columns {"verticalAlignment":"bottom"} -->
	<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"75%"} -->
	<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"blockGap":"50px"}}} -->
	<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"bottom"} -->
	<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"75%"} -->
	<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:75%"><!-- wp:heading {"level":1,"fontSize":"xxxx-large"} -->
	<h1 class="has-xxxx-large-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"bottom","width":""} -->
	<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link" href="##0">' . esc_html__( 'Call to action', 'oscura' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:group {"style":{"border":{"radius":"0px"}},"className":"is-style-frame-40x30-img-a4"} -->
	<div class="wp-block-group is-style-frame-40x30-img-a4" style="border-radius:0px"><!-- wp:image {"id":2051,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-1-dark-red.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle dark on red in A4 landscape format', 'oscura' ) . '" class="wp-image-2051"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
