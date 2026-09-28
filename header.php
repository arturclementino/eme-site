<?php
/**
 * Header Template - Hello Elementor Child EME
 */
if (!defined('ABSPATH')) {
    exit;
}

// PÁGINA DE MANUTENÇÃO (Exibe banner imediato para todos os visitantes não autenticados)
if (!is_user_logged_in() && !is_admin()) {
    header('HTTP/1.1 503 Service Temporarily Unavailable');
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    echo '<!DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Site em Manutenção — Escola de Música Esperança</title><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet"><style>body{margin:0;padding:0;background:#0D1117;color:#FFFFFF;font-family:"Montserrat",sans-serif;display:flex;align-items:center;justify-content:center;min-height:100vh;text-align:center}.container{max-width:650px;padding:40px 24px}.logo{font-family:"Cinzel",serif;color:#D4AF37;font-size:38px;font-weight:700;margin-bottom:12px;letter-spacing:1px}h1{font-size:26px;font-weight:600;color:#F0F6FC;margin-bottom:18px}p{font-size:16px;color:#8B949E;line-height:1.6;margin-bottom:32px}.card{background:#161B22;border:1px solid #30363D;border-radius:12px;padding:24px;text-align:left;display:inline-block;width:100%;box-sizing:border-box}.card strong{color:#C9D1D9;display:block;margin-bottom:8px}.card p{margin:6px 0;font-size:15px;color:#8B949E}.card a{color:#58A6FF;text-decoration:none}</style></head><body><div class="container"><div class="logo">Escola de Música Esperança — EME</div><h1>Site em Manutenção</h1><p>Estamos realizando atualizações técnicas e melhorias em nossa plataforma. Em breve estaremos de volta com novidades!</p><div class="card"><strong>Entre em contato:</strong><p>📧 Email: <a href="mailto:pastoral.liturgica@igrejaesperanca.org.br">pastoral.liturgica@igrejaesperanca.org.br</a></p><p>📍 Belo Horizonte — MG</p></div></div></body></html>';
    exit;
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header Fixo EME -->
<header class="eme-main-header">
    <div class="eme-container eme-header-container">
        <!-- Marca / Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="eme-brand" title="Escola de Música Esperança">
            <img src="https://escolaeme.com/wp-content/uploads/2026/08/eme-horizontal-verde-renovo-scaled-e1787075643364.png" 
                 alt="Escola de Música Esperança" 
                 class="eme-header-logo"
                 decoding="async"
                 fetchpriority="high" />
        </a>

        <!-- Botão Menu Mobile -->
        <button class="eme-mobile-toggle" aria-label="Abrir Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Navegação -->
        <nav class="eme-main-nav">
            <ul class="eme-nav-list">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Início</a></li>
                <li><a href="<?php echo esc_url(home_url('/quem-somos')); ?>">Quem Somos</a></li>
                <li><a href="<?php echo esc_url(home_url('/aulas')); ?>">Aulas</a></li>
                <li><a href="<?php echo esc_url(home_url('/professores')); ?>">Professores</a></li>
                <li><a href="<?php echo esc_url(home_url('/eventos')); ?>">Eventos</a></li>
                <li class="eme-nav-dropdown">
                    <a href="<?php echo esc_url(home_url('/projetos')); ?>" class="eme-dropdown-toggle">
                        Projetos <span class="eme-arrow">▾</span>
                    </a>
                    <ul class="eme-dropdown-menu">
                        <li><a href="<?php echo esc_url(home_url('/amigos-da-eme')); ?>">Amigos da EME (Bolsas & Apoio)</a></li>
                        <li><a href="<?php echo esc_url(home_url('/estudio')); ?>">Estúdio & Gravações</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo esc_url(home_url('/galeria')); ?>">Galeria</a></li>
                <li><a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a></li>
                <li><a href="<?php echo esc_url(home_url('/contato')); ?>">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="eme-header-spacer"></div>


