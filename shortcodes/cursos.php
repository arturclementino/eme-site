<?php
/**
 * Shortcode Cursos: [eme_cursos]
 * EME - Escola de Música Esperança
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('eme_get_category_svg')) {
    /**
     * Retorna o ícone SVG da categoria do curso.
     *
     * @param string $cat Identificador da categoria
     * @return string Código SVG
     */
    function eme_get_category_svg($cat) {
        if (function_exists('eme_get_instrument_svg')) {
            return eme_get_instrument_svg($cat, 22);
        }
        return '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>';
    }
}

function eme_shortcode_cursos($atts) {
    $cursos = [
        [
            'cat' => 'teclas',
            'titulo' => 'Piano Erudito e Popular',
            'desc' => 'Desenvolvimento técnico, leitura de partitura, percepção harmônica e repertório clássico e popular.',
            'publico' => 'Crianças, Jovens e Adultos (Iniciante ao Avançado)',
            'formato' => 'Aulas Individuais | Presencial'
        ],
        [
            'cat' => 'cordas',
            'titulo' => 'Violão e Guitarra',
            'desc' => 'Técnica de digitação, acordes, ritmos, harmonia e repertório prático.',
            'publico' => 'A partir dos 7 anos',
            'formato' => 'Aulas Individuais ou em Dupla'
        ],
        [
            'cat' => 'voz',
            'titulo' => 'Canto',
            'desc' => 'Técnica vocal, respiração, afinação, repertório e interpretação musical.',
            'publico' => 'Jovens e Adultos',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'ritmo',
            'titulo' => 'Bateria',
            'desc' => 'Independência motora, ritmos, grooves, coordenação e prática musical.',
            'publico' => 'A partir dos 8 anos',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'cordas',
            'titulo' => 'Violino e Violoncelo',
            'desc' => 'Postura, arco, afinação, sonoridade e repertório prático.',
            'publico' => 'Todas as idades',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'cordas',
            'titulo' => 'Contrabaixo Acústico e Elétrico',
            'desc' => 'Condução harmônica, grooves, leitura, slap e entrosamento rítmico no baixo acústico e elétrico.',
            'publico' => 'Jovens e Adultos',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'sopros',
            'titulo' => 'Flauta e Saxofone',
            'desc' => 'Embocadura, coluna de ar, afinação, leitura e repertório.',
            'publico' => 'A partir dos 9 anos',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'infantil',
            'titulo' => 'Musicalização Infantil',
            'desc' => 'Desenvolvimento de percepção auditiva, ritmo e sensibilidade através de vivências musicais.',
            'publico' => 'Crianças de 3 a 6 anos',
            'formato' => 'Turmas Reduzidas'
        ],
        [
            'cat' => 'teoria',
            'titulo' => 'Teoria e Harmonia',
            'desc' => 'Estruturação de escalas, intervalos, tonalidades e percepção musical.',
            'publico' => 'Músicos e Estudantes Intermediários/Avançados',
            'formato' => 'Módulos Práticos e Coletivos'
        ],
        [
            'cat' => 'coletiva',
            'titulo' => 'Prática de Banda',
            'desc' => 'Integração de baixo, bateria, guitarra, teclado e vozes, arranjos e dinâmica de palco.',
            'publico' => 'A partir dos 12 anos (Intermediário e Avançado)',
            'formato' => 'Aulas Coletivas / Ensaio Orientado'
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
                    <button class="eme-filter-btn" data-filter="teclas">Piano Erudito & Popular</button>
                    <button class="eme-filter-btn" data-filter="cordas">Cordas & Baixo</button>
                    <button class="eme-filter-btn" data-filter="voz">Canto</button>
                    <button class="eme-filter-btn" data-filter="ritmo">Bateria</button>
                    <button class="eme-filter-btn" data-filter="sopros">Sopros</button>
                    <button class="eme-filter-btn" data-filter="coletiva">Prática de Banda</button>
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
                                <span class="eme-aula-icon"><?php echo function_exists('eme_get_instrument_svg') ? eme_get_instrument_svg($c['titulo'], 28) : eme_get_category_svg($c['cat']); ?></span>
                                <span class="eme-aula-cat-badge"><?php echo esc_html(strtoupper($c['cat'])); ?></span>
                            </div>
                            <h3 class="eme-aula-title"><?php echo esc_html($c['titulo']); ?></h3>
                            <p class="eme-aula-desc"><?php echo esc_html($c['desc']); ?></p>
                            <div class="eme-aula-details">
                                <div><span class="eme-detail-label">Público:</span> <?php echo esc_html($c['publico']); ?></div>
                                <div><span class="eme-detail-label">Formato:</span> <?php echo esc_html($c['formato']); ?></div>
                            </div>
                            <div style="margin-top: 18px;">
                                <a href="<?php echo esc_url($wa_link); ?>" target="_blank" class="eme-btn-outline eme-btn-block" style="font-size: 13px; padding: 11px 16px; display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    <span>Agendar Aula Experimental</span>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Banner Agendamento -->
                <div class="eme-recruitment-box" style="margin-top: 60px;">
                    <div class="eme-recruitment-icon" style="color: var(--terracota); display: flex; justify-content: center; margin-bottom: 12px;">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
                    </div>
                    <h3>Não encontrou a sua modalidade ou prefere atendimento personalizado?</h3>
                    <p>Oferecemos diversas opções de aulas práticas e teóricas. Fale com nossa secretaria e descubra o plano ideal para seu objetivo.</p>
                    <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20consultar%20todas%20as%20modalidades%20dispon%C3%ADveis%20na%20EME." target="_blank" class="eme-btn-primary" style="display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>Falar com a Secretaria no WhatsApp</span>
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
