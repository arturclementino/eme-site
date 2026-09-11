<?php
/**
 * Shortcode Galeria: [eme_galeria]
 * EME - Escola de Música Esperança
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_galeria($atts) {
    $midias = [
        [
            'titulo' => 'Sala Sebastian Bach',
            'categoria' => 'espaco',
            'cat_label' => 'Espaço Físico',
            'tipo' => 'foto',
            'url' => 'https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?auto=format&fit=crop&w=800&q=80',
            'legenda' => 'Salas climatizadas com isolamento acústico e iluminação adequada para aulas e práticas.'
        ],
        [
            'titulo' => 'Sala Keith Green',
            'categoria' => 'espaco',
            'cat_label' => 'Espaço Físico',
            'tipo' => 'foto',
            'url' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80',
            'legenda' => 'Equipada com estrutura completa e recursos de áudio para o estudo diário.'
        ],
        [
            'titulo' => 'Sala Didática Multiuso',
            'categoria' => 'espaco',
            'cat_label' => 'Espaço Físico',
            'tipo' => 'foto',
            'url' => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?auto=format&fit=crop&w=800&q=80',
            'legenda' => 'Estrutura preparada para aulas práticas, percepção teórica e conjuntos.'
        ],
        [
            'titulo' => 'Aula Prática Individual',
            'categoria' => 'aulas',
            'cat_label' => 'Aulas em Andamento',
            'tipo' => 'foto',
            'url' => 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=800&q=80',
            'legenda' => 'Desenvolvimento da postura, técnica e afinação com orientação pedagógica individualizada.'
        ],
        [
            'titulo' => 'Ensaio de Prática de Conjunto',
            'categoria' => 'aulas',
            'cat_label' => 'Aulas em Andamento',
            'tipo' => 'foto',
            'url' => 'https://images.unsplash.com/photo-1519892300165-cb5542fb47c7?auto=format&fit=crop&w=800&q=80',
            'legenda' => 'Alunos aprendendo a tocar em grupo com ritmo, dinamismo e escuta coletiva.'
        ],
        [
            'titulo' => 'Recitais EME',
            'categoria' => 'recitais',
            'cat_label' => 'Recitais & Audiações',
            'tipo' => 'foto',
            'url' => 'https://images.unsplash.com/photo-1516280440614-37939bbacd81?auto=format&fit=crop&w=800&q=80',
            'legenda' => 'Momento marcante reunindo alunos, famílias e comunidade em apresentações públicas.'
        ],
        [
            'titulo' => 'Projeto Casa Aberta',
            'categoria' => 'casa-aberta',
            'cat_label' => 'Projeto Casa Aberta',
            'tipo' => 'foto',
            'url' => 'https://images.unsplash.com/photo-1465847899084-d164df4dedc6?auto=format&fit=crop&w=800&q=80',
            'legenda' => 'Música ao vivo e confraternização comunitária na área externa da sede da EME.'
        ],
        [
            'titulo' => 'Vídeo Institucional: Conheça o Propósito EME',
            'categoria' => 'videos',
            'cat_label' => 'Vídeo Institucional',
            'tipo' => 'video',
            'url' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80',
            'video_id' => 'dQw4w9WgXcQ',
            'legenda' => 'Vídeo institucional apresentando a proposta do NAME e a rotina da escola.'
        ]
    ];

    ob_start();
    ?>
    <div class="eme-galeria-wrapper">
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Galeria Institucional</span>
                <h1 class="eme-hero-title">Fotos, Vídeos & Estrutura EME</h1>
                <p class="eme-hero-subtitle">
                    Confira registros dos nossos espaços, audições, aulas e vivência comunitária.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <!-- Filtros de Galeria -->
                <div class="eme-filter-bar">
                    <button class="eme-filter-btn active" data-gallery-filter="all">Todos os Registros</button>
                    <button class="eme-filter-btn" data-gallery-filter="espaco">Espaço Físico</button>
                    <button class="eme-filter-btn" data-gallery-filter="aulas">Aulas em Andamento</button>
                    <button class="eme-filter-btn" data-gallery-filter="recitais">Recitais</button>
                    <button class="eme-filter-btn" data-gallery-filter="casa-aberta">Projeto Casa Aberta</button>
                    <button class="eme-filter-btn" data-gallery-filter="videos">Vídeos</button>
                </div>

                <!-- Grid de Galeria -->
                <div class="eme-grid-3 eme-gallery-grid">
                    <?php foreach ($midias as $item): ?>
                        <div class="eme-gallery-card" data-gallery-cat="<?php echo esc_attr($item['categoria']); ?>">
                            <div class="eme-gallery-img-box">
                                <img src="<?php echo esc_url($item['url']); ?>" alt="<?php echo esc_attr($item['titulo']); ?>" />
                                <span class="eme-gallery-badge"><?php echo esc_html($item['cat_label']); ?></span>
                                <?php if ($item['tipo'] === 'video'): ?>
                                    <div class="eme-video-play-btn">▶</div>
                                <?php endif; ?>
                            </div>
                            <div class="eme-gallery-content">
                                <h4><?php echo esc_html($item['titulo']); ?></h4>
                                <p><?php echo esc_html($item['legenda']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_galeria', 'eme_shortcode_galeria');

