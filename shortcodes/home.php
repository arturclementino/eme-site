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

        <!-- Métricas & Indicadores de Impacto -->
        <section class="eme-stats-bar">
            <div class="eme-container">
                <div class="eme-stats-grid">
                    <div class="eme-stat-item">
                        <span class="eme-stat-number">+70,9%</span>
                        <span class="eme-stat-label">Crescimento no 1º Ano</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number">94</span>
                        <span class="eme-stat-label">Matrículas Ativas</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number">27</span>
                        <span class="eme-stat-label">Modalidades Musicais</span>
                    </div>
                    <div class="eme-stat-item">
                        <span class="eme-stat-number">18</span>
                        <span class="eme-stat-label">Professores Qualificados</span>
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
                            Fundada em <strong>5 de maio de 2026</strong>, a <strong>Escola de Música Esperança (EME)</strong> é um projeto do <strong>Núcleo de Arte e Música Esperança (NAME)</strong>, braço cultural e educacional vinculado à <strong>Igreja Esperança</strong>, em Belo Horizonte (região Padre Eustáquio / Vila São Vicente).
                        </p>
                        <p>
                            Em seu primeiro ano de atividades, a EME expandiu de forma expressiva, alcançando <strong>94 alunos ativos</strong> distribuídos em <strong>27 modalidades musicais</strong> e um corpo docente composto por <strong>18 professores experientes</strong> (bacharéis, licenciados e mestres).
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
                        <h3>18 Professores Qualificados</h3>
                        <p>Docentes experientes, graduados e atuantes em orquestras, estúdios e palcos nacionais e internacionais.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🏡</div>
                        <h3>Estrutura Acolhedora</h3>
                        <p>Salas climatizadas, equipadas com instrumentos de alta qualidade, acústica adequada e ambiente seguro.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎼</div>
                        <h3>Coordenação Pedagógica 25h/semana</h3>
                        <p>Acompanhamento contínuo dos estudantes e professores para garantir o progresso didático individual.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎭</div>
                        <h3>Recitais & Projeto Casa Aberta</h3>
                        <p>Apresentações semestrais com até 450 espectadores e pocket shows mensais gratuitos para a comunidade.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🤝</div>
                        <h3>Projeto Amigos da EME</h3>
                        <p>Programa de bolsas de estudo de até 85% para inclusão social e desenvolvimento de novos talentos.</p>
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
                            <p><strong>Local:</strong> Auditório Principal | O grande momento de apresentação de todos os alunos da EME para famílias e amigos.</p>
                        </div>
                    </div>
                    <div class="eme-event-mini-card">
                        <div class="eme-event-date-badge">
                            <span class="day">1ª QUI</span>
                            <span class="month">MENSAL</span>
                        </div>
                        <div class="eme-event-details">
                            <h3>Projeto Casa Aberta</h3>
                            <p><strong>Local:</strong> Sede EME (Área externa). Pocket show gratuito com música ao vivo, gastronomia e integração comunitária.</p>
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
                        <h2>Venha conhecer a EME de perto</h2>
                        <p>Agende uma visita presencial para conhecer nossas instalações, conversar com nossa coordenação e encontrar o curso perfeito para você ou sua família.</p>
                        <ul class="eme-lead-check-list">
                            <li>✓ Tour guiado pelas salas de aula e acervo instrumental</li>
                            <li>✓ Orientação para escolha de instrumento e professor</li>
                            <li>✓ Atendimento acolhedor de segunda a sexta, das 8h às 22h</li>
                        </ul>
                    </div>
                    <div class="eme-lead-form-box">
                        <h3>Agende sua Visita Presencial</h3>
                        <form onsubmit="event.preventDefault(); alert('Obrigado pelo seu interesse! A equipe da EME entrará em contato em breve via WhatsApp/E-mail.');" class="eme-form">
                            <div class="eme-form-group">
                                <label>Nome Completo</label>
                                <input type="text" placeholder="Seu nome completo" required />
                            </div>
                            <div class="eme-form-group">
                                <label>E-mail Principal</label>
                                <input type="email" placeholder="seu@email.com" required />
                            </div>
                            <div class="eme-form-group">
                                <label>Telefone / WhatsApp</label>
                                <input type="tel" placeholder="(31) 98420-1358" required />
                            </div>
                            <div class="eme-form-group">
                                <label>Curso de Interesse</label>
                                <select required>
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
                            <div class="eme-form-group">
                                <label class="eme-checkbox-label">
                                    <input type="checkbox" required />
                                    <span>Concordo com o contato da equipe da EME conforme a LGPD.</span>
                                </label>
                            </div>
                            <button type="submit" class="eme-btn-primary eme-btn-block">Agendar minha visita</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_home', 'eme_shortcode_home');
