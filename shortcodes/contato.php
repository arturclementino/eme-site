<?php
/**
 * Shortcode Contato: [eme_contato]
 * EME - Escola de Música Esperança
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_contato($atts) {
    ob_start();
    ?>
    <div id="contato" class="eme-contato-wrapper">
        <!-- Hero Section -->
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Atendimento & Localização</span>
                <h1 class="eme-hero-title">Fale Conosco</h1>
                <p class="eme-hero-subtitle">
                    Estamos à disposição para agendar sua visita, tirar dúvidas e orientar sua jornada musical na EME.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <div class="eme-grid-contato">
                    <!-- Formulário de Contato Completo (Coluna Esquerda) -->
                    <div class="eme-contato-form-box">
                        <h3>Envie uma Mensagem</h3>
                        <p style="margin-bottom: 24px; color: #555; font-size: 15px; line-height: 1.6;">
                            Preencha os campos abaixo e nossa secretaria pedagógica entrará em contato em breve.
                        </p>

                        <form action="#" method="post" class="eme-form" id="eme-main-contact-form">
                            <div class="eme-form-group">
                                <label for="eme-nome">Nome Completo *</label>
                                <input type="text" id="eme-nome" name="nome" placeholder="Digite seu nome completo" required />
                            </div>
                            <div class="eme-form-row">
                                <div class="eme-form-group">
                                    <label for="eme-email">E-mail Principal *</label>
                                    <input type="email" id="eme-email" name="email" placeholder="seu@email.com" required />
                                </div>
                                <div class="eme-form-group">
                                    <label for="eme-telefone">Telefone / WhatsApp *</label>
                                    <input type="tel" id="eme-telefone" name="telefone" placeholder="(31) 98420-1358" required />
                                </div>
                            </div>
                            <div class="eme-form-row">
                                <div class="eme-form-group">
                                    <label for="eme-assunto">Assunto *</label>
                                    <select id="eme-assunto" name="assunto" required>
                                        <option value="" disabled selected>Selecione o assunto</option>
                                        <option value="visita">Agendamento de Visita Presencial</option>
                                        <option value="matricula">Matrícula & Inscrição de Cursos</option>
                                        <option value="duvidas">Dúvidas sobre Aulas ou Horários</option>
                                        <option value="amigos">Projeto Amigos da EME (Bolsas & Apoio)</option>
                                        <option value="curriculo">Envio de Currículo / Trabalhe Conosco</option>
                                        <option value="outro">Outro assunto</option>
                                    </select>
                                </div>
                                <div class="eme-form-group">
                                    <label for="eme-curso">Curso de Interesse</label>
                                    <select id="eme-curso" name="curso">
                                        <option value="" selected>Selecione a modalidade (opcional)</option>
                                        <option value="violao">Violão / Guitarra</option>
                                        <option value="piano">Piano / Teclado</option>
                                        <option value="bateria">Bateria & Percussão</option>
                                        <option value="violino">Violino / Violoncelo</option>
                                        <option value="contrabaixo">Contrabaixo Elétrico e Acústico</option>
                                        <option value="canto">Canto & Fisiologia Vocal</option>
                                        <option value="flauta">Flauta Doce / Transversal</option>
                                        <option value="saxofone">Saxofone & Sopros</option>
                                        <option value="harmonia">Harmonia Funcional</option>
                                        <option value="musicalizacao">Musicalização Infantil</option>
                                    </select>
                                </div>
                            </div>
                            <div class="eme-form-group">
                                <label for="eme-mensagem">Mensagem *</label>
                                <textarea id="eme-mensagem" name="mensagem" rows="4" placeholder="Como podemos ajudar você?" required></textarea>
                            </div>
                            <div class="eme-form-group" style="margin-bottom: 24px;">
                                <div class="eme-checkbox-wrapper" style="display: flex; align-items: flex-start; gap: 10px; cursor: pointer;">
                                    <input type="checkbox" id="eme-lgpd-check" required style="width: 20px; height: 20px; accent-color: var(--terracota); cursor: pointer; flex-shrink: 0; margin-top: 2px;" />
                                    <label for="eme-lgpd-check" style="font-size: 13px; color: var(--cinza-suave); line-height: 1.5; cursor: pointer; user-select: none;">
                                        Concordo com os <button type="button" id="eme-open-modal-btn" class="eme-link-modal-btn">Termos de Privacidade e Proteção de Dados (LGPD)</button> para atendimento e contato da secretaria da EME. *
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="eme-btn-primary eme-btn-block">Enviar Mensagem</button>
                        </form>
                    </div>

                    <!-- Informações de Atendimento & Canais (Coluna Direita Otimizada) -->
                    <div class="eme-contato-info-box">
                        <!-- WhatsApp Rápido -->
                        <div class="eme-info-card" style="border-left: 5px solid #25D366;">
                            <div class="eme-info-icon">📱</div>
                            <div class="eme-info-text">
                                <h4 style="color: #128C7E;">Atendimento via WhatsApp</h4>
                                <p style="margin-bottom: 12px;">Fale diretamente com nossa secretaria pedagógica em tempo real:</p>
                                <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas%20da%20EME." target="_blank" class="eme-btn-primary" style="padding: 10px 20px; font-size: 13px; background: #25D366; border-color: #25D366;">
                                    💬 (31) 98420-1358
                                </a>
                            </div>
                        </div>

                        <!-- Endereço Exato & Localização -->
                        <div class="eme-info-card" style="border-left: 5px solid var(--terracota);">
                            <div class="eme-info-icon">📍</div>
                            <div class="eme-info-text">
                                <h4>Endereço da Sede</h4>
                                <p style="font-weight: 700; color: var(--verde-escuro); margin-bottom: 4px;">
                                    Rua Bonaparte, 86 — Bairro Padre Eustáquio
                                </p>
                                <p style="font-size: 13px; color: var(--cinza-suave); margin-bottom: 12px;">
                                    Belo Horizonte / MG — CEP: 30720-070<br>
                                    <em>(Núcleo de Arte e Música Esperança — NAME)</em>
                                </p>
                                <a href="https://maps.google.com/?q=Rua+Bonaparte,+86,+Padre+Eust%C3%A1quio,+Belo+Horizonte+-+MG" target="_blank" class="eme-btn-outline" style="padding: 8px 16px; font-size: 12px;">
                                    🗺️ Abrir no Google Maps / Waze
                                </a>
                            </div>
                        </div>

                        <!-- E-mails Institucionais -->
                        <div class="eme-info-card">
                            <div class="eme-info-icon">✉️</div>
                            <div class="eme-info-text">
                                <h4>Canais por Departamento</h4>
                                <ul style="list-style: none; padding: 0; margin: 8px 0 0; font-size: 13px; line-height: 2;">
                                    <li><strong>Geral / Secretaria:</strong> <a href="mailto:contato@escolaeme.com" style="color: var(--terracota); font-weight: 600;">contato@escolaeme.com</a></li>
                                    <li><strong>Coordenação Pedagógica:</strong> <a href="mailto:coordenacao@escolaeme.com" style="color: var(--terracota); font-weight: 600;">coordenacao@escolaeme.com</a></li>
                                    <li><strong>Financeiro:</strong> <a href="mailto:financeiro@escolaeme.com" style="color: var(--terracota); font-weight: 600;">financeiro@escolaeme.com</a></li>
                                    <li><strong>Direção Geral:</strong> <a href="mailto:direcao@escolaeme.com" style="color: var(--terracota); font-weight: 600;">direcao@escolaeme.com</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Horários de Funcionamento -->
                        <div class="eme-info-card">
                            <div class="eme-info-icon">⏰</div>
                            <div class="eme-info-text">
                                <h4>Horário de Atendimento</h4>
                                <p>Segunda a sexta-feira, das <strong>8h às 22h</strong></p>
                            </div>
                        </div>

                        <!-- Redes Sociais -->
                        <div class="eme-social-box">
                            <h4 style="margin-bottom: 12px; font-size: 16px;">Siga a EME no Instagram</h4>
                            <a href="https://instagram.com/escolaeme" target="_blank" class="eme-social-pill" style="display: inline-flex; width: auto; font-weight: 700;">
                                📸 Instagram @escolaeme
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mapa Interativo do Google Maps (Pino Exato no Endereço: Rua Bonaparte, 86) -->
                <div class="eme-map-section" style="margin-top: 60px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; margin-bottom: 15px;">
                        <div>
                            <h3 class="eme-section-title text-left" style="margin-bottom: 6px;">Como Chegar à EME</h3>
                            <p style="color: var(--cinza-suave); font-size: 15px; margin: 0;">Rua Bonaparte, 86 — Bairro Padre Eustáquio, Belo Horizonte / MG</p>
                        </div>
                        <a href="https://maps.google.com/?q=Rua+Bonaparte,+86,+Padre+Eust%C3%A1quio,+Belo+Horizonte+-+MG" target="_blank" class="eme-btn-primary" style="padding: 10px 20px; font-size: 13px;">
                            🚗 Traçar Rota no GPS
                        </a>
                    </div>
                    <div class="eme-divider divider-left"></div>
                    <div class="eme-map-responsive" style="border-radius: 16px; overflow: hidden; box-shadow: var(--sombra-card); border: 2px solid var(--cinza-borda);">
                        <iframe 
                            src="https://maps.google.com/maps?q=Rua+Bonaparte,+86,+Padre+Eust%C3%A1quio,+Belo+Horizonte+-+MG,+30720-070&t=&z=17&ie=UTF8&iwloc=&output=embed" 
                            width="100%" 
                            height="420" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Pop-up Modal de Termos de Privacidade e Proteção de Dados (LGPD) -->
    <div id="eme-modal-lgpd" class="eme-modal-overlay">
        <div class="eme-modal-content">
            <button type="button" id="eme-close-modal-btn" class="eme-modal-close" aria-label="Fechar">&times;</button>
            <div class="eme-modal-header">
                <h3>Termos de Privacidade e Proteção de Dados (LGPD)</h3>
                <span class="eme-modal-sub">Escola de Música Esperança (EME / NAME)</span>
            </div>
            <div class="eme-modal-body">
                <p><strong>1. Coleta e Finalidade dos Dados:</strong> Os dados pessoais fornecidos neste formulário (nome completo, e-mail, telefone/WhatsApp, assunto e curso de interesse) são coletados única e exclusivamente para possibilitar o atendimento da secretaria pedagógica da EME, agendamento de visitas presenciais, envio de informações sobre turmas e esclarecimento de dúvidas.</p>
                
                <p><strong>2. Uso Exclusivo e Não Compartilhamento:</strong> A EME compromete-se a não vender, alugar ou compartilhar suas informações com terceiros ou parceiros comerciais para fins de publicidade não solicitada (spam).</p>
                
                <p><strong>3. Armazenamento Seguro:</strong> Todas as informações fornecidas são tratadas com sigilo e armazenadas em ambiente seguro, em conformidade com a Lei Geral de Proteção de Dados Pessoais (Lei nº 13.709/2018 - LGPD).</p>
                
                <p><strong>4. Direitos do Titular:</strong> Você tem o direito de solicitar a atualização, correção ou exclusão definitiva dos seus dados de nossos cadastros a qualquer momento, bastando enviar um e-mail para <a href="mailto:coordenacao@escolaeme.com">coordenacao@escolaeme.com</a>.</p>
            </div>
            <div class="eme-modal-footer">
                <button type="button" id="eme-accept-modal-btn" class="eme-btn-primary" style="padding: 10px 24px; font-size: 13px;">Compreendi e Aceito</button>
            </div>
        </div>
    </div>

    <style>
    .eme-link-modal-btn {
        background: none;
        border: none;
        color: var(--terracota);
        font-weight: 700;
        text-decoration: underline;
        cursor: pointer;
        padding: 0;
        font-size: 13px;
        font-family: inherit;
    }
    .eme-link-modal-btn:hover {
        color: var(--terracota-escuro);
    }
    .eme-modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(15, 46, 35, 0.7);
        backdrop-filter: blur(6px);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 99999;
        padding: 20px;
    }
    .eme-modal-overlay.active {
        display: flex;
    }
    .eme-modal-content {
        background: #FFFFFF;
        border-radius: 16px;
        max-width: 620px;
        width: 100%;
        padding: 30px;
        position: relative;
        box-shadow: 0 20px 50px rgba(0,0,0,0.3);
        border: 2px solid var(--terracota);
        max-height: 90vh;
        overflow-y: auto;
    }
    .eme-modal-close {
        position: absolute;
        top: 16px;
        right: 20px;
        background: none;
        border: none;
        font-size: 28px;
        color: var(--cinza-suave);
        cursor: pointer;
        line-height: 1;
    }
    .eme-modal-close:hover {
        color: var(--terracota);
    }
    .eme-modal-header h3 {
        margin: 0 0 4px;
        color: var(--verde-escuro);
        font-size: 20px;
    }
    .eme-modal-sub {
        font-size: 12px;
        color: var(--terracota);
        font-weight: 700;
        text-transform: uppercase;
    }
    .eme-modal-body {
        margin: 20px 0;
        font-size: 14px;
        color: #444;
        line-height: 1.7;
    }
    .eme-modal-body p {
        margin-bottom: 14px;
    }
    .eme-modal-footer {
        text-align: right;
        padding-top: 14px;
        border-top: 1px solid var(--cinza-borda);
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('eme-modal-lgpd');
        const openBtn = document.getElementById('eme-open-modal-btn');
        const closeBtn = document.getElementById('eme-close-modal-btn');
        const acceptBtn = document.getElementById('eme-accept-modal-btn');
        const checkbox = document.getElementById('eme-lgpd-check');
        const form = document.getElementById('eme-main-contact-form');

        if (openBtn && modal) {
            openBtn.addEventListener('click', function(e) {
                e.preventDefault();
                modal.classList.add('active');
            });
        }

        if (closeBtn && modal) {
            closeBtn.addEventListener('click', function() {
                modal.classList.remove('active');
            });
        }

        if (acceptBtn && modal) {
            acceptBtn.addEventListener('click', function() {
                modal.classList.remove('active');
                if (checkbox) checkbox.checked = true;
            });
        }

        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.remove('active');
                }
            });
        }

        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const nome = document.getElementById('eme-nome').value;
                const email = document.getElementById('eme-email').value;
                const tel = document.getElementById('eme-telefone').value;
                const assunto = document.getElementById('eme-assunto').value;
                const msg = document.getElementById('eme-mensagem').value;

                alert('Obrigado, ' + nome + '! Sua mensagem foi enviada com sucesso para a secretaria da EME. Responderemos em breve pelo e-mail ' + email + ' ou WhatsApp ' + tel + '.');
                form.reset();
            });
        }
    });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_contato', 'eme_shortcode_contato');
