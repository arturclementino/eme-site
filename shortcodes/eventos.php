<?php
/**
 * Shortcode Eventos: [eme_eventos]
 * EME - Escola de Música Esperança
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_eventos($atts) {
    $proximos_eventos = [
        [
            'titulo' => 'Recitais do 2º Semestre EME 2026',
            'data' => '10 e 11 de Novembro, 2026',
            'horario' => '19:00 - 21:30',
            'local' => 'Igreja Esperança campus Castelo',
            'categoria' => 'Recital Semestral',
            'publico' => 'Alunos, Familiares e Comunidade (Meta: 450 espectadores)',
            'desc' => 'Os recitais são o principal momento de apresentação dos alunos da EME. No primeiro semestre, os recitais de 10 e 11 de junho atraíram 326 espectadores, promovendo integração entre alunos, familiares e comunidade.',
            'img' => 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'titulo' => 'Projeto Casa Aberta',
            'data' => 'Última quinta-feira de cada mês',
            'horario' => '19:30 - 21:00',
            'local' => 'Sede da EME (área externa)',
            'categoria' => 'Pocket Show Gratuito',
            'publico' => 'Comunidade (Capacidade: ~70 pessoas)',
            'desc' => 'Pocket show intimista com música ao vivo, interação entre artista e público, criando vínculo entre a escola e seu entorno. Opções de alimentação disponíveis no local (cachorro-quente, pipoca, suco, refrigerante).',
            'img' => 'https://images.unsplash.com/photo-1516280440614-37939bbacd81?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'titulo' => 'Workshop: Desvendando o Timbre da Guitarra',
            'data' => 'A definir (2º Semestre 2026)',
            'horario' => 'Duração: 2 horas',
            'local' => 'Sede EME',
            'categoria' => 'Workshop Prático',
            'publico' => 'Guitarristas e músicos de igrejas/bandas',
            'desc' => 'Demonstrações práticas de programação de pedaleiras e pedais analógicos. Voltado principalmente para guitarristas de igrejas e estudantes de instrumentos harmônicos.',
            'img' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'titulo' => 'Workshop: Prática de Banda',
            'data' => 'A definir (2º Semestre 2026)',
            'horario' => 'Duração: 2 horas',
            'local' => 'Igreja Esperança',
            'categoria' => 'Workshop Coletivo',
            'publico' => 'Integrantes de bandas e equipes de louvor',
            'desc' => 'Dinâmica, coletividade, divisão de funções, direção musical, comunicação não verbal entre músicos e condução eficiente de ensaios.',
            'img' => 'https://images.unsplash.com/photo-1519892300165-cb5542fb47c7?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'titulo' => 'Workshop: Afinação de Bateria',
            'data' => 'A definir (2º Semestre 2026)',
            'horario' => 'Duração: 2 horas',
            'local' => 'Estúdio EME',
            'categoria' => 'Workshop Técnico',
            'publico' => 'Bateristas e estudantes de percussão',
            'desc' => 'Ministrante: Professor Rodrigo Leles. Técnicas de afinação, escolha de peles para diferentes estilos, regulagem de hardware e cuidados de manutenção do instrumento.',
            'img' => 'https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'titulo' => 'Curso Complementar: Harmonia Funcional — Módulo II',
            'data' => 'Previsto para 2º Semestre 2026',
            'horario' => '8h-aula em 4 encontros',
            'local' => 'Sala Hans Rookmaaker - EME',
            'categoria' => 'Curso Complementar',
            'publico' => 'Instrumentistas de nível intermediário/avançado',
            'desc' => 'Ministrante: Professor João Camilo. Continuação do Módulo I (que teve 17 inscritos no primeiro semestre), aprofundando rearmonização, modulação e substitutos harmônicos.',
            'img' => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?auto=format&fit=crop&w=600&q=80'
        ]
    ];

    $eventos_anteriores = [
        [
            'titulo' => 'Recitais de 10 e 11 de Junho de 2026',
            'data' => '10 e 11 de Junho, 2026',
            'fotos' => '326 ingressos retirados',
            'desc' => 'Primeira grande audição do ano reunindo mais de 60 alunos em apresentações solo e conjuntos no auditório da Igreja Esperança.'
        ],
        [
            'titulo' => 'Harmonia Funcional — Módulo I',
            'data' => '1º Semestre, 2026',
            'fotos' => '17 alunos inscritos',
            'desc' => 'Lançamento bem-sucedido da linha de cursos complementares da EME ministrado pelo Prof. João Camilo.'
        ]
    ];

    ob_start();
    ?>
    <div class="eme-eventos-wrapper">
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Programação Cultural & Workshops</span>
                <h1 class="eme-hero-title">Eventos e Recitais EME</h1>
                <p class="eme-hero-subtitle">
                    Acompanhe nossa agenda de apresentações públicas, oficinas técnicas e projetos comunitários abertos.
                </p>
            </div>
        </section>

        <!-- Próximos Eventos -->
        <section class="eme-section">
            <div class="eme-container">
                <h2 class="eme-section-title">Próximos Eventos</h2>
                <div class="eme-divider"></div>
                <p class="eme-section-desc">Garanta sua participação ou agende sua presença em nossas apresentações e workshops.</p>

                <div class="eme-events-list">
                    <?php foreach ($proximos_eventos as $evt): 
                        $wa_msg = urlencode("Olá! Tenho interesse em participar do evento: " . $evt['titulo'] . " na EME.");
                        $wa_url = "https://wa.me/5531984201358?text=" . $wa_msg;
                    ?>
                        <div class="eme-event-card">
                            <div class="eme-event-img">
                                <img src="<?php echo esc_url($evt['img']); ?>" alt="<?php echo esc_attr($evt['titulo']); ?>" />
                                <span class="eme-event-tag"><?php echo esc_html($evt['categoria']); ?></span>
                            </div>
                            <div class="eme-event-content">
                                <div class="eme-event-meta">
                                    <span>📅 <?php echo esc_html($evt['data']); ?></span>
                                    <span>⏰ <?php echo esc_html($evt['horario']); ?></span>
                                    <span>📍 <?php echo esc_html($evt['local']); ?></span>
                                </div>
                                <h3><?php echo esc_html($evt['titulo']); ?></h3>
                                <p><?php echo esc_html($evt['desc']); ?></p>
                                <div class="eme-event-footer">
                                    <span class="eme-event-target">👥 Público: <?php echo esc_html($evt['publico']); ?></span>
                                    <a href="<?php echo esc_url($wa_url); ?>" target="_blank" class="eme-btn-primary">Quero participar</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Eventos Anteriores -->
        <section class="eme-section eme-bg-light">
            <div class="eme-container">
                <h2 class="eme-section-title">Eventos Anteriores</h2>
                <div class="eme-divider"></div>
                <div class="eme-grid-2">
                    <?php foreach ($eventos_anteriores as $prev): ?>
                        <div class="eme-prev-event-card">
                            <div class="eme-prev-event-icon">📸</div>
                            <span class="eme-prev-date"><?php echo esc_html($prev['data']); ?></span>
                            <h4><?php echo esc_html($prev['titulo']); ?></h4>
                            <p><?php echo esc_html($prev['desc']); ?></p>
                            <span class="eme-prev-badge"><?php echo esc_html($prev['fotos']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_eventos', 'eme_shortcode_eventos');

