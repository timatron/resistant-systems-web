<?php

function rs_theme_enqueue_styles() {
	$parent_style = 'lodestar';

	wp_dequeue_style( 'lodestar-style' );
	wp_dequeue_style( 'lodestar' );

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
}
add_action( 'wp_enqueue_scripts', 'rs_theme_enqueue_styles', 0 );

function rs_fonts() {
	echo '<link href="https://fonts.googleapis.com/css?family=Fira+Mono|Fira+Sans" rel="stylesheet">' . "\n";
}
add_action( 'wp_head', 'rs_fonts' );
