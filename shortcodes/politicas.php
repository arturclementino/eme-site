<?php
/**
 * Shortcode Politicas: [eme_politicas]
 * EME - Escola de Música Esperança
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
                <span class="eme-badge-tag">Transparência & LGPD</span>
                <h1 class="eme-hero-title">Termos, Privacidade & Regulamento</h1>
                <p class="eme-hero-subtitle">
                    Conheça nossas diretrizes de privacidade de dados, termos de uso do portal e regulamento interno.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <div class="eme-policy-box">
                    <h2>1. Política de Privacidade (LGPD)</h2>
                    <p>
                        A <strong>Escola de Música Esperança (EME)</strong> e o <strong>Núcleo de Arte e Música Esperança (NAME)</strong> valorizam a privacidade de seus alunos, responsáveis e visitantes. Todos os dados pessoais coletados por meio dos formulários em nosso site (como nome, e-mail, telefone e curso de interesse) são utilizados exclusivamente para atendimento comercial, agendamento de visitas e comunicação institucional, conforme prevê a Lei Geral de Proteção de Dados (Lei nº 13.709/2018).
                    </p>
                    <p>
                        Seus dados jamais serão compartilhados com terceiros não autorizados ou comercializados. A qualquer momento, você pode solicitar a alteração ou exclusão dos seus dados cadastrais através do e-mail <strong>contato@escolaeme.com</strong>.
                    </p>

                    <hr class="eme-policy-hr" />

                    <h2>2. Termos de Uso do Site</h2>
                    <p>
                        Ao navegar no site da EME, o usuário concorda em utilizar as informações e conteúdos para fins exclusivamente pessoais e não comerciais. É proibida a reprodução de fotos, vídeos, materiais didáticos e marcas registradas sem autorização prévia e expressa da direção do NAME.
                    </p>

                    <hr class="eme-policy-hr" />

                    <h2>3. Resumo do Regulamento Interno</h2>
                    <ul>
                        <li><strong>Pontualidade:</strong> O horário das aulas é rigorosamente cumprido. Atrasos do aluno não serão compensados ao final da aula.</li>
                        <li><strong>Faltas e Reposições:</strong> Faltas informadas à secretaria com no mínimo 24 horas de antecedência darão direito a agendamento de reposição dentro do mesmo mês.</li>
                        <li><strong>Conservação de Instrumentos:</strong> Os equipamentos e instrumentos disponibilizados na escola devem ser manuseados com cuidado e responsabilidade.</li>
                        <li><strong>Direito de Imagem:</strong> Fotos e gravações de apresentações e recitais da escola poderão ser divulgadas em canais institucionais oficiais mediante autorização no contrato de matrícula.</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_politicas', 'eme_shortcode_politicas');
