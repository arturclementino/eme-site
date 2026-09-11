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
                <div class="eme-grid-2" style="margin-bottom: 60px;">
                    <!-- Card Ensaios -->
                    <div style="background: var(--branco-puro); padding: 35px; border-radius: 16px; box-shadow: var(--sombra-card); border-top: 5px solid var(--terracota); display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span class="eme-badge-tag">Ensaios</span>
                            <h3 style="color: var(--verde-escuro); margin: 10px 0 15px; font-size: 24px;">🥁 Sala de Ensaio para Bandas</h3>
                            <p style="font-size: 15px; color: #444; line-height: 1.7;">
                                Sala ampla e tratada acusticamente para ensaios de grupos, bandas e trios. Estrutura pronta para você chegar e tocar com total conforto.
                            </p>
                            <ul style="list-style: none; padding: 0; margin: 20px 0; line-height: 2; font-size: 14px; color: #333;">
                                <li>✅ <strong>Bateria completa de estúdio</strong> (pratos, ferragens e caixas)</li>
                                <li>✅ <strong>Amplificadores profissionais</strong> de guitarra e contrabaixo</li>
                                <li>✅ <strong>Sistema de PA & Microfones</strong> para voz e acompanhamento</li>
                                <li>✅ <strong>Ambiente climatizado</strong> e isolamento de ruído externo</li>
                            </ul>
                        </div>
                        <div style="margin-top: 20px;">
                            <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20um%20hor%C3%A1rio%20de%20ensaio%20no%20Est%C3%Badio%20EME." target="_blank" class="eme-btn-primary" style="width: 100%; text-align: center; box-sizing: border-box;">
                                💬 Agendar Ensaio no WhatsApp
                            </a>
                        </div>
                    </div>

                    <!-- Card Gravações -->
                    <div style="background: var(--branco-puro); padding: 35px; border-radius: 16px; box-shadow: var(--sombra-card); border-top: 5px solid var(--verde-escuro); display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span class="eme-badge-tag">Gravações & Produção</span>
                            <h3 style="color: var(--verde-escuro); margin: 10px 0 15px; font-size: 24px;">🎙️ Captação de Áudio & Produção</h3>
                            <p style="font-size: 15px; color: #444; line-height: 1.7;">
                                Gravação multipista em alta fidelidade para voz, violões, instrumentos solistas, bateria e produções completas.
                            </p>
                            <ul style="list-style: none; padding: 0; margin: 20px 0; line-height: 2; font-size: 14px; color: #333;">
                                <li>✅ <strong>Microfones condensadores & dinâmicos</strong> de alta precisão</li>
                                <li>✅ <strong>Captação multipista</strong> de bateria, voz e instrumentos</li>
                                <li>✅ <strong>Edição, mixagem e masterização</strong> profissional</li>
                                <li>✅ <strong>Acompanhamento pedagógico & arranjadores docentes</strong></li>
                            </ul>
                        </div>
                        <div style="margin-top: 20px;">
                            <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20or%C3%A7ar%20uma%20grava%C3%A7%C3%A3o%20no%20Est%C3%Badio%20EME." target="_blank" class="eme-btn-outline" style="width: 100%; text-align: center; box-sizing: border-box;">
                                💬 Orçar Gravação no WhatsApp
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
                        <div class="eme-diff-icon">🎙️</div>
                        <h3>Microfonação & PA</h3>
                        <p>Microfones condensadores de grande diafragma para voz e instrumentos acústicos, microfones dinâmicos de alta pressão e sistema de monitoramento.</p>
                    </div>

                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎹</div>
                        <h3>Instrumentos de Apoio</h3>
                        <p>Piano digital, teclados, bateria completa, cabeçotes e caixas de guitarra e contrabaixo prontos para uso em ensaios e sessões.</p>
                    </div>

                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎛️</div>
                        <h3>Tratamento Acústico</h3>
                        <p>Sala tratada acusticamente para captação cristalina, sonoridade equilibrada e ambiente confortável para sessões curtas ou diárias.</p>
                    </div>
                </div>

                <!-- CTA Orçamento WhatsApp -->
                <div class="eme-recruitment-box" style="margin-top: 60px;">
                    <div class="eme-recruitment-icon">🎚️</div>
                    <h3>Quer consultar horários e valores de ensaio ou gravação?</h3>
                    <p>Fale diretamente com nossa equipe no WhatsApp. Responderemos com os valores de hora de ensaio, diárias de gravação e pacotes por música.</p>
                    <div style="margin-top: 20px;">
                        <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20consultar%20valores%20de%20ensaio%20e%20grava%C3%A7%C3%A3o%20no%20Est%C3%Badio%20EME." target="_blank" class="eme-btn-primary" style="font-size: 14px; padding: 14px 32px;">
                            💬 Falar com a Secretaria no WhatsApp (31) 98420-1358
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
