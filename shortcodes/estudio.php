<?php
/**
 * Shortcode EstÃºdio & ProduÃ§Ã£o Musical: [eme_estudio]
 * EME - Escola de MÃºsica EsperanÃ§a
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
                <h1 class="eme-hero-title">EstÃºdio de Ensaio & GravaÃ§Ã£o</h1>
                <p class="eme-hero-subtitle">
                    EspaÃ§o equipado e tratado acusticamente para ensaios de bandas, captaÃ§Ã£o de voz e instrumentos, e produÃ§Ãµes musicais completas em Belo Horizonte.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <!-- ApresentaÃ§Ã£o Institucional do EstÃºdio (GravaÃ§Ã£o & Ensaio) -->
                <div style="max-width: 800px; margin: 0 auto 60px;">
                    <!-- Card GravaÃ§Ãµes -->
                    <div style="background: var(--branco-puro); padding: 35px; border-radius: 16px; box-shadow: var(--sombra-card); border-top: 5px solid var(--verde-escuro); display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span class="eme-badge-tag">GravaÃ§Ãµes & ProduÃ§Ã£o</span>
                            <h3 style="color: var(--verde-escuro); margin: 10px 0 15px; font-size: 24px;">ðŸŽ™ï¸ GravaÃ§Ã£o e ProduÃ§Ã£o</h3>
                            <ul style="list-style: none; padding: 0; margin: 20px 0; line-height: 2; font-size: 14px; color: #333;">
                                <li>âœ… Microfones a condensadores & dinÃ¢micos</li>
                                <li>âœ… 28 inputs e 12 outputs</li>
                                <li>âœ… GravaÃ§Ã£o, EdiÃ§Ã£o, mixagem e masterizaÃ§Ã£o profissional com Protools</li>
                                <li>âœ… Isolamento e tratamento acÃºstico de alta performance</li>
                            </ul>
                        </div>
                        <div style="margin-top: 20px;">
                            <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20or%C3%A7ar%20uma%20grava%C3%A7%C3%A3o%20no%20Est%C3%Badio%20EME." target="_blank" class="eme-btn-outline" style="width: 100%; text-align: center; box-sizing: border-box;">
                                ðŸ’¬ OrÃ§ar GravaÃ§Ã£o no WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Equipamentos & Infraestrutura -->
                <div style="text-align: center; margin-bottom: 40px;">
                    <h2 class="eme-section-title">Infraestrutura & Equipamentos</h2>
                    <p class="eme-section-desc">Tecnologia e acervo instrumental Ã  disposiÃ§Ã£o do seu ensaio ou gravaÃ§Ã£o</p>
                    <div class="eme-divider"></div>
                </div>

                <div class="eme-grid-3">
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">ðŸŽ™ï¸</div>
                        <h3>MicrofonaÃ§Ã£o & Retorno In-Ear</h3>
                        <p>Microfones condensadores de grande diafragma para voz e instrumentos acÃºsticos, microfones dinÃ¢micos de alta precisÃ£o e sistema de retorno 100% in-ear (fones).</p>
                    </div>

                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">ðŸŽ¹</div>
                        <h3>Instrumentos de Apoio</h3>
                        <p>Piano digital, teclados, bateria completa, cabeÃ§otes e caixas de guitarra e contrabaixo prontos para uso em ensaios e sessÃµes.</p>
                    </div>

                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">ðŸŽ›ï¸</div>
                        <h3>Tratamento AcÃºstico</h3>
                        <p>Sala tratada acusticamente para captaÃ§Ã£o cristalina, sonoridade equilibrada e ambiente confortÃ¡vel para sessÃµes curtas ou diÃ¡rias.</p>
                    </div>
                </div>

                <!-- CTA OrÃ§amento WhatsApp -->
                <div class="eme-recruitment-box" style="margin-top: 60px;">
                    <div class="eme-recruitment-icon">ðŸŽšï¸</div>
                    <h3>Quer consultar horÃ¡rios e valores de ensaio ou gravaÃ§Ã£o?</h3>
                    <p>Fale diretamente com nossa equipe no WhatsApp. Responderemos com os valores de hora de ensaio, diÃ¡rias de gravaÃ§Ã£o e pacotes por mÃºsica.</p>
                    <div style="margin-top: 20px;">
                        <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20consultar%20valores%20de%20ensaio%20e%20grava%C3%A7%C3%A3o%20no%20Est%C3%Badio%20EME." target="_blank" class="eme-btn-primary" style="font-size: 14px; padding: 14px 32px;">
                            ðŸ’¬ Falar com a Secretaria no WhatsApp (31) 98420-1358
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

