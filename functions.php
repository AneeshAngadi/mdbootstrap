<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'MDB_THEME_VERSION', '1' );
define( 'MDB_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'MDB_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * Include external files
 */
require_once MDB_THEME_DIR . 'template-parts/pagination/pagination.php' ;

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

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="page-link"';
}
