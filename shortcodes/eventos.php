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
            'sympla_url' => 'https://www.sympla.com.br/evento/i-casa-aberta/3542927'
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
            'sympla_url' => 'https://www.sympla.com.br/evento/2o-modulo-de-harmonia-funcional/3558329'
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
            'sympla_url' => 'https://www.sympla.com.br/evento/workshop-pratico-de-bateria/3551649'
        ],
        [
            'titulo' => 'Recitais do 2º Semestre EME 2026',
            'data' => '10 e 11 de Novembro, 2026',
            'horario' => '19:00 - 21:30',
            'local' => 'Igreja Esperança campus Castelo',
            'categoria' => 'Recital Semestral',
            'publico' => 'Alunos, Familiares e Comunidade (Meta: 450 espectadores)',
            'desc' => 'Os recitais são o principal momento de apresentação dos alunos da EME. Promovemos a integração de turmas solo e conjuntos em uma noite inesquecível.',
            'img' => 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=600&q=80',
            'sympla_url' => 'https://www.sympla.com.br/produtor/escolaeme'
        ],
        [
            'titulo' => 'Workshop: Desvendando o Timbre da Guitarra',
            'data' => 'Programação 2º Semestre 2026',
            'horario' => 'Duração: 2 horas',
            'local' => 'Sede EME',
            'categoria' => 'Workshop Prático',
            'publico' => 'Guitarristas e Músicos de Igrejas/Bandas',
            'desc' => 'Demonstrações práticas de programação de pedaleiras digitais e pedais analógicos para palcos e igrejas.',
            'img' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=600&q=80',
            'sympla_url' => 'https://www.sympla.com.br/produtor/escolaeme'
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
                    Acompanhe nossa agenda de apresentações públicas, oficinas técnicas e cursos. Garanta sua vaga com segurança pelo Sympla!
                </p>
            </div>
        </section>

        <!-- Sympla Integration Banner -->
        <section class="eme-sympla-banner-section" style="background: linear-gradient(135deg, #00d26a 0%, #00994d 100%); color: #fff; padding: 45px 0; margin-bottom: 20px;">
            <div class="eme-container" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
                <div style="max-width: 650px;">
                    <span style="background: rgba(255,255,255,0.2); padding: 5px 14px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">🎟️ Bilheteria Oficial Sympla</span>
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin: 12px 0 8px; color: #ffffff;">Inscrições & Ingressos Abertos no Sympla</h2>
                    <p style="font-size: 1rem; opacity: 0.95; margin: 0; line-height: 1.5;">
                        Todos os ingressos para recitais, vagas para workshops e inscrições em cursos complementares da EME são disponibilizados oficialmente em nossa plataforma Sympla.
                    </p>
                </div>
                <div>
                    <a href="https://www.sympla.com.br/produtor/escolaeme" target="_blank" rel="noopener noreferrer" class="eme-btn-primary" style="background: #ffffff; color: #008040; border: none; font-weight: 700; font-size: 1rem; padding: 14px 28px; box-shadow: 0 4px 15px rgba(0,0,0,0.15);">
                        Ver Perfil Oficial EME no Sympla 🎟️
                    </a>
                </div>
            </div>
        </section>

        <!-- Próximos Eventos -->
        <section class="eme-section">
            <div class="eme-container">
                <h2 class="eme-section-title">Próximos Eventos & Inscrições Abertas</h2>
                <div class="eme-divider"></div>
                <p class="eme-section-desc">Clique para garantir seu ingresso ou realizar sua inscrição diretamente no Sympla.</p>

                <div class="eme-events-list">
                    <?php foreach ($proximos_eventos as $evt): 
                        $sympla_link = isset($evt['sympla_url']) ? $evt['sympla_url'] : 'https://www.sympla.com.br/produtor/escolaeme';
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
                                    <a href="<?php echo esc_url($sympla_link); ?>" target="_blank" rel="noopener noreferrer" class="eme-btn-primary" style="background: #ff5a00; border-color: #ff5a00;">
                                        Inscrever-se no Sympla 🎟️
                                    </a>
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


