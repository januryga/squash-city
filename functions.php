<?php

	//add thumbnail support
	add_theme_support( 'post-thumbnails', array( 'post', 'profile' ) );


	//add the nav menu
	register_nav_menus( array(
		'header-menu-desktop' => 'Header Menu Desktop'
	) );


	//add new post type for Profiles
	add_action( 'init', 'create_post_type' );

	function create_post_type() {
		register_post_type(
			'profile',
			array(
			'labels' => array(
				'name' => __( 'Profiles' ),
				'singular_name' => __( 'Profile' )
				),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'name', 'phone' ),
			)
		);
	}

	//functions for convenient use of metas and thumbnails
	function the_name() {
		echo get_post_meta(get_the_ID(), 'name', true);
	}

	function the_phone() {
		echo get_post_meta(get_the_ID(), 'phone', true);
	}
	function the_thumbnail() {
		echo get_the_post_thumbnail();
	}

?>
