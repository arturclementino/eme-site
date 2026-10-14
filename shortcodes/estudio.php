<?php
/**
 * Shortcode Estúdio & Produção Musical: [eme_estudio]
 * EME - Escola de Música Esperança
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_estudio($atts) {
    ob_start();
    ?>
    <div class="eme-estudio-wrapper">
        <!-- Hero Section -->
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Estrutura & Equipamentos</span>
                <h1 class="eme-hero-title">Estúdio de Ensaio & Gravação</h1>
                <p class="eme-hero-subtitle">
                    Espaço equipado e tratado acusticamente para ensaios de bandas, captação de voz e instrumentos, e produções musicais completas em Belo Horizonte.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <!-- Apresentação Institucional do Estúdio (Gravação & Ensaio) -->
                <div style="max-width: 800px; margin: 0 auto 60px;">
                    <!-- Card Gravações -->
                    <div style="background: var(--branco-puro); padding: 35px; border-radius: 16px; box-shadow: var(--sombra-card); border-top: 5px solid var(--verde-escuro); display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span class="eme-badge-tag">Gravações & Produção</span>
                            <h3 style="color: var(--verde-escuro); margin: 10px 0 15px; font-size: 24px; font-weight: 700;">Gravação e Produção</h3>
                            <ul class="eme-feature-checklist">
                                <li>
                                    <svg class="eme-check-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span>Microfones a condensadores e dinâmicos de alta sensibilidade</span>
                                </li>
                                <li>
                                    <svg class="eme-check-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span>28 canais de entrada (inputs) e 12 de saída (outputs)</span>
                                </li>
                                <li>
                                    <svg class="eme-check-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span>Gravação, edição, mixagem e masterização profissional com Pro Tools</span>
                                </li>
                                <li>
                                    <svg class="eme-check-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span>Isolamento e tratamento acústico de alta performance</span>
                                </li>
                            </ul>
                        </div>
                        <div style="margin-top: 20px;">
                            <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20or%C3%A7ar%20uma%20grava%C3%A7%C3%A3o%20no%20Est%C3%Badio%20EME." target="_blank" class="eme-btn-outline" style="width: 100%; text-align: center; box-sizing: border-box; display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span>Orçar Gravação no WhatsApp</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Equipamentos & Infraestrutura -->
                <div style="text-align: center; margin-bottom: 40px;">
                    <h2 class="eme-section-title">Infraestrutura & Equipamentos</h2>
                    <p class="eme-section-desc">Tecnologia e acervo instrumental à disposição do seu ensaio ou gravação</p>
                    <div class="eme-divider"></div>
                </div>

                <div class="eme-grid-3">
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--terracota)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
                        </div>
                        <h3>Microfonação & Retorno In-Ear</h3>
                        <p>Microfones condensadores de grande diafragma para voz e instrumentos acústicos, microfones dinâmicos de alta precisão e sistema de retorno 100% in-ear (fones).</p>
                    </div>

                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--terracota)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="5" width="20" height="14" rx="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line><line x1="6" y1="15" x2="6" y2="15"></line><line x1="10" y1="15" x2="10" y2="15"></line><line x1="14" y1="15" x2="14" y2="15"></line><line x1="18" y1="15" x2="18" y2="15"></line></svg>
                        </div>
                        <h3>Instrumentos de Apoio</h3>
                        <p>Piano digital, teclados, bateria completa, cabeçotes e caixas de guitarra e contrabaixo prontos para uso em ensaios e sessões.</p>
                    </div>

                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--terracota)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                        </div>
                        <h3>Tratamento Acústico</h3>
                        <p>Sala tratada acusticamente para captação cristalina, sonoridade equilibrada e ambiente confortável para sessões curtas ou diárias.</p>
                    </div>
                </div>

                <!-- CTA Orçamento WhatsApp -->
                <div class="eme-recruitment-box" style="margin-top: 60px;">
                    <div class="eme-recruitment-icon" style="color: var(--terracota); display: flex; justify-content: center; margin-bottom: 14px;">
                        <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
                    </div>
                    <h3>Quer consultar horários e valores de ensaio ou gravação?</h3>
                    <p>Fale diretamente com nossa equipe no WhatsApp. Responderemos com os valores de hora de ensaio, diárias de gravação e pacotes por música.</p>
                    <div style="margin-top: 20px;">
                        <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20consultar%20valores%20de%20ensaio%20e%20grava%C3%A7%C3%A3o%20no%20Est%C3%Badio%20EME." target="_blank" class="eme-btn-primary" style="font-size: 14px; padding: 14px 32px; display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <span>Falar com a Secretaria no WhatsApp (31) 98420-1358</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_estudio', 'eme_shortcode_estudio');
