<?php

	add_theme_support( 'post-thumbnails' );

	register_nav_menu( 'primary', 'Header Navigation' );

function theme_scripts() {

	wp_enqueue_style( 'master', get_template_directory_uri() . '/library/css/master.css' );

	//wp_enqueue_style( 'master', get_template_directory_uri() . '/library/css/master.css', array(), filemtime( get_stylesheet_directory() . '/library/css/master.css' );

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic|Prata' );

	wp_enqueue_script( 'master', get_template_directory_uri() . '/js/min/master-min.js', array(), false, true );

	wp_enqueue_script( 'brenton', get_template_directory_uri() . '/js/min/brenton-min.js', array(), false, true );

	wp_enqueue_script( 'font-awesome', '//use.fontawesome.com/88617229fe.js', true );

	}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

add_image_size( 'brentonic-300', 300 );
add_image_size( 'brentonic-500', 500 );
add_image_size( 'brentonic-700', 700 );
add_image_size( 'brentonic-900', 900 );
add_image_size( 'brentonic-1100', 1100 );
add_image_size( 'brentonic-1300', 1300 );
add_image_size( 'brentonic-1500', 1500 );
add_image_size( 'brentonic-1700', 1700 );
add_image_size( 'brentonic-1900', 1900 );
add_image_size( 'brentonic-2100', 2100 );
add_image_size( 'brentonic-2300', 2300 );
add_image_size( 'brentonic-2500', 2500 );
add_image_size( 'brentonic-2700', 2700 );
add_image_size( 'brentonic-2900', 2900 );
add_image_size( 'brentonic-3100', 3100 );
add_image_size( 'brentonic-3300', 3300 );
add_image_size( 'brentonic-3500', 3500 );
add_image_size( 'brentonic-3700', 3700 );

?>




