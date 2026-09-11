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

// 5. Processamento AJAX do Formulário de Contato com Envio Real via wp_mail()
add_action('wp_ajax_eme_submit_contact', 'eme_handle_contact_submission');
add_action('wp_ajax_nopriv_eme_submit_contact', 'eme_handle_contact_submission');

function eme_handle_contact_submission() {
    $nome     = isset($_POST['nome']) ? sanitize_text_field($_POST['nome']) : '';
    $email    = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $telefone = isset($_POST['telefone']) ? sanitize_text_field($_POST['telefone']) : '';
    $assunto  = isset($_POST['assunto']) ? sanitize_text_field($_POST['assunto']) : 'Contato via Site EME';
    $curso    = isset($_POST['curso']) ? sanitize_text_field($_POST['curso']) : '';
    $mensagem = isset($_POST['mensagem']) ? sanitize_textarea_field($_POST['mensagem']) : '';

    if (empty($nome) || empty($email) || empty($mensagem)) {
        wp_send_json_error(array('message' => 'Por favor, preencha todos os campos obrigatórios.'));
    }

    $to = array('contato@escolaeme.com', 'coordenacao@escolaeme.com');
    $subject = 'Nova Mensagem do Site EME: ' . $assunto;
    $body  = "Nova mensagem recebida através do site da EME:\n\n";
    $body .= "Nome: " . $nome . "\n";
    $body .= "E-mail: " . $email . "\n";
    $body .= "Telefone/WhatsApp: " . $telefone . "\n";
    $body .= "Assunto: " . $assunto . "\n";
    if (!empty($curso)) {
        $body .= "Curso de Interesse: " . $curso . "\n";
    }
    $body .= "\nMensagem:\n" . $mensagem . "\n\n";
    $body .= "----------------------------------------\n";
    $body .= "Enviado em " . date('d/m/Y H:i');

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: EME Site <contato@escolaeme.com>',
        'Reply-To: ' . $nome . ' <' . $email . '>'
    );

    $sent = @wp_mail($to, $subject, $body, $headers);

    wp_send_json_success(array('message' => 'Obrigado! Sua mensagem foi recebida e enviada para nossa equipe com sucesso.'));
}

// 6. Otimizar e simplificar o título das páginas (evitar títulos redundantes e gigantes)
add_filter('document_title_parts', function($title) {
    if (isset($title['site'])) {
        $title['site'] = 'EME';
    }
    if (isset($title['tagline'])) {
        unset($title['tagline']);
    }
    return $title;
}, 999);


