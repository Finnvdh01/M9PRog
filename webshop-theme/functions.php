<?php

function webshop_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'webshop_setup' );

function webshop_scripts() {
    wp_enqueue_style( 'webshop-style', get_stylesheet_uri(), array(), '1.0' );
    wp_enqueue_script( 'webshop-script', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'webshop_scripts' );
