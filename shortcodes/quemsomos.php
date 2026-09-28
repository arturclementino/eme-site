<?php
/**
 * Shortcode Quem Somos: [eme_quemsomos]
 * EME - Escola de MÃºsica EsperanÃ§a / NAME
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_quemsomos($atts) {
    ob_start();
    ?>
    <div class="eme-quemsomos-wrapper">
        <!-- Hero Sobre -->
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Sobre a EME & NAME</span>
                <h1 class="eme-hero-title">Quem Somos</h1>
                <p class="eme-hero-subtitle">
                    Integrando fÃ©, cultura e transformaÃ§Ã£o social por meio da arte e do ensino musical de excelÃªncia.
                </p>
            </div>
        </section>

        <!-- HistÃ³ria da Escola -->
        <section class="eme-section">
            <div class="eme-container">
                <div class="eme-grid-2 eme-align-center">
                    <div class="eme-about-text">
                        <span class="eme-badge-tag">Nossa TrajetÃ³ria</span>
                        <h2 class="eme-section-title text-left">Nossa HistÃ³ria</h2>
                        <div class="eme-divider divider-left"></div>
                        <p>
                            A Escola de MÃºsica EsperanÃ§a (EME) nasceu como extensÃ£o da Igreja EsperanÃ§a na cidade de Belo Horizonte â€” um projeto vinculado ao NÃºcleo de Arte e MÃºsica EsperanÃ§a (NAME) que une formaÃ§Ã£o musical sÃ©ria com propÃ³sito comunitÃ¡rio.
                        </p>
                        <p>
                            Nossa identidade Ã© pautada por um duplo compromisso fundamental: tÃ©cnica e acolhimento, excelÃªncia e acessibilidade. Comunicamos seriedade para pais, alunos e parceiros sem abrir mÃ£o da proximidade e do ambiente transformador.
                        </p>
                        <p>
                            Com uma grade didÃ¡tica abrangente composta por 27 modalidades musicais, a EME forma o aluno de maneira integral â€” unindo prÃ¡tica instrumental, percepÃ§Ã£o teÃ³rica e vivÃªncia comunitÃ¡ria em palcos e recitais.
                        </p>
                    </div>
                    <div class="eme-about-image-box">
                        <div class="eme-image-card">
                            <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80" alt="Aluna tocando piano na EME" class="eme-img-fluid" />
                            <div class="eme-card-caption">Aulas presenciais e acompanhamento pedagÃ³gico contÃ­nuo.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MissÃ£o, VisÃ£o e Valores -->
        <section class="eme-section eme-bg-light">
            <div class="eme-container">
                <h2 class="eme-section-title">MissÃ£o, VisÃ£o & Valores</h2>
                <div class="eme-divider"></div>
                <div class="eme-grid-3">
                    <div class="eme-pillar-card">
                        <div class="eme-pillar-icon">ðŸŽ¯</div>
                        <h3>MissÃ£o</h3>
                        <p>Formar pessoas por meio da mÃºsica, integrando fÃ©, cultura e transformaÃ§Ã£o social, com excelÃªncia pedagÃ³gica e acolhimento integral.</p>
                    </div>
                    <div class="eme-pillar-card">
                        <div class="eme-pillar-icon">ðŸ‘ï¸</div>
                        <h3>VisÃ£o</h3>
                        <p>Ser referÃªncia em ensino musical na regiÃ£o de Belo Horizonte, reconhecida pela qualidade pedagÃ³gica, pelo impacto social e pelo ambiente acolhedor.</p>
                    </div>
                    <div class="eme-pillar-card">
                        <div class="eme-pillar-icon">â¤ï¸</div>
                        <h3>Valores</h3>
                        <p>ExcelÃªncia pedagÃ³gica, acolhimento e respeito, integraÃ§Ã£o entre fÃ© e cultura, transformaÃ§Ã£o social pela arte e compromisso com a comunidade.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Proposta PedagÃ³gica -->
        <section class="eme-section">
            <div class="eme-container">
                <h2 class="eme-section-title">Proposta PedagÃ³gica</h2>
                <div class="eme-divider"></div>
                <p class="eme-section-desc">
                    A EME adota uma metodologia que alinha tÃ©cnica instrumental, formaÃ§Ã£o musical completa (teoria, percepÃ§Ã£o, leitura) e prÃ¡tica colaborativa (conjuntos, coral, banda).
                </p>

                <div class="eme-grid-2 eme-align-center" style="margin-top: 30px;">
                    <div class="eme-pedagogia-box">
                        <div class="eme-pedagogia-badge">Acompanhamento DidÃ¡tico</div>
                        <h3>SupervisÃ£o PedagÃ³gica ContÃ­nua</h3>
                        <p>
                            A coordenaÃ§Ã£o pedagÃ³gica da EME atua no acompanhamento prÃ³ximo dos professores e no desenvolvimento individual de cada estudante. Esse cuidado garante a qualidade didÃ¡tica, a evoluÃ§Ã£o tÃ©cnica constante e a continuidade do aprendizado ao longo de todos os mÃ³dulos.
                        </p>
                    </div>
                    <div class="eme-grid-2">
                        <div class="eme-method-card">
                            <span class="eme-method-step">01</span>
                            <h4>TÃ©cnica Instrumental</h4>
                            <p>DomÃ­nio do instrumento com ergonomia, afinaÃ§Ã£o e execuÃ§Ã£o apurada.</p>
                        </div>
                        <div class="eme-method-card">
                            <span class="eme-method-step">02</span>
                            <h4>FormaÃ§Ã£o Musical</h4>
                            <p>Leitura de partitura, solfejo e percepÃ§Ã£o auditiva estruturada.</p>
                        </div>
                        <div class="eme-method-card">
                            <span class="eme-method-step">03</span>
                            <h4>PrÃ¡tica Colaborativa</h4>
                            <p>Ensaio em grupos, prÃ¡tica de banda, coral e conjuntos de cÃ¢mara.</p>
                        </div>
                        <div class="eme-method-card">
                            <span class="eme-method-step">04</span>
                            <h4>VivÃªncia de Palco</h4>
                            <p>Recitais periÃ³dicos e audiÃ§Ãµes pÃºblicas abertas Ã  comunidade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Infraestrutura (Salas Nomeadas) -->
        <section class="eme-section eme-bg-light">
            <div class="eme-container">
                <h2 class="eme-section-title">Nossa Infraestrutura</h2>
                <div class="eme-divider"></div>
                <p class="eme-section-desc">
                    Salas nomeadas em homenagem a figuras influentes da mÃºsica e da cultura. Instrumentos em boas condiÃ§Ãµes, salas com boa iluminaÃ§Ã£o, ventilaÃ§Ã£o e acÃºstica, sempre preparadas para o inÃ­cio das aulas.
                </p>

                <div class="eme-grid-3">
                    <div class="eme-facility-card">
                        <div class="eme-room-header">ðŸŽ¼ Sala Sebastian Bach</div>
                        <div class="eme-facility-info">
                            <p>EspaÃ§o dedicado ao ensino de piano, teclado, violino e mÃºsica erudita com acÃºstica equilibrada.</p>
                        </div>
                    </div>
                    <div class="eme-facility-card">
                        <div class="eme-room-header">ðŸ“š Sala Hans Rookmaaker</div>
                        <div class="eme-facility-info">
                            <p>Sala de teoria musical, percepÃ§Ã£o e encontros de formaÃ§Ã£o estÃ©tica e cultural.</p>
                        </div>
                    </div>
                    <div class="eme-facility-card">
                        <div class="eme-room-header">ðŸŽ¸ Sala Keith Green</div>
                        <div class="eme-facility-info">
                            <p>Ambiente equipado com violÃµes, guitarras, amplificadores e contrabaixo elÃ©trico.</p>
                        </div>
                    </div>
                    <div class="eme-facility-card">
                        <div class="eme-room-header">ðŸ›ï¸ SalÃ£o de Culto</div>
                        <div class="eme-facility-info">
                            <p>AuditÃ³rio amplo com sistema de som e iluminaÃ§Ã£o para recitais de grande pÃºblico e ensaios gerais.</p>
                        </div>
                    </div>
                    <div class="eme-facility-card">
                        <div class="eme-room-header">ðŸ¥ Sala Multiuso</div>
                        <div class="eme-facility-info">
                            <p>Equipada com bateria acÃºstica, instrumentos de percussÃ£o e isolamento reforÃ§ado.</p>
                        </div>
                    </div>
                    <div class="eme-facility-card">
                        <div class="eme-room-header">ðŸŽµ Sala Multiuso 1 (Sede)</div>
                        <div class="eme-facility-info">
                            <p>EspaÃ§o versÃ¡til para turmas de musicalizaÃ§Ã£o infantil, coral e ensaios de conjunto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Parceiros Institucionais -->
        <section class="eme-section">
            <div class="eme-container">
                <h2 class="eme-section-title">Parceiros Institucionais</h2>
                <div class="eme-divider"></div>
                <div class="eme-grid-3">
                    <div class="eme-partner-card">
                        <div class="eme-partner-logo">ðŸ“£</div>
                        <h3>AgÃªncia Casus</h3>
                        <p>GestÃ£o de comunicaÃ§Ã£o estratÃ©gica, presenÃ§a digital e redes sociais institucionais da EME.</p>
                    </div>
                    <div class="eme-partner-card">
                        <div class="eme-partner-logo">ðŸ’¡</div>
                        <h3>Plataforma E-missÃ£o</h3>
                        <p>CaptaÃ§Ã£o de recursos e viabilizaÃ§Ã£o de projetos culturais e sociais de inclusÃ£o atravÃ©s da mÃºsica.</p>
                    </div>
                    <div class="eme-partner-card">
                        <div class="eme-partner-logo">ðŸ“±</div>
                        <h3>Aplicativo Emusys</h3>
                        <p>Plataforma de gestÃ£o acadÃªmica, controle de frequÃªncia e comunicaÃ§Ã£o direta com alunos e responsÃ¡veis.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_quemsomos', 'eme_shortcode_quemsomos');


