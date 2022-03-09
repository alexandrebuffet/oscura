<?php
/**
 * Oscura: Default footer with text, credits and social links
 *
 * @package Oscura
 */

return array(
	'title'      => __( 'Default footer', 'oscura' ),
	'categories' => array( 'oscura-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--lg)","right":"var(--wp--custom--spacing--component)","bottom":"var(--wp--custom--spacing--lg)","left":"var(--wp--custom--spacing--component)"},"blockGap":"var(--wp--custom--spacing--lg)"}},"className":"alignfull"} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--lg);padding-right:var(--wp--custom--spacing--component);padding-bottom:var(--wp--custom--spacing--lg);padding-left:var(--wp--custom--spacing--component)"><!-- wp:columns {"verticalAlignment":"bottom"} -->
	<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"45%"} -->
	<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:45%"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"}},"fontSize":"x-large"} -->
	<p class="has-x-large-font-size" id="lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit" style="font-style:normal;font-weight:700;line-height:1.2">' . wp_kses_post( __( 'Want a shooting? ✌️<br>Do not hesitate to <a href="#0">contact me</a>.', 'oscura' ) ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>&copy; ' . gmdate( 'Y' ) . '  Walter Anderson.' . ' ' .
	sprintf(
		/* Translators: WordPress link. */
		esc_html__( 'Powered by %1$s.', 'oscura' ),
		'<a href="' . esc_url( __( 'https://wordpress.org', 'oscura' ) ) . '" rel="nofollow">WordPress</a>',
	) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"bottom","width":"55%"} -->
	<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:55%"><!-- wp:spacer {"height":30} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--contrast-higher)","openInNewTab":true,"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"0.75rem","margin":{"bottom":"0px"}}}} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-bottom:0px"><!-- wp:social-link {"url":"#0","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"#0","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"#0","service":"twitter"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
