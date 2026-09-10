<?php
/**
 * Header Template - Hello Elementor Child EME
 */
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri() . '/style.css?v=' . time()); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/css/style.css?v=' . time()); ?>" type="text/css" media="all" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header Fixo EME (Condensado) -->
<header class="eme-main-header">
    <div class="eme-container eme-header-container">
        <!-- Marca / Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="eme-brand" title="Escola de Música Esperança">
            <img src="https://escolaeme.com/wp-content/uploads/2026/08/Circular-verde-renovo-1.png" 
                 alt="Escola de Música Esperança" 
                 class="eme-header-logo" 
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
            <div class="eme-brand-text" style="display: none;">
                <span class="eme-brand-title">🎵 EME</span>
                <span class="eme-brand-sub">Escola de Música Esperança</span>
            </div>
        </a>

        <!-- Botão Menu Mobile -->
        <button class="eme-mobile-toggle" aria-label="Abrir Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Navegação Condensada -->
        <nav class="eme-main-nav">
            <ul class="eme-nav-list">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Início</a></li>
                <li><a href="<?php echo esc_url(home_url('/quem-somos')); ?>">Quem Somos</a></li>
                <li><a href="<?php echo esc_url(home_url('/aulas')); ?>">Aulas</a></li>
                <li><a href="<?php echo esc_url(home_url('/professores')); ?>">Professores</a></li>
                <li><a href="<?php echo esc_url(home_url('/eventos')); ?>">Eventos</a></li>
                <li><a href="<?php echo esc_url(home_url('/amigos-da-eme')); ?>">Amigos da EME</a></li>
                <li><a href="<?php echo esc_url(home_url('/galeria')); ?>">Galeria</a></li>
                <li><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                <li><a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a></li>
                <li><a href="<?php echo esc_url(home_url('/contato')); ?>">Contato</a></li>
            </ul>
        </nav>

        <!-- CTA Header -->
        <div class="eme-header-cta">
            <a href="<?php echo esc_url(home_url('/contato')); ?>" class="eme-btn-primary eme-header-btn">Agendar Visita</a>
        </div>
    </div>
</header>
<div class="eme-header-spacer"></div>

