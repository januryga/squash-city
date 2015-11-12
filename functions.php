<?php

//META

//change "active menu item" class from "current-menu-item" to "active"
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
         $classes[] = 'active ';
     }
     return $classes;
}

//hide the admin bar
add_filter('show_admin_bar', '__return_false');


//add the nav menu
register_nav_menus( array(
    'header-menu' => 'Header Menu'
) );


//STYLES

add_action('init', 'register_styles');

function register_styles(){
    //wp_register_style( $handle, $src, $deps, $ver, $media );
    wp_register_style(
        'main',
        get_template_directory_uri() . "/scss/app.css",
        array(), NULL, "screen"
    );
    wp_register_style(
        'open_sans',
        "https://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,latin-ext"
    );
    wp_register_style(
        'mdi_icons',
        get_template_directory_uri() . "/components/material-design-icons/css/mdi.min.css",
        array(), NULL, "all"
    );
    wp_register_style(
        'acf_maps',
        get_template_directory_uri() . "/components/acf-map/acf-map-style.css"
    );
}



add_action('wp_enqueue_scripts', 'load_styles');

function load_styles(){
    wp_enqueue_style('main');
    wp_enqueue_style('open_sans');
    wp_enqueue_style('mdi_icons');
    
    if( is_page('kontakt') ){
        wp_enqueue_style('acf_maps');
    }
}



//SCRIPTS
add_action('init', 'register_scripts');

function register_scripts(){
    //usage: wp_register_script( $handle, $src, $deps, $ver, $in_footer );
    
    //Because the wordpress built in jquery doesn't support using "$()":
    wp_deregister_script('jquery'); 
    wp_register_script(
        'jquery',
        get_template_directory_uri() . "/js/vendor/jquery.js",
        array(), NULL, true
    );
    
    // Everything is loaded in the footer because Foundation requires that.
    // Don't change the order of these two, they have to be first.
    // Add other scripts after them.
    wp_register_script(
        'fastclick',
        get_template_directory_uri() . "/js/vendor/fastclick.js",
        array(), NULL, true
    );

    wp_register_script(
        'foundation',
        get_template_directory_uri() . "/js/foundation.min.js",
        array(), NULL, true
    );
    
    // For customizing the Foundation topbar:
    wp_register_script(
        'foundation_topbar',
        get_template_directory_uri() . "/js/foundation/foundation.topbar.js",
        array(), NULL, true
    );

    // Add scripts below: 

    wp_register_script(
        'app',
        get_template_directory_uri() . "/js/app.js",
        array(), NULL, true
    );

    wp_register_script(
        'modernizr',
        get_template_directory_uri() . "/js/vendor/modernizr.js",
        array(), NULL, true
    );
    
    wp_register_script(
        'waypoints',
        get_template_directory_uri() . "/js/jquery.waypoints.min.js",
        array(), NULL, true
    );

    wp_register_script(
        'homepage_navbar',
        get_template_directory_uri() . "/js/homepage-navbar.js",
        array(), NULL, true);

    wp_register_script(
        'google_maps', "https://maps.googleapis.com/maps/api/js?v=3.exp",
        array(), NULL, true
    );

    wp_register_script(
        'acf_maps',
        get_template_directory_uri() . "/components/acf-map/acf-map-script.js",
        array(), NULL, true
    );
}




// 'enqueue scripts' is wordpress' own event
add_action('wp_enqueue_scripts', 'load_scripts');

//wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function load_scripts() {
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('fastclick');
    wp_enqueue_script('foundation');
    wp_enqueue_script('foundation_topbar');
    wp_enqueue_script('modernizr');
    wp_enqueue_script('app');
    
    if( is_home() ){
        wp_enqueue_script('masonry');
        wp_enqueue_script('waypoints');
        wp_enqueue_script('homepage_navbar');
    }
    
    elseif( is_page('kontakt') ){
        wp_enqueue_script('google_maps');
        wp_enqueue_script('acf_maps');
    }
    
    elseif( is_page('trenerzy') ){
        wp_enqueue_script('masonry');
    }
}







//POST TYPES

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
        'supports' => array( 'title', 'editor', 'thumbnail', 'phone' ),
        )
    );

}

//add new post type for Location
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

//add new post type for Pricing
add_action( 'init', 'create_price_type' );
function create_price_type() {
    register_post_type(
        'price',
        array(
        'labels' => array(
            'name' => __( 'Prices' ),
            'singular_name' => __( 'Price' )
            ),
        'public' => true,
        'has_archive' => false,
        //'supports' => array( 'tier', 'name', 'color', 'week1', 'week2', 'week3', 'weekend' ),
        'supports' => array( 'title', 'tier', 'extra' )
        )
    );

}

//add thumbnail support for posts
add_theme_support( 'post-thumbnails', array( 'post', 'profile' ) );


//add "active" if the current post is the first (used in cennik - tabs)
function activate_first() {
    global $counter;
    if($counter == 1):
        echo "active";
    endif;
    echo " $counter";
    $counter++;
}


function stylesheet_url() {
    echo get_template_directory_uri();
}

//functions for convenient use of custom fields and thumbnails
function the_slug() {
    echo( basename(get_permalink()) );
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

function the($my_field) {
    echo the_field($my_field);
}

?>
