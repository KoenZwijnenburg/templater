<?php

// WIDGET 
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'widget-naam',
		'id' => 'widget-verwijzing',
		'before_widget' => '<div>', // optineel
		'after_widget' => '</div>', // optioneel
		'before_title' => '<h3 class="widget">', // voor titel
		'after_title' => '</h3>', // voor titel widget
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html;
}

?>