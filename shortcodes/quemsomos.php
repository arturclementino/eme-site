<?php
/**
 * Shortcode Quem Somos: [eme_quemsomos]
 * EME - Escola de Música Esperança / NAME
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
                <span class="eme-badge-tag">Sobre a EME</span>
                <h1 class="eme-hero-title">Quem Somos</h1>
                <p class="eme-hero-subtitle">
                    Integrando fé, cultura e transformação social por meio da arte e do ensino musical de excelência.
                </p>
            </div>
        </section>

        <!-- História da Escola -->
        <section class="eme-section">
            <div class="eme-container">
                <div class="eme-grid-2 eme-align-center">
                    <div class="eme-about-text">
                        <span class="eme-badge-tag">Nossa Trajetória</span>
                        <h2 class="eme-section-title text-left">Nossa História</h2>
                        <div class="eme-divider divider-left"></div>
                        <p>
                            A Escola de Música Esperança (EME) nasceu como extensão da Igreja Esperança na cidade de Belo Horizonte — unindo formação musical séria com propósito comunitário.
                        </p>
                        <p>
                            Nossa identidade é pautada por um duplo compromisso fundamental: técnica e acolhimento, excelência e acessibilidade. Comunicamos seriedade para pais, alunos e parceiros sem abrir mão da proximidade e do ambiente transformador.
                        </p>
                        <p>
                            Com uma grade didática abrangente com diversas modalidades musicais, a EME forma o aluno de maneira integral — unindo prática instrumental, percepção teórica e vivência comunitária em palcos e recitais.
                        </p>
                    </div>
                    <div class="eme-about-image-box">
                        <div class="eme-image-card">
                            <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80" alt="Aluna tocando piano na EME" class="eme-img-fluid" />
                            <div class="eme-card-caption">Aulas presenciais e acompanhamento pedagógico contínuo.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Missão, Visão e Valores -->
        <section class="eme-section eme-bg-light">
            <div class="eme-container">
                <h2 class="eme-section-title">Missão, Visão & Valores</h2>
                <div class="eme-divider"></div>
                <div class="eme-grid-3">
                    <div class="eme-pillar-card">
                        <div class="eme-pillar-icon" style="color: var(--terracota); display: flex; justify-content: center; margin-bottom: 12px;">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                        </div>
                        <h3>Missão</h3>
                        <p style="font-weight: 400;">Formar pessoas por meio da música, integrando fé, cultura e transformação social, com excelência pedagógica e acolhimento integral.</p>
                    </div>
                    <div class="eme-pillar-card">
                        <div class="eme-pillar-icon" style="color: var(--terracota); display: flex; justify-content: center; margin-bottom: 12px;">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </div>
                        <h3>Visão</h3>
                        <p style="font-weight: 400;">Ser referência em ensino musical na região de Belo Horizonte, reconhecida pela qualidade pedagógica, pelo impacto social e pelo ambiente acolhedor.</p>
                    </div>
                    <div class="eme-pillar-card">
                        <div class="eme-pillar-icon" style="color: var(--terracota); display: flex; justify-content: center; margin-bottom: 12px;">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        </div>
                        <h3>Valores</h3>
                        <p style="font-weight: 400;">Excelência pedagógica, acolhimento e respeito, integração entre fé e cultura, transformação social pela arte e compromisso com a comunidade.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Proposta Pedagógica -->
        <section class="eme-section">
            <div class="eme-container">
                <h2 class="eme-section-title">Proposta Pedagógica</h2>
                <div class="eme-divider"></div>
                <p class="eme-section-desc">
                    A EME adota uma metodologia que alinha técnica instrumental, formação musical completa (teoria, percepção, leitura) e prática colaborativa (conjuntos, coral, banda).
                </p>

                <div class="eme-grid-2 eme-align-center" style="margin-top: 30px;">
                    <div class="eme-pedagogia-box">
                        <div class="eme-pedagogia-badge">Acompanhamento Didático</div>
                        <h3>Supervisão Pedagógica Contínua</h3>
                        <p style="font-weight: 400;">
                            A coordenação pedagógica da EME atua no acompanhamento próximo dos professores e no desenvolvimento individual de cada estudante. Esse cuidado garante a qualidade didática, a evolução técnica constante e a continuidade do aprendizado ao longo de todos os módulos.
                        </p>
                    </div>
                    <div class="eme-grid-2">
                        <div class="eme-method-card">
                            <span class="eme-method-step">01</span>
                            <h4>Técnica Instrumental</h4>
                            <p style="font-weight: 400;">Domínio do instrumento com ergonomia, afinação e execução apurada.</p>
                        </div>
                        <div class="eme-method-card">
                            <span class="eme-method-step">02</span>
                            <h4>Formação Musical</h4>
                            <p style="font-weight: 400;">Leitura de partitura, solfejo e percepção auditiva estruturada.</p>
                        </div>
                        <div class="eme-method-card">
                            <span class="eme-method-step">03</span>
                            <h4>Prática Colaborativa</h4>
                            <p style="font-weight: 400;">Ensaio em grupos, prática de banda, coral e conjuntos de câmara.</p>
                        </div>
                        <div class="eme-method-card">
                            <span class="eme-method-step">04</span>
                            <h4>Vivência de Palco</h4>
                            <p style="font-weight: 400;">Recitais periódicos e audições públicas abertas à comunidade.</p>
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
                    Salas nomeadas em homenagem a figuras influentes da música e da cultura. Instrumentos em boas condições, salas com boa iluminação, ventilação e acústica, sempre preparadas para o início das aulas.
                </p>

                <div class="eme-grid-3">
                    <div class="eme-facility-card">
                        <div class="eme-room-header">Sala Sebastian Bach</div>
                        <div class="eme-facility-info">
                            <p style="font-weight: 400;">Espaço dedicado ao ensino de piano, teclado, violino e música erudita com acústica equilibrada.</p>
                        </div>
                    </div>
                    <div class="eme-facility-card">
                        <div class="eme-room-header">Sala Hans Rookmaaker</div>
                        <div class="eme-facility-info">
                            <p style="font-weight: 400;">Sala de teoria musical, percepção e encontros de formação estética e cultural.</p>
                        </div>
                    </div>
                    <div class="eme-facility-card">
                        <div class="eme-room-header">Sala Keith Green</div>
                        <div class="eme-facility-info">
                            <p style="font-weight: 400;">Ambiente equipado com violões, guitarras, amplificadores e contrabaixo elétrico.</p>
                        </div>
                    </div>
                    <div class="eme-facility-card">
                        <div class="eme-room-header">Salão Principal (Auditório)</div>
                        <div class="eme-facility-info">
                            <p style="font-weight: 400;">Auditório amplo com sistema de som e iluminação para recitais de grande público e ensaios gerais.</p>
                        </div>
                    </div>
                    <div class="eme-facility-card">
                        <div class="eme-room-header">Sala de Bateria</div>
                        <div class="eme-facility-info">
                            <p style="font-weight: 400;">Equipada com bateria acústica e isolamento acústico reforçado.</p>
                        </div>
                    </div>
                    <div class="eme-facility-card">
                        <div class="eme-room-header">Sala Multiuso (Sede)</div>
                        <div class="eme-facility-info">
                            <p style="font-weight: 400;">Espaço versátil para turmas de musicalização infantil, coral e ensaios de conjunto.</p>
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
                <div class="eme-grid-2">
                    <div class="eme-partner-card">
                        <div class="eme-partner-logo" style="color: var(--terracota); display: flex; justify-content: center; margin-bottom: 12px;">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="9" y1="18" x2="15" y2="18"></line><line x1="10" y1="22" x2="14" y2="22"></line><path d="M15.09 14c.18-.98.65-1.74 1.41-2.5A4.65 4.65 0 0 0 18 8 6 6 0 0 0 6 8c0 1 .23 2.23 1.5 3.5A4.61 4.61 0 0 1 8.91 14"></path></svg>
                        </div>
                        <h3>Plataforma E-missão</h3>
                        <p style="font-weight: 400;">Captação de recursos e viabilização de projetos culturais e sociais de inclusão através da música.</p>
                    </div>
                    <div class="eme-partner-card">
                        <div class="eme-partner-logo" style="color: var(--terracota); display: flex; justify-content: center; margin-bottom: 12px;">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                        </div>
                        <h3>Aplicativo Emusys</h3>
                        <p style="font-weight: 400;">Plataforma de gestão acadêmica, controle de frequência e comunicação direta com alunos e responsáveis.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_quemsomos', 'eme_shortcode_quemsomos');

