<?php
/**
 * Oscura: Header v2 with centered site logo, site title and navigation
 *
 * @package Oscura
 */

return array(
	'title'      => __( 'Header v2', 'oscura' ),
	'categories' => array( 'oscura-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--lg)","right":"var(--wp--custom--spacing--component)","bottom":"var(--wp--custom--spacing--lg)","left":"var(--wp--custom--spacing--component)"},"blockGap":"var(--wp--custom--spacing--lg)"}},"className":"alignfull","layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--lg);padding-right:var(--wp--custom--spacing--component);padding-bottom:var(--wp--custom--spacing--lg);padding-left:var(--wp--custom--spacing--component)"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:site-logo /-->
	
	<!-- wp:site-title {"level":0} /-->
	</div>
	<!-- /wp:group -->
	
	<!-- wp:navigation /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
