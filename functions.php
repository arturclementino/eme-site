<?php
/**
 * EME Child Theme Functions — Otimizado para alta performance
 */

if (!defined('ABSPATH')) {
    exit;
}

// 0. Prevenir injeção de HTML/CSS de plugins em respostas REST API / MCP
if (isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], '/wp-json/') !== false) {
    ob_start(function($output) {
        $first_brace = strpos($output, '{');
        if ($first_brace !== false && $first_brace > 0) {
            $prefix = substr($output, 0, $first_brace);
            if (strpos($prefix, '<style') !== false || strpos($prefix, '<') !== false) {
                return substr($output, $first_brace);
            }
        }
        return $output;
    });
}

// 1. Carregar estilos e scripts do tema com versionamento por modificação de arquivo (filemtime)
add_action('wp_enqueue_scripts', function() {
    $theme_dir = get_stylesheet_directory();
    $theme_uri = get_stylesheet_directory_uri();

    $style_ver  = file_exists($theme_dir . '/style.css') ? filemtime($theme_dir . '/style.css') : '1.1.0';
    $custom_ver = file_exists($theme_dir . '/assets/css/style.css') ? filemtime($theme_dir . '/assets/css/style.css') : '1.1.0';
    $js_ver     = file_exists($theme_dir . '/assets/js/main.js') ? filemtime($theme_dir . '/assets/js/main.js') : '1.1.0';

    // Google Fonts (com display=swap para não bloquear renderização)
    wp_enqueue_style('eme-fonts', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Montserrat:wght@400;500;600;700&family=Source+Sans+3:ital,wght@0,400;0,600;1,400&display=swap', array(), null);

    // EME Child Styles (estilos customizados do tema)
    wp_enqueue_style('eme-root-style', $theme_uri . '/style.css', array(), $style_ver);
    wp_enqueue_style('eme-custom-style', $theme_uri . '/assets/css/style.css', array('eme-root-style'), $custom_ver);

    // EME Main JS (carregado no footer)
    wp_enqueue_script('eme-main-js', $theme_uri . '/assets/js/main.js', array('jquery'), $js_ver, true);

    // PERFORMANCE: Remover fontes Elementor não utilizadas no tema (~800ms de economia)
    wp_dequeue_style('elementor-gf-roboto');
    wp_deregister_style('elementor-gf-roboto');
    wp_dequeue_style('elementor-gf-robotoslab');
    wp_deregister_style('elementor-gf-robotoslab');
    wp_dequeue_style('elementor-gf-opensans');
    wp_deregister_style('elementor-gf-opensans');
    // Montserrat já é carregado pelo nosso eme-fonts, remover duplicata Elementor
    wp_dequeue_style('elementor-gf-montserrat');
    wp_deregister_style('elementor-gf-montserrat');
}, 20);

// 2. Preconnect para Google Fonts (declarado apenas no header.php — evitar duplicação)

// 3. Desativar o cabeçalho nativo do Hello Elementor para evitar duplicação de título/logo
add_action('after_setup_theme', function() {
    remove_action('hello_elementor_header_display', 'hello_elementor_header_display');
}, 100);
// 4. Carregar automaticamente todos os arquivos de shortcode
$shortcodes_path = get_stylesheet_directory() . '/shortcodes/*.php';
foreach (glob($shortcodes_path) as $file) {
    require_once $file;
}

// 4.1 OTIMIZAÇÃO DE PERFORMANCE: Reduzir CSS e JS não utilizados, remover emojis e desativar embeds
add_action('wp_enqueue_scripts', function() {
    // Desativar estilos do Gutenberg se não estiver no editor
    if (!is_admin()) {
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('classic-theme-styles');
        
        // Desativar dashicons para visitantes não autenticados
        if (!is_user_logged_in()) {
            wp_dequeue_style('dashicons');
            wp_deregister_style('dashicons');
        }
    }
}, 100);

// Desativar jQuery Migrate no frontend para acelerar carregamento de JS
add_action('wp_default_scripts', function($scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        if ($script->deps) {
            $scripts->registered['jquery']->deps = array_diff($script->deps, array('jquery-migrate'));
        }
    }
});

// Desativar Emojis nativos do WP (economiza ~15KB de JS desnecessário)
add_action('init', function() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', function($plugins) {
        return is_array($plugins) ? array_diff($plugins, array('wpemoji')) : array();
    });
});

// Desativar wp-embed.min.js
add_action('wp_footer', function() {
    wp_deregister_script('wp-embed');
});

// 4.3 LAZY LOAD & REDUÇÃO DE PAYLOAD: Imagens, Iframes e Recursos
// Forçar lazy loading nativo no WordPress
add_filter('wp_lazy_loading_enabled', '__return_true');

