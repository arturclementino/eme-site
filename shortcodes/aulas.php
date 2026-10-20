<?php
/**
 * Shortcode Aulas e Cursos: [eme_aulas]
 * EME - Escola de Música Esperança
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('eme_get_aula_svg')) {
    /**
     * Retorna o ícone SVG da categoria da aula.
     *
     * @param string $cat Identificador da categoria ou nome
     * @return string Código SVG
     */
    function eme_get_aula_svg($cat) {
        if (function_exists('eme_get_instrument_svg')) {
            return eme_get_instrument_svg($cat, 22);
        }
        return '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>';
    }
}

function eme_shortcode_aulas($atts) {
    $cursos = [
        // INSTRUMENTOS
        [
            'nome' => 'Violão',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'etaria' => 'A partir de 7 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Postura, dedilhados, batidas rítmicas, leitura de cifras e repertório erudito ou popular.'
        ],
        [
            'nome' => 'Guitarra',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Escalas, palhetada alternada, arpejos, harmonia funcional, solos e timbragem de pedais.'
        ],
        [
            'nome' => 'Piano Erudito e Popular',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'etaria' => 'A partir de 6 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Leitura em partitura (clave de sol e fá), técnica clássica e popular, independência das mãos e repertório.'
        ],
        [
            'nome' => 'Bateria',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'etaria' => 'A partir de 8 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Coordenação motora, rudimentos, independências rítmicas, grooves e dinâmica de palco.'
        ],
        [
            'nome' => 'Violino',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'etaria' => 'A partir de 6 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Golpe de arco, postura ergonômica, afinação fina, leitura e prática orquestral.'
        ],
        [
            'nome' => 'Violoncelo',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'etaria' => 'A partir de 8 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Sonoridade aveludada do cello, leitura em clave de fá e dó, técnica de arco e afinação.'
        ],
        [
            'nome' => 'Contrabaixo Acústico e Elétrico',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Condução rítmica (groove), slap, harmonia aplicada ao contrabaixo acústico e elétrico, e entrosamento com a bateria.'
        ],
        [
            'nome' => 'Flauta Doce e Flauta Transversal',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'etaria' => 'A partir de 8 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Controle de embocadura, apoio diafragmático, articulação, afinação e peças eruditas e populares.'
        ],
        [
            'nome' => 'Saxofone',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Emissão de som, escalas, afinação, frases de jazz, bossa nova, pop e música sacra.'
        ],
        [
            'nome' => 'Canto',
            'cat' => 'instrumentos',
            'cat_label' => 'Canto',
            'etaria' => 'A partir de 12 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Técnica vocal, respiração, afinação, expressão e saúde da voz.'
        ],

        // FORMAÇÃO MUSICAL
        [
            'nome' => 'Teoria Musical',
            'cat' => 'formacao',
            'cat_label' => 'Formação Musical',
            'etaria' => 'Livre (a partir de 8 anos)',
            'nivel' => 'Todos os níveis',
            'desc' => 'Estruturação de escalas, intervalos, tonalidades, armaduras de clave e análise estrutural.'
        ],
        [
            'nome' => 'Percepção Auditiva',
            'cat' => 'formacao',
            'cat_label' => 'Formação Musical',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Todos os níveis',
            'desc' => 'Reconhecimento de intervalos de ouvido, ditado melódico, rítmico e harmônico.'
        ],
        [
            'nome' => 'Leitura de Partitura',
            'cat' => 'formacao',
            'cat_label' => 'Formação Musical',
            'etaria' => 'Livre',
            'nivel' => 'Iniciante ao Avançado',
            'desc' => 'Fluência na leitura rítmica e melódica nas claves de Sol, Fá e Dó.'
        ],
        [
            'nome' => 'Musicalização Infantil',
            'cat' => 'formacao',
            'cat_label' => 'Formação Musical',
            'etaria' => 'A partir de 4 anos',
            'nivel' => 'Iniciante',
            'desc' => 'Vivência lúdica, desenvolvimento auditivo, motor e rítmico para os pequenos.'
        ],

        // PRÁTICA COLETIVA
        [
            'nome' => 'Prática de Conjunto',
            'cat' => 'coletiva',
            'cat_label' => 'Prática Coletiva',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Intermediário / Avançado',
            'desc' => 'Ensaio em grupo combinando diferentes instrumentos em arranjos bem estruturados.'
        ],
        [
            'nome' => 'Coral',
            'cat' => 'coletiva',
            'cat_label' => 'Prática Coletiva',
            'etaria' => 'Crianças, Jovens e Adultos',
            'nivel' => 'Livre',
            'desc' => 'Canto a vozes (soprano, contralto, tenor, baixo), afinação coletiva e recitais corais.'
        ],
        [
            'nome' => 'Prática de Banda',
            'cat' => 'coletiva',
            'cat_label' => 'Prática Coletiva',
            'etaria' => 'A partir de 12 anos',
            'nivel' => 'Intermediário / Avançado',
            'desc' => 'Integração de baixo, bateria, guitarra, teclado e vozes com direção musical, arranjos e apresentações.'
        ],
        [
            'nome' => 'Regência Coral',
            'cat' => 'coletiva',
            'cat_label' => 'Prática Coletiva',
            'etaria' => 'A partir de 15 anos',
            'nivel' => 'Intermediário / Avançado',
            'desc' => 'Técnicas de gesticulação, marcação rítmica, ensaio de coros e liderança musical.'
        ],

        // CURSOS COMPLEMENTARES
        [
            'nome' => 'Harmonia Funcional',
            'cat' => 'complementar',
            'cat_label' => 'Curso Complementar',
            'etaria' => 'A partir de 12 anos',
            'nivel' => 'Intermediário / Avançado',
            'desc' => 'Curso modular (8h-aula em 4 encontros) ministrado pelo Prof. João Camilo. Módulo I teve 17 inscritos no 1º sem. Módulo II previsto para o 2º sem.'
        ]
    ];

    ob_start();
    ?>
    <div class="eme-aulas-wrapper">
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Cursos & Modalidades • Corpo Docente Qualificado</span>
                <h1 class="eme-hero-title">Aulas e Cursos de Música</h1>
                <p class="eme-hero-subtitle">
                    Aulas presenciais individuais ou em grupo, com horários flexíveis e acompanhamento pedagógico contínuo.
                </p>
                <div style="margin-top: 20px;">
                    <a href="<?php echo esc_url(home_url('/contato')); ?>" class="eme-btn-primary">Solicitar aula experimental</a>
                </div>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <!-- Filtros por Categoria -->
                <div class="eme-filter-bar">
                    <button class="eme-filter-btn active" data-filter="all">Todas as Modalidades</button>
                    <button class="eme-filter-btn" data-filter="instrumentos">Instrumentos</button>
                    <button class="eme-filter-btn" data-filter="formacao">Formação Musical</button>
                    <button class="eme-filter-btn" data-filter="coletiva">Prática Coletiva</button>
                    <button class="eme-filter-btn" data-filter="complementar">Cursos Complementares</button>
                </div>

                <!-- Grid de Cursos -->
                <div class="eme-grid-3 eme-aulas-grid">
                    <?php foreach ($cursos as $c): 
                        $wa_msg = urlencode("Olá! Tenho interesse no curso de " . $c['nome'] . " na EME. Como funcionam as matrículas?");
                        $wa_url = "https://wa.me/5531984201358?text=" . $wa_msg;
                    ?>
                        <div class="eme-aula-card" data-category="<?php echo esc_attr($c['cat']); ?>">
                            <div class="eme-aula-header">
                                <span class="eme-aula-icon"><?php echo function_exists('eme_get_instrument_svg') ? eme_get_instrument_svg($c['nome'], 24) : eme_get_aula_svg($c['cat']); ?></span>
                                <span class="eme-aula-cat-badge"><?php echo esc_html($c['cat_label']); ?></span>
                            </div>
                            <h3 class="eme-aula-title"><?php echo esc_html($c['nome']); ?></h3>
                            <p class="eme-aula-desc"><?php echo esc_html($c['desc']); ?></p>

                            <div class="eme-aula-details">
                                <div><span class="eme-detail-label">Faixa etária:</span> <?php echo esc_html($c['etaria']); ?></div>
                                <div><span class="eme-detail-label">Níveis:</span> <?php echo esc_html($c['nivel']); ?></div>
                            </div>

                            <a href="<?php echo esc_url($wa_url); ?>" target="_blank" class="eme-btn-primary eme-btn-block eme-btn-interesse" style="margin-top: 15px; display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span>Tenho interesse neste curso</span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_aulas_grid', 'eme_shortcode_aulas');
