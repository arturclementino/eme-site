<?php
/**
 * Shortcode Aulas e Cursos: [eme_aulas]
 * EME - Escola de MÃºsica EsperanÃ§a (27 Modalidades Musicais)
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_aulas($atts) {
    $cursos = [
        // INSTRUMENTOS
        [
            'nome' => 'ViolÃ£o',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => 'ðŸŽ¸',
            'etaria' => 'A partir de 7 anos',
            'nivel' => 'Iniciante, IntermediÃ¡rio e AvanÃ§ado',
            'desc' => 'Postura, dedilhados, batidas rÃ­tmicas, leitura de cifras e repertÃ³rio erudito ou popular.'
        ],
        [
            'nome' => 'Guitarra',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => 'ðŸŽ¸',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Iniciante, IntermediÃ¡rio e AvanÃ§ado',
            'desc' => 'Escalas, palhetada alternada, arpejos, harmonia funcional, solos e timbragem de pedais.'
        ],
        [
            'nome' => 'Piano / Teclado',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => 'ðŸŽ¹',
            'etaria' => 'A partir de 6 anos',
            'nivel' => 'Iniciante, IntermediÃ¡rio e AvanÃ§ado',
            'desc' => 'Leitura em partitura (clave de sol e fÃ¡), independÃªncia das mÃ£os, tÃ©cnica clÃ¡ssica e popular.'
        ],
        [
            'nome' => 'Bateria',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => 'ðŸ¥',
            'etaria' => 'A partir de 8 anos',
            'nivel' => 'Iniciante, IntermediÃ¡rio e AvanÃ§ado',
            'desc' => 'CoordenaÃ§Ã£o motora, rudimentos, independÃªncias rÃ­tmicas, grooves e dinÃ¢mica de palco.'
        ],
        [
            'nome' => 'Violino',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => 'ðŸŽ»',
            'etaria' => 'A partir de 6 anos',
            'nivel' => 'Iniciante, IntermediÃ¡rio e AvanÃ§ado',
            'desc' => 'Golpe de arco, postura ergonÃ´mica, afinaÃ§Ã£o fina, leitura e prÃ¡tica orquestral.'
        ],
        [
            'nome' => 'Violoncelo',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => 'ðŸŽ»',
            'etaria' => 'A partir de 8 anos',
            'nivel' => 'Iniciante, IntermediÃ¡rio e AvanÃ§ado',
            'desc' => 'Sonoridade aveludada do cello, leitura em clave de fÃ¡ e dÃ³, tÃ©cnica de arco e afinaÃ§Ã£o.'
        ],
        [
            'nome' => 'Contrabaixo',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => 'ðŸŽ¸',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Iniciante, IntermediÃ¡rio e AvanÃ§ado',
            'desc' => 'ConduÃ§Ã£o rÃ­tmica (groove), slap, harmonia aplicada ao baixo e entrosamento com a bateria.'
        ],
        [
            'nome' => 'Flauta Doce e Flauta Transversal',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => 'ðŸŽº',
            'etaria' => 'A partir de 8 anos',
            'nivel' => 'Iniciante, IntermediÃ¡rio e AvanÃ§ado',
            'desc' => 'Controle de embocadura, apoio diafragmÃ¡tico, articulaÃ§Ã£o, afinaÃ§Ã£o e peÃ§as eruditas e populares.'
        ],
        [
            'nome' => 'Saxofone',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento',
            'icone' => 'ðŸŽ·',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Iniciante, IntermediÃ¡rio e AvanÃ§ado',
            'desc' => 'EmissÃ£o de som, escalas, afinaÃ§Ã£o, frases de jazz, bossa nova, pop e mÃºsica sacra.'
        ],
        [
            'nome' => 'Canto',
            'cat' => 'instrumentos',
            'cat_label' => 'Instrumento / Voz',
            'icone' => 'ðŸŽ¤',
            'etaria' => 'A partir de 12 anos',
            'nivel' => 'Iniciante, IntermediÃ¡rio e AvanÃ§ado',
            'desc' => 'Fisiologia vocal, apoio respiratÃ³rio, afinaÃ§Ã£o, ressonÃ¢ncia e saÃºde da voz.'
        ],

        // FORMAÃ‡ÃƒO MUSICAL
        [
            'nome' => 'Teoria Musical',
            'cat' => 'formacao',
            'cat_label' => 'FormaÃ§Ã£o Musical',
            'icone' => 'ðŸŽ¼',
            'etaria' => 'Livre (a partir de 8 anos)',
            'nivel' => 'Todos os nÃ­veis',
            'desc' => 'EstruturaÃ§Ã£o de escalas, intervalos, tonalidades, armaduras de clave e anÃ¡lise estrutural.'
        ],
        [
            'nome' => 'PercepÃ§Ã£o Auditiva',
            'cat' => 'formacao',
            'cat_label' => 'FormaÃ§Ã£o Musical',
            'icone' => 'ðŸŽ§',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'Todos os nÃ­veis',
            'desc' => 'Reconhecimento de intervalos de ouvido, ditado melÃ³dico, rÃ­tmico e harmÃ´nico.'
        ],
        [
            'nome' => 'Leitura de Partitura',
            'cat' => 'formacao',
            'cat_label' => 'FormaÃ§Ã£o Musical',
            'icone' => 'ðŸ“œ',
            'etaria' => 'Livre',
            'nivel' => 'Iniciante ao AvanÃ§ado',
            'desc' => 'FluÃªncia na leitura rÃ­tmica e melÃ³dica nas claves de Sol, FÃ¡ e DÃ³.'
        ],
        [
            'nome' => 'MusicalizaÃ§Ã£o Infantil',
            'cat' => 'formacao',
            'cat_label' => 'FormaÃ§Ã£o Musical',
            'icone' => 'ðŸ‘¶',
            'etaria' => 'A partir de 4 anos',
            'nivel' => 'Iniciante',
            'desc' => 'VivÃªncia lÃºdica, desenvolvimento auditivo, motor e rÃ­tmico para os pequenos.'
        ],

        // PRÃTICA COLETIVA
        [
            'nome' => 'PrÃ¡tica de Conjunto',
            'cat' => 'coletiva',
            'cat_label' => 'PrÃ¡tica Coletiva',
            'icone' => 'ðŸ‘¥',
            'etaria' => 'A partir de 10 anos',
            'nivel' => 'IntermediÃ¡rio / AvanÃ§ado',
            'desc' => 'Ensaio em grupo combinando diferentes instrumentos em arranjos bem estruturados.'
        ],
        [
            'nome' => 'Coral',
            'cat' => 'coletiva',
            'cat_label' => 'PrÃ¡tica Coletiva',
            'icone' => 'ðŸ—£ï¸',
            'etaria' => 'CrianÃ§as, Jovens e Adultos',
            'nivel' => 'Livre',
            'desc' => 'Canto a vozes (soprano, contralto, tenor, baixo), afinaÃ§Ã£o coletiva e recitais corais.'
        ],
        [
            'nome' => 'Banda da Escola',
            'cat' => 'coletiva',
            'cat_label' => 'PrÃ¡tica Coletiva',
            'icone' => 'ðŸŽ¸',
            'etaria' => 'A partir de 12 anos',
            'nivel' => 'IntermediÃ¡rio / AvanÃ§ado',
            'desc' => 'IntegraÃ§Ã£o de baixo, bateria, guitarra, teclado e vozes com direÃ§Ã£o musical e apresentaÃ§Ãµes.'
        ],
        [
            'nome' => 'RegÃªncia Coral',
            'cat' => 'coletiva',
            'cat_label' => 'PrÃ¡tica Coletiva',
            'icone' => 'ðŸª„',
            'etaria' => 'A partir de 15 anos',
            'nivel' => 'IntermediÃ¡rio / AvanÃ§ado',
            'desc' => 'TÃ©cnicas de gesticulaÃ§Ã£o, marcaÃ§Ã£o rÃ­tmica, ensaio de coros e lideranÃ§a musical.'
        ],

        // CURSOS COMPLEMENTARES
        [
            'nome' => 'Harmonia Funcional',
            'cat' => 'complementar',
            'cat_label' => 'Curso Complementar',
            'icone' => 'ðŸŽ¼',
            'etaria' => 'A partir de 12 anos',
            'nivel' => 'IntermediÃ¡rio / AvanÃ§ado',
            'desc' => 'Curso modular (8h-aula em 4 encontros) ministrado pelo Prof. JoÃ£o Camilo. MÃ³dulo I teve 17 inscritos no 1Âº sem. MÃ³dulo II previsto para o 2Âº sem.'
        ]
    ];

    ob_start();
    ?>
    <div class="eme-aulas-wrapper">
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">27 Modalidades Musicais | 19 Professores</span>
                <h1 class="eme-hero-title">Aulas e Cursos de MÃºsica</h1>
                <p class="eme-hero-subtitle">
                    Aulas presenciais individuais ou em grupo, com horÃ¡rios flexÃ­veis e acompanhamento pedagÃ³gico contÃ­nuo.
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
                    <button class="eme-filter-btn" data-filter="formacao">FormaÃ§Ã£o Musical</button>
                    <button class="eme-filter-btn" data-filter="coletiva">PrÃ¡tica Coletiva</button>
                    <button class="eme-filter-btn" data-filter="complementar">Cursos Complementares</button>
                </div>

                <!-- Grid de Cursos -->
                <div class="eme-grid-3 eme-aulas-grid">
                    <?php foreach ($cursos as $c): 
                        $wa_msg = urlencode("OlÃ¡! Tenho interesse no curso de " . $c['nome'] . " na EME. Como funcionam as matrÃ­culas?");
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
                                <div>ðŸ‘¶ Faixa etÃ¡ria: <?php echo esc_html($c['etaria']); ?></div>
                                <div>ðŸ“Š NÃ­veis: <?php echo esc_html($c['nivel']); ?></div>
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


