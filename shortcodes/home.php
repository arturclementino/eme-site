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
        <!-- Hero Section -->
        <section class="eme-hero">
            <div class="eme-container">
                <div class="eme-hero-badge">
                    <span class="eme-stars">★★★★★</span> Núcleo de Arte e Música Esperança (NAME) | Igreja Esperança
                </div>
                <h1 class="eme-hero-title">Escola de Música Esperança</h1>
                <p class="eme-hero-subtitle">
                    Onde a música encontra propósito
                </p>
                <div class="eme-hero-actions">
                    <a href="#contato" class="eme-btn-primary eme-cta-pulse">Agende uma visita</a>
                    <a href="<?php echo esc_url(home_url('/aulas')); ?>" class="eme-btn-outline">Conheça nossas aulas</a>
                </div>
            </div>
        </section>

        <!-- Apresentação Institucional de Abertura -->
        <section class="eme-section">
            <div class="eme-container">
                <div class="eme-grid-2 eme-align-center">
                    <div class="eme-home-about-text">
                        <span class="eme-badge-tag">Primeiro Ano de Atividades</span>
                        <h2 class="eme-section-title text-left">Integrando Fé, Cultura e Transformação Social</h2>
                        <div class="eme-divider divider-left"></div>
                        <p>
                            Fundada em <strong>5 de maio de 2026</strong>, a <strong>Escola de Música Esperança (EME)</strong> é um projeto do <strong>Núcleo de Arte e Música Esperança (NAME)</strong>, braço cultural e educacional vinculado à <strong>Igreja Esperança</strong>, localizada em Belo Horizonte (região Padre Eustáquio / Vila São Vicente).
                        </p>
                        <p>
                            Em seu primeiro ano de atividades, a EME <strong>cresceu 70,9%</strong>, saltando de 55 para <strong>94 matrículas ativas</strong>, contando com <strong>27 modalidades musicais</strong> e um corpo docente de <strong>19 professores altamente capacitados</strong>.
                        </p>
                        <p>
                            Mais do que ensinar música, a EME forma pessoas por meio da arte, promovendo o desenvolvimento técnico, espiritual e comunitário.
                        </p>
                        <a href="<?php echo esc_url(home_url('/quem-somos')); ?>" class="eme-btn-outline" style="margin-top: 15px;">Conheça nossa história &rarr;</a>
                    </div>
                    <div class="eme-home-about-img">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80" alt="Aula de música na EME" class="eme-img-card" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Diferenciais EME (6 Cards) -->
        <section class="eme-section eme-bg-light">
            <div class="eme-container">
                <h2 class="eme-section-title">Nossos Diferenciais</h2>
                <div class="eme-divider"></div>
                <p class="eme-section-desc">Excelência técnica e acolhimento em uma estrutura preparada para o seu aprendizado.</p>

                <div class="eme-grid-3">
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎵</div>
                        <h3>27 Modalidades Musicais</h3>
                        <p>Do erudito ao popular, abrangendo instrumentos, canto, formação teórica e práticas coletivas.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎓</div>
                        <h3>19 Professores Qualificados</h3>
                        <p>Corpo docente experiente, com formação superior e vivência prática em orquestras e palcos.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🏡</div>
                        <h3>Ambiente Acolhedor</h3>
                        <p>Estrutura adequada com salas equipadas, boa iluminação, ventilação e acústica para aulas presenciais.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎼</div>
                        <h3>Coordenação Pedagógica Dedicada</h3>
                        <p>25 horas semanais dedicadas ao acompanhamento dos professores e desenvolvimento contínuo dos alunos.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🎭</div>
                        <h3>Recitais & Eventos Abertos</h3>
                        <p>Apresentações semestrais e projetos comunitários como o Casa Aberta para a comunidade.</p>
                    </div>
                    <div class="eme-diff-card">
                        <div class="eme-diff-icon">🤝</div>
                        <h3>Projeto Amigos da EME</h3>
                        <p>Programa de bolsas de estudo de até 85% para inclusão social e desenvolvimento de talentos.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Aulas em Destaque -->
        <section id="aulas" class="eme-section">
            <div class="eme-container">
                <h2 class="eme-section-title">Aulas em Destaque</h2>
                <div class="eme-divider"></div>
                <div class="eme-grid-4">
                    <div class="eme-card-item">
                        <div class="eme-icon">🎸</div>
                        <h3>Violão / Guitarra</h3>
                        <p>Acordes, ritmos, dedilhados e solos do iniciante ao avançado.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">🎹</div>
                        <h3>Piano / Teclado</h3>
                        <p>Leitura em partitura, técnica de toque e repertório clássico e popular.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">🥁</div>
                        <h3>Bateria</h3>
                        <p>Coordenação motora, grooves nos mais variados estilos e rudimentos.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">🎻</div>
                        <h3>Violino</h3>
                        <p>Técnica de arco, postura ergonômica, afinação e percepção melódica.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">🎸</div>
                        <h3>Contrabaixo</h3>
                        <p>Condução rítmica, slap, harmonia aplicada e groove em banda.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">🎤</div>
                        <h3>Canto</h3>
                        <p>Fisiologia vocal, afinação, apoio respiratório e interpretação.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">🎼</div>
                        <h3>Harmonia Funcional</h3>
                        <p>Curso complementar modular ministrado pelo Prof. João Camilo.</p>
                    </div>
                    <div class="eme-card-item">
                        <div class="eme-icon">👶</div>
                        <h3>Musicalização Infantil</h3>
                        <p>Desenvolvimento lúdico e auditivo para crianças a partir de 4 anos.</p>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 35px;">
                    <a href="<?php echo esc_url(home_url('/aulas')); ?>" class="eme-btn-primary">Ver todas as 27 modalidades &rarr;</a>
                </div>
            </div>
        </section>

        <!-- Próximos Eventos (Prévia) -->
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
                            <h3>Recitais de 2º Semestre</h3>
                            <p><strong>Local:</strong> Igreja Esperança campus Castelo | <strong>Meta:</strong> 450 espectadores. O grande momento de apresentação de todos os alunos da EME.</p>
                        </div>
                    </div>
                    <div class="eme-event-mini-card">
                        <div class="eme-event-date-badge">
                            <span class="day">1ª QUI</span>
                            <span class="month">MENSAL</span>
                        </div>
                        <div class="eme-event-details">
                            <h3>Projeto Casa Aberta</h3>
                            <p><strong>Local:</strong> Sede da EME (área externa). Pocket show gratuito com música ao vivo, interação com o público e opções de alimentação no local.</p>
                        </div>
                    </div>
                    <div class="eme-event-mini-card">
                        <div class="eme-event-date-badge">
                            <span class="day">WS</span>
                            <span class="month">GUITARRA</span>
                        </div>
                        <div class="eme-event-details">
                            <h3>Workshop: Desvendando o Timbre da Guitarra</h3>
                            <p>Programação prática de pedaleiras e pedais analógicos para guitarristas de igrejas e bandas.</p>
                        </div>
                    </div>
                    <div class="eme-event-mini-card">
                        <div class="eme-event-date-badge">
                            <span class="day">WS</span>
                            <span class="month">BATERIA</span>
                        </div>
                        <div class="eme-event-details">
                            <h3>Workshop: Afinação de Bateria</h3>
                            <p>Ministrante: Prof. Rodrigo Leles. Escolha de peles, regulagem de hardware e afinação prática.</p>
                        </div>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 35px;">
                    <a href="<?php echo esc_url(home_url('/eventos')); ?>" class="eme-btn-outline">Ver todos os eventos & agenda completa &rarr;</a>
                </div>
            </div>
        </section>

        <!-- Depoimentos Institucionais -->
        <section class="eme-section">
            <div class="eme-container">
                <h2 class="eme-section-title">O que diz a nossa comunidade</h2>
                <div class="eme-divider"></div>
                <div class="eme-grid-2">
                    <div class="eme-testimonial-card">
                        <div class="eme-quote-icon">“</div>
                        <p class="eme-testimonial-text">A EME une o profissionalismo de grandes professores com um ambiente acolhedor e seguro para a minha família. Meu filho evoluiu muito no violão!</p>
                        <div class="eme-testimonial-author">
                            <strong>Mariana Ferreira</strong>
                            <span>Mãe de aluno EME (Padre Eustáquio)</span>
                        </div>
                    </div>
                    <div class="eme-testimonial-card">
                        <div class="eme-quote-icon">“</div>
                        <p class="eme-testimonial-text">Comecei a estudar piano na idade adulta e fui extremamente bem acolhido. A coordenação pedagógica realmente se importa com o progresso de cada um.</p>
                        <div class="eme-testimonial-author">
                            <strong>Carlos Eduardo Ramos</strong>
                            <span>Aluno de Piano & Harmonia</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call-To-Action & Formulário de Captação -->
        <section id="contato" class="eme-cta-lead-section">
            <div class="eme-container">
                <div class="eme-grid-2 eme-align-center">
                    <div class="eme-lead-info">
                        <h2>Venha conhecer a EME</h2>
                        <p>Agende uma visita e descubra como a música pode transformar. Conheça nossa estrutura, nossas salas e converse com nossa coordenação pedagógica.</p>
                        <ul class="eme-lead-check-list">
                            <li>✓ Tour guiado pelas salas de aula e acervo</li>
                            <li>✓ Definição do curso, professor e horário ideal</li>
                            <li>✓ Possibilidade de aula experimental presencial</li>
                        </ul>
                    </div>
                    <div class="eme-lead-form-box">
                        <h3>Agende uma Visita</h3>
                        <form onsubmit="event.preventDefault(); alert('Obrigado pelo seu interesse! A equipe da EME entrará em contato em breve via WhatsApp/E-mail.');" class="eme-form">
                            <div class="eme-form-group">
                                <label>Nome Completo</label>
                                <input type="text" placeholder="Seu nome completo" required />
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
                                <label>Curso de Interesse</label>
                                <select required>
                                    <option value="" disabled selected>Selecione uma modalidade</option>
                                    <option value="violao">Violão / Guitarra</option>
                                    <option value="piano">Piano / Teclado</option>
                                    <option value="bateria">Bateria</option>
                                    <option value="violino">Violino / Violoncelo</option>
                                    <option value="contrabaixo">Contrabaixo</option>
                                    <option value="canto">Canto</option>
                                    <option value="harmonia">Harmonia Funcional</option>
                                    <option value="musicalizacao">Musicalização Infantil</option>
                                    <option value="outros">Outro curso</option>
                                </select>
                            </div>
                            <div class="eme-form-group">
                                <label class="eme-checkbox-label">
                                    <input type="checkbox" required />
                                    <span>Autorizo o uso dos meus dados para contato pela EME, conforme a LGPD.</span>
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

