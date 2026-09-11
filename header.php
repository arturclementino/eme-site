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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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


