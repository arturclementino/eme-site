<?php
/**
 * Shortcode Home: [eme_home]
 * EME - Escola de Música Esperança / NAME
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_home($atts) {
    ob_start();
    ?>
    <div class="eme-home-wrapper">
        <!-- Hero Principal -->
        <section class="eme-hero">
            <div class="eme-container">
                <div class="eme-hero-badge">
                    <span class="eme-stars">★★★★★</span> Núcleo de Arte e Música Esperança (NAME) | Igreja Esperança
                </div>
                <h1 class="eme-hero-title">Escola de Música Esperança</h1>
                <p class="eme-hero-subtitle">
                    Onde a arte encontra propósito, técnica e transformação comunitária.
                </p>
                <div class="eme-hero-actions">
                    <a href="<?php echo esc_url(home_url('/contato')); ?>" class="eme-btn-primary eme-cta-pulse">Agende uma visita presencial</a>
                    <a href="<?php echo esc_url(home_url('/aulas')); ?>" class="eme-btn-outline">Conheça nossas 27 modalidades</a>
                </div>
            </div>
        </section>

        <!-- Pilares de Excelência EME -->
        <section class="eme-stats-bar" style="background: linear-gradient(135deg, var(--verde-escuro) 0%, var(--verde) 100%) !important;">
            <div class="eme-container">
                <div class="eme-stats-grid">
                    <div class="eme-stat-item">
                        <span class="eme-stat-number" style="font-size: 26px; color: #FFFFFF !important;">🎵 27 Modalidades</span>
                        <span class="eme-stat-label" style="color: #FFFFFF !important; opacity: 0.95; font-weight: 600;">Erudito & Popular</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number" style="font-size: 26px; color: #FFFFFF !important;">🎓 Corpo Docente</span>
                        <span class="eme-stat-label" style="color: #FFFFFF !important; opacity: 0.95; font-weight: 600;">Professores Graduados & Mestres</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number" style="font-size: 26px; color: #FFFFFF !important;">🏡 Estrutura Completa</span>
                        <span class="eme-stat-label" style="color: #FFFFFF !important; opacity: 0.95; font-weight: 600;">Salas Climatizadas & Equipadas</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number" style="font-size: 26px; color: #FFFFFF !important;">🤝 Formação Humana</span>
                        <span class="eme-stat-label" style="color: #FFFFFF !important; opacity: 0.95; font-weight: 600;">Ensino com Propósito & Excelência</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Apresentação Institucional de Abertura -->
        <section class="eme-section">
            <div class="eme-container">
                <div class="eme-grid-2 eme-align-center">
                    <div class="eme-home-about-text">
                        <span class="eme-badge-tag">Excelência & Propósito</span>
                        <h2 class="eme-section-title text-left">Integrando Fé, Cultura e Ensino de Alta Qualidade</h2>
                        <div class="eme-divider divider-left"></div>
                        <p>
                            A <strong>Escola de Música Esperança (EME)</strong> é um projeto do <strong>Núcleo de Arte e Música Esperança (NAME)</strong>, braço cultural e educacional vinculado à <strong>Igreja Esperança</strong>, em Belo Horizonte (região Padre Eustáquio / Vila São Vicente).
                        </p>
                        <p>
                            Oferecemos uma ampla grade didática distribuída em <strong>27 modalidades musicais</strong> com acompanhamento individualizado e um corpo docente experiente composto por músicos graduados, licenciados e mestres.
                        </p>
                        <p>
                            Mais do que ensinar técnicas instrumentais ou vocais, a EME forma pessoas por meio da arte, promovendo o desenvolvimento técnico, pessoal e comunitário.
                        </p>
                        <a href="<?php echo esc_url(home_url('/quem-somos')); ?>" class="eme-btn-outline" style="margin-top: 15px;">Conheça nossa história completa &rarr;</a>
                    </div>
                    <div class="eme-home-about-img">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80" alt="Aula de música na EME" class="eme-img-card" decoding="async" loading="lazy" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Diferenciais EME (6 Cards) -->
        <section class="eme-section eme-bg-light">
            <div class="eme-container">
                <h2 class="eme-section-title">Por que escolher a EME?</h2>
                <div class="eme-divider"></div>
                <p class="eme-section-desc">Excelência técnica e acolhimento em uma estrutura preparada para o desenvolvimento musical do aluno.</p>

                <div class="eme-grid-3">
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎵</div>
                        <h3>27 Modalidades Musicais</h3>
                        <p>Do erudito ao popular: instrumentos de cordas, sopros, teclas, percussão, canto e formação teórica.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎓</div>
                        <h3>Corpo Docente Qualificado</h3>
                        <p>Docentes experientes, graduados e atuantes em orquestras, estúdios e palcos nacionais e internacionais.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🏡</div>
                        <h3>Estrutura Acolhedora</h3>
                        <p>Salas climatizadas, equipadas com instrumentos de alta qualidade, acústica adequada e ambiente seguro.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎼</div>
                        <h3>Acompanhamento Pedagógico Contínuo</h3>
                        <p>Acompanhamento próximo dos estudantes e professores para garantir o progresso didático individual.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎭</div>
                        <h3>Recitais & Projeto Casa Aberta</h3>
                        <p>Apresentações semestrais com público da comunidade e pocket shows na última quinta-feira do mês.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🤝</div>
                        <h3>Projeto Amigos da EME</h3>
                        <p>Programa de bolsas de estudo para inclusão social e desenvolvimento de novos talentos.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cursos em Destaque -->
        <section id="aulas" class="eme-section">
            <div class="eme-container">
                <h2 class="eme-section-title">Aulas & Cursos em Destaque</h2>
                <div class="eme-divider"></div>
                <div class="eme-grid-4">
                    <div class="eme-card-item">
                        <div class="eme-icon">🎸</div>
                        <h3>Violão & Guitarra</h3>
                        <p>Técnica, leitura, acordes, dedilhados e solos do nível iniciante ao avançado.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">🎹</div>
                        <h3>Piano & Teclado</h3>
                        <p>Leitura de partitura, percepção, repertório clássico, popular e correpetição.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">🥁</div>
                        <h3>Bateria & Percussão</h3>
                        <p>Independência motora, ritmos variados, afinação e prática de conjunto.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">🎻</div>
                        <h3>Violino & Violoncelo</h3>
                        <p>Técnica de arco, postura ergonômica, afinação e execução orquestral.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">🎸</div>
                        <h3>Contrabaixo Elétrico e Acústico</h3>
                        <p>Condução rítmica, grooves, slap, harmonia e formação de base sólida.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">🎤</div>
                        <h3>Canto & Fisiologia Vocal</h3>
                        <p>Técnica vocal consciente, saúde da voz, respiração e interpretação artística.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">🎼</div>
                        <h3>Harmonia Funcional</h3>
                        <p>Curso modular prático para modulação, rearmonização e arranjos instrumentais.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">👶</div>
                        <h3>Musicalização Infantil</h3>
                        <p>Desenvolvimento cognitivo e lúdico para crianças a partir de 4 anos.</p>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 35px;">
                    <a href="<?php echo esc_url(home_url('/aulas')); ?>" class="eme-btn-primary">Ver todas as 27 modalidades &rarr;</a>
                </div>
            </div>
        </section>

        <!-- Próximos Eventos & Recitais -->
        <section class="eme-section eme-bg-light">
            <div class="eme-container">
                <h2 class="eme-section-title">Próximos Eventos & Recitais</h2>
                <div class="eme-divider"></div>
                <div class="eme-grid-2">
                    <div class="eme-event-mini-card">
                        <div class="eme-event-date-badge">
                            <span class="day">10/11</span>
                            <span class="month">NOV 2026</span>
                        </div>
                        <div class="eme-event-details">
                            <h3>Recitais de 2º Semestre EME</h3>
                            <p><strong>Local:</strong> Auditório Principal — Igreja Esperança | Grande momento de apresentação dos alunos da EME.</p>
                        </div>
                    </div>
                    <div class="eme-event-mini-card">
                        <div class="eme-event-date-badge">
                            <span class="day">ÚLTIMA QUI</span>
                            <span class="month">MENSAL</span>
                        </div>
                        <div class="eme-event-details">
                            <h3>Projeto Casa Aberta</h3>
                            <p><strong>Local:</strong> Sede EME (Área externa). Pocket show gratuito com música ao vivo e integração comunitária.</p>
                        </div>
                    </div>
                    <div class="eme-event-mini-card">
                        <div class="eme-event-date-badge">
                            <span class="day">WS</span>
                            <span class="month">GUITARRA</span>
                        </div>
                        <div class="eme-event-details">
                            <h3>Workshop: Timbres de Guitarra</h3>
                            <p>Ministrante: Prof. Warnei Ferreira. Programação prática de pedais analógicos e digitais.</p>
                        </div>
                    </div>
                    <div class="eme-event-mini-card">
                        <div class="eme-event-date-badge">
                            <span class="day">WS</span>
                            <span class="month">BATERIA</span>
                        </div>
                        <div class="eme-event-details">
                            <h3>Workshop: Afinação de Bateria</h3>
                            <p>Ministrante: Prof. Rodrigo Leles. Escolha de peles, regulagem de hardware e prática de estúdio.</p>
                        </div>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 35px;">
                    <a href="<?php echo esc_url(home_url('/eventos')); ?>" class="eme-btn-outline">Ver programação de eventos completa &rarr;</a>
                </div>
            </div>
        </section>

        <!-- Depoimentos da Comunidade -->
        <section class="eme-section">
            <div class="eme-container">
                <h2 class="eme-section-title">O que diz quem estuda na EME</h2>
                <div class="eme-divider"></div>
                <div class="eme-grid-2">
                    <div class="eme-testimonial-card">
                        <div class="eme-quote-icon">“</div>
                        <p class="eme-testimonial-text">A EME une o profissionalismo de grandes professores com um ambiente acolhedor e seguro. Meu filho teve uma evolução fantástica no violão em pouquíssimos meses!</p>
                        <div class="eme-testimonial-author">
                            <strong>Mariana Ferreira</strong>
                            <span>Mãe de aluno (Belo Horizonte - Padre Eustáquio)</span>
                        </div>
                    </div>
                    <div class="eme-testimonial-card">
                        <div class="eme-quote-icon">“</div>
                        <p class="eme-testimonial-text">Iniciei o piano na idade adulta e fui extremamente bem acolhido. A coordenação pedagógica se importa com a evolução individual de cada aluno.</p>
                        <div class="eme-testimonial-author">
                            <strong>Carlos Eduardo Ramos</strong>
                            <span>Aluno de Piano & Harmonia Funcional</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call-To-Action & Formulário de Visita -->
        <section id="agendar-visita" class="eme-cta-lead-section">
            <div class="eme-container">
                <div class="eme-grid-2 eme-align-center">
                    <div class="eme-lead-info">
                        <span class="eme-badge-tag" style="background: rgba(255,255,255,0.18) !important; color: #F59E0B !important; border: 1px solid rgba(245,158,11,0.5) !important; font-weight: 700; padding: 6px 16px; border-radius: 30px; display: inline-block; margin-bottom: 14px; font-size: 12px; text-transform: uppercase; letter-spacing: 1px;">Técnica & Acolhimento</span>
                        <h2 style="color: #FFFFFF !important; font-size: 38px !important; font-weight: 800 !important; text-shadow: 0 2px 10px rgba(0,0,0,0.35) !important; margin-bottom: 18px !important; line-height: 1.2 !important;">Venha conhecer a EME de perto</h2>
                        <p style="color: rgba(255, 255, 255, 0.94) !important; font-size: 18px !important; line-height: 1.65 !important; margin-bottom: 28px !important;">Agende uma visita presencial para conhecer nossas instalações, conversar com nossa coordenação didática e encontrar a modalidade perfeita para o seu desenvolvimento musical.</p>
                        <ul class="eme-lead-check-list">
                            <li style="color: #FFFFFF !important;">✓ Tour guiado pelas salas climatizadas e equipadas</li>
                            <li style="color: #FFFFFF !important;">✓ Orientação pedagógica para escolha de instrumento e docente</li>
                            <li style="color: #FFFFFF !important;">✓ Atendimento acolhedor de segunda a sexta, das 8h às 22h</li>
                        </ul>
                    </div>
                    <div class="eme-lead-form-box">
                        <h3>Agende sua Visita Presencial</h3>
                        <form action="#" method="post" id="eme-home-contact-form" class="eme-form">
                            <div class="eme-form-group">
                                <label for="eme-home-nome">Nome Completo *</label>
                                <input type="text" id="eme-home-nome" name="nome" placeholder="Seu nome completo" required />
                            </div>
                            <div class="eme-form-group">
                                <label for="eme-home-email">E-mail Principal *</label>
                                <input type="email" id="eme-home-email" name="email" placeholder="seu@email.com" required />
                            </div>
                            <div class="eme-form-group">
                                <label for="eme-home-tel">Telefone / WhatsApp *</label>
                                <input type="tel" id="eme-home-tel" name="telefone" placeholder="(31) 98420-1358" required />
                            </div>
                            <div class="eme-form-group">
                                <label for="eme-home-curso">Curso de Interesse *</label>
                                <select id="eme-home-curso" name="curso" required>
                                    <option value="" disabled selected>Selecione uma modalidade</option>
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
                            <div class="eme-form-group" style="margin-bottom: 24px;">
                                <label class="eme-checkbox-label" style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer; user-select: none; margin: 0; padding: 4px 0; width: 100%;">
                                    <input type="checkbox" id="eme-lgpd-check-home" name="lgpd_agree" required style="width: 22px; height: 22px; min-width: 22px; min-height: 22px; accent-color: #C17B4A; cursor: pointer; flex-shrink: 0; margin-top: 2px; opacity: 1 !important; visibility: visible !important; pointer-events: auto !important; display: inline-block !important; -webkit-appearance: checkbox !important; appearance: checkbox !important; z-index: 10 !important;" />
                                    <span style="font-size: 14px; color: #111827; font-weight: 600; line-height: 1.5; cursor: pointer;">
                                        Concordo com o contato da equipe da EME conforme os <a href="javascript:void(0);" id="eme-open-modal-home-btn" style="color: #C17B4A; font-weight: 700; text-decoration: underline;" onclick="event.stopPropagation(); event.preventDefault();">Termos de Privacidade e LGPD</a>. *
                                    </span>
                                </label>
                            </div>
                            <button type="submit" class="eme-btn-primary eme-btn-block">Agendar minha visita</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Pop-up Modal LGPD na Home -->
    <div id="eme-modal-lgpd-home" class="eme-modal-overlay">
        <div class="eme-modal-content">
            <button type="button" id="eme-close-modal-home-btn" class="eme-modal-close" aria-label="Fechar">&times;</button>
            <div class="eme-modal-header">
                <h3>Termos de Privacidade e Proteção de Dados (LGPD)</h3>
                <span class="eme-modal-sub">Escola de Música Esperança (EME / NAME)</span>
            </div>
            <div class="eme-modal-body">
                <p><strong>1. Coleta e Finalidade dos Dados:</strong> Os dados pessoais fornecidos neste formulário (nome completo, e-mail, telefone/WhatsApp e curso de interesse) são coletados única e exclusivamente para possibilitar o agendamento de sua visita presencial, atendimento pedagógico da EME e esclarecimento de dúvidas.</p>
                <p><strong>2. Uso Exclusivo e Não Compartilhamento:</strong> A EME compromete-se a não vender, alugar ou compartilhar suas informações com terceiros para fins publicitários não solicitados (spam).</p>
                <p><strong>3. Armazenamento Seguro:</strong> Todas as informações fornecidas são tratadas com sigilo e armazenadas em ambiente seguro, em conformidade com a Lei Geral de Proteção de Dados Pessoais (Lei nº 13.709/2018 - LGPD).</p>
                <p><strong>4. Direitos do Titular:</strong> Você tem o direito de solicitar a atualização, correção ou exclusão definitiva dos seus dados de nossos cadastros a qualquer momento pelo e-mail <a href="mailto:contato@escolaeme.com">contato@escolaeme.com</a>.</p>
            </div>
            <div class="eme-modal-footer">
                <button type="button" id="eme-accept-modal-home-btn" class="eme-btn-primary" style="padding: 10px 24px; font-size: 13px;">Compreendi e Aceito</button>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const homeForm = document.getElementById('eme-home-contact-form');
        const modalHome = document.getElementById('eme-modal-lgpd-home');
        const openBtnHome = document.getElementById('eme-open-modal-home-btn');
        const closeBtnHome = document.getElementById('eme-close-modal-home-btn');
        const acceptBtnHome = document.getElementById('eme-accept-modal-home-btn');
        const checkboxHome = document.getElementById('eme-lgpd-check-home');

        if (openBtnHome && modalHome) {
            openBtnHome.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                modalHome.classList.add('active');
            });
        }
        if (closeBtnHome && modalHome) {
            closeBtnHome.addEventListener('click', function() {
                modalHome.classList.remove('active');
            });
        }
        if (acceptBtnHome && modalHome) {
            acceptBtnHome.addEventListener('click', function() {
                modalHome.classList.remove('active');
                if (checkboxHome) checkboxHome.checked = true;
            });
        }
        if (modalHome) {
            modalHome.addEventListener('click', function(e) {
                if (e.target === modalHome) {
                    modalHome.classList.remove('active');
                }
            });
        }

        if (homeForm) {
            homeForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const btn = homeForm.querySelector('button[type="submit"]');
                const origText = btn.textContent;
                btn.textContent = 'Agendando...';
                btn.disabled = true;

                const formData = new FormData(homeForm);
                formData.append('action', 'eme_submit_contact');
                formData.append('assunto', 'Agendamento de Visita Presencial (Home)');

                fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                    method: 'POST',
                    body: formData
                })
                .then(r => r.json())
                .then(data => {
                    const msg = (data && data.data && data.data.message) ? data.data.message : 'Obrigado pelo seu interesse! A equipe da EME entrará em contato em breve via WhatsApp/E-mail.';
                    alert(msg);
                    homeForm.reset();
                })
                .catch(err => {
                    alert('Obrigado pelo seu interesse! A equipe da EME entrará em contato em breve.');
                    homeForm.reset();
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
add_shortcode('eme_home', 'eme_shortcode_home');
