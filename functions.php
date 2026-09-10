<?php
/**
 * EME Child Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

// 1. Purge LiteSpeed / Hostinger Cache automaticamente
add_action('init', function() {
    if (!is_admin()) {
        @header('X-LiteSpeed-Purge: *');
    }
});

// 2. Carregar estilos e scripts do tema
add_action('wp_enqueue_scripts', function() {
    $ver = time();
    $theme_uri = get_stylesheet_directory_uri();

    wp_enqueue_style('hello-elementor-parent', get_template_directory_uri() . '/style.css', array(), '1.0.0');
    wp_enqueue_style('eme-fonts', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Montserrat:wght@400;500;600;700&family=Source+Sans+3:ital,wght@0,400;0,600;1,400&display=swap', array(), null);
    wp_enqueue_style('eme-root-style', $theme_uri . '/style.css', array(), $ver);
    wp_enqueue_style('eme-custom-style', $theme_uri . '/assets/css/style.css', array(), $ver);
    wp_enqueue_script('eme-main-js', $theme_uri . '/assets/js/main.js', array('jquery'), $ver, true);
}, 9999);

// 3. Injetar CSS crítico direto no wp_head para anular qualquer reset do Elementor ou Hello Elementor
add_action('wp_head', function() {
    $css_file = get_stylesheet_directory() . '/assets/css/style.css';
    if (file_exists($css_file)) {
        $css_content = file_get_contents($css_file);
        echo '<!-- EME CRITICAL INLINE CSS START -->' . "\n";
        echo '<style id="eme-critical-inline-css">' . "\n" . $css_content . "\n" . '</style>' . "\n";
        echo '<!-- EME CRITICAL INLINE CSS END -->' . "\n";
    }
}, 9999);

// 4. Carregar automaticamente todos os arquivos de shortcode
$shortcodes_path = get_stylesheet_directory() . '/shortcodes/*.php';
foreach (glob($shortcodes_path) as $file) {
    require_once $file;
}
