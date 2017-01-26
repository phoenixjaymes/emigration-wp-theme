<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function wppj_excerpt_length( $length ) {
  return 24;
}
add_filter( 'excerpt_length', 'wppj_excerpt_length', 999);

function register_theme_menus() {
  
  register_nav_menus(
    array (
      'primary-menu' => __( 'Primary Menu' )
    )
  );
}
add_action( 'init', 'register_theme_menus' );


function wppj_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget-area__widget">',
		'after_widget' => '</section>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));

}
wppj_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wppj_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );


function wppj_theme_styles () {
  wp_enqueue_style( 'google_css', 'https://fonts.googleapis.com/css?family=Righteous');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'wppj_theme_styles' );


function wppj_theme_js() {
  wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'wppj_theme_js' );
?>
