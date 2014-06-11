<?php

// Load the theme CSS
function theme_styles() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.css' );
	wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Oswald:700,400|Open+Sans:400italic,400' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );

}
// Load the theme JS
function theme_js() {
	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );
add_action( 'wp_enqueue_scripts', 'theme_styles' );

//Enable custom menus
add_theme_support( 'menus' );

//Enable featured images
if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1024, 512, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
// delete the next line if you do not need additional image sizes
add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}

function create_widget($name, $id, $description, $open_tag, $closing_tag) {
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
		'before_widget' => $open_tag,
		'after_widget'  => $closing_tag,
		'before_title'  => '<h1 class="widgettitle">',
		'after_title'   => '</h1>' 

	);
	register_sidebar( $args );
}
create_widget('Attention', 'attention', 'Displays in the attention section', '<div class="attention-inner">', '</div>');
create_widget('Sidebar', 'sidebar', 'Displays in the sidebar', '<div class="sidebar-inner">', '</div>');
create_widget('Left Footer', 'footer_left', 'Displays in the bottom left of the footer', '<div class="bottom-left-inner">', '</div>');
create_widget('Middle Footer', 'footer_middle', 'Displays in the middle of the footer', '<div class="middle-inner">', '</div>');
create_widget('Right Footer', 'footer_right', 'Displays in the bottom right of the footer', '<div class="bottom-right-inner">', '</div>');

	


?>