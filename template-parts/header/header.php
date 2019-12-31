<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div id="nav-side">
        <a href="javascript:void(0)" class="btn-collapse" onclick="collapse()">&times;</a>
        <a href="<?php echo home_url(); ?>">Home</a>
        <?php 
        $menu = wp_get_nav_menu_items('Header'); 

            foreach ($menu as $menu_item): ?>
                <a href="<?= $menu_item->url ?>"><?= $menu_item->title ?></a>
        <?php endforeach; ?>
    </div>
    
    <header class="container" <?php if (is_front_page()) echo "style='height: 100vh;'"?>>
        <nav id="nav" class="container <?php if (is_front_page()) echo "top-of-page"?>">
            <a href="<?php echo home_url(); ?>">
            <?php if (is_front_page()) { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/supernacular-logo-white.svg" alt="Logo" class="logo">
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/supernacular-logo-full.svg" alt="Logo" class="logo">
            <?php } ?>
            </a>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'headerMenu'
            ));
            ?>

            <button class="btn-expand" onclick="expand()">&#9776;</button>
        </nav>