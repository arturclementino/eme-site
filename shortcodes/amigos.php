<?php
/**
 * Shortcode Amigos da EME & Projetos: [eme_amigos], [eme_projetos]
 * EME - Escola de Música Esperança
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_amigos($atts) {
    ob_start();
    ?>
    <div class="eme-amigos-wrapper">
        <!-- Hero Section -->
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Projetos Sociais & Ação Comunitária</span>
                <h1 class="eme-hero-title">Amigos da EME</h1>
                <p class="eme-hero-subtitle">
                    Transformando realidades e ampliando o acesso à educação musical de excelência através do nosso programa de bolsas de estudo.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <!-- Destaques & Números de Impacto -->
                <div class="eme-stats-grid" style="margin-bottom: 50px;">
                    <div class="eme-stat-item">
                        <span class="eme-stat-number">85%</span>
                        <span class="eme-stat-label">Desconto em Bolsas de Estudo</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number">4</span>
                        <span class="eme-stat-label">Alunos Bolsistas Ativos</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number">100%</span>
                        <span class="eme-stat-label">Acompanhamento Pedagógico</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number">20</span>
                        <span class="eme-stat-label">Professores Engajados</span>
                    </div>
                </div>

                <!-- Sobre o Projeto -->
                <div class="eme-grid-2 eme-align-center" style="margin-bottom: 60px;">
                    <div>
                        <span class="eme-badge-tag">Música para Todos</span>
                        <h2 class="eme-section-title text-left" style="font-size: 32px;">A Música Como Agente de Transformação Social</h2>
                        <div class="eme-divider divider-left"></div>
                        <p style="font-size: 16px; color: #444; line-height: 1.8;">
                            O programa <strong>Amigos da EME</strong> foi criado com a convicção de que o talento musical e a paixão pela arte não devem ser limitados por barreiras financeiras.
                        </p>
                        <p style="font-size: 16px; color: #444; line-height: 1.8;">
                            Através de parcerias com membros da comunidade, doadores e apoiadores institucionais, oferecemos <strong>bolsas de estudo de até 85%</strong> para crianças, jovens e adultos que desejam estudar música com propósito e rigor técnico.
                        </p>
                    </div>
                    <div style="background: var(--branco-puro); padding: 35px; border-radius: 16px; box-shadow: var(--sombra-card); border-left: 5px solid var(--terracota);">
                        <h3 style="color: var(--verde-escuro); margin-top: 0; font-size: 22px;">🎯 Como Funciona o Apoio</h3>
                        <ul style="list-style: none; padding: 0; margin: 20px 0 0; line-height: 2.2;">
                            <li>✅ <strong>Apadrinhamento Individual:</strong> Apoie a mensalidade parcial ou integral de um estudante.</li>
                            <li>✅ <strong>Empresas Parceiras:</strong> Apoio institucional com incentivo à formação artística local.</li>
                        </ul>
                    </div>
                </div>

                <!-- Opções de Contribuição & Apadrinhamento -->
                <div style="text-align: center; margin-bottom: 40px;">
                    <h2 class="eme-section-title">Como Fazer Parte</h2>
                    <p class="eme-section-desc">Escolha a melhor maneira de contribuir para o crescimento deste projeto social</p>
                    <div class="eme-divider"></div>
                </div>

                <div class="eme-grid-2" style="max-width: 900px; margin: 0 auto;">
                    <div class="eme-partner-card">
                        <div class="eme-partner-logo">🤝</div>
                        <h3>Apadrinhar um Aluno</h3>
                        <p style="font-size: 14px; color: var(--cinza-suave); margin-bottom: 20px;">
                            Faça uma contribuição mensal e ajude a cobrir a bolsa de estudos de um futuro instrumentista.
                        </p>
                        <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20apadrinhar%20um%20aluno%20bolsista%20no%20projeto%20Amigos%20da%20EME." target="_blank" class="eme-btn-outline eme-btn-block">
                            Seja um Padrinho
                        </a>
                    </div>

                    <div class="eme-partner-card">
                        <div class="eme-partner-logo">🏛️</div>
                        <h3>Empresa Parceira</h3>
                        <p style="font-size: 14px; color: var(--cinza-suave); margin-bottom: 20px;">
                            Associe sua empresa a uma causa cultural e educacional transformadora em Belo Horizonte.
                        </p>
                        <a href="mailto:coordenacao@escolaeme.com?subject=Parceria%20Institucional%20-%20Amigos%20da%20EME" class="eme-btn-outline eme-btn-block">
                            Parceria Empresarial
                        </a>
                    </div>
                </div>

                <!-- Call to Action Final -->
                <div class="eme-recruitment-box" style="margin-top: 60px;">
                    <div class="eme-recruitment-icon">❤️</div>
                    <h3>Quer saber mais ou inscrever-se para o Programa de Bolsas?</h3>
                    <p>Fale diretamente com nossa coordenação pedagógica para conhecer os critérios de seleção e vagas disponíveis.</p>
                    <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; margin-top: 20px;">
                        <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20as%20bolsas%20de%20estudo%20Amigos%20da%20EME." target="_blank" class="eme-btn-primary">
                            Falar no WhatsApp (31) 98420-1358
                        </a>
                        <a href="mailto:coordenacao@escolaeme.com?subject=Informac%C3%B5es%20Bolsas%20Amigos%20da%20EME" class="eme-btn-outline">
                            Enviar E-mail para a Coordenação
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_amigos', 'eme_shortcode_amigos');
add_shortcode('eme_projetos', 'eme_shortcode_amigos');
