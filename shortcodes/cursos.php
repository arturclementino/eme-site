<?php
/**
 * Shortcode Cursos: [eme_cursos]
 * EME - Escola de Música Esperança (27+ Modalidades & Cursos)
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_cursos($atts) {
    $cursos = [
        [
            'cat' => 'teclas',
            'titulo' => 'Piano Erudito & Popular',
            'icon' => '🎹',
            'desc' => 'Desenvolvimento técnico, leitura de partitura, percepção harmônica e repertório erudito ou popular.',
            'publico' => 'Crianças, Jovens e Adultos (Iniciante ao Avançado)',
            'formato' => 'Aulas Individuais | Presencial'
        ],
        [
            'cat' => 'cordas',
            'titulo' => 'Violão & Guitarra',
            'icon' => '🎸',
            'desc' => 'Técnica de digitação, acordes, ritmos, harmonia funcional e improvisação em diversos estilos musicais.',
            'publico' => 'A partir dos 7 anos',
            'formato' => 'Aulas Individuais ou em Dupla'
        ],
        [
            'cat' => 'voz',
            'titulo' => 'Canto Popular & Lírico',
            'icon' => '🎤',
            'desc' => 'Técnica vocal, apoio diafragmático, afinação, fisiologia vocal, interpretação e expressão cênica.',
            'publico' => 'Jovens e Adultos',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'ritmo',
            'titulo' => 'Bateria & Percussão',
            'icon' => '🥁',
            'desc' => 'Independência dos membros, rudiemntos, grooves, coordenação motora e leitura de partitura rítmica.',
            'publico' => 'A partir dos 8 anos',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'cordas',
            'titulo' => 'Violino, Viola & Violoncelo',
            'icon' => '🎻',
            'desc' => 'Postura, arco, afinação, sonoridade orquestral e repertório de câmara e erudito com excelência.',
            'publico' => 'Todas as idades',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'cordas',
            'titulo' => 'Contrabaixo Elétrico & Acústico',
            'icon' => '🎸',
            'desc' => 'Condução harmônica, slaps, grooves, leitura em clave de fá e integração com a cozinha rítmica.',
            'publico' => 'Jovens e Adultos',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'sopros',
            'titulo' => 'Flauta Transversal & Sopros',
            'icon' => '🎷',
            'desc' => 'Embocadura, controle de coluna de ar, afinação, expressividade e leitura de partitura.',
            'publico' => 'A partir dos 9 anos',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'infantil',
            'titulo' => 'Musicalização Infantil',
            'icon' => '🎨',
            'desc' => 'Desenvolvimento de percepção auditiva, ritmo e sensibilidade através de jogos e vivências musicais.',
            'publico' => 'Crianças de 3 a 6 anos',
            'formato' => 'Turmas Reduzidas'
        ],
        [
            'cat' => 'teoria',
            'titulo' => 'Harmonia Funcional & Teoria',
            'icon' => '🎼',
            'desc' => 'Análise harmônica, rearmonização, modulação, percepção de intervalos e estruturação musical.',
            'publico' => 'Músicos e Estudantes Intermediários/Avançados',
            'formato' => 'Módulos Práticos e Coletivos'
        ]
    ];

    ob_start();
    ?>
    <div class="eme-cursos-wrapper">
        <!-- Hero Section -->
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Cursos & Modalidades EME</span>
                <h1 class="eme-hero-title">Nossa Grade de Aulas</h1>
                <p class="eme-hero-subtitle">
                    Ensino musical de excelência, do iniciante ao avançado, com metodologia humanizada e corpo docente altamente qualificado.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <!-- Filtros por Categoria -->
                <div class="eme-filter-bar">
                    <button class="eme-filter-btn active" data-filter="all">Todas as Modalidades</button>
                    <button class="eme-filter-btn" data-filter="teclas">Teclas & Piano</button>
                    <button class="eme-filter-btn" data-filter="cordas">Cordas</button>
                    <button class="eme-filter-btn" data-filter="voz">Voz & Canto</button>
                    <button class="eme-filter-btn" data-filter="ritmo">Bateria & Percussão</button>
                    <button class="eme-filter-btn" data-filter="sopros">Sopros</button>
                    <button class="eme-filter-btn" data-filter="infantil">Infantil</button>
                    <button class="eme-filter-btn" data-filter="teoria">Teoria & Harmonia</button>
                </div>

                <!-- Grid de Cursos -->
                <div class="eme-grid-3 eme-cursos-grid">
                    <?php foreach ($cursos as $c): 
                        $wa_msg = urlencode("Olá! Gostaria de mais informações sobre as aulas de " . $c['titulo'] . " na EME.");
                        $wa_link = "https://wa.me/5531984201358?text=" . $wa_msg;
                    ?>
                        <div class="eme-aula-card" data-cat="<?php echo esc_attr($c['cat']); ?>" data-category="<?php echo esc_attr($c['cat']); ?>">
                            <div class="eme-aula-header">
                                <span class="eme-aula-icon"><?php echo esc_html($c['icon']); ?></span>
                                <span class="eme-aula-cat-badge"><?php echo esc_html(strtoupper($c['cat'])); ?></span>
                            </div>
                            <h3 class="eme-aula-title"><?php echo esc_html($c['titulo']); ?></h3>
                            <p class="eme-aula-desc"><?php echo esc_html($c['desc']); ?></p>
                            <div class="eme-aula-details">
                                <div><strong>🎯 Público:</strong> <?php echo esc_html($c['publico']); ?></div>
                                <div><strong>📌 Formato:</strong> <?php echo esc_html($c['formato']); ?></div>
                            </div>
                            <div style="margin-top: 18px;">
                                <a href="<?php echo esc_url($wa_link); ?>" target="_blank" class="eme-btn-outline eme-btn-block" style="font-size: 12px; padding: 10px 14px;">
                                    💬 Quero Agendar Aula Experimental
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Banner Agendamento -->
                <div class="eme-recruitment-box" style="margin-top: 60px;">
                    <div class="eme-recruitment-icon">🎶</div>
                    <h3>Não encontrou a sua modalidade ou prefere atendimento personalizado?</h3>
                    <p>Oferecemos mais de 27 opções de aulas práticas e teóricas. Fale com nossa secretaria e descubra o plano ideal para seu objetivo.</p>
                    <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20consultar%20todas%20as%20modalidades%20dispon%C3%ADveis%20na%20EME." target="_blank" class="eme-btn-primary">
                        Falar com a Secretaria no WhatsApp
                    </a>
                </div>
            </div>
        </section>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.eme-filter-btn');
        const cards = document.querySelectorAll('.eme-aula-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');
                cards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-cat') === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_cursos', 'eme_shortcode_cursos');
add_shortcode('eme_aulas', 'eme_shortcode_cursos');
