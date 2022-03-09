<?php
/**
 * Oscura: About page content
 *
 * @package Oscura
 */

return array(
	'title'      => __( 'About page content', 'oscura' ),
	'categories' => array( 'oscura-page' ),
	'content'    => '<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"inherit":true}} -->
	<section class="wp-block-group alignfull" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":16,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-illustration-2-dark-red.jpg' . '" alt="' . esc_html__( 'Illustration of the camera oscura principle dark on red in A4 portrait format', 'oscura' ) . '" class="wp-image-16"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:spacer {"height":20} -->
	<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"20px"} -->
	<div class="wp-block-column" style="flex-basis:20px"></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"dropCap":true} -->
	<p class="has-drop-cap">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non risus non orci sagittis cursus et eu metus. Aenean laoreet augue non risus mollis, at dapibus risus lobortis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur id egestas mi. Cras tincidunt aliquet elementum. Sed efficitur leo ut turpis convallis ultricies. Nunc eget condimentum nibh, id scelerisque dui. Phasellus placerat magna sed lacus tempor, et tincidunt quam tincidunt. Duis sit amet enim et quam facilisis iaculis. Cras aliquam efficitur odio, nec pharetra ex feugiat at. Praesent lacinia, lectus et sollicitudin feugiat, odio velit malesuada sapien, in venenatis felis nunc a lorem. Nam ultricies nisl id aliquam consequat.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>Proin gravida sem a purus vulputate convallis. Quisque at congue dolor. Proin a iaculis urna, nec pellentesque turpis. Pellentesque id arcu ut nulla dignissim lobortis. Quisque sodales neque dolor. Vivamus ut velit quis quam rutrum auctor at volutpat massa. Donec euismod libero nec ultricies fermentum. Duis justo risus, rhoncus id est vitae, vehicula consectetur ante. Quisque id orci et urna iaculis fringilla. Sed nec urna turpis. Duis at dui ut ipsum imperdiet tincidunt vitae eget ex. Nulla egestas ac arcu sit amet consequat. Integer tempor ultrices blandit. Cras quis arcu nec libero fringilla pellentesque. Nam ac ornare nunc. Aliquam vestibulum orci eu sodales porta.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>Vestibulum sit amet neque molestie, placerat ipsum vel, cursus urna. Nam feugiat quis lacus a porttitor. Quisque gravida lacus sed ante pretium, mollis dictum nisi imperdiet. Sed facilisis tortor a dui auctor imperdiet. Duis molestie dolor purus, rhoncus pellentesque erat tempus nec. Praesent eu mi ac mi ullamcorper euismod a sit amet ligula. Nam massa urna, blandit in turpis ut, porttitor ullamcorper erat. Aenean molestie, orci nec pulvinar luctus, tortor purus aliquet dui, sit amet pellentesque justo tortor quis enim. Pellentesque pretium sodales dignissim. Vestibulum sed neque aliquet, pretium augue sagittis, rhoncus est.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"right"}} -->
	<div class="wp-block-group"><!-- wp:image {"id":2004,"width":150,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/oscura-signature.png' . '" alt="' . esc_html__( 'Oscura signature', 'oscura' ) . '" class="wp-image-2004" width="150"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></section>
	<!-- /wp:group -->',
);
