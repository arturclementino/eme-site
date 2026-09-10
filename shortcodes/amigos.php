<?php
/**
 * Shortcode Amigos da EME: [eme_amigos]
 * EME - Escola de Música Esperança / NAME
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_amigos($atts) {
    ob_start();
    ?>
    <div class="eme-amigos-wrapper">
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Inclusão Social & Bolsas de Estudo</span>
                <h1 class="eme-hero-title">Projeto Amigos da EME</h1>
                <p class="eme-hero-subtitle">
                    Transformando vidas através da música. Ajude a financiar bolsas de estudo para alunos vocacionados.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <div class="eme-grid-2 eme-align-center">
                    <div class="eme-amigos-text">
                        <span class="eme-badge-tag">Democratização da Arte</span>
                        <h2 class="eme-section-title text-left">Música com Propósito e Impacto Social</h2>
                        <div class="eme-divider divider-left"></div>
                        <p>
                            O <strong>Projeto Amigos da EME</strong> visa democratizar o acesso ao ensino musical de alto nível em Belo Horizonte, oferecendo <strong>bolsas de estudo de até 85%</strong>.
                        </p>
                        <p>
                            O programa foca na integração entre fé, cultura e desenvolvimento comunitário. Atualmente, atende <strong>quatro alunos bolsistas</strong> que demonstram grande talento artístico e vulnerabilidade socioeconômica.
                        </p>
                        <p>
                            Sua contribuição como "Amigo da EME" é direcionada diretamente para a compra de materiais didáticos, manutenção de instrumentos e financiamento das mensalidades desses estudantes.
                        </p>
                        <a href="#apoiar" class="eme-btn-primary" style="margin-top: 15px;">Quero apoiar o projeto &rarr;</a>
                    </div>
                    <div class="eme-amigos-stats-card">
                        <div class="eme-stat-box">
                            <span class="eme-stat-number">85%</span>
                            <span class="eme-stat-label">Desconto em Bolsas de Estudo</span>
                        </div>
                        <div class="eme-stat-box">
                            <span class="eme-stat-number">4</span>
                            <span class="eme-stat-label">Alunos Bolsistas Ativos</span>
                        </div>
                        <div class="eme-stat-box">
                            <span class="eme-stat-number">100%</span>
                            <span class="eme-stat-label">Transparência & Acompanhamento</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Formulário de Apoio / Doação -->
        <section id="apoiar" class="eme-cta-lead-section">
            <div class="eme-container">
                <div class="eme-grid-2 eme-align-center">
                    <div class="eme-lead-info">
                        <h2>Seja um Amigo da EME</h2>
                        <p>Invista no futuro de jovens talentos da nossa comunidade. Escolha como prefere contribuir — como mantenedor mensal ou doador pontual de instrumentos.</p>
                        <ul class="eme-lead-check-list">
                            <li>✓ Apoio financeiro mensal para o fundo de bolsas</li>
                            <li>✓ Doação de instrumentos musicais novos ou usados</li>
                            <li>✓ Relatórios periódicos de acompanhamento dos bolsistas</li>
                        </ul>
                    </div>
                    <div class="eme-lead-form-box">
                        <h3>Quero Apoiar o Projeto</h3>
                        <form onsubmit="event.preventDefault(); alert('Obrigado pelo seu interesse em apoiar o Projeto Amigos da EME! Entraremos em contato para formalizar sua parceria.');" class="eme-form">
                            <div class="eme-form-group">
                                <label>Nome Completo / Empresa</label>
                                <input type="text" placeholder="Seu nome ou razão social" required />
                            </div>
                            <div class="eme-form-group">
                                <label>E-mail</label>
                                <input type="email" placeholder="seu@email.com" required />
                            </div>
                            <div class="eme-form-group">
                                <label>Telefone / WhatsApp</label>
                                <input type="tel" placeholder="(31) 98420-1358" required />
                            </div>
                            <div class="eme-form-group">
                                <label>Tipo de Apoio</label>
                                <select required>
                                    <option value="" disabled selected>Selecione uma opção</option>
                                    <option value="mensal">Contribuição Financeira Mensal</option>
                                    <option value="pontual">Doação Pontual (Fundo de Bolsas)</option>
                                    <option value="instrumento">Doação de Instrumento Musical</option>
                                    <option value="parceria">Parceria Empresarial</option>
                                </select>
                            </div>
                            <div class="eme-form-group">
                                <label class="eme-checkbox-label">
                                    <input type="checkbox" required />
                                    <span>Autorizo o uso dos meus dados para contato sobre o Projeto Amigos da EME (LGPD).</span>
                                </label>
                            </div>
                            <button type="submit" class="eme-btn-primary eme-btn-block">Quero apoiar a EME</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_amigos', 'eme_shortcode_amigos');
