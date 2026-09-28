<?php
/**
 * Shortcode Home: [eme_home]
 * EME - Escola de MÃºsica EsperanÃ§a / NAME
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
                    <span class="eme-stars">â˜…â˜…â˜…â˜…â˜…</span> NÃºcleo de Arte e MÃºsica EsperanÃ§a (NAME) | Igreja EsperanÃ§a
                </div>
                <h1 class="eme-hero-title">Escola de MÃºsica EsperanÃ§a</h1>
                <p class="eme-hero-subtitle">
                    Onde a arte encontra propÃ³sito, tÃ©cnica e transformaÃ§Ã£o comunitÃ¡ria.
                </p>
                <div class="eme-hero-actions">
                    <a href="<?php echo esc_url(home_url('/contato')); ?>" class="eme-btn-primary eme-cta-pulse">Agende uma visita presencial</a>
                    <a href="<?php echo esc_url(home_url('/aulas')); ?>" class="eme-btn-outline">ConheÃ§a nossas 27 modalidades</a>
                </div>
            </div>
        </section>

        <!-- Pilares de ExcelÃªncia EME -->
        <section class="eme-stats-bar" style="background: linear-gradient(135deg, var(--verde-escuro) 0%, var(--verde) 100%) !important;">
            <div class="eme-container">
                <div class="eme-stats-grid">
                    <div class="eme-stat-item">
                        <span class="eme-stat-number" style="font-size: 26px; color: #FFFFFF !important;">ðŸŽµ 27 Modalidades</span>
                        <span class="eme-stat-label" style="color: #FFFFFF !important; opacity: 0.95; font-weight: 600;">Erudito & Popular</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number" style="font-size: 26px; color: #FFFFFF !important;">ðŸŽ“ Corpo Docente</span>
                        <span class="eme-stat-label" style="color: #FFFFFF !important; opacity: 0.95; font-weight: 600;">Professores Graduados & Mestres</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number" style="font-size: 26px; color: #FFFFFF !important;">ðŸ¡ Estrutura Completa</span>
                        <span class="eme-stat-label" style="color: #FFFFFF !important; opacity: 0.95; font-weight: 600;">Salas Climatizadas & Equipadas</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number" style="font-size: 26px; color: #FFFFFF !important;">ðŸ¤ FormaÃ§Ã£o Humana</span>
                        <span class="eme-stat-label" style="color: #FFFFFF !important; opacity: 0.95; font-weight: 600;">Ensino com PropÃ³sito & ExcelÃªncia</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ApresentaÃ§Ã£o Institucional de Abertura -->
        <section class="eme-section">
            <div class="eme-container">
                <div class="eme-grid-2 eme-align-center">
                    <div class="eme-home-about-text">
                        <span class="eme-badge-tag">ExcelÃªncia & PropÃ³sito</span>
                        <h2 class="eme-section-title text-left">Integrando FÃ©, Cultura e Ensino de Alta Qualidade</h2>
                        <div class="eme-divider divider-left"></div>
                        <p>
                            A Escola de MÃºsica EsperanÃ§a (EME) Ã© um projeto do NÃºcleo de Arte e MÃºsica EsperanÃ§a (NAME), braÃ§o cultural e educacional vinculado Ã  Igreja EsperanÃ§a, em Belo Horizonte (regiÃ£o Padre EustÃ¡quio / Vila SÃ£o Vicente).
                        </p>
                        <p>
                            Oferecemos uma ampla grade didÃ¡tica distribuÃ­da em 27 modalidades musicais com acompanhamento individualizado e um corpo docente experiente composto por mÃºsicos graduados, licenciados e mestres.
                        </p>
                        <p>
                            Mais do que ensinar tÃ©cnicas instrumentais ou vocais, a EME forma pessoas por meio da arte, promovendo o desenvolvimento tÃ©cnico, pessoal e comunitÃ¡rio.
                        </p>
                        <a href="<?php echo esc_url(home_url('/quem-somos')); ?>" class="eme-btn-outline" style="margin-top: 15px;">ConheÃ§a nossa histÃ³ria completa &rarr;</a>
                    </div>
                    <div class="eme-home-about-img">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80" alt="Aula de mÃºsica na EME" class="eme-img-card" decoding="async" loading="lazy" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Diferenciais EME (6 Cards) -->
        <section class="eme-section eme-bg-light">
            <div class="eme-container">
                <h2 class="eme-section-title">Por que escolher a EME?</h2>
                <div class="eme-divider"></div>
                <p class="eme-section-desc">ExcelÃªncia tÃ©cnica e acolhimento em uma estrutura preparada para o desenvolvimento musical do aluno.</p>

                <div class="eme-grid-3">
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">ðŸŽµ</div>
                        <h3>27 Modalidades Musicais</h3>
                        <p>Do erudito ao popular: instrumentos de cordas, sopros, teclas, percussÃ£o, canto e formaÃ§Ã£o teÃ³rica.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">ðŸŽ“</div>
                        <h3>Corpo Docente Qualificado</h3>
                        <p>Docentes experientes, graduados e atuantes em orquestras, estÃºdios e palcos nacionais e internacionais.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">ðŸ¡</div>
                        <h3>Estrutura Acolhedora</h3>
                        <p>Salas climatizadas, equipadas com instrumentos de alta qualidade, acÃºstica adequada e ambiente seguro.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">ðŸŽ¼</div>
                        <h3>Acompanhamento PedagÃ³gico ContÃ­nuo</h3>
                        <p>Acompanhamento prÃ³ximo dos estudantes e professores para garantir o progresso didÃ¡tico individual.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">ðŸŽ­</div>
                        <h3>Recitais & Projeto Casa Aberta</h3>
                        <p>ApresentaÃ§Ãµes semestrais com pÃºblico da comunidade e pocket shows na Ãºltima quinta-feira do mÃªs.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">ðŸ¤</div>
                        <h3>Projeto Amigos da EME</h3>
                        <p>Programa de bolsas de estudo para inclusÃ£o social e desenvolvimento de novos talentos.</p>
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
                        <div class="eme-icon">ðŸŽ¸</div>
                        <h3>ViolÃ£o & Guitarra</h3>
                        <p>TÃ©cnica, leitura, acordes, dedilhados e solos do nÃ­vel iniciante ao avanÃ§ado.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">ðŸŽ¹</div>
                        <h3>Piano & Teclado</h3>
                        <p>Leitura de partitura, percepÃ§Ã£o, repertÃ³rio clÃ¡ssico, popular e correpetiÃ§Ã£o.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">ðŸ¥</div>
                        <h3>Bateria & PercussÃ£o</h3>
                        <p>IndependÃªncia motora, ritmos variados, afinaÃ§Ã£o e prÃ¡tica de conjunto.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">ðŸŽ»</div>
                        <h3>Violino & Violoncelo</h3>
                        <p>TÃ©cnica de arco, postura ergonÃ´mica, afinaÃ§Ã£o e execuÃ§Ã£o orquestral.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">ðŸŽ¸</div>
                        <h3>Contrabaixo ElÃ©trico e AcÃºstico</h3>
                        <p>ConduÃ§Ã£o rÃ­tmica, grooves, slap, harmonia e formaÃ§Ã£o de base sÃ³lida.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">ðŸŽ¤</div>
                        <h3>Canto & Fisiologia Vocal</h3>
                        <p>TÃ©cnica vocal consciente, saÃºde da voz, respiraÃ§Ã£o e interpretaÃ§Ã£o artÃ­stica.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">ðŸŽ¼</div>
                        <h3>Harmonia Funcional</h3>
                        <p>Curso modular prÃ¡tico para modulaÃ§Ã£o, rearmonizaÃ§Ã£o e arranjos instrumentais.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">ðŸ‘¶</div>
                        <h3>MusicalizaÃ§Ã£o Infantil</h3>
                        <p>Desenvolvimento cognitivo e lÃºdico para crianÃ§as a partir de 4 anos.</p>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 35px;">
                    <a href="<?php echo esc_url(home_url('/aulas')); ?>" class="eme-btn-primary">Ver todas as 27 modalidades &rarr;</a>
                </div>
            </div>
        </section>

        <!-- PrÃ³ximos Eventos & Recitais -->
        <section class="eme-section eme-bg-light">
            <div class="eme-container">
                <h2 class="eme-section-title">PrÃ³ximos Eventos & Recitais</h2>
                <div class="eme-divider"></div>
                <div class="eme-grid-2">
                    <div class="eme-event-mini-card">
                        <div class="eme-event-date-badge">
                            <span class="day">10/11</span>
                            <span class="month">NOV 2026</span>
                        </div>
                        <div class="eme-event-details">
                            <h3>Recitais de 2Âº Semestre EME</h3>
                            <p>Local: AuditÃ³rio Principal â€” Igreja EsperanÃ§a | Grande momento de apresentaÃ§Ã£o dos alunos da EME.</p>
                        </div>
                    </div>
                    <div class="eme-event-mini-card">
                        <div class="eme-event-date-badge">
                            <span class="day">ÃšLTIMA QUI</span>
                            <span class="month">MENSAL</span>
                        </div>
                        <div class="eme-event-details">
                            <h3>Projeto Casa Aberta</h3>
                            <p>Local: Sede EME (Ãrea externa). Pocket show gratuito com mÃºsica ao vivo e integraÃ§Ã£o comunitÃ¡ria.</p>
                        </div>
                    </div>
                    <div class="eme-event-mini-card">
                        <div class="eme-event-date-badge">
                            <span class="day">WS</span>
                            <span class="month">GUITARRA</span>
                        </div>
                        <div class="eme-event-details">
                            <h3>Workshop: Timbres de Guitarra</h3>
                            <p>Ministrante: Prof. Warnei Ferreira. ProgramaÃ§Ã£o prÃ¡tica de pedais analÃ³gicos e digitais.</p>
                        </div>
                    </div>
                    <div class="eme-event-mini-card">
                        <div class="eme-event-date-badge">
                            <span class="day">WS</span>
                            <span class="month">BATERIA</span>
                        </div>
                        <div class="eme-event-details">
                            <h3>Workshop: AfinaÃ§Ã£o de Bateria</h3>
                            <p>Ministrante: Prof. Rodrigo Leles. Escolha de peles, regulagem de hardware e prÃ¡tica de estÃºdio.</p>
                        </div>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 35px;">
                    <a href="<?php echo esc_url(home_url('/eventos')); ?>" class="eme-btn-outline">Ver programaÃ§Ã£o de eventos completa &rarr;</a>
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
                        <div class="eme-quote-icon">â€œ</div>
                        <p class="eme-testimonial-text">A EME une o profissionalismo de grandes professores com um ambiente acolhedor e seguro. Meu filho teve uma evoluÃ§Ã£o fantÃ¡stica no violÃ£o em pouquÃ­ssimos meses!</p>
                        <div class="eme-testimonial-author">
                            Mariana Ferreira
                            <span>MÃ£e de aluno (Belo Horizonte - Padre EustÃ¡quio)</span>
                        </div>
                    </div>
                    <div class="eme-testimonial-card">
                        <div class="eme-quote-icon">â€œ</div>
                        <p class="eme-testimonial-text">Iniciei o piano na idade adulta e fui extremamente bem acolhido. A coordenaÃ§Ã£o pedagÃ³gica se importa com a evoluÃ§Ã£o individual de cada aluno.</p>
                        <div class="eme-testimonial-author">
                            Carlos Eduardo Ramos
                            <span>Aluno de Piano & Harmonia Funcional</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call-To-Action & FormulÃ¡rio de Visita -->
        <section id="agendar-visita" class="eme-cta-lead-section">
            <div class="eme-container">
                <div class="eme-grid-2 eme-align-center">
                    <div class="eme-lead-info">
                        <span class="eme-badge-tag" style="background: rgba(255,255,255,0.18) !important; color: #F59E0B !important; border: 1px solid rgba(245,158,11,0.5) !important; font-weight: 700; padding: 6px 16px; border-radius: 30px; display: inline-block; margin-bottom: 14px; font-size: 12px; text-transform: uppercase; letter-spacing: 1px;">TÃ©cnica & Acolhimento</span>
                        <h2 style="color: #FFFFFF !important; font-size: 38px !important; font-weight: 800 !important; text-shadow: 0 2px 10px rgba(0,0,0,0.35) !important; margin-bottom: 18px !important; line-height: 1.2 !important;">Venha conhecer a EME de perto</h2>
                        <p style="color: rgba(255, 255, 255, 0.94) !important; font-size: 18px !important; line-height: 1.65 !important; margin-bottom: 28px !important;">Agende uma visita presencial para conhecer nossas instalaÃ§Ãµes, conversar com nossa coordenaÃ§Ã£o didÃ¡tica e encontrar a modalidade perfeita para o seu desenvolvimento musical.</p>
                        <ul class="eme-lead-check-list">
                            <li style="color: #FFFFFF !important;">âœ“ Tour guiado pelas salas climatizadas e equipadas</li>
                            <li style="color: #FFFFFF !important;">âœ“ OrientaÃ§Ã£o pedagÃ³gica para escolha de instrumento e docente</li>
                            <li style="color: #FFFFFF !important;">âœ“ Atendimento acolhedor de segunda a sexta, das 8h Ã s 22h</li>
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
                                    <option value="violao">ViolÃ£o / Guitarra</option>
                                    <option value="piano">Piano / Teclado</option>
                                    <option value="bateria">Bateria & PercussÃ£o</option>
                                    <option value="violino">Violino / Violoncelo</option>
                                    <option value="contrabaixo">Contrabaixo ElÃ©trico e AcÃºstico</option>
                                    <option value="canto">Canto & Fisiologia Vocal</option>
                                    <option value="flauta">Flauta Doce / Transversal</option>
                                    <option value="saxofone">Saxofone & Sopros</option>
                                    <option value="harmonia">Harmonia Funcional</option>
                                    <option value="musicalizacao">MusicalizaÃ§Ã£o Infantil</option>
                                </select>
                            </div>
                            <div class="eme-form-group" style="margin-bottom: 24px;">
                                <label class="eme-checkbox-label" style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer; user-select: none; margin: 0; padding: 4px 0; width: 100%;">
                                    <input type="checkbox" id="eme-lgpd-check-home" name="lgpd_agree" required style="width: 22px; height: 22px; min-width: 22px; min-height: 22px; accent-color: #C17B4A; cursor: pointer; flex-shrink: 0; margin-top: 2px; opacity: 1 !important; visibility: visible !important; pointer-events: auto !important; display: inline-block !important; -webkit-appearance: checkbox !important; appearance: checkbox !important; z-index: 10 !important;" />
                                    <span style="font-size: 14px; color: #111827; font-weight: 600; line-height: 1.5; cursor: pointer;">
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
                    const msg = (data && data.data && data.data.message) ? data.data.message : 'Obrigado pelo seu interesse! A equipe da EME entrarÃ¡ em contato em breve via WhatsApp/E-mail.';
                    if (typeof emeToast === 'function') { emeToast(msg, 'success'); } else { alert(msg); }
                    homeForm.reset();
                })
                .catch(err => {
                    if (typeof emeToast === 'function') { emeToast('Obrigado pelo seu interesse! A equipe da EME entrarÃ¡ em contato em breve.', 'success'); } else { alert('Obrigado pelo seu interesse!'); }
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

