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
                    Núcleo de Arte e Música Esperança (NAME) • Igreja Esperança
                </div>
                <h1 class="eme-hero-title">Escola de Música Esperança</h1>
                <p class="eme-hero-subtitle">
                    Onde a arte encontra propósito, técnica e transformação comunitária.
                </p>
                <div class="eme-hero-actions">
                    <a href="<?php echo esc_url(home_url('/contato')); ?>" class="eme-btn-primary eme-cta-pulse">Agende uma visita presencial</a>
                    <a href="<?php echo esc_url(home_url('/aulas')); ?>" class="eme-btn-outline">Conheça nossas modalidades</a>
                </div>
            </div>
        </section>

        <!-- Pilares de Excelência EME -->
        <section class="eme-stats-bar" style="background: linear-gradient(135deg, var(--verde-escuro) 0%, var(--verde) 100%) !important;">
            <div class="eme-container">
                <div class="eme-stats-grid">
                    <div class="eme-stat-item">
                        <span class="eme-stat-highlight">Erudito & Popular</span>
                        <span class="eme-stat-label">Diversas Modalidades Musicais</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-highlight">Corpo Docente</span>
                        <span class="eme-stat-label">Professores Graduados & Mestres</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-highlight">Estrutura Própria</span>
                        <span class="eme-stat-label">Salas Climatizadas & Equipadas</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-highlight">NAME</span>
                        <span class="eme-stat-label">Ensino com Propósito & Excelência</span>
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
                            A Escola de Música Esperança (EME) é um projeto do Núcleo de Arte e Música Esperança (NAME), braço cultural e educacional vinculado à Igreja Esperança, em Belo Horizonte (região Padre Eustáquio / Vila São Vicente).
                        </p>
                        <p>
                            Oferecemos uma ampla grade didática em diversas modalidades musicais com acompanhamento individualizado e um corpo docente qualificado composto por músicos graduados, licenciados e mestres.
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
                        <div class="eme-diff-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--terracota)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
                        </div>
                        <h3>Diversas Modalidades</h3>
                        <p>Do erudito ao popular: instrumentos de cordas, sopros, teclas, bateria, canto e formação teórica.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--terracota)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                        </div>
                        <h3>Corpo Docente Qualificado</h3>
                        <p>Docentes experientes, graduados e atuantes em orquestras, estúdios e palcos nacionais e internacionais.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--terracota)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        </div>
                        <h3>Estrutura Acolhedora</h3>
                        <p>Salas climatizadas, equipadas com instrumentos de alta qualidade, acústica adequada e ambiente seguro.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--terracota)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                        </div>
                        <h3>Acompanhamento Pedagógico Contínuo</h3>
                        <p>Acompanhamento próximo dos estudantes e professores para garantir o progresso didático individual.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--terracota)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                        </div>
                        <h3>Recitais & Projeto Casa Aberta</h3>
                        <p>Apresentações semestrais com público da comunidade e pocket shows na última quinta-feira do mês.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--terracota)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
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
                        <div class="eme-icon" style="color: var(--terracota);">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 3v18"></path><path d="M16 4v16"></path><path d="M8 4v16"></path></svg>
                        </div>
                        <h3>Violão & Guitarra</h3>
                        <p>Técnica, leitura, acordes, dedilhados e solos do nível iniciante ao avançado.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon" style="color: var(--terracota);">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="5" width="20" height="14" rx="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line><line x1="6" y1="15" x2="6" y2="15"></line><line x1="10" y1="15" x2="10" y2="15"></line><line x1="14" y1="15" x2="14" y2="15"></line><line x1="18" y1="15" x2="18" y2="15"></line></svg>
                        </div>
                        <h3>Piano & Teclado</h3>
                        <p>Leitura de partitura, percepção, repertório clássico, popular e correpetição.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon" style="color: var(--terracota);">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><ellipse cx="12" cy="8" rx="9" ry="4"></ellipse><path d="M3 8v8c0 2.21 4.03 4 9 4s9-1.79 9-4V8"></path></svg>
                        </div>
                        <h3>Bateria</h3>
                        <p>Independência motora, ritmos variados, afinação e prática de conjunto.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon" style="color: var(--terracota);">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        </div>
                        <h3>Violino & Violoncelo</h3>
                        <p>Técnica de arco, postura ergonômica, afinação e execução orquestral.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon" style="color: var(--terracota);">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="2" width="16" height="20" rx="2"></rect><circle cx="12" cy="14" r="4"></circle><line x1="12" y1="6" x2="12.01" y2="6"></line></svg>
                        </div>
                        <h3>Contrabaixo</h3>
                        <p>Condução rítmica, grooves, slap, harmonia e formação de base sólida.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon" style="color: var(--terracota);">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line></svg>
                        </div>
                        <h3>Canto</h3>
                        <p>Técnica vocal consciente, saúde da voz, respiração e interpretação artística.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon" style="color: var(--terracota);">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
                        </div>
                        <h3>Harmonia Funcional</h3>
                        <p>Curso modular prático para modulação, rearmonização e arranjos instrumentais.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon" style="color: var(--terracota);">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                        </div>
                        <h3>Musicalização Infantil</h3>
                        <p>Desenvolvimento cognitivo e lúdico para crianças a partir de 4 anos.</p>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 35px;">
                    <a href="<?php echo esc_url(home_url('/aulas')); ?>" class="eme-btn-primary">Ver todas as modalidades &rarr;</a>
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
                            <p>Local: Auditório Principal — Igreja Esperança | Grande momento de apresentação dos alunos da EME.</p>
                        </div>
                    </div>
                    <div class="eme-event-mini-card">
                        <div class="eme-event-date-badge">
                            <span class="day">ÚLTIMA QUI</span>
                            <span class="month">MENSAL</span>
                        </div>
                        <div class="eme-event-details">
                            <h3>Projeto Casa Aberta</h3>
                            <p>Local: Sede EME (Área externa). Pocket show gratuito com música ao vivo e integração comunitária.</p>
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
                            Mariana Ferreira
                            <span>Mãe de aluno (Belo Horizonte - Padre Eustáquio)</span>
                        </div>
                    </div>
                    <div class="eme-testimonial-card">
                        <div class="eme-quote-icon">“</div>
                        <p class="eme-testimonial-text">Iniciei o piano na idade adulta e fui extremamente bem acolhido. A coordenação pedagógica se importa com a evolução individual de cada aluno.</p>
                        <div class="eme-testimonial-author">
                            Carlos Eduardo Ramos
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
                        <span class="eme-badge-tag" style="background: rgba(255,255,255,0.18) !important; color: #F59E0B !important; border: 1px solid rgba(245,158,11,0.5) !important; font-weight: 600; padding: 6px 16px; border-radius: 30px; display: inline-block; margin-bottom: 14px; font-size: 12px; text-transform: uppercase; letter-spacing: 1px;">Técnica & Acolhimento</span>
                        <h2 style="color: #FFFFFF !important; font-size: 36px !important; font-weight: 700 !important; text-shadow: 0 2px 10px rgba(0,0,0,0.3) !important; margin-bottom: 18px !important; line-height: 1.25 !important;">Venha conhecer a EME de perto</h2>
                        <p style="color: rgba(255, 255, 255, 0.94) !important; font-size: 17px !important; line-height: 1.65 !important; margin-bottom: 28px !important; font-weight: 400;">Agende uma visita presencial para conhecer nossas instalações, conversar com nossa coordenação didática e encontrar a modalidade perfeita para o seu desenvolvimento musical.</p>
                        <ul class="eme-lead-check-list" style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 12px;">
                            <li style="color: #FFFFFF !important; display: flex; align-items: center; gap: 10px; font-weight: 400;">
                                <svg class="eme-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#E5A93C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Tour guiado pelas salas climatizadas e equipadas</span>
                            </li>
                            <li style="color: #FFFFFF !important; display: flex; align-items: center; gap: 10px; font-weight: 400;">
                                <svg class="eme-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#E5A93C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Orientação pedagógica para escolha de instrumento e docente</span>
                            </li>
                            <li style="color: #FFFFFF !important; display: flex; align-items: center; gap: 10px; font-weight: 400;">
                                <svg class="eme-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#E5A93C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Atendimento acolhedor de segunda a sexta, das 8h às 22h</span>
                            </li>
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
                                    <option value="bateria">Bateria</option>
                                    <option value="violino">Violino / Violoncelo</option>
                                    <option value="contrabaixo">Contrabaixo</option>
                                    <option value="canto">Canto</option>
                                    <option value="flauta">Flauta Doce / Transversal</option>
                                    <option value="saxofone">Saxofone</option>
                                    <option value="harmonia">Harmonia Funcional</option>
                                    <option value="musicalizacao">Musicalização Infantil</option>
                                </select>
                            </div>
                            <div class="eme-form-group" style="margin-bottom: 24px;">
                                <label class="eme-checkbox-label" style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer; user-select: none; margin: 0; padding: 4px 0; width: 100%;">
                                    <input type="checkbox" id="eme-lgpd-check-home" name="lgpd_agree" required style="width: 22px; height: 22px; min-width: 22px; min-height: 22px; accent-color: #C17B4A; cursor: pointer; flex-shrink: 0; margin-top: 2px; opacity: 1 !important; visibility: visible !important; pointer-events: auto !important; display: inline-block !important; -webkit-appearance: checkbox !important; appearance: checkbox !important; z-index: 10 !important;" />
                                    <span style="font-size: 14px; color: #111827; font-weight: 400; line-height: 1.5; cursor: pointer;">
                                        Concordo com o contato da equipe da EME conforme os <a href="javascript:void(0);" class="eme-link-modal-btn eme-open-lgpd-modal" id="eme-open-modal-home-btn" role="button">Termos de Privacidade e LGPD</a>. *
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

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const homeForm = document.getElementById('eme-home-contact-form');

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
                    if (typeof emeToast === 'function') { emeToast(msg, 'success'); } else { alert(msg); }
                    homeForm.reset();
                })
                .catch(err => {
                    if (typeof emeToast === 'function') { emeToast('Obrigado pelo seu interesse! A equipe da EME entrará em contato em breve.', 'success'); } else { alert('Obrigado pelo seu interesse!'); }
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
