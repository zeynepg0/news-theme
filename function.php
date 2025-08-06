<?php
/**
 * Haber Teması Fonksiyonları
 */

// Tema destekleri
function habertema_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => __('Ana Menü', 'habertema'),
    ]);
}
add_action('after_setup_theme', 'habertema_setup');

// Stil ve script dosyalarını yükle
function habertema_scripts() {
    wp_enqueue_style('habertema-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'habertema_scripts');
