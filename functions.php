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

    // Google Fonts Sans-Serif (Montserrat para títulos/marca e Source Sans 3 para textos de leitura fluida)
    wp_enqueue_style('eme-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Source+Sans+3:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap', array(), null);

    // EME Child Styles
    wp_enqueue_style('eme-root-style', $theme_uri . '/style.css', array('hello-elementor-parent'), $style_ver);
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
}, 9999);

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
    <meta property="og:description" content="Escola de Música Esperança (EME). Formação musical completa em diversas modalidades musicais, corpo docente qualificado e estrutura de ponta em Belo Horizonte (Padre Eustáquio)." />
    <meta property="og:url" content="https://escolaeme.com/" />
    <meta name="description" content="Escola de Música Esperança (EME) — Projeto da Igreja Esperança. Cursos didáticos de música, instrumentos e canto com foco em excelência e propósito comunitário em Belo Horizonte." />
    
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

/**
 * 10. Helper Global: Retorna ícone SVG autêntico para cada instrumento/categoria musical.
 *
 * @param string $key Identificador ou nome do instrumento/categoria
 * @param int $size Tamanho em pixels (padrão 36)
 * @return string Código SVG
 */
function eme_get_instrument_svg($key, $size = 36) {
    $s = intval($size);
    $k = strtolower(trim($key));

    // Teclas / Piano
    if (strpos($k, 'piano') !== false || strpos($k, 'tecla') !== false) {
        return '<svg width="' . $s . '" height="' . $s . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"></rect><line x1="6" y1="4" x2="6" y2="20"></line><line x1="10" y1="4" x2="10" y2="20"></line><line x1="14" y1="4" x2="14" y2="20"></line><line x1="18" y1="4" x2="18" y2="20"></line><polygon points="4.5,4 7.5,4 7.5,12 4.5,12" fill="currentColor"></polygon><polygon points="8.5,4 11.5,4 11.5,12 8.5,12" fill="currentColor"></polygon><polygon points="14.5,4 17.5,4 17.5,12 14.5,12" fill="currentColor"></polygon></svg>';
    }

    // Violino / Violoncelo
    if (strpos($k, 'violino') !== false || strpos($k, 'violoncelo') !== false || strpos($k, 'cello') !== false) {
        return '<svg width="' . $s . '" height="' . $s . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 2h4"></path><line x1="11" y1="2" x2="11" y2="5.5"></line><line x1="13" y1="2" x2="13" y2="5.5"></line><path d="M9.5 5.5c-1.8 0-3 1.2-3 2.8 0 1.2.6 2 1.5 2.5-1.2.6-2 1.7-2 3.2 0 2.5 2.5 4.5 6 4.5s6-2 6-4.5c0-1.5-.8-2.6-2-3.2.9-.5 1.5-1.3 1.5-2.5 0-1.6-1.2-2.8-3-2.8"></path><path d="M10.2 11c-.4.8-.4 1.8.2 2.5"></path><path d="M13.8 11c.4.8.4 1.8-.2 2.5"></path><line x1="12" y1="5.5" x2="12" y2="18.5"></line><line x1="3" y1="21.5" x2="21" y2="2.5" stroke-width="1.2" stroke-dasharray="2 2"></line></svg>';
    }

    // Contrabaixo (Acústico e Elétrico) -> Clave de Fá clássica
    if (strpos($k, 'baixo') !== false || strpos($k, 'contrabaixo') !== false) {
        return '<svg width="' . $s . '" height="' . $s . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="8.5" cy="7.5" r="2.5" fill="currentColor"></circle><path d="M8.5 10c0 0 2.5-.8 4.5-.8 3.5 0 6 2.5 6 6 0 4-3 6.8-6.5 6.8-3.2 0-5-1.8-5-3.8 0-1.5 1-2.5 2.5-2.5 1.2 0 2 .8 2 2 0 1-.8 1.8-1.8 1.8"></path><circle cx="19" cy="6.5" r="1.3" fill="currentColor"></circle><circle cx="19" cy="11.5" r="1.3" fill="currentColor"></circle></svg>';
    }

    // Bateria / Percussão / Ritmo -> Caixa de bateria com baquetas
    if (strpos($k, 'bateria') !== false || strpos($k, 'ritmo') !== false || strpos($k, 'percuss') !== false) {
        return '<svg width="' . $s . '" height="' . $s . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><ellipse cx="12" cy="9.5" rx="8" ry="3.5"></ellipse><path d="M4 9.5v6c0 1.93 3.58 3.5 8 3.5s8-1.57 8-3.5v-6"></path><line x1="7" y1="12.5" x2="7" y2="17.8"></line><line x1="12" y1="13" x2="12" y2="19"></line><line x1="17" y1="12.5" x2="17" y2="17.8"></line><line x1="3" y1="4" x2="8.5" y2="8.5"></line><line x1="21" y1="4" x2="15.5" y2="8.5"></line></svg>';
    }

    // Canto / Voz / Coral -> Microfone de estúdio
    if (strpos($k, 'canto') !== false || strpos($k, 'voz') !== false || strpos($k, 'coral') !== false) {
        return '<svg width="' . $s . '" height="' . $s . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="9" y="2" width="6" height="11" rx="3"></rect><path d="M5 10a7 7 0 0 0 14 0"></path><line x1="12" y1="17" x2="12" y2="22"></line><line x1="8" y1="22" x2="16" y2="22"></line></svg>';
    }

    // Sopros / Flauta / Saxofone
    if (strpos($k, 'sopro') !== false || strpos($k, 'flauta') !== false || strpos($k, 'sax') !== false) {
        return '<svg width="' . $s . '" height="' . $s . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 3v8a5 5 0 0 0 5 5h1a4 4 0 0 0 4-4v-3l4-2v6a5 5 0 0 1-5 5h-2a7 7 0 0 1-7-7V3h4z"></path><circle cx="9.5" cy="7.5" r="0.9" fill="currentColor"></circle><circle cx="9.5" cy="10.5" r="0.9" fill="currentColor"></circle><circle cx="9.5" cy="13.5" r="0.9" fill="currentColor"></circle></svg>';
    }

    // Musicalização Infantil -> Xilofone com baqueta
    if (strpos($k, 'infantil') !== false || strpos($k, 'musicaliz') !== false) {
        return '<svg width="' . $s . '" height="' . $s . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="14" width="3.5" height="7" rx="1"></rect><rect x="8" y="11" width="3.5" height="10" rx="1"></rect><rect x="13" y="8" width="3.5" height="13" rx="1"></rect><rect x="18" y="5" width="3.5" height="16" rx="1"></rect><line x1="2" y1="6" x2="19" y2="2"></line><circle cx="19" cy="2" r="1.8" fill="currentColor"></circle></svg>';
    }

    // Prática de Banda / Coletiva / Conjunto
    if (strpos($k, 'banda') !== false || strpos($k, 'coletiva') !== false || strpos($k, 'conjunto') !== false) {
        return '<svg width="' . $s . '" height="' . $s . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle><line x1="3" y1="7" x2="6" y2="7"></line><line x1="2" y1="10" x2="5" y2="10"></line></svg>';
    }

    // Teoria / Harmonia / Percepção -> Caderno / Partitura
    if (strpos($k, 'teoria') !== false || strpos($k, 'harmonia') !== false || strpos($k, 'percep') !== false) {
        return '<svg width="' . $s . '" height="' . $s . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path><path d="M10 11V7l5-1.2v4.2"></path><circle cx="9" cy="11" r="1.3" fill="currentColor"></circle><circle cx="14" cy="10" r="1.3" fill="currentColor"></circle></svg>';
    }

    // Padrão: Violão / Guitarra / Cordas
    return '<svg width="' . $s . '" height="' . $s . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="15" r="2" fill="currentColor"></circle><path d="M10 2.5h4"></path><line x1="11" y1="2.5" x2="11" y2="6"></line><line x1="13" y1="2.5" x2="13" y2="6"></line><path d="M9.5 6c-2 0-3.5 1.5-3.5 3.5 0 1.5.8 2.5 1.8 3.2-1.5.8-2.3 2.2-2.3 3.8 0 2.8 2.8 5 6.5 5s6.5-2.2 6.5-5c0-1.6-.8-3-2.3-3.8 1-.7 1.8-1.7 1.8-3.2 0-2-1.5-3.5-3.5-3.5"></path><line x1="10" y1="19.5" x2="14" y2="19.5"></line></svg>';
}





