<?php
/**
 * Shortcode Professores: [eme_professores]
 * EME - Escola de MÃºsica EsperanÃ§a (Corpo Docente: 18 Professores)
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_professores($atts) {
    $professores = [
        [
            'nome' => 'Ana Calina',
            'instr' => 'Violino, Viola e Teoria Musical',
            'form' => 'Bacharel em MÃºsica pela UEMG, sob orientaÃ§Ã£o do prof. Luciano Gatelli.',
            'bio' => 'Atuou como monitora, professora e musicista da Orquestra Jovem do TJ e Orquestra Stradivarius. Acompanhou artistas como FlÃ¡vio Venturini, Eli Soares, Dudu Nobre, Leila Pinheiro e Ed Motta. Integra a Academia da Orquestra Ouro Preto e o Quarteto de Cordas da Rede Batista.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Ana-Calina-1-scaled.jpg',
            'foto_class' => 'eme-img-ana',
            'foto_style' => 'object-fit: cover !important; object-position: center 20% !important;'
        ],
        [
            'nome' => 'Andrea Souza',
            'instr' => 'MusicalizaÃ§Ã£o Infantil, Piano e Flauta Doce',
            'form' => 'FormaÃ§Ã£o em MÃºsica (UEMG), Musicoterapia (Censupeg) e Psicologia (UNA).',
            'bio' => 'Educadora musical, musicoterapeuta e psicÃ³loga com mais de 12 anos de experiÃªncia. Atua com musicalizaÃ§Ã£o infantil, piano e flauta doce, oferecendo um aprendizado humanizado e integrado ao desenvolvimento pessoal.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Andrea-branding28-scaled.jpg',
            'foto_class' => 'eme-img-andrea',
            'foto_style' => 'object-fit: cover !important; object-position: center 20% !important;'
        ],
        [
            'nome' => 'Artley Fernandes',
            'instr' => 'Contrabaixo ElÃ©trico, AcÃºstico e Sopro',
            'form' => 'Bacharelado em MÃºsica â€” HabilitaÃ§Ã£o em Contrabaixo AcÃºstico pela UEMG (em andamento).',
            'bio' => 'MÃºsico multi-instrumentista com trajetÃ³ria iniciada aos 8 anos. Domina violÃ£o, contrabaixo acÃºstico e elÃ©trico, flauta transversal, trompete, trombone, saxofone e bateria. Atuou no programa Escola Aberta (PBH) e integrou a Orquestra Parque Sagrada GeraÃ§Ã£o. Ã‰ professor de contrabaixo na EME, unindo vivÃªncia prÃ¡tica, formaÃ§Ã£o tÃ©cnica e paixÃ£o pelo ensino.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Artley.png',
            'foto_class' => 'eme-img-artley',
            'foto_style' => 'object-fit: cover !important; object-position: center 15% !important;'
        ],
        [
            'nome' => 'AyelÃ©n Pacheco',
            'instr' => 'Canto LÃ­rico, Canto Popular & ExpressÃ£o CÃªnica / Teatro',
            'form' => 'Bacharelado em Canto LÃ­rico (ESMU-UEMG - 7Âº PerÃ­odo) e Canto Erudito (CEFART - PalÃ¡cio das Artes).',
            'bio' => 'Soprano argentina residente no Brasil desde 2011. Corista do naipe de Sopranos 1 do Coral Ars Nova da UFMG desde 2023, atuou em Ã³peras renomadas no PalÃ¡cio das Artes (Suor AngÃ©lica, Dido e Aeneas) e como solista convidada no CIAAR/FAB. Professora de canto e teatro desde 2019, desenvolve pesquisa acadÃªmica em "Artes CÃªnicas para MÃºsicos", unindo expressÃ£o vocal e presenÃ§a de palco.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/ayelen.png',
            'foto_class' => 'eme-img-ayelen',
            'foto_style' => 'object-fit: cover !important; object-position: center 15% !important;'
        ],
        [
            'nome' => 'Bruna Garcia',
            'instr' => 'Piano Erudito e Popular',
            'form' => 'Bacharelado em MÃºsica com habilitaÃ§Ã£o em Piano pela UEMG.',
            'bio' => 'Pianista com premiaÃ§Ãµes no Concurso Nacional de Piano do ConservatÃ³rio Souza Lima e 2Âº lugar no concurso Segunda Musical (ALMG 2024). Professora qualificada para o ensino de piano em todas as idades.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Bruna-1-scaled.jpg',
            'foto_class' => 'eme-img-bruna',
            'foto_style' => 'object-fit: cover !important; object-position: center 2% !important;'
        ],
        [
            'nome' => 'Cleberson Pereira',
            'instr' => 'ViolÃ£o e Guitarra',
            'form' => 'Mais de 20 anos de vivÃªncia entre palco, estÃºdio e sala de aula.',
            'bio' => 'Com mais de 20 anos de dedicaÃ§Ã£o Ã  mÃºsica, produziu artistas e dirigiu projetos como o Divas do Soul e Festival Tudo Ã© Jazz. Acompanhou artistas renomados e integrou a banda Entre Salmos (vencedora do Festival Promessas da Globo em 2013). Desperta identidade e musicalidade em cada estudante.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Cleberson-11.jpeg',
            'foto_class' => 'eme-img-cleberson',
            'foto_style' => 'object-fit: cover !important; object-position: center 20% !important;'
        ],
        [
            'nome' => 'Daniel Matos',
            'instr' => 'RegÃªncia Coral, Bateria e ViolÃ£o',
            'form' => 'Licenciatura em MÃºsica. ViolÃ£o Erudito (ConservatÃ³rio de VitÃ³ria da Conquista) e RegÃªncia (Sesi-SP).',
            'bio' => 'MÃºsico, educador e regente hÃ¡ mais de 15 anos. Regente do Coral EsperanÃ§a e do grupo de cÃ¢mara Cordas de EsperanÃ§a na Igreja EsperanÃ§a em BH. LanÃ§ou o EP de mÃºsica cristÃ£ "Em busca do Sol".',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Foto-Daniel-Ortiz-Matos-scaled.jpg',
            'foto_class' => 'eme-img-daniel',
            'foto_style' => 'object-fit: cover !important; object-position: center 15% !important;'
        ],
        [
            'nome' => 'Douglas Santiago',
            'instr' => 'Violoncelo',
            'form' => 'Bacharel em Violoncelo pela UFMG. Integrante da Orquestra SinfÃ´nica da PMMG.',
            'bio' => 'Violoncelista com experiÃªncia docente na Escola Municipal de Ipatinga e Sesc BH. Atuou na Orquestra Vale do AÃ§o, Orquestra SinfÃ´nica de Minas e Orquestra Ouro Preto, alÃ©m de festivais e masterclasses nacionais e internacionais.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Douglas-Santiago-1.jpeg',
            'foto_class' => 'eme-img-douglas',
            'foto_style' => 'object-fit: cover !important; object-position: center 20% !important;'
        ],
        [
            'nome' => 'Esther de Oliveira',
            'instr' => 'Violino, ViolÃ£o e Ukulele',
            'form' => 'Bacharelado em MÃºsica pela UEMG. Integrante do Quarteto de Cordas da Rede Batista.',
            'bio' => 'Violinista com passagem pelas orquestras Jovem Sesi Minas, TJ-MG e Inhotim. Cantora, compositora e produtora (AnaEstherDuo), leciona violino, violÃ£o e ukulele com sensibilidade e excelente tÃ©cnica.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Esther-Oliveira-scaled.jpg',
            'foto_class' => 'eme-img-esther',
            'foto_style' => 'object-fit: cover !important; object-position: center 20% !important;'
        ],
        [
            'nome' => 'GlÃªnio Vilas Boas',
            'instr' => 'Piano, Teoria e EducaÃ§Ã£o Musical',
            'form' => 'Licenciado em Piano (UEMG), Esp. Metodologia (FACEL) e Mestre em MÃºsica (UFPE).',
            'bio' => 'MÃºsico e educador com mais de 30 anos de experiÃªncia. Ex-professor da graduaÃ§Ã£o em mÃºsica do IF SertÃ£o Pernambucano e atual docente do ColÃ©gio Militar de Belo Horizonte (CMBH), promovendo a educaÃ§Ã£o musical com sensibilidade e fÃ©.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Glenio-1.jpeg',
            'foto_class' => 'eme-img-glenio',
            'foto_style' => 'object-fit: cover !important; object-position: center 10% !important;'
        ],
        [
            'nome' => 'JoÃ£o Marcos',
            'instr' => 'Harmonia Funcional, ViolÃ£o e Teoria',
            'form' => 'MÃºsico, arranjador e especialista em Harmonia Funcional e PercepÃ§Ã£o.',
            'bio' => 'Especialista em Harmonia Funcional, modulaÃ§Ã£o e rearmonizaÃ§Ã£o aplicada. Conduz cursos modulares e prÃ¡ticos na EME direcionados a instrumentistas e arranjadores que buscam aprimoramento harmÃ´nico.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Joao-marcos.jpg',
            'foto_class' => 'eme-img-joao-marcos',
            'foto_style' => 'object-fit: cover !important; object-position: center 20% !important;'
        ],
        [
            'nome' => 'JoÃ£o Pedro GonÃ§alves da Silva',
            'instr' => 'Piano e Canto',
            'form' => 'Licenciatura em MÃºsica pela UEMG.',
            'bio' => 'Atua como professor de piano, cantor, corista e pianista em formaÃ§Ãµes musicais de Belo Horizonte. Integra performance tÃ©cnica instrumental e vocal em sua didÃ¡tica.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/joao-pedro-goncalves.jpeg',
            'foto_class' => 'eme-img-joao-pedro',
            'foto_style' => 'object-fit: cover !important; object-position: center 15% !important;'
        ],
        [
            'nome' => 'Regiany Carlos',
            'instr' => 'Violino',
            'form' => 'Bacharel em Violino pela UEMG. Ex-Spalla da Orquestra Vale do AÃ§o.',
            'bio' => 'Iniciou seus estudos no violino aos 9 anos. Atuou em importantes orquestras (SinfÃ´nica do Estado, Sesi Minas, Orquestra de Ouro Preto) e apresentou-se na University for Music and Theater em Rostock, Alemanha.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Regyani-Carlos.jpeg',
            'foto_class' => 'eme-img-regiany',
            'foto_style' => 'object-fit: cover !important; object-position: center 20% !important;'
        ],
        [
            'nome' => 'Roberta Fernandes',
            'instr' => 'Canto & Pedagogia Vocal',
            'form' => 'Licenciatura em MÃºsica (Canto - UFOP) e PÃ³s-Graduada em Canto e Pedagogia Vocal (Instituto JK).',
            'bio' => 'Cantora e educadora vocal com atuaÃ§Ã£o docente desde 2024. Graduada pela UFOP e pÃ³s-graduada em Pedagogia Vocal, leciona para alunos iniciantes a avanÃ§ados (dos 13 aos 80 anos) em gÃªneros como gospel, pop, rock e erudito. Atuou em projetos operÃ­sticos como Don Giovanni, La Clemenza di Tito e Le Nozze di Figaro no Teatro da Ã“pera de Ouro Preto.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/roberta-fernandes.jpeg',
            'foto_class' => 'eme-img-roberta',
            'foto_style' => 'object-fit: cover !important; object-position: center 15% !important;'
        ],
        [
            'nome' => 'Rodrigo Leles',
            'instr' => 'Bateria & PercussÃ£o',
            'form' => 'Baterista hÃ¡ 25 anos, professor hÃ¡ 18 anos. PrÃªmio BDMG Jovem Instrumentista (2015).',
            'bio' => 'Coordenador musical da PIB Belo Horizonte e escola Catedral. Acompanha o cantor Marcos Almeida em turnÃªs pelo Brasil, integra a banda Canto Verbo e atua em gravaÃ§Ãµes para produtores nacionais e internacionais.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Rodrigo-Leles.jpeg',
            'foto_class' => 'eme-img-rodrigo',
            'foto_style' => 'object-fit: cover !important; object-position: center 15% !important;'
        ],
        [
            'nome' => 'Samuel Gomes',
            'instr' => 'Contrabaixo ElÃ©trico & AcÃºstico',
            'form' => 'Formado em Baixo ElÃ©trico pela Bituca e MÃºsica Popular pela UFMG. PrÃªmio BDMG Jovem Instrumentista (2012).',
            'bio' => 'Contrabaxista com apresentaÃ§Ãµes e gravaÃ§Ãµes ao lado de grandes nomes como Alok, AndrÃ© ValadÃ£o, Gabriel Elias, Melim, Marcos Almeida, Preto no Branco, MÃ¡rcio Bahia e Nivaldo Ornelas.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Samuel-Gomes-2.jpeg',
            'foto_class' => 'eme-img-samuel',
            'foto_style' => 'object-fit: cover !important; object-position: center 2% !important;'
        ],
        [
            'nome' => 'Sandra Alves',
            'instr' => 'Flauta Transversal, Flauta Doce e Teoria',
            'form' => 'Graduada (1998), Especialista (2001) e Mestre em Performance pela UFMG. Esp. em NeurociÃªncia Aplicada.',
            'bio' => 'Primeira flautista e chefe de naipe da Orquestra SinfÃ´nica de Minas Gerais desde 2009. Apresentou-se como solista em diversas orquestras do paÃ­s e realizou aperfeiÃ§oamento na ItÃ¡lia.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/WhatsApp-Image-2026-01-05-at-10.47.29.jpeg',
            'foto_class' => 'eme-img-sandra',
            'foto_style' => 'object-fit: cover !important; object-position: center 2% !important;'
        ],
        [
            'nome' => 'Talita Braga Olivetti',
            'instr' => 'Piano Erudito e CorrepetiÃ§Ã£o',
            'form' => 'Bacharel em Piano (UNICSUL), Licenciada (Claretiano) e PÃ³s em CogniÃ§Ã£o Musical (UNINTER).',
            'bio' => 'Pianista com 2Âº lugar no V Concurso Villa-Lobos. Atuou como correpetidora no Grupo Experimental de Ã“pera Eloisa Baldin e participou do prestigiado Festival MÃºsica nas Montanhas.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Talita-Braga.jpg',
            'foto_class' => 'eme-img-talita',
            'foto_style' => 'object-fit: cover !important; object-position: center 15% !important;'
        ],
        [
            'nome' => 'Warnei Ferreira da Costa',
            'instr' => 'Guitarra e ViolÃ£o',
            'form' => 'MÃºsico profissional hÃ¡ mais de 10 anos, com formaÃ§Ã£o com Mozart Mello, Nelson Faria e Celso Moreira.',
            'bio' => 'Guitarrista e violonista com vasta experiÃªncia em produÃ§Ã£o e ensino. Desenvolve aulas focadas em harmonia e improvisaÃ§Ã£o com didÃ¡tica clara, objetiva e personalizada.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Warnei.jpeg',
            'foto_class' => 'eme-img-warnei',
            'foto_style' => 'object-fit: cover !important; object-position: center 20% !important;'
        ]
    ];

    ob_start();
    ?>
    <div class="eme-professores-wrapper">
        <!-- Hero Sub-header -->
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Corpo Docente EME (20 Professores)</span>
                <h1 class="eme-hero-title">Nossos Professores</h1>
                <p class="eme-hero-subtitle">
                    MÃºsicos e educadores altamente capacitados, apaixonados pela arte de ensinar e transformar vidas atravÃ©s da mÃºsica.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <!-- IntroduÃ§Ã£o Institucional -->
                <div class="eme-prof-intro-box">
                    <p class="eme-prof-intro-text">
                        O corpo docente da Escola de MÃºsica EsperanÃ§a Ã© composto por 20 professores qualificados com formaÃ§Ã£o acadÃªmica (bacharÃ©is, licenciados e mestres) e vasta vivÃªncia de palco, orquestras e estÃºdios. ConheÃ§a a trajetÃ³ria de quem faz a mÃºsica acontecer na EME:
                    </p>
                </div>

                <!-- Grid de Cards dos Professores (Ordem AlfabÃ©tica) -->
                <div class="eme-grid-3 eme-prof-grid">
                    <?php foreach ($professores as $prof): 
                        $primeiro_nome = explode(' ', $prof['nome'])[0];
                        $wa_mensagem = urlencode("OlÃ¡! Gostaria de agendar uma aula com o(a) professor(a) " . $prof['nome'] . " na EME.");
                        $wa_link = "https://wa.me/5531984201358?text=" . $wa_mensagem;
                    ?>
                        <div class="eme-prof-card">
                            <div class="eme-prof-header">
                                <div class="eme-prof-avatar">
                                    <?php if (!empty($prof['foto'])): ?>
                                        <img src="<?php echo esc_url($prof['foto']); ?>" alt="<?php echo esc_attr($prof['nome']); ?>" class="eme-prof-img <?php echo esc_attr($prof['foto_class'] ?? ''); ?>" style="<?php echo esc_attr($prof['foto_style'] ?? ''); ?>" decoding="async" loading="lazy" />
                                    <?php else: ?>
                                        <span><?php echo esc_html(mb_substr($prof['nome'], 0, 1)); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="eme-prof-info">
                                    <h3 class="eme-prof-name"><?php echo esc_html($prof['nome']); ?></h3>
                                    <span class="eme-prof-instr"><?php echo esc_html($prof['instr']); ?></span>
                                </div>
                            </div>
                            <div class="eme-prof-body">
                                <div class="eme-prof-form">
                                    ðŸŽ“ FormaÃ§Ã£o: <?php echo esc_html($prof['form']); ?>
                                </div>
                                <div class="eme-prof-bio-box">
                                    <p class="eme-prof-bio eme-bio-truncated"><?php echo esc_html($prof['bio']); ?></p>
                                    <button type="button" class="eme-bio-toggle-btn" aria-expanded="false">Ler mais (+)</button>
                                </div>
                            </div>
                            <div class="eme-prof-footer">
                                <a href="<?php echo esc_url($wa_link); ?>" target="_blank" class="eme-prof-wa-btn" title="Falar no WhatsApp da Secretaria">
                                    ðŸ’¬ Quero fazer aula com <?php echo esc_html($primeiro_nome); ?>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- SeÃ§Ã£o Trabalhe Conosco / Recrutamento -->
                <div class="eme-recruitment-box">
                    <div class="eme-recruitment-icon">ðŸ’¼</div>
                    <h3>Quer fazer parte do nosso time?</h3>
                    <p>Estamos sempre em busca de educadores e instrumentistas apaixonados pelo ensino da mÃºsica com excelÃªncia e acolhimento.</p>
                    <a href="mailto:coordenacao@escolaeme.com?subject=Curr%C3%ADculo%20-%20Corpo%20Docente%20EME" class="eme-btn-primary">
                        Envie seu currÃ­culo para coordenacao@escolaeme.com
                    </a>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_professores', 'eme_shortcode_professores');

