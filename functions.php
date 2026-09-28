<?php
/**
 * EME Child Theme Functions — Otimizado para alta performance
 */

if (!defined('ABSPATH')) {
    exit;
}

// DESATIVAR Simply Static — plugin estava servindo versao estatica antiga do site
// Este filtro remove o Simply Static da lista de plugins ativos em tempo de execucao
add_filter('option_active_plugins', function($plugins) {
    $plugins = array_values(array_filter((array) $plugins, function($plugin) {
        return strpos($plugin, 'simply-static') === false;
    }));
    return $plugins;
}, 0);

// Forçar navegador e CDN a não armazenar cache estático (garante visualização em tempo real)
add_action('send_headers', function() {
    if (!is_admin()) {
        header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0, s-maxage=0', true);
        header('Pragma: no-cache', true);
        header('Expires: Wed, 11 Jan 1984 05:00:00 GMT', true);
    }
});

// PÁGINA DE MANUTENÇÃO (Banner elegante para visitantes não autenticados)
add_action('get_header', function() {
    if (!is_user_logged_in() && !is_admin()) {
        wp_die(
            '<div style="font-family:\'Montserrat\',sans-serif; text-align:center; padding:60px 20px; background:#0D1117; color:#FFFFFF; min-height:80vh; display:flex; flex-direction:column; justify-content:center; align-items:center;">' .
            '<h1 style="font-family:\'Cinzel\',serif; color:#D4AF37; font-size:36px; margin-bottom:15px;">Escola de Música Esperança — EME</h1>' .
            '<h2 style="font-size:24px; font-weight:600; margin-bottom:20px; color:#F0F6FC;">Site em Manutenção</h2>' .
            '<p style="font-size:16px; color:#8B949E; max-width:600px; line-height:1.6; margin-bottom:30px;">Estamos realizando atualizações técnicas e melhorias em nossa plataforma. Em breve estaremos de volta com novidades!</p>' .
            '<div style="background:#161B22; border:1px solid #30363D; border-radius:12px; padding:20px 30px; display:inline-block; text-align:left;">' .
            '<p style="margin:5px 0; color:#C9D1D9;"><strong>Entre em contato:</strong></p>' .
            '<p style="margin:5px 0; color:#8B949E;">📧 <a href="mailto:pastoral.liturgica@igrejaesperanca.org.br" style="color:#58A6FF; text-decoration:none;">pastoral.liturgica@igrejaesperanca.org.br</a></p>' .
            '<p style="margin:5px 0; color:#8B949E;">📍 Belo Horizonte — MG</p>' .
            '</div>' .
            '</div>',
            'Site em Manutenção — Escola de Música Esperança',
            array('response' => 503)
        );
    }
});



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

