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
            'resposta' => 'É um programa de bolsas de estudo que oferece bolsas para alunos com vulnerabilidade socioeconômica e demonstrado talento musical. Para apoiar o projeto, entre em contato pelo e-mail contato@escolaeme.com.'
        ],
        [
            'pergunta' => 'A EME tem parcerias?',
            'resposta' => 'Sim. A escola possui parcerias para desenvolvimento de comunicação, apoio a recursos culturais e aplicativo de gestão acadêmica.'
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
            <div class="eme-container" style="max-width: 860px;">
                <div class="eme-faq-accordion-list" style="display: flex; flex-direction: column; gap: 16px;">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="eme-faq-item" style="background: #FFFFFF; border-radius: 12px; border: 1px solid #E2DACD; overflow: hidden; box-shadow: 0 4px 15px rgba(15, 46, 35, 0.04); transition: border-color 0.3s ease;">
                            <button type="button" class="eme-faq-question" style="width: 100%; display: flex; justify-content: space-between; align-items: center; padding: 20px 24px; background: none; border: none; text-align: left; cursor: pointer; font-family: 'Cinzel', 'Montserrat', serif; font-size: 17px; font-weight: 700; color: #0F2E23; transition: color 0.2s ease;">
                                <span style="display: flex; align-items: center; gap: 12px;">
                                    <span style="color: #C17B4A; font-size: 18px;">❓</span>
                                    <span><?php echo esc_html($faq['pergunta']); ?></span>
                                </span>
                                <span class="eme-faq-icon" style="font-size: 20px; color: #C17B4A; font-weight: 700; transition: transform 0.3s ease;">+</span>
                            </button>
                            <div class="eme-faq-answer" style="display: none; padding: 0 24px 22px 56px; color: #374151; font-size: 15px; line-height: 1.7; border-top: 1px solid #F4EFE6; margin-top: 4px; padding-top: 16px;">
                                <p style="margin: 0;"><?php echo esc_html($faq['resposta']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Dúvida adicional -->
                <div class="eme-faq-help-box" style="margin-top: 50px; background: linear-gradient(135deg, #0F2E23 0%, #1B4332 100%); color: #FFFFFF; border-radius: 16px; padding: 36px 30px; text-align: center; box-shadow: 0 14px 35px rgba(15, 46, 35, 0.15);">
                    <h3 style="color: #FFFFFF !important; font-size: 22px; font-weight: 700; margin-bottom: 10px;">Não encontrou a resposta que procurava?</h3>
                    <p style="color: rgba(255, 255, 255, 0.92) !important; font-size: 15px; margin-bottom: 22px;">Nossa equipe de atendimento está pronta para conversar com você no WhatsApp.</p>
                    <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Tenho%20uma%20d%C3%BAvida%20sobre%20as%20aulas%20da%20EME." target="_blank" class="eme-btn-primary" style="background: #25D366; border-color: #25D366; color: #FFFFFF !important; padding: 12px 28px; font-size: 14px;">
                        💬 Falar no WhatsApp (31) 98420-1358
                    </a>
                </div>
            </div>
        </section>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqItems = document.querySelectorAll('.eme-faq-item');
        faqItems.forEach(item => {
            const btn = item.querySelector('.eme-faq-question');
            const ans = item.querySelector('.eme-faq-answer');
            const icon = item.querySelector('.eme-faq-icon');
            if (btn && ans) {
                btn.addEventListener('click', function() {
                    const isOpen = ans.style.display === 'block';
                    // Fechar todos
                    document.querySelectorAll('.eme-faq-answer').forEach(a => a.style.display = 'none');
                    document.querySelectorAll('.eme-faq-icon').forEach(i => {
                        i.textContent = '+';
                        i.style.transform = 'rotate(0deg)';
                    });
                    document.querySelectorAll('.eme-faq-item').forEach(i => i.style.borderColor = '#E2DACD');

                    if (!isOpen) {
                        ans.style.display = 'block';
                        icon.textContent = '−';
                        icon.style.transform = 'rotate(180deg)';
                        item.style.borderColor = '#C17B4A';
                    }
                });
            }
        });
    });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('eme_faq', 'eme_shortcode_faq');
