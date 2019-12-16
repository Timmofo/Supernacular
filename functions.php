<?php

function theme_files() {
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Crimson+Pro:600|Lato:400,700&display=swap');
    wp_enqueue_style('main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_files');

function theme_features() {
    register_nav_menu('headerMenu', 'Header Menu');
    register_nav_menu('footerMenu', 'Footer Menu');
    register_nav_menu('footerLegal', 'Footer Legal');

    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_features');