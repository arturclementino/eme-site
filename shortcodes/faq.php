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
            'pergunta' => 'Quais modalidades estão disponíveis?',
            'resposta' => 'Oferecemos aulas de Violão, Guitarra, Piano Erudito e Popular, Teclado, Canto, Bateria, Violino, Viola de Arco, Violoncelo, Contrabaixo Acústico e Elétrico, Flauta Doce e Transversal, Saxofone, Cavaquinho, Ukulele, Musicalização Infantil, Teoria Musical e Percepção, e Prática de Banda. Consulte nossa página de Aulas para a grade completa.'
        ],
        [
            'pergunta' => 'A EME recebe alunos iniciantes?',
            'resposta' => 'Sim! Atendemos desde quem nunca tocou um instrumento até músicos em nível avançado, incluindo crianças, jovens e adultos, com acompanhamento pedagógico personalizado para o ritmo e objetivo de cada aluno.'
        ],
        [
            'pergunta' => 'Quais são os horários das aulas?',
            'resposta' => 'As aulas acontecem de segunda a sexta-feira, das 8h às 22h, e aos sábados pela manhã, conforme a disponibilidade de horários e professores.'
        ],
        [
            'pergunta' => 'Como funciona a matrícula?',
            'resposta' => 'Entre em contato pelo formulário do site ou WhatsApp. Agende uma visita à escola para conhecer o espaço e conversar com a coordenação pedagógica. A matrícula é feita após a definição da modalidade, professor e horário.'
        ],
        [
            'pergunta' => 'Qual a faixa etária mínima?',
            'resposta' => 'A musicalização infantil atende a partir de 4 anos com metodologia lúdica e sensorial. A maioria das aulas individuais de instrumentos aceita alunos a partir de 6 a 8 anos, dependendo do instrumento. Adultos e idosos também são muito bem-vindos!'
        ],
        [
            'pergunta' => 'É preciso ter instrumento próprio?',
            'resposta' => 'A escola possui instrumentos de alta qualidade para uso durante as aulas na sede. Recomendamos que o aluno adquira seu próprio instrumento para prática regular em casa, e nossos professores orientam na escolha do modelo ideal.'
        ],
        [
            'pergunta' => 'As aulas são presenciais ou online?',
            'resposta' => 'As aulas são presenciais na sede da EME em Belo Horizonte (bairro Padre Eustáquio), proporcionando contato direto com o professor e prática em salas tratadas acusticamente. Em casos excepcionais, aulas online podem ser combinadas diretamente com o professor.'
        ],
        [
            'pergunta' => 'Como agendar uma visita?',
            'resposta' => 'Use o botão "Agende uma visita" no site ou nos chame no WhatsApp pelo número (31) 98420-1358. A visita inclui tour pelo espaço, apresentação das salas, conversa com a coordenação e esclarecimento de dúvidas.'
        ],
        [
            'pergunta' => 'A EME oferece bolsas de estudo (Projeto Amigos da EME)?',
            'resposta' => 'Sim! O programa Amigos da EME oferece bolsas de estudo parciais e integrais para alunos com vulnerabilidade socioeconômica e vocação musical. Acesse a aba do Projeto Amigos da EME no site ou entre em contato para saber sobre processos seletivos.'
        ],
        [
            'pergunta' => 'Como funcionam os pagamentos e mensalidades?',
            'resposta' => 'As mensalidades são geridas de forma transparente e prática através do aplicativo Emusys. A escola trabalha com os bancos Cora e PagBank (boleto e PIX). Para valores detalhados de cada modalidade, entre em contato com nosso atendimento.'
        ],
        [
            'pergunta' => 'Como funciona a reposição de aulas?',
            'resposta' => 'A reposição segue o regulamento interno da escola. Ausências comunicadas com antecedência podem ser repostas conforme a disponibilidade do professor.'
        ],
        [
            'pergunta' => 'Como participar dos recitais?',
            'resposta' => 'Todos os alunos ativos da EME têm a oportunidade de se apresentar nos recitais semestrais em auditório profissional, vivenciando a experiência de palco com familiares e amigos.'
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
                    Tire suas dúvidas sobre matrículas, modalidades, horários, instrumentos, bolsas e metodologia da EME.
                </p>
            </div>
        </section>

        <section class="eme-faq-section">
            <div class="eme-container">
                <div class="eme-faq-accordion-list">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="eme-faq-item">
                            <button type="button" class="eme-faq-question" aria-expanded="false">
                                <span><?php echo esc_html($faq['pergunta']); ?></span>
                                <span class="eme-faq-icon">+</span>
                            </button>
                            <div class="eme-faq-answer">
                                <p style="margin: 0;"><?php echo esc_html($faq['resposta']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Dúvida adicional -->
                <div class="eme-faq-help-box">
                    <h3>Não encontrou a resposta que procurava?</h3>
                    <p>Nossa equipe de atendimento pedagógico está pronta para conversar com você no WhatsApp.</p>
                    <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Tenho%20uma%20d%C3%BAvida%20sobre%20as%20aulas%20da%20EME." target="_blank" class="eme-btn-primary" style="background: #25D366; border-color: #25D366; color: #FFFFFF !important; padding: 13px 30px; font-size: 15px; font-weight: 600; display: inline-flex; align-items: center; justify-content: center; gap: 10px; border-radius: 999px;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>Falar no WhatsApp (31) 98420-1358</span>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_faq', 'eme_shortcode_faq');
