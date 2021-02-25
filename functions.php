<?php

/**
 * Include CSS and JS files
 */
function theme_enqueue_scripts() {
	wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
    wp_enqueue_style( 'MDB_CSS', get_template_directory_uri() . '/assets/css/mdb.min.css' );
    wp_enqueue_script( 'MDB_JS', get_template_directory_uri() . '/assets/js/mdb.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

/**
 * Setup Theme
 */
function setup_featured_img() {
    // Add featured image support
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_featured_img');
