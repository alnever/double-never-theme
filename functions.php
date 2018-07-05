<?php

/*
Theme features
*/

// internationalization

add_action( 'after_setup_theme', 'theme_load_theme_textdomain' );
function theme_load_theme_textdomain() {
    load_theme_textdomain('double-never-theme', get_template_directory() . '/languages');
}


// Post thumbnails support
add_theme_support( 'post-thumbnails' );

// Register sidebars
add_action( 'widgets_init', 'simple_never_widgets_init' );

function simple_never_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Left Sidebar', 'simplenevertheme' ),
        'id'            => 'left_sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}

// register menu
add_action( 'init', 'register_menus' );

function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' , 'simplenevertheme')
      //,'extra-menu' => __( 'Extra Menu' )
     )
   );
}

// add custom logo
add_theme_support( 'custom-logo' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 300,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}


?>