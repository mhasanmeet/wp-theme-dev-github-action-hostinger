<?php
/**
 * Theme functions and definitions
 */

if( !function_exists('codegnet_setup') ) {
    function codegnet_setup() {

        /**
         * Make theme available for translation
         */
        load_theme_textdomain( 'codegnet', get_template_directory() . '/languages' );


        /**
         * Include theme supports
         */
        //Add default posts and comments RSS feed links to head
        add_theme_support( 'automatic_feed_links' ); 
        //Let WP manage the document title
        add_theme_support( 'title-tag' ); 
        //Enable support for post Thumbnails
        add_theme_support( 'post-thumbnails' ); 
        //Let WP manage the document title
        add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' )); 
        //
        add_theme_support( 'html5', [ 'search-form' ] );


        /**
         * Add support for core custom logo
         */
        add_theme_support( 'custom-logo', [
            'height' => '250',
            'width' => '250',
            'flex-width' => true,
            'flex-height' => true,
        ]);
        

        //register menu locations
        register_nav_menus(
            [
                'primary' => esc_html__('Header Menu', 'codegnet-yt'),
            ]
        );
    }
}
add_action( 'after_setup_theme', 'codegnet_setup' );


/**
 * Include theme scrips and styles
 */
function codegnet_public_assets() {

    // register style
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], wp_rand(), 'all' );
    wp_register_style( 'codegnet-main', get_template_directory_uri() . '/assets/css/main.css', [ 'bootstrap' ], wp_rand(), 'all' );
    
    //register scripts
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', [], wp_rand(), true );
    wp_register_script( 'codegnet-main', get_template_directory_uri() . '/assets/js/main.js', [], wp_rand(), true );

    //Enqueue scripts
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'codegnet-main' );
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'codegnet-main' );
}
add_action( 'wp_enqueue_scripts', 'codegnet_public_assets' );


/**
 * Add widget for footer
 */
function codegnet_theme_widgets() {
    register_sidebar( [
       'name' => __( 'Footer Widget', 'codegnet-yt' ),
       'id' => 'codegnet-footer-wdg',
       'before-widget' => '',
       'after-widget' => '',
       'before-title' => '',
       'after-title' => '' 
    ]);
}
add_action( 'widgets_init', 'codegnet_theme_widgets' );


// Load template functions
require_once get_template_directory() . '/inc/template-functions.php';