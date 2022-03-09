<?php
/**
 * Oscura: Posts query grid with only image tags and title
 *
 * @package Oscura
 */

return array(
	'title'      => __( 'Grid of posts with only image tags and title', 'oscura' ),
	'categories' => array( 'oscura-query' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":2},"layout":{"inherit":false}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:post-featured-image {"align":"wide","className":"is-style-default"} /-->
	
	<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:post-terms {"term":"category","textAlign":"left","separator":"","className":"is-style-labels","fontSize":"small"} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:post-title {"isLink":true,"align":"wide"} /-->
	
	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"fontSize":"medium"} /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next {"fontSize":"medium"} /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:query -->',
);
