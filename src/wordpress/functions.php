<?php

// WIDGET 
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'widget-name',
		'id' => 'widget-id',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

//remove_filter( 'the_content', 'wpautop' );
//remove_filter( 'the_excerpt', 'wpautop' );

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );


add_theme_support( 'post-thumbnails' );

function remove_width_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html;
}

function the_loop() {
	while ( have_posts() ) : the_post(); ?>
		<article>
			<h2> <?php the_title(); ?> </h2>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="button">Lees meer...</a>
		</article>
	<?php endwhile;
}

?>