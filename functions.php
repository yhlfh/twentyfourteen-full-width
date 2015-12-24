<?php
// Load the css
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Now let's adjust some sizes.

// First, make the main content column wider.
if ( ! isset( $content_width ) ) {
	$content_width = 698;
}

// And the Post Thumbnails should also be bigger.
function my_child_theme_setup() {
	set_post_thumbnail_size( 970, 536, true );
	add_image_size( 'twentyfourteen-full-width', 1698, 942, true );
}
// Use the after_setup_theme hook with a priority of 11 to load after the parent theme, which will fire on the default priority of 10.
add_action( 'after_setup_theme', 'my_child_theme_setup', 11 );

// Side widgets can be smaller.
$GLOBALS['content_width'] = 358;
?> 
