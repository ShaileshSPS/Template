<?php

	add_theme_support('post-thumbnails');


	function theme_enqueue_scripts() {
		wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.11.2/css/all.css');
		wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
		wp_enqueue_style( 'MDB', get_template_directory_uri() . '/assets/css/mdb.min.css' );
		wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '', true );
		wp_enqueue_script( 'Tether', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '', true );
		wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true );
		wp_enqueue_script( 'MDB', get_template_directory_uri() . '/assets/js/mdb.min.js', array(), '', true );
		wp_enqueue_script( 'Stepper', get_template_directory_uri() . '/assets/js/stepper.js', array(), '', true );
	}
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

?>
