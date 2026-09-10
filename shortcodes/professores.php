<?php
/**
 * Shortcode Professores: [eme_professores]
 * EME - Escola de Música Esperança (Corpo Docente: 19 Professores)
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_professores($atts) {
    $professores = [
        [
            'nome' => 'Ana Calina',
            'instr' => 'Violino, Viola e Teoria Musical',
            'form' => 'Bacharel em Música pela UEMG, sob orientação do professor Luciano Gatelli.',
            'bio' => 'Atuou como monitora, professora e musicista da Orquestra Jovem do Tribunal de Justiça e da Orquestra Stradivarius (Colégio Santo Agostinho). Nos palcos, acompanhou artistas como Flávio Venturini, Eli Soares, Dudu Nobre, Roberta Sá, Ricardo Herz, Leila Pinheiro, Ed Motta, entre outros. Integra a Academia da Orquestra Ouro Preto e participou das três récitas da 9ª Sinfonia de Beethoven com a Orquestra Sinfônica de Minas Gerais (2023). Atualmente é integrante do Quarteto de Cordas da Rede Batista de Educação.'
        ],
        [
            'nome' => 'Andrea Souza',
            'instr' => 'Musicalização Infantil, Piano e Flauta Doce',
            'form' => 'Formação em Música pela UEMG. Musicoterapia pela Censupeg. Psicologia pela UNA.',
            'bio' => 'Educadora musical, musicoterapeuta e psicóloga com mais de 12 anos de experiência. Atua com educação musical e musicalização infantil, oferecendo aulas de piano e flauta doce, além de atendimentos terapêuticos. Sua proposta é usar a música como ponte entre o sentir, o aprender e o viver, promovendo bem-estar, desenvolvimento e o despertar de dons e talentos.'
        ],
        [
            'nome' => 'Bruna Garcia',
            'instr' => 'Piano Erudito e Popular',
            'form' => 'Bacharelado em Música com habilitação em Piano pela UEMG, sob orientação da profa. Drª. Miriam Bastos.',
            'bio' => 'Pianista natural de Belo Horizonte, teve seu primeiro contato com a música através do projeto social Cariúnas. Premiada no Concurso Nacional de Piano do Conservatório Souza Lima (2015) e 2º lugar no projeto "Segunda Musical" da ALMG (2024). Participou de projetos e apresentações na Fundação de Educação Artística, Conservatório da UFMG e Teatro Leão de Formosa. Frequentou masterclasses com Eduardo Monteiro, Bernardo Santos, Alessandro Fonseca, Sally Pinkas e Evan Hirsch. É professora de piano desde 2020, habilitada para todas as faixas etárias.'
        ],
        [
            'nome' => 'Cleberson Pereira',
            'instr' => 'Violão e Guitarra',
            'form' => 'Mais de 20 anos de vivência musical entre palco e sala de aula. Produtor artístico e diretor de projetos.',
            'bio' => 'Mais do que ensinar violão e guitarra, Cleberson Pereira compartilha uma vivência musical construída ao longo de mais de 20 anos de dedicação. Sua paixão pela música o levou a fundar escolas, produzir artistas, dirigir projetos como o Divas do Soul e viver a intensidade de festivais como o Festival Internacional Tudo é Jazz. Acompanhou artistas como Rafa, Camila Campos, Arianne, Áquila, e integrou a banda Entre Salmos, vencedora do Festival Promessas da Rede Globo em 2013. É produtor musical da cantora Christiana Lobo e possui estúdio próprio. Em suas aulas desperta musicalidade, confiança e identidade em cada aluno.'
        ],
        [
            'nome' => 'Daniel Matos',
            'instr' => 'Regência Coral, Bateria e Violão',
            'form' => 'Licenciatura em Música. Violão Erudito pelo Conservatório de Vitória da Conquista-BA. Regência Orquestral pelo Sesi-SP (Maestro João Carlos Martins).',
            'bio' => 'Músico, educador e regente de coral há mais de 15 anos. Atualmente é regente do Coral Esperança e do conjunto de câmara Cordas de Esperança, que compõem o serviço litúrgico da Igreja Esperança em Belo Horizonte. Iniciou seus estudos pela bateria aos 8 anos e, na adolescência, estudou canto, teoria musical e regência coral. Possui EP de música cristã brasileira "Em busca do Sol" disponível nas plataformas de streaming. Sua jornada de estudo e aprimoramento se mantém viva diante da vastidão do universo sonoro.'
        ],
        [
            'nome' => 'Douglas Santiago',
            'instr' => 'Violoncelo',
            'form' => 'Bacharel em Violoncelo pela UFMG. Integrante da Orquestra Sinfônica da PMMG.',
            'bio' => 'Natural de Timóteo-MG, iniciou seus estudos musicais na infância com a flauta doce e passou ao violoncelo na adolescência. Foi professor na Escola Municipal de Música de Ipatinga-MG e no Sesc BH. Participou de orquestras em Minas Gerais (Orquestra de Câmara Vale do Aço, Orquestra Sinfônica de Minas, Orquestra Ouro Preto, entre outras) e de festivais de música em Juiz de Fora. Frequentou masterclasses com músicos do cenário nacional e internacional.'
        ],
        [
            'nome' => 'Esther de Oliveira',
            'instr' => 'Violino, Violão e Ukulele',
            'form' => 'Bacharelado em Música pela UEMG.',
            'bio' => 'Violinista com vasta experiência em prática de orquestra. Integrou a Orquestra Jovem Sesi Minas, Orquestra Jovem do Tribunal de Justiça (onde também atuou como monitora), Orquestra Jovem Inhotim e Orquestra Jovem Belo Horizonte. Atualmente integra o Quarteto de Cordas da Rede Batista de Educação. É professora de violão, ukulele e violino. Atua também na música popular como cantora, compositora e produtora de conteúdo no Instagram (@oliveiraesther_). Tem um projeto de duo vocal, AnaEstherDuo, com releituras e arranjos de músicas da MPB.'
        ],
        [
            'nome' => 'Glênio Vilas Boas',
            'instr' => 'Piano, Teoria e Educação Musical',
            'form' => 'Licenciado em Música com habilitação em Piano pela UEMG. Especialista em Metodologia da Educação Musical pela FACEL. Mestre em Música pela UFPE. L\'Abri Brasil (2021).',
            'bio' => 'Músico, educador e pianista com mais de 30 anos de experiência em equipes de louvor. Foi professor da graduação em música no Instituto Federal do Sertão Pernambucano e atualmente é professor de Artes/Música no Colégio Militar de Belo Horizonte (CMBH). Membro ativo da Quarta Igreja Presbiteriana de Belo Horizonte, contribuiu com diversos projetos de educação musical voltados para igrejas, fortalecendo a formação de novos músicos e líderes de louvor com excelência, sensibilidade e compromisso cristão.'
        ],
        [
            'nome' => 'João Camilo',
            'instr' => 'Harmonia Funcional',
            'form' => 'Professor titular do curso complementar de Harmonia Funcional na EME.',
            'bio' => 'Ministra o curso de Harmonia Funcional em formato modular (8 horas-aula divididas em 4 encontros). O Módulo I foi lançado no primeiro semestre de 2026 com 17 inscritos. O Módulo II está previsto para o segundo semestre, consolidando a linha de cursos complementares da EME voltados para rearmonização, modulação e percepção harmônica avançada para arranjadores e instrumentistas.'
        ],
        [
            'nome' => 'João Pedro Gonçalves da Silva',
            'instr' => 'Piano e Canto',
            'form' => 'Licenciatura em Música pela UEMG.',
            'bio' => 'Atua como professor de piano, cantor, corista e pianista em grupos de Belo Horizonte. Sua atuação combina performance instrumental e vocal, trazendo para as aulas uma visão integrada da música como expressão artística completa.'
        ],
        [
            'nome' => 'Lucas Medeiros',
            'instr' => 'Saxofone, Flauta e Instrumentos de Sopro',
            'form' => 'Bacharel em Saxofone pela UFMG. Integrante de Big Bands e grupos de câmara em BH.',
            'bio' => 'Saxofonista e educador com mais de 12 anos de carreira. Atua no ensino de saxofone alto, tenor, soprano e flauta transversal, combinando técnicas de emissão de som, afinação, articulação e improvisação no jazz, bossa nova e música gospel. Tem vasta experiência em arranjos para naipes de sopro.'
        ],
        [
            'nome' => 'Marcos Vinícius',
            'instr' => 'Contrabaixo Elétrico, Teoria e Percepção Auditiva',
            'form' => 'Formação em Música Popular pela UEMG. Produtor musical e arranjador.',
            'bio' => 'Contrabaxista versátil com sólida experiência em palcos, estúdios e salas de aula. Especialista em condução rítmica (groove), slap, harmonia aplicada ao baixo elétrico e preparação de alunos para prática de conjunto e bandas.'
        ],
        [
            'nome' => 'Rafael Ávila',
            'instr' => 'Canto & Fisiologia Vocal',
            'form' => 'Especialista em fisiologia vocal e técnica vocal aplicada ao canto.',
            'bio' => 'Professor de canto com mais de 20 anos de experiência dedicados ao desenvolvimento vocal de cantores e profissionais da voz. Ao longo de duas décadas, orientou mais de 500 alunos, oferecendo um trabalho pautado no conhecimento técnico aprofundado, no respeito às individualidades vocais e no aprimoramento contínuo da performance artística. Sua abordagem une ciência e sensibilidade musical, proporcionando resultados expressivos tanto para iniciantes quanto para cantores experientes. Reconhecido pela didática acessível e pelo compromisso com a saúde vocal.'
        ],
        [
            'nome' => 'Regiany Carlos',
            'instr' => 'Violino',
            'form' => 'Bacharel em Violino pela UEMG.',
            'bio' => 'Natural de Timóteo-MG, iniciou seus estudos no violino aos 9 anos. Ingressou na Orquestra Vale do Aço, atuando nos naipes de violinos e posteriormente como spalla até 2011. Participou de diversas orquestras em Minas Gerais (Sinfônica do Estado, Sesi Minas, Orquestra Minas Barroca, Orquestra de Ouro Preto, Jovem Orquestra de Ouro Branco, Orquestra de Betim). Apresentou-se em Rostock, na Alemanha, na University for Music and Theater. Participou de festivais em Juiz de Fora, Lages, Bagé e Poços de Caldas, tendo aulas com o professor Alejandro Drago, entre outros.'
        ],
        [
            'nome' => 'Rodrigo Leles',
            'instr' => 'Bateria & Percussão',
            'form' => 'Baterista há 25 anos. Professor há 18 anos. Vencedor do prêmio BDMG Jovem Instrumentista (2015). Festival Odery e Modern Drummer (2007).',
            'bio' => 'Baterista, professor e coordenador musical da Primeira Igreja Batista de Belo Horizonte, onde também coordena a escola de música Catedral. Possui estúdio de gravação onde atua para produtores nacionais e internacionais. Acompanha pelo país o cantor Marcos Almeida em shows, programas de TV e gravações. Integra a banda cristã Canto Verbo, de alcance nacional. Atua também na cena instrumental e em trabalhos freelancers com artistas de diversos gêneros.'
        ],
        [
            'nome' => 'Samuel Gomes',
            'instr' => 'Contrabaixo Elétrico & Acústico',
            'form' => 'Formado em Baixo Elétrico pela Bituca e em Música Popular pela UFMG. Vencedor do prêmio Jovem Instrumentista do BDMG (2012).',
            'bio' => 'Com experiência em shows e gravações com grandes artistas como Alok, André Valadão, Gabriel Elias, Banda Melim, João Guilherme, David Quinlan, Adhemar de Campos, Preto no Branco, Marcos Almeida, Arianne, Áquila, entre outros. Atuou com nomes da música instrumental como Márcio Bahia, Nivaldo Ornelas, Fernando Merlino, Eduardo Neves, Esdras Neném, Vittor Santos e Silvério Pontes. Tem experiência como professor nas escolas Núcleo Villa Lobos, Minueto, Fábrica de Artes, entre outras.'
        ],
        [
            'nome' => 'Sandra Alves',
            'instr' => 'Flauta Transversal, Flauta Doce, Teoria e Musicalização Infantil',
            'form' => 'Graduada em Flauta Transversal pela UFMG (1998). Especialista em Educação Musical pela UFMG (2001). Mestre em Performance Musical pela UFMG (2007). Especialista em Neurociência Aplicada à Educação Musical.',
            'bio' => 'Iniciou seus estudos musicais aos 9 anos com o flautista Raul D\'Ávila, no CMI-UFMG. Estudou com Antônio Carlos Guimarães, Arthur Andrès, Maurício Freire e Rogério Wolf. Participou de masterclasses com Celso Woltzenlogel, António Carlos Carrasqueira, Charles Schlueter e Yanos Balint, e de festivais em Curitiba, Brasília, Campos de Jordão e Pescara (Itália). Como solista, esteve à frente da Orquestra Sinfônica da UFMG, Orquestra de Câmara da Universidade de Belo Horizonte e Orquestra de Câmara de Itaúna. Desde 2009 é flautista na Orquestra Sinfônica de Minas Gerais (1ª flauta e chefe de naipe).'
        ],
        [
            'nome' => 'Talita Braga Olivetti',
            'instr' => 'Piano Erudito e Correpetição',
            'form' => 'Bacharel em Piano pela UNICSUL. Escola Municipal de Música de SP (EMM). Licenciatura em Música pelo Claretiano. Pós-graduada em Música e Cognição pela UNINTER.',
            'bio' => 'Pianista com 2º lugar no V Concurso de Piano "Villa Lobos" (2009). Atuou como pianista correpetidora no Grupo Experimental de Ópera Eloisa Baldin, com récitas na Sala Olido e no Teatro João Caetano da ópera "As Bodas de Fígaro". Participou do Festival Música nas Montanhas (2011) com aulas com Gilberto Tinetti e Eduardo Monteiro, e do Festival de Ourinhos (2008 e 2009) com o professor Flávio Varani.'
        ],
        [
            'nome' => 'Warnei Ferreira da Costa',
            'instr' => 'Guitarra e Violão',
            'form' => 'Músico profissional há mais de 10 anos, com formação junto a mestres como Mozart Mello, Nelson Faria, Celso Moreira e Roger Franco.',
            'bio' => 'Guitarrista e violonista com mais de 10 anos de carreira profissional e vasta experiência em ensino. Aprendeu com grandes nomes da música brasileira e atuou como produtor musical, ampliando sua visão prática da música. Tem experiência com harmonia e improvisação, áreas que gosta de explorar nas aulas de maneira simples e didática. Sempre busca ensinar de forma clara, respeitando o ritmo e os objetivos de cada aluno.'
        ]
    ];

    ob_start();
    ?>
    <div class="eme-professores-wrapper">
        <!-- Hero Sub-header -->
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Corpo Docente EME (19 Professores)</span>
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
                        O corpo docente da Escola de Música Esperança é composto por <strong>19 professores qualificados</strong> com formação acadêmica (bacharéis, licenciados e mestres) e vasta vivência de palco, orquestras e estúdios. Conheça a trajetória de quem faz a música acontecer na EME:
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
                                    <span><?php echo esc_html(mb_substr($prof['nome'], 0, 1)); ?></span>
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

