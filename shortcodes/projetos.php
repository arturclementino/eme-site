<?php
/**
 * Shortcode Projetos Hub: [eme_projetos]
 * EME - Escola de Música Esperança
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_projetos($atts) {
    ob_start();
    ?>
    <div class="eme-projetos-wrapper">
        <!-- Hero Section -->
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Iniciativas & Impacto</span>
                <h1 class="eme-hero-title">Projetos EME</h1>
                <p class="eme-hero-subtitle">
                    Conheça nossas ações sociais, infraestrutura de gravações e programação cultural voltadas para a transformação comunitária através da música.
                </p>
            </div>
        </section>

        <!-- Grid de Projetos -->
        <section class="eme-section">
            <div class="eme-container">
                <div class="eme-grid-3">
                    
                    <!-- Card 1: Amigos da EME -->
                    <div class="eme-diff-card" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                        <div>
                            <div class="eme-diff-icon">🤝</div>
                            <h3 style="font-size: 22px; color: var(--verde-escuro); margin-bottom: 12px;">Amigos da EME</h3>
                            <p style="font-size: 15px; color: #555; line-height: 1.7; margin-bottom: 20px;">
                                Programa de apoio e bolsas de estudo de até 85% para ampliar o acesso à educação musical de qualidade na comunidade.
                            </p>
                        </div>
                        <div style="margin-top: auto; padding-top: 15px;">
                            <a href="<?php echo esc_url(home_url('/amigos-da-eme')); ?>" class="eme-btn-primary" style="width: 100%; text-align: center; box-sizing: border-box;">
                                Ver Amigos da EME &rarr;
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: Estúdio EME -->
                    <div class="eme-diff-card" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                        <div>
                            <div class="eme-diff-icon">🎙️</div>
                            <h3 style="font-size: 22px; color: var(--verde-escuro); margin-bottom: 12px;">Estúdio & Gravações</h3>
                            <p style="font-size: 15px; color: #555; line-height: 1.7; margin-bottom: 20px;">
                                Espaço com tratamento acústico e microfonação de ponta para gravação, mixagem, ensaios e produção musical.
                            </p>
                        </div>
                        <div style="margin-top: auto; padding-top: 15px;">
                            <a href="<?php echo esc_url(home_url('/estudio')); ?>" class="eme-btn-primary" style="width: 100%; text-align: center; box-sizing: border-box;">
                                Conhecer o Estúdio &rarr;
                            </a>
                        </div>
                    </div>

                    <!-- Card 3: Eventos & Recitais -->
                    <div class="eme-diff-card" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                        <div>
                            <div class="eme-diff-icon">🎭</div>
                            <h3 style="font-size: 22px; color: var(--verde-escuro); margin-bottom: 12px;">Eventos & Casa Aberta</h3>
                            <p style="font-size: 15px; color: #555; line-height: 1.7; margin-bottom: 20px;">
                                Pocket shows mensais comunitários, oficinas técnicas e recitais semestrais com apresentações dos alunos.
                            </p>
                        </div>
                        <div style="margin-top: auto; padding-top: 15px;">
                            <a href="<?php echo esc_url(home_url('/eventos')); ?>" class="eme-btn-outline" style="width: 100%; text-align: center; box-sizing: border-box;">
                                Ver Agenda Cultural &rarr;
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_projetos', 'eme_shortcode_projetos');
