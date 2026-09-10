<?php
/**
 * Shortcode Blog / Notícias: [eme_blog]
 * EME - Escola de Música Esperança
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_blog($atts) {
    $posts = [
        [
            'titulo' => 'EME completa primeiro ano com 70,9% de crescimento',
            'cat' => 'noticias',
            'cat_label' => 'Notícias',
            'data' => '05 de Maio, 2026',
            'autor' => 'Direção EME',
            'resumo' => 'Fundada em maio de 2026, a EME saltou de 55 para 94 matrículas ativas em seu primeiro ano de atividades, consolidando sua presença digital e relevância comunitária em Belo Horizonte.',
            'img' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'titulo' => 'Recitais de junho atraem mais de 300 espectadores',
            'cat' => 'eventos',
            'cat_label' => 'Eventos',
            'data' => '12 de Junho, 2026',
            'autor' => 'Coordenação Pedagógica',
            'resumo' => 'Nos dias 10 e 11 de junho, 326 espectadores prestigiaram as audições de alunos de piano, violino, canto e instrumentos populares, marcando o encerramento do primeiro semestre.',
            'img' => 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'titulo' => 'Projeto Casa Aberta: música e comunidade na primeira quinta do mês',
            'cat' => 'comunidade',
            'cat_label' => 'Comunidade',
            'data' => '01 de Julho, 2026',
            'autor' => 'Comunicação NAME',
            'resumo' => 'Conheça a iniciativa de pocket shows gratuitos na sede da EME, promovendo convivência, arte ao vivo e acolhimento para o bairro Padre Eustáquio e Vila São Vicente.',
            'img' => 'https://images.unsplash.com/photo-1516280440614-37939bbacd81?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'titulo' => 'Harmonia Funcional: curso complementar amplia formação dos alunos',
            'cat' => 'dicas',
            'cat_label' => 'Dicas Musicais',
            'data' => '20 de Julho, 2026',
            'autor' => 'Prof. João Camilo',
            'resumo' => 'Com 17 inscritos no Módulo I, o curso aborda campos harmônicos, rearmonização e percepção de arranjo para instrumentistas de todas as modalidades.',
            'img' => 'https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'titulo' => 'Como escolher o primeiro instrumento para seu filho',
            'cat' => 'dicas',
            'cat_label' => 'Dicas Musicais',
            'data' => '10 de Agosto, 2026',
            'autor' => 'Profª Sandra Alves',
            'resumo' => 'Confira as orientações pedagógicas sobre faixa etária, desenvolvimento motor e preferência de timbres na escolha entre piano, violão ou musicalização infantil.',
            'img' => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?auto=format&fit=crop&w=600&q=80'
        ],
        [
            'titulo' => 'Bastidores da Escola: saiba como são preparados os recitais EME',
            'cat' => 'bastidores',
            'cat_label' => 'Bastidores',
            'data' => '18 de Agosto, 2026',
            'autor' => 'Equipe EME',
            'resumo' => 'Entenda como os 25 horas semanais de dedicação pedagógica preparam cada estudante para perder o medo do palco e se expressar com autoconfiança.',
            'img' => 'https://images.unsplash.com/photo-1519892300165-cb5542fb47c7?auto=format&fit=crop&w=600&q=80'
        ]
    ];

    ob_start();
    ?>
    <div class="eme-blog-wrapper">
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Blog & Artigos</span>
                <h1 class="eme-hero-title">Notícias, Dicas & Bastidores</h1>
                <p class="eme-hero-subtitle">
                    Acompanhe as novidades da EME, orientações de estudo musical e artigos institucionais.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <!-- Filtros do Blog -->
                <div class="eme-filter-bar">
                    <button class="eme-filter-btn active" data-blog-filter="all">Todos os Posts</button>
                    <button class="eme-filter-btn" data-blog-filter="noticias">Notícias</button>
                    <button class="eme-filter-btn" data-blog-filter="dicas">Dicas Musicais</button>
                    <button class="eme-filter-btn" data-blog-filter="bastidores">Bastidores</button>
                    <button class="eme-filter-btn" data-blog-filter="eventos">Eventos</button>
                    <button class="eme-filter-btn" data-blog-filter="comunidade">Comunidade</button>
                </div>

                <!-- Grid de Posts -->
                <div class="eme-grid-3 eme-blog-grid">
                    <?php foreach ($posts as $post): ?>
                        <div class="eme-blog-card" data-blog-cat="<?php echo esc_attr($post['cat']); ?>">
                            <div class="eme-blog-img-box">
                                <img src="<?php echo esc_url($post['url'] ?? $post['img']); ?>" alt="<?php echo esc_attr($post['titulo']); ?>" />
                                <span class="eme-blog-badge"><?php echo esc_html($post['cat_label']); ?></span>
                            </div>
                            <div class="eme-blog-content">
                                <div class="eme-blog-meta">
                                    <span>📅 <?php echo esc_html($post['data']); ?></span>
                                    <span>✍️ <?php echo esc_html($post['autor']); ?></span>
                                </div>
                                <h3 class="eme-blog-title"><?php echo esc_html($post['titulo']); ?></h3>
                                <p class="eme-blog-excerpt"><?php echo esc_html($post['resumo']); ?></p>
                                <a href="#contato" class="eme-blog-link">Ler artigo completo &rarr;</a>
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
add_shortcode('eme_blog', 'eme_shortcode_blog');
