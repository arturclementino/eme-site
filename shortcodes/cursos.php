<?php
/**
 * Shortcode Cursos: [eme_cursos]
 * EME - Escola de MÃºsica EsperanÃ§a (27+ Modalidades & Cursos)
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_cursos($atts) {
    $cursos = [
        [
            'cat' => 'teclas',
            'titulo' => 'Piano Erudito & Popular',
            'icon' => 'ðŸŽ¹',
            'desc' => 'Desenvolvimento tÃ©cnico, leitura de partitura, percepÃ§Ã£o harmÃ´nica e repertÃ³rio erudito ou popular.',
            'publico' => 'CrianÃ§as, Jovens e Adultos (Iniciante ao AvanÃ§ado)',
            'formato' => 'Aulas Individuais | Presencial'
        ],
        [
            'cat' => 'cordas',
            'titulo' => 'ViolÃ£o & Guitarra',
            'icon' => 'ðŸŽ¸',
            'desc' => 'TÃ©cnica de digitaÃ§Ã£o, acordes, ritmos, harmonia funcional e improvisaÃ§Ã£o em diversos estilos musicais.',
            'publico' => 'A partir dos 7 anos',
            'formato' => 'Aulas Individuais ou em Dupla'
        ],
        [
            'cat' => 'voz',
            'titulo' => 'Canto Popular & LÃ­rico',
            'icon' => 'ðŸŽ¤',
            'desc' => 'TÃ©cnica vocal, apoio diafragmÃ¡tico, afinaÃ§Ã£o, fisiologia vocal, interpretaÃ§Ã£o e expressÃ£o cÃªnica.',
            'publico' => 'Jovens e Adultos',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'ritmo',
            'titulo' => 'Bateria & PercussÃ£o',
            'icon' => 'ðŸ¥',
            'desc' => 'IndependÃªncia dos membros, rudiemntos, grooves, coordenaÃ§Ã£o motora e leitura de partitura rÃ­tmica.',
            'publico' => 'A partir dos 8 anos',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'cordas',
            'titulo' => 'Violino, Viola & Violoncelo',
            'icon' => 'ðŸŽ»',
            'desc' => 'Postura, arco, afinaÃ§Ã£o, sonoridade orquestral e repertÃ³rio de cÃ¢mara e erudito com excelÃªncia.',
            'publico' => 'Todas as idades',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'cordas',
            'titulo' => 'Contrabaixo ElÃ©trico & AcÃºstico',
            'icon' => 'ðŸŽ¸',
            'desc' => 'ConduÃ§Ã£o harmÃ´nica, slaps, grooves, leitura em clave de fÃ¡ e integraÃ§Ã£o com a cozinha rÃ­tmica.',
            'publico' => 'Jovens e Adultos',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'sopros',
            'titulo' => 'Flauta Transversal & Sopros',
            'icon' => 'ðŸŽ·',
            'desc' => 'Embocadura, controle de coluna de ar, afinaÃ§Ã£o, expressividade e leitura de partitura.',
            'publico' => 'A partir dos 9 anos',
            'formato' => 'Aulas Individuais'
        ],
        [
            'cat' => 'infantil',
            'titulo' => 'MusicalizaÃ§Ã£o Infantil',
            'icon' => 'ðŸŽ¨',
            'desc' => 'Desenvolvimento de percepÃ§Ã£o auditiva, ritmo e sensibilidade atravÃ©s de jogos e vivÃªncias musicais.',
            'publico' => 'CrianÃ§as de 3 a 6 anos',
            'formato' => 'Turmas Reduzidas'
        ],
        [
            'cat' => 'teoria',
            'titulo' => 'Harmonia Funcional & Teoria',
            'icon' => 'ðŸŽ¼',
            'desc' => 'AnÃ¡lise harmÃ´nica, rearmonizaÃ§Ã£o, modulaÃ§Ã£o, percepÃ§Ã£o de intervalos e estruturaÃ§Ã£o musical.',
            'publico' => 'MÃºsicos e Estudantes IntermediÃ¡rios/AvanÃ§ados',
            'formato' => 'MÃ³dulos PrÃ¡ticos e Coletivos'
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
                    Ensino musical de excelÃªncia, do iniciante ao avanÃ§ado, com metodologia humanizada e corpo docente altamente qualificado.
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
                    <button class="eme-filter-btn" data-filter="ritmo">Bateria & PercussÃ£o</button>
                    <button class="eme-filter-btn" data-filter="sopros">Sopros</button>
                    <button class="eme-filter-btn" data-filter="infantil">Infantil</button>
                    <button class="eme-filter-btn" data-filter="teoria">Teoria & Harmonia</button>
                </div>

                <!-- Grid de Cursos -->
                <div class="eme-grid-3 eme-cursos-grid">
                    <?php foreach ($cursos as $c): 
                        $wa_msg = urlencode("OlÃ¡! Gostaria de mais informaÃ§Ãµes sobre as aulas de " . $c['titulo'] . " na EME.");
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
                                <div>ðŸŽ¯ PÃºblico: <?php echo esc_html($c['publico']); ?></div>
                                <div>ðŸ“Œ Formato: <?php echo esc_html($c['formato']); ?></div>
                            </div>
                            <div style="margin-top: 18px;">
                                <a href="<?php echo esc_url($wa_link); ?>" target="_blank" class="eme-btn-outline eme-btn-block" style="font-size: 12px; padding: 10px 14px;">
                                    ðŸ’¬ Quero Agendar Aula Experimental
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Banner Agendamento -->
                <div class="eme-recruitment-box" style="margin-top: 60px;">
                    <div class="eme-recruitment-icon">ðŸŽ¶</div>
                    <h3>NÃ£o encontrou a sua modalidade ou prefere atendimento personalizado?</h3>
                    <p>Oferecemos mais de 27 opÃ§Ãµes de aulas prÃ¡ticas e teÃ³ricas. Fale com nossa secretaria e descubra o plano ideal para seu objetivo.</p>
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

