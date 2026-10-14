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
                            <div class="eme-diff-icon">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--terracota)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
                            <h3 style="font-size: 22px; color: var(--verde-escuro); margin-bottom: 12px; font-weight: 700;">Amigos da EME</h3>
                            <p style="font-size: 15px; color: #555; line-height: 1.7; margin-bottom: 20px; font-weight: 400;">
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
                            <div class="eme-diff-icon">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--terracota)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
                            </div>
                            <h3 style="font-size: 22px; color: var(--verde-escuro); margin-bottom: 12px; font-weight: 700;">Estúdio & Gravações</h3>
                            <p style="font-size: 15px; color: #555; line-height: 1.7; margin-bottom: 20px; font-weight: 400;">
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
                            <div class="eme-diff-icon">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--terracota)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                            </div>
                            <h3 style="font-size: 22px; color: var(--verde-escuro); margin-bottom: 12px; font-weight: 700;">Eventos & Casa Aberta</h3>
                            <p style="font-size: 15px; color: #555; line-height: 1.7; margin-bottom: 20px; font-weight: 400;">
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
