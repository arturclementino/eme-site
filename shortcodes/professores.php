<?php
/**
 * Shortcode Professores: [eme_professores]
 * EME - Escola de Música Esperança (Corpo Docente: 18 Professores)
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_professores($atts) {
    $professores = [
        [
            'nome' => 'Ana Calina',
            'instr' => 'Violino, Viola e Teoria Musical',
            'form' => 'Bacharel em Música pela UEMG, sob orientação do prof. Luciano Gatelli.',
            'bio' => 'Atuou como monitora, professora e musicista da Orquestra Jovem do TJ e Orquestra Stradivarius. Acompanhou artistas como Flávio Venturini, Eli Soares, Dudu Nobre, Leila Pinheiro e Ed Motta. Integra a Academia da Orquestra Ouro Preto e o Quarteto de Cordas da Rede Batista.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Ana-Calina-1-scaled.jpg'
        ],
        [
            'nome' => 'Andrea Souza',
            'instr' => 'Musicalização Infantil, Piano e Flauta Doce',
            'form' => 'Formação em Música (UEMG), Musicoterapia (Censupeg) e Psicologia (UNA).',
            'bio' => 'Educadora musical, musicoterapeuta e psicóloga com mais de 12 anos de experiência. Atua com musicalização infantil, piano e flauta doce, oferecendo um aprendizado humanizado e integrado ao desenvolvimento pessoal.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Andrea-branding28-scaled.jpg'
        ],
        [
            'nome' => 'Artley Fernandes',
            'instr' => 'Contrabaixo Elétrico, Acústico e Sopro',
            'form' => 'Bacharelado em Música — Habilitação em Contrabaixo Acústico pela UEMG (em andamento).',
            'bio' => 'Músico multi-instrumentista com trajetória iniciada aos 8 anos. Domina violão, contrabaixo acústico e elétrico, flauta transversal, trompete, trombone, saxofone e bateria. Atuou no programa Escola Aberta (PBH) e integrou a Orquestra Parque Sagrada Geração. É professor de contrabaixo na EME, unindo vivência prática, formação técnica e paixão pelo ensino.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Artley.png'
        ],
        [
            'nome' => 'Bruna Garcia',
            'instr' => 'Piano Erudito e Popular',
            'form' => 'Bacharelado em Música com habilitação em Piano pela UEMG.',
            'bio' => 'Pianista com premiações no Concurso Nacional de Piano do Conservatório Souza Lima e 2º lugar no concurso Segunda Musical (ALMG 2024). Professora qualificada para o ensino de piano em todas as idades.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Bruna-1-scaled.jpg'
        ],
        [
            'nome' => 'Cleberson Pereira',
            'instr' => 'Violão e Guitarra',
            'form' => 'Mais de 20 anos de vivência entre palco, estúdio e sala de aula.',
            'bio' => 'Com mais de 20 anos de dedicação à música, produziu artistas e dirigiu projetos como o Divas do Soul e Festival Tudo é Jazz. Acompanhou artistas renomados e integrou a banda Entre Salmos (vencedora do Festival Promessas da Globo em 2013). Desperta identidade e musicalidade em cada estudante.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Cleberson-11.jpeg'
        ],
        [
            'nome' => 'Daniel Matos',
            'instr' => 'Regência Coral, Bateria e Violão',
            'form' => 'Licenciatura em Música. Violão Erudito (Conservatório de Vitória da Conquista) e Regência (Sesi-SP).',
            'bio' => 'Músico, educador e regente há mais de 15 anos. Regente do Coral Esperança e do grupo de câmara Cordas de Esperança na Igreja Esperança em BH. Lançou o EP de música cristã "Em busca do Sol".',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Foto-Daniel-Ortiz-Matos-scaled.jpg'
        ],
        [
            'nome' => 'Douglas Santiago',
            'instr' => 'Violoncelo',
            'form' => 'Bacharel em Violoncelo pela UFMG. Integrante da Orquestra Sinfônica da PMMG.',
            'bio' => 'Violoncelista com experiência docente na Escola Municipal de Ipatinga e Sesc BH. Atuou na Orquestra Vale do Aço, Orquestra Sinfônica de Minas e Orquestra Ouro Preto, além de festivais e masterclasses nacionais e internacionais.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Douglas-Santiago-1.jpeg'
        ],
        [
            'nome' => 'Esther de Oliveira',
            'instr' => 'Violino, Violão e Ukulele',
            'form' => 'Bacharelado em Música pela UEMG. Integrante do Quarteto de Cordas da Rede Batista.',
            'bio' => 'Violinista com passagem pelas orquestras Jovem Sesi Minas, TJ-MG e Inhotim. Cantora, compositora e produtora (AnaEstherDuo), leciona violino, violão e ukulele com sensibilidade e excelente técnica.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Esther-Oliveira-scaled.jpg'
        ],
        [
            'nome' => 'Glênio Vilas Boas',
            'instr' => 'Piano, Teoria e Educação Musical',
            'form' => 'Licenciado em Piano (UEMG), Esp. Metodologia (FACEL) e Mestre em Música (UFPE).',
            'bio' => 'Músico e educador com mais de 30 anos de experiência. Ex-professor da graduação em música do IF Sertão Pernambucano e atual docente do Colégio Militar de Belo Horizonte (CMBH), promovendo a educação musical com sensibilidade e fé.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Glenio-1.jpeg'
        ],
        [
            'nome' => 'João Marcos',
            'instr' => 'Harmonia Funcional, Violão e Teoria',
            'form' => 'Músico, arranjador e especialista em Harmonia Funcional e Percepção.',
            'bio' => 'Especialista em Harmonia Funcional, modulação e rearmonização aplicada. Conduz cursos modulares e práticos na EME direcionados a instrumentistas e arranjadores que buscam aprimoramento harmônico.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Joao-marcos.jpg'
        ],
        [
            'nome' => 'João Pedro Gonçalves da Silva',
            'instr' => 'Piano e Canto',
            'form' => 'Licenciatura em Música pela UEMG.',
            'bio' => 'Atua como professor de piano, cantor, corista e pianista em formações musicais de Belo Horizonte. Integra performance técnica instrumental e vocal em sua didática.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/joao-pedro-goncalves.jpeg'
        ],
        [
            'nome' => 'Rafael Ávila',
            'instr' => 'Canto & Fisiologia Vocal',
            'form' => 'Especialista em Fisiologia Vocal e Técnica Vocal Aplicada.',
            'bio' => 'Com mais de 20 anos de experiência e mais de 500 alunos formados, une ciência da saúde vocal e sensibilidade artística para potencializar a voz de cantores iniciantes e profissionais.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Rafael-Avila.jpeg'
        ],
        [
            'nome' => 'Regiany Carlos',
            'instr' => 'Violino',
            'form' => 'Bacharel em Violino pela UEMG. Ex-Spalla da Orquestra Vale do Aço.',
            'bio' => 'Iniciou seus estudos no violino aos 9 anos. Atuou em importantes orquestras (Sinfônica do Estado, Sesi Minas, Orquestra de Ouro Preto) e apresentou-se na University for Music and Theater em Rostock, Alemanha.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Regyani-Carlos.jpeg'
        ],
        [
            'nome' => 'Rodrigo Leles',
            'instr' => 'Bateria & Percussão',
            'form' => 'Baterista há 25 anos, professor há 18 anos. Prêmio BDMG Jovem Instrumentista (2015).',
            'bio' => 'Coordenador musical da PIB Belo Horizonte e escola Catedral. Acompanha o cantor Marcos Almeida em turnês pelo Brasil, integra a banda Canto Verbo e atua em gravações para produtores nacionais e internacionais.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Rodrigo-Leles.jpeg'
        ],
        [
            'nome' => 'Samuel Gomes',
            'instr' => 'Contrabaixo Elétrico & Acústico',
            'form' => 'Formado em Baixo Elétrico pela Bituca e Música Popular pela UFMG. Prêmio BDMG Jovem Instrumentista (2012).',
            'bio' => 'Contrabaxista com apresentações e gravações ao lado de grandes nomes como Alok, André Valadão, Gabriel Elias, Melim, Marcos Almeida, Preto no Branco, Márcio Bahia e Nivaldo Ornelas.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Samuel-Gomes-2.jpeg'
        ],
        [
            'nome' => 'Sandra Alves',
            'instr' => 'Flauta Transversal, Flauta Doce e Teoria',
            'form' => 'Graduada (1998), Especialista (2001) e Mestre em Performance pela UFMG. Esp. em Neurociência Aplicada.',
            'bio' => 'Primeira flautista e chefe de naipe da Orquestra Sinfônica de Minas Gerais desde 2009. Apresentou-se como solista em diversas orquestras do país e realizou aperfeiçoamento na Itália.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/WhatsApp-Image-2026-01-05-at-10.47.29.jpeg'
        ],
        [
            'nome' => 'Talita Braga Olivetti',
            'instr' => 'Piano Erudito e Correpetição',
            'form' => 'Bacharel em Piano (UNICSUL), Licenciada (Claretiano) e Pós em Cognição Musical (UNINTER).',
            'bio' => 'Pianista com 2º lugar no V Concurso Villa-Lobos. Atuou como correpetidora no Grupo Experimental de Ópera Eloisa Baldin e participou do prestigiado Festival Música nas Montanhas.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Talita-Braga.jpg'
        ],
        [
            'nome' => 'Warnei Ferreira da Costa',
            'instr' => 'Guitarra e Violão',
            'form' => 'Músico profissional há mais de 10 anos, com formação com Mozart Mello, Nelson Faria e Celso Moreira.',
            'bio' => 'Guitarrista e violonista com vasta experiência em produção e ensino. Desenvolve aulas focadas em harmonia e improvisação com didática clara, objetiva e personalizada.',
            'foto' => 'https://escolaeme.com/wp-content/uploads/2026/09/Warnei.jpeg'
        ]
    ];

    ob_start();
    ?>
    <div class="eme-professores-wrapper">
        <!-- Hero Sub-header -->
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Corpo Docente EME (18 Professores)</span>
                <h1 class="eme-hero-title">Nossos Professores</h1>
                <p class="eme-hero-subtitle">
                    Músicos e educadores altamente capacitados, apaixonados pela arte de ensinar e transformar vidas através da música.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <!-- Introdução Institucional -->
                <div class="eme-prof-intro-box">
                    <p class="eme-prof-intro-text">
                        O corpo docente da Escola de Música Esperança é composto por <strong>18 professores qualificados</strong> com formação acadêmica (bacharéis, licenciados e mestres) e vasta vivência de palco, orquestras e estúdios. Conheça a trajetória de quem faz a música acontecer na EME:
                    </p>
                </div>

                <!-- Grid de Cards dos Professores (Ordem Alfabética) -->
                <div class="eme-grid-3 eme-prof-grid">
                    <?php foreach ($professores as $prof): 
                        $primeiro_nome = explode(' ', $prof['nome'])[0];
                        $wa_mensagem = urlencode("Olá! Gostaria de agendar uma aula com o(a) professor(a) " . $prof['nome'] . " na EME.");
                        $wa_link = "https://wa.me/5531984201358?text=" . $wa_mensagem;
                    ?>
                        <div class="eme-prof-card">
                            <div class="eme-prof-header">
                                <div class="eme-prof-avatar">
                                    <?php if (!empty($prof['foto'])): ?>
                                        <img src="<?php echo esc_url($prof['foto']); ?>" alt="<?php echo esc_attr($prof['nome']); ?>" class="eme-prof-img" decoding="async" loading="lazy" />
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
                                    <strong>🎓 Formação:</strong> <?php echo esc_html($prof['form']); ?>
                                </div>
                                <div class="eme-prof-bio-box">
                                    <p class="eme-prof-bio eme-bio-truncated"><?php echo esc_html($prof['bio']); ?></p>
                                    <button type="button" class="eme-bio-toggle-btn" aria-expanded="false">Ler mais (+)</button>
                                </div>
                            </div>
                            <div class="eme-prof-footer">
                                <a href="<?php echo esc_url($wa_link); ?>" target="_blank" class="eme-prof-wa-btn" title="Falar no WhatsApp da Secretaria">
                                    💬 Quero fazer aula com <?php echo esc_html($primeiro_nome); ?>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Seção Trabalhe Conosco / Recrutamento -->
                <div class="eme-recruitment-box">
                    <div class="eme-recruitment-icon">💼</div>
                    <h3>Quer fazer parte do nosso time?</h3>
                    <p>Estamos sempre em busca de educadores e instrumentistas apaixonados pelo ensino da música com excelência e acolhimento.</p>
                    <a href="mailto:contato@escolaeme.com?subject=Curr%C3%ADculo%20-%20Corpo%20Docente%20EME" class="eme-btn-primary">
                        Envie seu currículo para contato@escolaeme.com
                    </a>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_professores', 'eme_shortcode_professores');
