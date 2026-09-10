<?php
/**
 * Shortcode Aulas e Cursos: [eme_aulas]
 * EME - Escola de Música Esperança (27 Modalidades Musicais)
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_aulas($atts) {
    $cursos = [
        // INSTRUMENTOS
        [
            'nome' => 'Violão',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => '🎸',
            'etaria' => 'A partir de 7 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Postura, dedilhados, batidas rítmicas, leitura de cifras e repertório erudito ou popular.'
        ],
        [
            'nome' => 'Guitarra',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => '🎸',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Escalas, palhetada alternada, arpejos, harmonia funcional, solos e timbragem de pedais.'
        ],
        [
            'nome' => 'Piano / Teclado',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => '🎹',
            'etaria' => 'A partir de 6 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Leitura em partitura (clave de sol e fá), independência das mãos, técnica clássica e popular.'
        ],
        [
            'nome' => 'Bateria',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => '🥁',
            'etaria' => 'A partir de 8 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Coordenação motora, rudimentos, independências rítmicas, grooves e dinâmica de palco.'
        ],
        [
            'nome' => 'Violino',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => '🎻',
            'etaria' => 'A partir de 6 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Golpe de arco, postura ergonômica, afinação fina, leitura e prática orquestral.'
        ],
        [
            'nome' => 'Violoncelo',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => '🎻',
            'etaria' => 'A partir de 8 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Sonoridade aveludada do cello, leitura em clave de fá e dó, técnica de arco e afinação.'
        ],
        [
            'nome' => 'Contrabaixo',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => '🎸',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Condução rítmica (groove), slap, harmonia aplicada ao baixo e entrosamento com a bateria.'
        ],
        [
            'nome' => 'Flauta Doce e Flauta Transversal',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => '🎺',
            'etaria' => 'A partir de 8 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Controle de embocadura, apoio diafragmático, articulação, afinação e peças eruditas e populares.'
        ],
        [
            'nome' => 'Saxofone',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => '🎷',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Emissão de som, escalas, afinação, frases de jazz, bossa nova, pop e música sacra.'
        ],
        [
            'nome' => 'Canto',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento / Voz',
            'icone' => '🎤',
            'etaria' => 'A partir de 12 anos',
            'nivel' => 'Iniciante, Intermediário e Avançado',
            'desc' => 'Fisiologia vocal, apoio respiratório, afinação, ressonância e saúde da voz.'
        ],

        // FORMAÇÃO MUSICAL
        [
            'nome' => 'Teoria Musical',
            'cat' => 'formacao',
            'cat_label' => 'Formação Musical',
            'icone' => '🎼',
            'etaria' => 'Livre (a partir de 8 anos)',
            'nivel' => 'Todos os níveis',
            'desc' => 'Estruturação de escalas, intervalos, tonalidades, armaduras de clave e análise estrutural.'
        ],
        [
            'nome' => 'Percepção Auditiva',
            'cat' => 'formacao',
            'cat_label' => 'Formação Musical',
            'icone' => '🎧',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Todos os níveis',
            'desc' => 'Reconhecimento de intervalos de ouvido, ditado melódico, rítmico e harmônico.'
        ],
        [
            'nome' => 'Leitura de Partitura',
            'cat' => 'formacao',
            'cat_label' => 'Formação Musical',
            'icone' => '📜',
            'etaria' => 'Livre',
            'nivel' => 'Iniciante ao Avançado',
            'desc' => 'Fluência na leitura rítmica e melódica nas claves de Sol, Fá e Dó.'
        ],
        [
            'nome' => 'Musicalização Infantil',
            'cat' => 'formacao',
            'cat_label' => 'Formação Musical',
            'icone' => '👶',
            'etaria' => 'A partir de 4 anos',
            'nivel' => 'Iniciante',
            'desc' => 'Vivência lúdica, desenvolvimento auditivo, motor e rítmico para os pequenos.'
        ],

        // PRÁTICA COLETIVA
        [
            'nome' => 'Prática de Conjunto',
            'cat' => 'coletiva',
            'cat_label' => 'Prática Coletiva',
            'icone' => '👥',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Intermediário / Avançado',
            'desc' => 'Ensaio em grupo combinando diferentes instrumentos em arranjos bem estruturados.'
        ],
        [
            'nome' => 'Coral',
            'cat' => 'coletiva',
            'cat_label' => 'Prática Coletiva',
            'icone' => '🗣️',
            'etaria' => 'Crianças, Jovens e Adultos',
            'nivel' => 'Livre',
            'desc' => 'Canto a vozes (soprano, contralto, tenor, baixo), afinação coletiva e recitais corais.'
        ],
        [
            'nome' => 'Banda da Escola',
            'cat' => 'coletiva',
            'cat_label' => 'Prática Coletiva',
            'icone' => '🎸',
            'etaria' => 'A partir de 12 anos',
            'nivel' => 'Intermediário / Avançado',
            'desc' => 'Integração de baixo, bateria, guitarra, teclado e vozes com direção musical e apresentações.'
        ],
        [
            'nome' => 'Regência Coral',
            'cat' => 'coletiva',
            'cat_label' => 'Prática Coletiva',
            'icone' => '🪄',
            'etaria' => 'A partir de 15 anos',
            'nivel' => 'Intermediário / Avançado',
            'desc' => 'Técnicas de gesticulação, marcação rítmica, ensaio de coros e liderança musical.'
        ],

        // CURSOS COMPLEMENTARES
        [
            'nome' => 'Harmonia Funcional',
            'cat' => 'complementar',
            'cat_label' => 'Curso Complementar',
            'icone' => '🎼',
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
                <span class="eme-badge-tag">27 Modalidades Musicais | 19 Professores</span>
                <h1 class="eme-hero-title">Aulas e Cursos de Música</h1>
                <p class="eme-hero-subtitle">
                    Aulas presenciais individuais ou em grupo, com horários flexíveis e acompanhamento pedagógico contínuo.
                </p>
                <div style="margin-top: 20px;">
                    <a href="#contato" class="eme-btn-primary">Solicitar aula experimental</a>
                </div>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <!-- Filtros por Categoria -->
                <div class="eme-filter-bar">
                    <button class="eme-filter-btn active" data-filter="all">Todas as 27 Modalidades</button>
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
                                <span class="eme-aula-icon"><?php echo esc_html($c['icone']); ?></span>
                                <span class="eme-aula-cat-badge"><?php echo esc_html($c['cat_label']); ?></span>
                            </div>
                            <h3 class="eme-aula-title"><?php echo esc_html($c['nome']); ?></h3>
                            <p class="eme-aula-desc"><?php echo esc_html($c['desc']); ?></p>

                            <div class="eme-aula-details">
                                <div>👶 <strong>Faixa etária:</strong> <?php echo esc_html($c['etaria']); ?></div>
                                <div>📊 <strong>Níveis:</strong> <?php echo esc_html($c['nivel']); ?></div>
                            </div>

                            <a href="<?php echo esc_url($wa_url); ?>" target="_blank" class="eme-btn-primary eme-btn-block eme-btn-interesse" style="margin-top: 15px;">
                                Tenho interesse neste curso
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
add_shortcode('eme_aulas', 'eme_shortcode_aulas');