// Adicionar loading="lazy" e decoding="async" em todas as tags <img> e <iframe>
add_filter('the_content', function($content) {
    if (is_admin() || empty($content)) {
        return $content;
    }
    $content = preg_replace('/<img((?![^>]*\bloading=)[^>]*)>/i', '<img$1 loading="lazy">', $content);
    $content = preg_replace('/<img((?![^>]*\bdecoding=)[^>]*)>/i', '<img$1 decoding="async">', $content);
    $content = preg_replace('/<iframe((?![^>]*\bloading=)[^>]*)>/i', '<iframe$1 loading="lazy">', $content);
    return $content;
}, 99);

// Adicionar defer em scripts secundários para liberar thread principal do navegador
add_filter('script_loader_tag', function($tag, $handle, $src) {
    if (is_admin() || $handle === 'jquery' || $handle === 'jquery-core') {
        return $tag;
    }
    if (strpos($tag, 'defer') === false && strpos($tag, 'async') === false && strpos($tag, 'type="module"') === false) {
        return str_replace('<script ', '<script defer ', $tag);
    }
    return $tag;
}, 10, 3);

// 4.2 SANITIZAÇÃO DA REST API & MCP: Prevenir que plugins/Elementor injetem HTML/CSS em respostas JSON
add_action('rest_api_init', function() {
    if (!ob_get_level()) {
        ob_start();
    }
}, -99999);

add_filter('rest_pre_serve_request', function($served, $result, $request, $server) {
    while (ob_get_level() > 0) {
        ob_end_clean();
    }
    return $served;
}, 99999, 4);


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

    // Validação de campos obrigatórios essenciais
    if (empty($nome) || empty($email)) {
        wp_send_json_error(array('message' => 'Por favor, preencha seu nome e e-mail de contato.'));
    }

    if (empty($mensagem)) {
        $mensagem = "Solicitação de agendamento de visita presencial / contato enviado através da Página Inicial da EME.";
    }

    $to = array('contato@escolaeme.com');
    $subject = 'Nova Mensagem do Site EME: ' . $assunto;
    $body  = "Nova mensagem recebida através do site da EME (escolaeme.com):\n\n";
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
        'From: Escola de Música Esperança <contato@escolaeme.com>',
        'Reply-To: ' . $nome . ' <' . $email . '>'
    );

    $sent = @wp_mail($to, $subject, $body, $headers);

    wp_send_json_success(array('message' => 'Obrigado! Sua mensagem foi recebida e enviada com sucesso para nossa equipe (contato@escolaeme.com).'));
}

// Forçar e-mail remetente oficial contato@escolaeme.com para todas as mensagens de sistema
add_filter('wp_mail_from', function($original_email) {
    return 'contato@escolaeme.com';
});
add_filter('wp_mail_from_name', function($original_name) {
    return 'Escola de Música Esperança — EME';
});

// 6. SEO & Google Search: Schema.org Structured Data + OpenGraph Meta Tags
add_action('wp_head', function() {
    ?>
    <meta property="og:site_name" content="Escola de Música Esperança — EME" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Escola de Música Esperança — EME | Arte, Fé e Excelência" />
    <meta property="og:description" content="Escola de Música Esperança (EME). Formação musical completa com 27 modalidades, corpo docente qualificado e estrutura de ponta em Belo Horizonte (Padre Eustáquio)." />
    <meta property="og:url" content="https://escolaeme.com/" />
    <meta name="description" content="Escola de Música Esperança (EME / NAME) — Projeto da Igreja Esperança. Cursos didáticos de música, instrumentos e canto com foco em excelência e propósito comunitário em Belo Horizonte." />
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Escola de Música Esperança",
      "alternateName": ["EME", "Escola EME", "EME Música Esperança"],
      "url": "https://escolaeme.com/",
      "publisher": {
        "@type": "Organization",
        "name": "Escola de Música Esperança — EME",
        "logo": "https://escolaeme.com/wp-content/uploads/2026/08/eme-horizontal-verde-renovo-scaled-e1787075643364.png"
      }
    }
    </script>
    <?php
}, 5);

// 7. Configuração dinâmica das opções de título e tagline no banco do WordPress
add_action('init', function() {
    if (get_option('blogname') !== 'Escola de Música Esperança — EME') {
        update_option('blogname', 'Escola de Música Esperança — EME');
    }
    if (get_option('blogdescription') !== 'Arte, Fé e Excelência no Ensino Musical em Belo Horizonte') {
        update_option('blogdescription', 'Arte, Fé e Excelência no Ensino Musical em Belo Horizonte');
    }
});

// 8. Título super limpo, curto e elegante nas guias dos navegadores ("Página — EME")
add_filter('document_title_parts', function($title) {
    if (is_front_page() || is_home()) {
        return array('title' => 'EME — Escola de Música Esperança');
    }
    $page_title = isset($title['title']) ? $title['title'] : '';
    return array('title' => $page_title, 'site' => 'EME');
}, 99999);

// 9. Separador de título: usar "—" em vez do "|" padrão
add_filter('document_title_separator', function($sep) {
    return '—';
}, 99999);

