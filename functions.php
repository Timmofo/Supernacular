<?php

function theme_files() {
    wp_enqueue_script('main_js', get_theme_file_uri('assets/js/script.js'), NULL, 1.0, true);
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Crimson+Pro:600|Lato:400,700&display=swap');
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