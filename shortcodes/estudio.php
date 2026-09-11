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
                <span class="eme-badge-tag">Estrutura & Tecnologia</span>
                <h1 class="eme-hero-title">Estúdio & Produção Musical</h1>
                <p class="eme-hero-subtitle">
                    Espaço equipado e tratado acusticamente para gravação, ensaios e produções musicais com sonoridade profissional em Belo Horizonte.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <!-- Apresentação Institucional do Estúdio -->
                <div class="eme-grid-2 eme-align-center" style="margin-bottom: 60px;">
                    <div>
                        <span class="eme-badge-tag">Qualidade Sonora</span>
                        <h2 class="eme-section-title text-left" style="font-size: 32px;">Grave seu Projeto na EME</h2>
                        <div class="eme-divider divider-left"></div>
                        <p style="font-size: 16px; color: #444; line-height: 1.8;">
                            O <strong>Estúdio EME</strong> foi projetado para atender músicos, alunos, cantores e bandas que buscam um ambiente acolhedor, com excelente acústica e equipamentos de alta precisão para registrar sua arte.
                        </p>
                        <p style="font-size: 16px; color: #444; line-height: 1.8;">
                            Seja para gravar a voz de uma música autoral, registrar um portfólio de audição ou produzir uma música completa com arranjos profissionais de nossos docentes, nossa equipe está pronta para direcionar seu projeto.
                        </p>
                        <div style="margin-top: 24px;">
                            <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20consultar%20valores%20e%20disponibilidade%20para%20grava%C3%A7%C3%A3o%20no%20Est%C3%Badio%20EME." target="_blank" class="eme-btn-primary">
                                💬 Consultar Valores & Orçamentos no WhatsApp
                            </a>
                        </div>
                    </div>
                    <div style="background: var(--branco-puro); padding: 35px; border-radius: 16px; box-shadow: var(--sombra-card); border-left: 5px solid var(--terracota);">
                        <h3 style="color: var(--verde-escuro); margin-top: 0; font-size: 22px;">🎧 Serviços Disponíveis</h3>
                        <ul style="list-style: none; padding: 0; margin: 20px 0 0; line-height: 2.2; font-size: 15px; color: #333;">
                            <li>🎙️ <strong>Gravação de Voz & Instrumentos Solistas</strong></li>
                            <li>🎸 <strong>Gravação de Guitarras, Baixos & Teclas</strong></li>
                            <li>🥁 <strong>Captação Multipista de Bateria & Percussão</strong></li>
                            <li>🎚️ <strong>Edição, Mixagem & Masterização</strong></li>
                            <li>🎼 <strong>Produção Musical & Arranjos com Músicos Docentes</strong></li>
                            <li>🎬 <strong>Gravação para Audições, Exames & Vestibulares de Música</strong></li>
                        </ul>
                    </div>
                </div>

                <!-- Equipamentos & Infraestrutura -->
                <div style="text-align: center; margin-bottom: 40px;">
                    <h2 class="eme-section-title">Infraestrutura & Equipamentos</h2>
                    <p class="eme-section-desc">Tecnologia e acervo instrumental à disposição da sua produção</p>
                    <div class="eme-divider"></div>
                </div>

                <div class="eme-grid-3">
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎙️</div>
                        <h3>Microfones & Captação</h3>
                        <p>Microfones condensadores de grande diafragma para voz e acústicos, microfones dinâmicos de alta pressão sonora para bateria e amplificadores.</p>
                    </div>

                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎹</div>
                        <h3>Instrumentos do Estúdio</h3>
                        <p>Piano, teclados, bateria completa, amplificadores de guitarra e contrabaixo, violões e instrumentos de percussão prontos para uso.</p>
                    </div>

                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎛️</div>
                        <h3>Acústica & Áudio HD</h3>
                        <p>Sala tratada acusticamente para captação cristalina, conversores de alta resolução 24-bit/96kHz e ambiente confortável.</p>
                    </div>
                </div>

                <!-- CTA Orçamento WhatsApp -->
                <div class="eme-recruitment-box" style="margin-top: 60px;">
                    <div class="eme-recruitment-icon">🎚️</div>
                    <h3>Quer agendar um horário ou solicitar um orçamento?</h3>
                    <p>Entre em contato com nossa equipe de produção no WhatsApp. Informaremos todas as opções de pacotes por hora ou por música.</p>
                    <div style="margin-top: 20px;">
                        <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20or%C3%A7ar%20uma%20grava%C3%A7%C3%A3o%20no%20Est%C3%Badio%20EME." target="_blank" class="eme-btn-primary" style="font-size: 14px; padding: 14px 32px;">
                            💬 Falar com a Produção no WhatsApp (31) 98420-1358
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
