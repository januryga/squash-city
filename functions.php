<?php




	//add the nav menu
	register_nav_menus( array(
		'header-menu' => 'Header Menu'
	) );

	//change "active menu item" class from "current-menu-item" to "active"
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
	function special_nav_class($classes, $item){
		 if( in_array('current-menu-item', $classes) ){
				 $classes[] = 'active ';
		 }
		 return $classes;
	}

	//add new post type for Profiles
	add_action( 'init', 'create_profile_type' );

	function create_profile_type() {
		register_post_type(
			'profile',
			array(
			'labels' => array(
				'name' => __( 'Profiles' ),
				'singular_name' => __( 'Profile' )
				),
			'public' => true,
			'has_archive' => false,
			'supports' => array( 'title', 'editor', 'thumbnail', 'name', 'phone' ),
			)
		);

	}

	//add new post type for Pricing
	add_action( 'init', 'create_location_type' );

	function create_location_type() {
		register_post_type(
			'location',
			array(
			'labels' => array(
				'name' => __( 'Locations' ),
				'singular_name' => __( 'Location' )
				),
			'public' => true,
			'has_archive' => false,
			'supports' => array( 'title', 'editor', 'phone', 'email', 'address', 'background', 'map' ),
			)
		);

	}

	//add thumbnail support
	add_theme_support( 'post-thumbnails', array( 'post', 'profile' ) );

	//functions for convenient use of custom fields and thumbnails

	function the_slug() {
		echo( basename(get_permalink()) );
	}

	function the_name() {
		echo the_field('name');
	}

	function the_phone() {
		echo the_field('phone');
	}

	function the_email() {
		echo the_field('email');
	}

	function the_address() {
		echo the_field('address');
	}

	function the_background() {
		echo the_field('background');
	}

	function the_map() {
		echo the_field('map');
	}

	function the_thumbnail() {
		echo get_the_post_thumbnail();
	}

?>
