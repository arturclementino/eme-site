<?php
/**
 * Shortcode Politicas: [eme_politicas]
 * EME - Escola de MÃºsica EsperanÃ§a
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_politicas($atts) {
    ob_start();
    ?>
    <div class="eme-politicas-wrapper">
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">TransparÃªncia & LGPD</span>
                <h1 class="eme-hero-title">Termos, Privacidade & Regulamento</h1>
                <p class="eme-hero-subtitle">
                    ConheÃ§a nossas diretrizes de privacidade de dados, termos de uso do portal e regulamento interno.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <div class="eme-policy-box">
                    <h2>1. PolÃ­tica de Privacidade (LGPD)</h2>
                    <p>
                        A Escola de MÃºsica EsperanÃ§a (EME) e o NÃºcleo de Arte e MÃºsica EsperanÃ§a (NAME) valorizam a privacidade de seus alunos, responsÃ¡veis e visitantes. Todos os dados pessoais coletados por meio dos formulÃ¡rios em nosso site (como nome, e-mail, telefone e curso de interesse) sÃ£o utilizados exclusivamente para atendimento comercial, agendamento de visitas e comunicaÃ§Ã£o institucional, conforme prevÃª a Lei Geral de ProteÃ§Ã£o de Dados (Lei nÂº 13.709/2018).
                    </p>
                    <p>
                        Seus dados jamais serÃ£o compartilhados com terceiros nÃ£o autorizados ou comercializados. A qualquer momento, vocÃª pode solicitar a alteraÃ§Ã£o ou exclusÃ£o dos seus dados cadastrais atravÃ©s do e-mail contato@escolaeme.com.
                    </p>

                    <hr class="eme-policy-hr" />

                    <h2>2. Termos de Uso do Site</h2>
                    <p>
                        Ao navegar no site da EME, o usuÃ¡rio concorda em utilizar as informaÃ§Ãµes e conteÃºdos para fins exclusivamente pessoais e nÃ£o comerciais. Ã‰ proibida a reproduÃ§Ã£o de fotos, vÃ­deos, materiais didÃ¡ticos e marcas registradas sem autorizaÃ§Ã£o prÃ©via e expressa da direÃ§Ã£o do NAME.
                    </p>

                    <hr class="eme-policy-hr" />

                    <h2>3. Resumo do Regulamento Interno</h2>
                    <ul>
                        <li>Pontualidade: O horÃ¡rio das aulas Ã© rigorosamente cumprido. Atrasos do aluno nÃ£o serÃ£o compensados ao final da aula.</li>
                        <li>Faltas e ReposiÃ§Ãµes: Faltas informadas Ã  secretaria com no mÃ­nimo 24 horas de antecedÃªncia darÃ£o direito a agendamento de reposiÃ§Ã£o dentro do mesmo mÃªs.</li>
                        <li>ConservaÃ§Ã£o de Instrumentos: Os equipamentos e instrumentos disponibilizados na escola devem ser manuseados com cuidado e responsabilidade.</li>
                        <li>Direito de Imagem: Fotos e gravaÃ§Ãµes de apresentaÃ§Ãµes e recitais da escola poderÃ£o ser divulgadas em canais institucionais oficiais mediante autorizaÃ§Ã£o no contrato de matrÃ­cula.</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_politicas', 'eme_shortcode_politicas');

