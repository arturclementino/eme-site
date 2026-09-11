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
                    <!-- Formulário de Contato Completo -->
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

                    <!-- Informações de Atendimento & Canais -->
                    <div class="eme-contato-info-box">
                        <div class="eme-info-card">
                            <div class="eme-info-icon">📱</div>
                            <div class="eme-info-text">
                                <h4>Atendimento Rápido via WhatsApp</h4>
                                <p>Fale diretamente com nossa secretaria para tirar dúvidas ou agendar visitas em tempo real:</p>
                                <p style="margin-top: 8px;">
                                    <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas%20da%20EME." target="_blank" class="eme-btn-outline" style="padding: 8px 18px; font-size: 13px;">
                                        💬 (31) 98420-1358
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="eme-info-card">
                            <div class="eme-info-icon">✉️</div>
                            <div class="eme-info-text">
                                <h4>E-mails por Departamento</h4>
                                <ul style="list-style: none; padding: 0; margin: 6px 0 0; font-size: 14px; line-height: 1.8;">
                                    <li><strong>Geral / Secretaria:</strong> <a href="mailto:contato@escolaeme.com">contato@escolaeme.com</a></li>
                                    <li><strong>Coordenação Pedagógica:</strong> <a href="mailto:coordenacao@escolaeme.com">coordenacao@escolaeme.com</a></li>
                                    <li><strong>Financeiro:</strong> <a href="mailto:financeiro@escolaeme.com">financeiro@escolaeme.com</a></li>
                                    <li><strong>Direção Geral:</strong> <a href="mailto:direcao@escolaeme.com">direcao@escolaeme.com</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="eme-info-card">
                            <div class="eme-info-icon">⏰</div>
                            <div class="eme-info-text">
                                <h4>Horário de Funcionamento</h4>
                                <p>Segunda a sexta-feira, das <strong>8h às 22h</strong></p>
                            </div>
                        </div>

                        <div class="eme-info-card">
                            <div class="eme-info-icon">📍</div>
                            <div class="eme-info-text">
                                <h4>Localização da Sede</h4>
                                <p>Belo Horizonte — MG<br>Região Padre Eustáquio / Vila São Vicente<br><em>Núcleo de Arte e Música Esperança (NAME)</em></p>
                            </div>
                        </div>

                        <!-- Redes Sociais -->
                        <div class="eme-social-box">
                            <h4>Siga a EME nas Redes Sociais</h4>
                            <div class="eme-social-links">
                                <a href="https://instagram.com/escolaeme" target="_blank" class="eme-social-item">📸 Instagram @escolaeme</a>
                                <a href="https://facebook.com/escolaeme" target="_blank" class="eme-social-item">📘 Facebook /escolaeme</a>
                                <a href="https://youtube.com/@escolaeme" target="_blank" class="eme-social-item">▶️ YouTube EME</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mapa Interativo do Google Maps -->
                <div class="eme-map-section" style="margin-top: 50px;">
                    <h3 class="eme-section-title text-left">Localização no Mapa</h3>
                    <div class="eme-divider divider-left"></div>
                    <div class="eme-map-responsive" style="border-radius: 16px; overflow: hidden; box-shadow: var(--sombra-card);">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240097.35123048994!2d-44.10413554868912!3d-19.902264669865664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa690cacacf2c33%3A0x5b35795e3054b08c!2sPadre%20Eust%C3%A1quio%2C%20Belo%20Horizonte%20-%20MG!5e0!3m2!1spt-BR!2sbr!4v1700000000000!5m2!1spt-BR!2sbr" 
                            width="100%" 
                            height="400" 
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
