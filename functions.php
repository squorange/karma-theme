<?php

add_theme_support( 'post-thumbnails' );


function lets_add_some_scripts() {
	wp_enqueue_script(
		'filtrify',
		get_template_directory_uri() . '/js/filtrify.min.js',
		array('jquery')
	);
	wp_enqueue_style(
		'filtrify-css',
		get_template_directory_uri() . '/css/filtrify.css'
	);
}    
add_action('wp_enqueue_scripts', 'lets_add_some_scripts');


?>