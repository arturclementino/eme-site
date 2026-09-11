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
            'titulo' => 'I Casa Aberta EME',
            'data' => 'Edição Especial',
            'horario' => '19:30 - 21:00',
            'local' => 'Sede EME (Área Externa)',
            'categoria' => 'Pocket Show & Convivência',
            'publico' => 'Comunidade (Entrada Aberta)',
            'desc' => 'Pocket show intimista com música ao vivo, gastronomia e apresentação de alunos e professores da EME. Um momento de celebração e integração comunitária.',
            'img' => 'https://images.unsplash.com/photo-1516280440614-37939bbacd81?auto=format&fit=crop&w=600&q=80',
            'sympla_url' => 'https://www.sympla.com.br/evento/i-casa-aberta/3542927',
            'status' => 'disponivel'
        ],
        [
            'titulo' => '2º Módulo de Harmonia Funcional',
            'data' => 'Aulas Especiais',
            'horario' => 'Encontros Semanais',
            'local' => 'Sala Hans Rookmaaker - EME',
            'categoria' => 'Curso Complementar',
            'publico' => 'Instrumentistas Intermediários e Avançados',
            'desc' => 'Ministrado pelo Prof. João Camilo. Aprofundamento em rearmonização, modulação, campo harmônico menor e substitutos harmônicos com prática aplicada.',
            'img' => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?auto=format&fit=crop&w=600&q=80',
            'sympla_url' => 'https://www.sympla.com.br/evento/2o-modulo-de-harmonia-funcional/3558329',
            'status' => 'disponivel'
        ],
        [
            'titulo' => 'Workshop Prático de Bateria',
            'data' => 'Workshop Especial',
            'horario' => 'Duração: 2h30',
            'local' => 'Estúdio EME',
            'categoria' => 'Workshop Técnico',
            'publico' => 'Bateristas, Percussionistas e Estudantes',
            'desc' => 'Ministrado pelo Prof. Rodrigo Leles. Afinação de peles, dinâmicas de estúdio, regulagem de hardware e mecânica da bateria para gravações e palco.',
            'img' => 'https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?auto=format&fit=crop&w=600&q=80',
            'sympla_url' => 'https://www.sympla.com.br/evento/workshop-pratico-de-bateria/3551649',
            'status' => 'disponivel'
        ],
        [
            'titulo' => 'Recitais do 2º Semestre EME',
            'data' => '10 e 11 de Novembro',
            'horario' => '19:00 - 21:30',
            'local' => 'Igreja Esperança campus Castelo',
            'categoria' => 'Recital Semestral',
            'publico' => 'Alunos, Familiares e Comunidade',
            'desc' => 'Grande audição semestral com apresentações solo e turmas de conjunto dos alunos da EME. Ingressos disponíveis no Sympla em breve.',
            'img' => 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=600&q=80',
            'sympla_url' => 'https://www.sympla.com.br/produtor/escolaeme',
            'status' => 'em_breve'
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
                    Acompanhe nossa agenda de apresentações públicas, oficinas técnicas e cursos. Inscrições e ingressos oficiais pelo Sympla.
                </p>
            </div>
        </section>

        <!-- Sympla Integration Banner (Visual Identity EME) -->
        <section class="eme-sympla-banner-section" style="background: linear-gradient(135deg, var(--verde-escuro) 0%, var(--verde) 100%); color: #fff; padding: 40px 0; margin-bottom: 30px; border-bottom: 3px solid var(--terracota);">
            <div class="eme-container" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
                <div style="max-width: 650px;">
                    <span style="background: rgba(193, 123, 74, 0.25); color: var(--ambar-ouro); border: 1px solid rgba(229, 169, 60, 0.4); padding: 5px 14px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">🎟️ Bilheteria Oficial Sympla</span>
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin: 12px 0 8px; color: #ffffff;">Bilheteria & Inscrições EME no Sympla</h2>
                    <p style="font-size: 0.95rem; opacity: 0.92; margin: 0; line-height: 1.6; color: #fdfbf7;">
                        Garanta sua presença em nossos workshops, cursos complementares e recitais através do perfil produtor oficial da EME.
                    </p>
                </div>
                <div>
                    <a href="https://www.sympla.com.br/produtor/escolaeme" target="_blank" rel="noopener noreferrer" class="eme-btn-primary">
                        Perfil Oficial EME no Sympla 🎟️
                    </a>
                </div>
            </div>
        </section>

        <!-- Próximos Eventos -->
        <section class="eme-section">
            <div class="eme-container">
                <h2 class="eme-section-title">Agenda de Eventos</h2>
                <div class="eme-divider"></div>
                <p class="eme-section-desc">Confira os eventos com inscrições abertas ou programação confirmada.</p>

                <div class="eme-events-list">
                    <?php foreach ($proximos_eventos as $evt): 
                        $sympla_link = isset($evt['sympla_url']) ? $evt['sympla_url'] : 'https://www.sympla.com.br/produtor/escolaeme';
                        $is_em_breve = (isset($evt['status']) && $evt['status'] === 'em_breve');
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
                                    <?php if ($is_em_breve): ?>
                                        <a href="<?php echo esc_url($sympla_link); ?>" target="_blank" rel="noopener noreferrer" class="eme-btn-outline" style="opacity: 0.9; cursor: pointer;">
                                            Em Breve no Sympla ⏳
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo esc_url($sympla_link); ?>" target="_blank" rel="noopener noreferrer" class="eme-btn-primary">
                                            Garantir Vaga no Sympla 🎟️
                                        </a>
                                    <?php endif; ?>
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


