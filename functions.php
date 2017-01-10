<?php

//wp_enqueue_style( 'digizine-style', get_stylesheet_uri() );
add_theme_support('post-thumbnails');
function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

function my_sidebar_and_widgets() {
	register_sidebar();
}
add_action( 'widgets_init', 'my_sidebar_and_widgets' );



?>
