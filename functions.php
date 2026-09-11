<?php
/**
 * EME Child Theme Functions — Otimizado para alta performance
 */

if (!defined('ABSPATH')) {
    exit;
}

// 1. Carregar estilos e scripts do tema com versionamento por modificação de arquivo (filemtime)
add_action('wp_enqueue_scripts', function() {
    $theme_dir = get_stylesheet_directory();
    $theme_uri = get_stylesheet_directory_uri();

    $style_ver  = file_exists($theme_dir . '/style.css') ? filemtime($theme_dir . '/style.css') : '1.1.0';
    $custom_ver = file_exists($theme_dir . '/assets/css/style.css') ? filemtime($theme_dir . '/assets/css/style.css') : '1.1.0';
    $js_ver     = file_exists($theme_dir . '/assets/js/main.js') ? filemtime($theme_dir . '/assets/js/main.js') : '1.1.0';

    // Parent Theme CSS
    wp_enqueue_style('hello-elementor-parent', get_template_directory_uri() . '/style.css', array(), '1.0.0');

    // Google Fonts (com display=swap para não bloquear renderização)
    wp_enqueue_style('eme-fonts', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Montserrat:wght@400;500;600;700&family=Source+Sans+3:ital,wght@0,400;0,600;1,400&display=swap', array(), null);

    // EME Child Styles
    wp_enqueue_style('eme-root-style', $theme_uri . '/style.css', array('hello-elementor-parent'), $style_ver);
    wp_enqueue_style('eme-custom-style', $theme_uri . '/assets/css/style.css', array('eme-root-style'), $custom_ver);

    // EME Main JS (carregado no footer)
    wp_enqueue_script('eme-main-js', $theme_uri . '/assets/js/main.js', array('jquery'), $js_ver, true);
}, 9999);

// 2. Preconnect para Google Fonts e otimização de DNS/HTTP
add_action('wp_head', function() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}, 1);

// 3. Desativar o cabeçalho nativo do Hello Elementor para evitar duplicação de título/logo
add_action('after_setup_theme', function() {
    remove_action('hello_elementor_header_display', 'hello_elementor_header_display');
}, 100);

// 4. Carregar automaticamente todos os arquivos de shortcode
$shortcodes_path = get_stylesheet_directory() . '/shortcodes/*.php';
foreach (glob($shortcodes_path) as $file) {
    require_once $file;
}


