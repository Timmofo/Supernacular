<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <header class="container">
        <nav id="nav">
            <img src="#" alt="Logo">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'headerMenu'
            ));
            ?>
        </nav>

        <div class="heading">
            <h1><?php echo get_bloginfo('description'); ?></h1>
            <button class="btn btn-full">Contact Us</button>
        </div>
    </header>
