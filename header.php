<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container">
        <h1 class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </h1>

        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            ☰
        </button>

        <nav id="primary-menu" class="main-navigation">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => '',
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>

        <div class="header-search">
            <?php get_search_form(); ?>
        </div>
    </div>
</header>

<main class="container">
