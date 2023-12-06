<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dawii 2044</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
    wp_nav_menu(array(
        'menu' => 'menu-header',
        'theme_location' => 'menu-header',
        //'container' => 'ul',
        // 'fallback_cb' =>false
    )); ?>
