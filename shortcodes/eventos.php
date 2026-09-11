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
            'data' => '1ª Quinta-feira do Mês',
            'horario' => '19:30 - 21:00',
            'local' => 'Sede EME (Rua Bonaparte, 86 — Padre Eustáquio, BH)',
            'categoria' => 'Pocket Show & Convivência',
            'publico' => 'Comunidade, Alunos e Famílias (Entrada Franca)',
            'desc' => 'Pocket show intimista com música ao vivo, gastronomia e apresentação de alunos e professores da EME na área externa da escola.',
            'img' => 'https://images.unsplash.com/photo-1516280440614-37939bbacd81?auto=format&fit=crop&w=600&q=75',
            'sympla_url' => 'https://www.sympla.com.br/produtor/escolaeme',
            'status' => 'disponivel'
        ],
        [
            'titulo' => 'Curso Complementar: Harmonia Funcional',
            'data' => 'Encontros Semanais (Inscrições Abertas)',
            'horario' => '19:00 - 20:30',
            'local' => 'Sede EME (Rua Bonaparte, 86 — Padre Eustáquio, BH)',
            'categoria' => 'Curso Complementar',
            'publico' => 'Instrumentistas Intermediários e Avançados',
            'desc' => 'Ministrado pela coordenação pedagógica da EME. Aprofundamento em rearmonização, modulação, campo harmônico menor e arranjos práticos.',
            'img' => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?auto=format&fit=crop&w=600&q=75',
            'sympla_url' => 'https://www.sympla.com.br/produtor/escolaeme',
            'status' => 'disponivel'
        ],
        [
            'titulo' => 'Workshop Prático de Bateria & Percussão',
            'data' => 'Edição Semestral',
            'horario' => '09:00 - 11:30 (Duração: 2h30)',
            'local' => 'Estúdio EME (Rua Bonaparte, 86 — Padre Eustáquio, BH)',
            'categoria' => 'Workshop Técnico',
            'publico' => 'Bateristas, Percussionistas e Estudantes',
            'desc' => 'Ministrado pelo Prof. Rodrigo Leles. Afinação de peles, dinâmicas de estúdio, regulagem de hardware e prática de gravação.',
            'img' => 'https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?auto=format&fit=crop&w=600&q=75',
            'sympla_url' => 'https://www.sympla.com.br/produtor/escolaeme',
            'status' => 'disponivel'
        ],
        [
            'titulo' => 'Recitais de 2º Semestre EME',
            'data' => '10 e 11 de Novembro',
            'horario' => '19:00 - 21:30',
            'local' => 'Auditório Principal — Igreja Esperança (Belo Horizonte / MG)',
            'categoria' => 'Recital Semestral',
            'publico' => 'Alunos, Familiares e Comunidade',
            'desc' => 'Grande audição de encerramento semestral reunindo apresentações solo e turmas de prática de conjunto de todas as 27 modalidades da EME.',
            'img' => 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=600&q=75',
            'sympla_url' => 'https://www.sympla.com.br/produtor/escolaeme',
            'status' => 'em_breve'
        ]
    ];

    $eventos_anteriores = [
        [
            'titulo' => 'Recitais do 1º Semestre',
            'data' => 'Junho de 2026',
            'badge' => 'Apresentação Semestral',
            'desc' => 'Primeira grande audição do ano reunindo alunos em apresentações solo e conjuntos no auditório da Igreja Esperança.'
        ],
        [
            'titulo' => 'Harmonia Funcional — Módulo I',
            'data' => '1º Semestre de 2026',
            'badge' => 'Curso Complementar',
            'desc' => 'Lançamento da linha de cursos complementares da EME ministrado pelo Prof. João Camilo.'
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
        <section class="eme-sympla-banner-section" style="background: linear-gradient(135deg, #0F2E23 0%, #1B4332 100%); color: #FFFFFF; padding: 40px 0; margin-bottom: 30px; border-bottom: 3px solid #C17B4A;">
            <div class="eme-container" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
                <div style="max-width: 650px;">
                    <span style="background: rgba(193, 123, 74, 0.25); color: #E5A93C; border: 1px solid rgba(229, 169, 60, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block;">Bilheteria Oficial Sympla</span>
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin: 14px 0 8px; color: #FFFFFF !important;">Bilheteria & Inscrições EME no Sympla</h2>
                    <p style="font-size: 0.95rem; margin: 0; line-height: 1.6; color: #FDFBF7 !important; opacity: 0.95;">
                        Garanta sua presença em nossos workshops, cursos complementares e recitais através do perfil produtor oficial da EME.
                    </p>
                </div>
                <div>
                    <a href="https://www.sympla.com.br/produtor/escolaeme" target="_blank" rel="noopener noreferrer" class="eme-btn-primary">
                        Perfil Oficial EME no Sympla
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
                                <img src="<?php echo esc_url($evt['img']); ?>" alt="<?php echo esc_attr($evt['titulo']); ?>" decoding="async" loading="lazy" />
                                <span class="eme-event-tag"><?php echo esc_html($evt['categoria']); ?></span>
                            </div>
                            <div class="eme-event-content">
                                <div class="eme-event-meta" style="color: #1B4332; font-weight: 600;">
                                    <span>Data: <?php echo esc_html($evt['data']); ?></span>
                                    <span>Horário: <?php echo esc_html($evt['horario']); ?></span>
                                    <span>Local: <?php echo esc_html($evt['local']); ?></span>
                                </div>
                                <h3 style="color: #0F2E23 !important; font-size: 22px; margin: 12px 0 8px;"><?php echo esc_html($evt['titulo']); ?></h3>
                                <p style="color: #444444 !important; font-size: 15px; line-height: 1.6; margin-bottom: 16px;"><?php echo esc_html($evt['desc']); ?></p>
                                <div class="eme-event-footer">
                                    <span class="eme-event-target" style="color: #6B7280; font-size: 13px; font-weight: 600;">Público: <?php echo esc_html($evt['publico']); ?></span>
                                    <?php if ($is_em_breve): ?>
                                        <a href="<?php echo esc_url($sympla_link); ?>" target="_blank" rel="noopener noreferrer" class="eme-btn-outline">
                                            Em Breve no Sympla
                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo esc_url($sympla_link); ?>" target="_blank" rel="noopener noreferrer" class="eme-btn-primary">
                                            Garantir Vaga no Sympla
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
                        <div class="eme-prev-event-card" style="padding: 28px; background: #FFFFFF; border-radius: 14px; border: 1px solid #E2DACD;">
                            <span class="eme-prev-date" style="color: #C17B4A; font-weight: 700; font-size: 13px; display: block; margin-bottom: 6px;"><?php echo esc_html($prev['data']); ?></span>
                            <h4 style="color: #0F2E23; font-size: 18px; margin: 0 0 10px;"><?php echo esc_html($prev['titulo']); ?></h4>
                            <p style="color: #555555; font-size: 14px; margin: 0 0 12px; line-height: 1.6;"><?php echo esc_html($prev['desc']); ?></p>
                            <span class="eme-prev-badge" style="background: rgba(45,106,79,0.1); color: #2D6A4F; font-weight: 700; font-size: 12px; padding: 4px 12px; border-radius: 20px; display: inline-block;"><?php echo esc_html($prev['badge']); ?></span>
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


