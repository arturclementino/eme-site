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
                <!-- Destaques & Pilares do Programa -->
                <div class="eme-stats-grid" style="margin-bottom: 50px;">
                    <div class="eme-stat-item">
                        <span class="eme-stat-number" style="font-size: 24px; font-weight: 700;">Inclusão Social</span>
                        <span class="eme-stat-label">Bolsas Parciais & Integrais</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number" style="font-size: 24px; font-weight: 700;">Formação Musical</span>
                        <span class="eme-stat-label">Desenvolvimento de Novos Talentos</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number" style="font-size: 24px; font-weight: 700;">Metodologia EME</span>
                        <span class="eme-stat-label">Acompanhamento Pedagógico Contínuo</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number" style="font-size: 24px; font-weight: 700;">Parceria Solidária</span>
                        <span class="eme-stat-label">Apoio de Padrinhos & Empresas</span>
                    </div>
                </div>

                <!-- Sobre o Projeto -->
                <div class="eme-grid-2 eme-align-center" style="margin-bottom: 60px;">
                    <div>
                        <span class="eme-badge-tag">Música para Todos</span>
                        <h2 class="eme-section-title text-left" style="font-size: 32px;">A Música Como Agente de Transformação Social</h2>
                        <div class="eme-divider divider-left"></div>
                        <p style="font-size: 16px; color: #444; line-height: 1.8; font-weight: 400;">
                            O programa Amigos da EME foi criado com a convicção de que o talento musical e a paixão pela arte não devem ser limitados por barreiras financeiras.
                        </p>
                        <p style="font-size: 16px; color: #444; line-height: 1.8; font-weight: 400;">
                            Através de parcerias com membros da comunidade, doadores e apoiadores institucionais, oferecemos bolsas de estudo de até 85% para crianças, jovens e adultos que desejam estudar música com propósito e rigor técnico.
                        </p>
                    </div>
                    <div style="background: var(--branco-puro); padding: 35px; border-radius: 16px; box-shadow: var(--sombra-card); border-left: 5px solid var(--terracota);">
                        <h3 style="color: var(--verde-escuro); margin-top: 0; font-size: 22px; font-weight: 600;">Como Funciona o Apoio</h3>
                        <ul class="eme-feature-checklist" style="margin-top: 20px !important;">
                            <li>
                                <svg class="eme-check-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span><span class="eme-detail-label">Apadrinhamento Individual:</span> Apoie a mensalidade parcial ou integral de um estudante.</span>
                            </li>
                            <li>
                                <svg class="eme-check-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span><span class="eme-detail-label">Empresas Parceiras:</span> Apoio institucional com incentivo à formação artística local.</span>
                            </li>
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
                        <div class="eme-partner-logo" style="color: var(--terracota); display: flex; justify-content: center; margin-bottom: 12px;">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3>Apadrinhar um Aluno</h3>
                        <p style="font-size: 14px; color: var(--cinza-suave); margin-bottom: 20px; font-weight: 400;">
                            Faça uma contribuição mensal e ajude a cobrir a bolsa de estudos de um futuro instrumentista.
                        </p>
                        <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20apadrinhar%20um%20aluno%20bolsista%20no%20projeto%20Amigos%20da%20EME." target="_blank" class="eme-btn-outline eme-btn-block">
                            Seja um Padrinho
                        </a>
                    </div>

                    <div class="eme-partner-card">
                        <div class="eme-partner-logo" style="color: var(--terracota); display: flex; justify-content: center; margin-bottom: 12px;">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                        </div>
                        <h3>Empresa Parceira</h3>
                        <p style="font-size: 14px; color: var(--cinza-suave); margin-bottom: 20px; font-weight: 400;">
                            Associe sua empresa a uma causa cultural e educacional transformadora em Belo Horizonte.
                        </p>
                        <a href="mailto:coordenacao@escolaeme.com?subject=Parceria%20Institucional%20-%20Amigos%20da%20EME" class="eme-btn-outline eme-btn-block">
                            Parceria Empresarial
                        </a>
                    </div>
                </div>

                <!-- Call to Action Final -->
                <div class="eme-recruitment-box" style="margin-top: 60px;">
                    <div class="eme-recruitment-icon" style="color: var(--terracota); display: flex; justify-content: center; margin-bottom: 12px;">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    </div>
                    <h3>Quer saber mais ou inscrever-se para o Programa de Bolsas?</h3>
                    <p style="font-weight: 400;">Fale diretamente com nossa coordenação pedagógica para conhecer os critérios de seleção e vagas disponíveis.</p>
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
