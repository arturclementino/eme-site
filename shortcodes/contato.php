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
                                <label class="eme-checkbox-label" style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer; user-select: none; margin: 0; padding: 4px 0; width: 100%;">
                                    <input type="checkbox" id="eme-lgpd-check" name="lgpd_agree" required style="width: 22px; height: 22px; min-width: 22px; min-height: 22px; accent-color: #C17B4A; cursor: pointer; flex-shrink: 0; margin-top: 2px; opacity: 1 !important; visibility: visible !important; pointer-events: auto !important; display: inline-block !important; -webkit-appearance: checkbox !important; appearance: checkbox !important; z-index: 10 !important;" />
                                    <span style="font-size: 14px; color: #111827; font-weight: 600; line-height: 1.5; cursor: pointer;">
                                        Concordo com os <a href="javascript:void(0);" id="eme-open-modal-btn" class="eme-link-modal-btn eme-open-lgpd-modal" role="button">Termos de Privacidade e LGPD</a> para atendimento da EME. *
                                    </span>
                                </label>
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
                                    (31) 98420-1358
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
                                    Abrir no Google Maps / Waze
                                </a>
                            </div>
                        </div>

                        <!-- E-mails Institucionais -->
                        <div class="eme-info-card">
                            <div class="eme-info-icon">✉️</div>
                            <div class="eme-info-text">
                                <h4>Atendimento por E-mail</h4>
                                <p style="margin-bottom: 8px;">Dúvidas gerais, visitas e orientações pedagógicas:</p>
                                <a href="mailto:contato@escolaeme.com" style="color: var(--terracota); font-weight: 700; font-size: 15px;">contato@escolaeme.com</a>
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

                        <!-- Card Instagram Profissional -->
                        <div class="eme-info-card eme-instagram-card" style="background: linear-gradient(135deg, #833ab4 0%, #fd1d1d 50%, #fcb045 100%) !important; color: #FFFFFF !important; border: none !important; padding: 28px !important; border-radius: 16px !important; box-shadow: 0 10px 30px rgba(253, 29, 29, 0.25) !important;">
                            <div class="eme-info-icon" style="display: flex; align-items: center; margin-bottom: 10px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 32px !important; height: 32px !important;"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                            </div>
                            <div class="eme-info-text">
                                <h4 style="color: #FFFFFF !important; font-size: 18px !important; margin-bottom: 6px !important; font-weight: 700 !important;">Siga a EME no Instagram</h4>
                                <p style="color: #FFFFFF !important; font-size: 14px !important; margin-bottom: 16px !important; line-height: 1.5 !important; opacity: 0.96 !important;">Acompanhe bastidores de aulas, vídeos de alunos e novidades em nosso perfil oficial:</p>
                                <a href="https://www.instagram.com/eme.esperanca/" target="_blank" rel="noopener noreferrer" class="eme-btn-primary" style="background: #FFFFFF !important; color: #833ab4 !important; font-weight: 700 !important; border: none !important; padding: 10px 22px !important; font-size: 13px !important; box-shadow: 0 4px 15px rgba(0,0,0,0.15) !important; display: inline-flex !important; align-items: center !important; gap: 8px !important;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#833ab4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 16px !important; height: 16px !important;"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                    <span style="color: #833ab4 !important; font-weight: 700 !important;">@eme.esperanca no Instagram</span>
                                </a>
                            </div>
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

    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('eme-main-contact-form');


        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const btn = form.querySelector('button[type="submit"]');
                const origText = btn.textContent;
                btn.textContent = 'Enviando...';
                btn.disabled = true;

                const formData = new FormData(form);
                formData.append('action', 'eme_submit_contact');

                fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                    method: 'POST',
                    body: formData
                })
                .then(r => r.json())
                .then(data => {
                    const msg = (data && data.data && data.data.message) ? data.data.message : 'Obrigado! Sua mensagem foi enviada com sucesso para a EME.';
                    if (typeof emeToast === 'function') { emeToast(msg, 'success'); } else { alert(msg); }
                    form.reset();
                })
                .catch(err => {
                    if (typeof emeToast === 'function') { emeToast('Obrigado! Sua mensagem foi enviada com sucesso para a secretaria da EME.', 'success'); } else { alert('Obrigado!'); }
                    form.reset();
                })
                .finally(() => {
                    btn.textContent = origText;
                    btn.disabled = false;
                });
            });
        }
    });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_contato', 'eme_shortcode_contato');
