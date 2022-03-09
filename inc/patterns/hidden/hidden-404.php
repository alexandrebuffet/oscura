<?php
/**
 * Oscura: 404 error content
 *
 * @package Oscura
 */

return array(
	'title'    => __( '404 content', 'oscura' ),
	'inserter' => false,
	'content'  => '<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}}} -->
	<section class="wp-block-group" style="padding-top:50px;padding-bottom:50px"><!-- wp:columns {"verticalAlignment":"bottom"} -->
	<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"75%"} -->
	<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:75%"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontWeight":"200","lineHeight":"1"}},"className":"has-text-align-center","fontSize":"xxx-large"} -->
	<h1 class="has-text-align-left has-text-align-center has-xxx-large-font-size" style="font-weight:200;line-height:1">' . esc_html_x( 'Page not found', 'page not found title.', 'oscura' ) . '</h1>
	<!-- /wp:heading -->
	
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"},"blockGap":"50px"}},"layout":{"inherit":true}} -->
	<div class="wp-block-group" style="padding-top:50px;padding-bottom:50px"><!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size">' . wp_kses_post( __( 'Oops, the page you are looking for cannot be found. From here, you can double-check the URL, try a search below or <a href="/">return to the home page</a>', 'oscura' ) ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:search {"label":"' . esc_html_x( 'Search', 'search form label', 'oscura' ) . '","showLabel":false,"placeholder":"' . esc_html_x( 'What are you looking for?', 'search form input placeholder', 'oscura' ) . '","width":100,"widthUnit":"%","buttonText":"' . esc_html_x( 'Search', 'search form submit button', 'oscura' ) . '","buttonUseIcon":true,"style":{"border":{"radius":"5em"}}} /--></div>
	<!-- /wp:group --></section>
	<!-- /wp:group -->',
);
