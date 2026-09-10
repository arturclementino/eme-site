<?php
/**
 * Shortcode FAQ: [eme_faq]
 * EME - Escola de Música Esperança
 */

if (!defined('ABSPATH')) {
    exit;
}

function eme_shortcode_faq($atts) {
    $faqs = [
        [
            'pergunta' => 'Como funciona a matrícula?',
            'resposta' => 'Entre em contato pelo formulário do site ou WhatsApp. Agende uma visita à escola para conhecer o espaço e conversar com a coordenação. A matrícula é feita após a definição do curso, professor e horário.'
        ],
        [
            'pergunta' => 'Qual a faixa etária mínima?',
            'resposta' => 'A musicalização infantil atende a partir de 4 anos. A maioria dos instrumentos aceita alunos a partir de 6 a 8 anos, dependendo do instrumento. Consulte a página de Aulas para detalhes.'
        ],
        [
            'pergunta' => 'É preciso ter instrumento próprio?',
            'resposta' => 'A escola possui instrumentos para uso durante as aulas, mas recomendamos que o aluno tenha seu próprio instrumento para estudo em casa. Para cursos como musicalização infantil, os instrumentos são fornecidos pela escola.'
        ],
        [
            'pergunta' => 'As aulas são presenciais ou online?',
            'resposta' => 'As aulas são presenciais, na sede da EME em Belo Horizonte. Eventuais aulas online podem ser combinadas diretamente com o professor, em casos excepcionais.'
        ],
        [
            'pergunta' => 'Como agendar uma visita?',
            'resposta' => 'Use o formulário "Agende uma visita" no site ou entre em contato pelo WhatsApp. A visita inclui tour pelo espaço, conversa com a coordenação e demonstração dos cursos disponíveis.'
        ],
        [
            'pergunta' => 'Como funcionam os pagamentos?',
            'resposta' => 'As mensalidades são geridas pelo aplicativo Emusys. A escola trabalha com os bancos Cora e PagBank. Para detalhes sobre valores, entre em contato pelo e-mail financeiro@escolaeme.com.'
        ],
        [
            'pergunta' => 'Como funciona a reposição de aulas?',
            'resposta' => 'A reposição de aulas segue o regulamento interno da escola. Em caso de ausência, comunique com antecedência para que a reposição seja agendada conforme a disponibilidade do professor.'
        ],
        [
            'pergunta' => 'Como participar dos recitais?',
            'resposta' => 'Todos os alunos ativos da EME participam dos recitais semestrais. Os eventos são abertos a familiares e comunidade. Os recitais do segundo semestre de 2026 acontecem nos dias 10 e 11 de novembro.'
        ],
        [
            'pergunta' => 'O que é o Projeto Amigos da EME?',
            'resposta' => 'É um programa de bolsas de estudo que oferece descontos de até 85% para alunos com vulnerabilidade socioeconômica e talento musical. Atualmente atende 4 alunos bolsistas. Para apoiar o projeto, entre em contato pelo e-mail contato@escolaeme.com.'
        ],
        [
            'pergunta' => 'A EME tem parcerias?',
            'resposta' => 'Sim. A escola tem parceria com a agência Casus (comunicação e redes sociais), plataforma E-missão (captação de recursos culturais) e aplicativo Emusys (gestão acadêmica).'
        ]
    ];

    ob_start();
    ?>
    <div class="eme-faq-wrapper">
        <section class="eme-hero-sub">
            <div class="eme-container">
                <span class="eme-badge-tag">Dúvidas Frequentes</span>
                <h1 class="eme-hero-title">Perguntas Frequentes (FAQ)</h1>
                <p class="eme-hero-subtitle">
                    Tire suas dúvidas sobre matrículas, visitas, instrumentos, recitais e política pedagógica da EME.
                </p>
            </div>
        </section>

        <section class="eme-section">
            <div class="eme-container">
                <div class="eme-faq-accordion-list">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="eme-faq-item">
                            <button class="eme-faq-question">
                                <span><?php echo esc_html($faq['pergunta']); ?></span>
                                <span class="eme-faq-icon">+</span>
                            </button>
                            <div class="eme-faq-answer">
                                <p><?php echo esc_html($faq['resposta']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Dúvida adicional -->
                <div class="eme-faq-help-box">
                    <h3>Não encontrou a resposta que procurava?</h3>
                    <p>Nossa equipe de atendimento está pronta para conversar diretamente no WhatsApp.</p>
                    <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Tenho%20uma%20d%C3%BAvida%20sobre%20a%20EME." target="_blank" class="eme-btn-primary eme-btn-whatsapp">
                        Falar no WhatsApp (31) 98420-1358
                    </a>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_faq', 'eme_shortcode_faq');
