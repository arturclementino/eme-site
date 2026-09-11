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

                        <form action="#" method="post" class="eme-form" onsubmit="event.preventDefault(); alert('Obrigado pelo contato! Sua mensagem foi enviada com sucesso para a secretaria da EME.');">
                            <div class="eme-form-group">
                                <label for="eme-nome">Nome Completo</label>
                                <input type="text" id="eme-nome" name="nome" placeholder="Digite seu nome completo" required />
                            </div>
                            <div class="eme-form-row">
                                <div class="eme-form-group">
                                    <label for="eme-email">E-mail Principal</label>
                                    <input type="email" id="eme-email" name="email" placeholder="seu@email.com" required />
                                </div>
                                <div class="eme-form-group">
                                    <label for="eme-telefone">Telefone / WhatsApp</label>
                                    <input type="tel" id="eme-telefone" name="telefone" placeholder="(31) 98420-1358" required />
                                </div>
                            </div>
                            <div class="eme-form-row">
                                <div class="eme-form-group">
                                    <label for="eme-assunto">Assunto</label>
                                    <select id="eme-assunto" name="assunto" required>
                                        <option value="" disabled selected>Selecione o assunto</option>
                                        <option value="visita">Agendamento de Visita Presencial</option>
                                        <option value="matricula">Matrícula & Inscrição de Cursos</option>
                                        <option value="duvidas">Dúvidas sobre Aulas ou Horários</option>
                                        <option value="amigos">Projeto Amigos da EME (Bolsas & Doações)</option>
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
                                <label for="eme-mensagem">Mensagem</label>
                                <textarea id="eme-mensagem" name="mensagem" rows="4" placeholder="Como podemos ajudar você?" required></textarea>
                            </div>
                            <div class="eme-form-group">
                                <label class="eme-checkbox-label">
                                    <input type="checkbox" required />
                                    <span>Concordo com o envio dos dados para contato pela EME, em conformidade com a LGPD.</span>
                                </label>
                            </div>
                            <button type="submit" class="eme-btn-primary eme-btn-block">Enviar Mensagem</button>
                        </form>
                    </div>

                    <!-- Informações de Atendimento & Canais (Coluna Direita Otimizada) -->
                    <div class="eme-contato-info-box">
                        <!-- WhatsApp Rápido -->
                        <div class="eme-info-card" style="border-left: 4px solid #25D366;">
                            <div class="eme-info-icon">📱</div>
                            <div class="eme-info-text">
                                <h4 style="color: #128C7E;">Atendimento via WhatsApp</h4>
                                <p>Fale diretamente com nossa secretaria pedagógica em tempo real:</p>
                                <p style="margin-top: 10px;">
                                    <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas%20da%20EME." target="_blank" class="eme-btn-primary" style="padding: 10px 20px; font-size: 13px; background: #25D366; border-color: #25D366;">
                                        💬 (31) 98420-1358
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- Endereço Exato & Localização -->
                        <div class="eme-info-card" style="border-left: 4px solid var(--terracota);">
                            <div class="eme-info-icon">📍</div>
                            <div class="eme-info-text">
                                <h4>Endereço Exato da Sede</h4>
                                <p style="font-weight: 700; color: var(--verde-escuro); margin-bottom: 4px;">
                                    Rua Bonaparte, 86 — Bairro Padre Eustáquio
                                </p>
                                <p style="font-size: 13px; color: var(--cinza-suave); margin-bottom: 10px;">
                                    Belo Horizonte / MG — CEP: 30720-070<br>
                                    <em>(Núcleo de Arte e Música Esperança — NAME)</em>
                                </p>
                                <a href="https://maps.google.com/?q=Rua+Bonaparte,+86,+Padre+Eust%C3%A1quio,+Belo+Horizonte+-+MG" target="_blank" class="eme-btn-outline" style="padding: 8px 14px; font-size: 12px;">
                                    🗺️ Abrir no Google Maps / Waze
                                </a>
                            </div>
                        </div>

                        <!-- E-mails Institucionais -->
                        <div class="eme-info-card">
                            <div class="eme-info-icon">✉️</div>
                            <div class="eme-info-text">
                                <h4>Canais por Departamento</h4>
                                <ul style="list-style: none; padding: 0; margin: 8px 0 0; font-size: 13px; line-height: 1.9;">
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
                            <h4 style="margin-bottom: 12px; font-size: 16px;">Siga a EME nas Redes</h4>
                            <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="https://instagram.com/escolaeme" target="_blank" class="eme-social-pill">📸 Instagram</a>
                                <a href="https://facebook.com/escolaeme" target="_blank" class="eme-social-pill">📘 Facebook</a>
                                <a href="https://youtube.com/@escolaeme" target="_blank" class="eme-social-pill">▶️ YouTube</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mapa Interativo do Google Maps (Pino Exato no Endereço: Rua Bonaparte, 86) -->
                <div class="eme-map-section" style="margin-top: 50px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; margin-bottom: 15px;">
                        <div>
                            <h3 class="eme-section-title text-left" style="margin-bottom: 6px;">Como Chegar à EME</h3>
                            <p style="color: var(--cinza-suave); font-size: 15px; margin: 0;">Pino marcado exatamente na Rua Bonaparte, 86 — Padre Eustáquio, BH</p>
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
    <?php
    return ob_get_clean();
}
add_shortcode('eme_contato', 'eme_shortcode_contato');
