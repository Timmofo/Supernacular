<?php

function theme_files() {
    wp_enqueue_script('main_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), 1.0, true);
    wp_enqueue_script('font_awesome', '//kit.fontawesome.com/74bf3eb8e8.js');
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Crimson+Pro:300,500|Lato:400,700&display=swap');
    wp_enqueue_style('main_style', get_template_directory_uri().'/assets/css/styles.css');
}

add_action('wp_enqueue_scripts', 'theme_files');

function theme_features() {
    register_nav_menu('headerMenu', 'Header Menu');
    register_nav_menu('footerMenu', 'Footer Menu');
    register_nav_menu('footerLegal', 'Footer Legal');

    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_features');

function theme_widgets() {
    register_sidebar( array(
        'name'          => 'Footer',
        'id'            => 'footer',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

add_action( 'widgets_init', 'theme_widgets' );

// OPTIONAL

function theme_custom_logo() {
    $defaults = array(
    'height'      => 100,
    'width'       => 100,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'theme_custom_logo' );