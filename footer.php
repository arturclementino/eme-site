<?php
/**
 * Footer Template - Hello Elementor Child EME
 */
if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Footer Completo EME -->
<footer class="eme-main-footer">
    <div class="eme-container">
        <div class="eme-footer-grid">
            <!-- Coluna 1: Marca & Identidade -->
            <div class="eme-footer-col">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="eme-brand eme-footer-brand">
                    <img src="https://escolaeme.com/wp-content/uploads/2026/08/eme-horizontal-verde-renovo-scaled-e1787075643364.png" alt="Escola de Música Esperança — EME" class="eme-footer-logo" />
                </a>
                <p class="eme-footer-about">
                    Projeto do <strong>Núcleo de Arte e Música Esperança (NAME)</strong>, braço cultural e educacional da Igreja Esperança. Unindo técnica e acolhimento, excelência e acessibilidade para servir Belo Horizonte através do ensino musical com propósito.
                </p>
                <div class="eme-footer-pillars">
                    <span>🎵 Arte</span> • <span>✝️ Fé</span> • <span>🎓 Excelência</span>
                </div>
            </div>

            <!-- Coluna 2: Atendimento & Sede -->
            <div class="eme-footer-col">
                <h4 class="eme-footer-heading">Atendimento & Sede</h4>
                <ul class="eme-footer-contact-list">
                    <li>
                        <span class="eme-fc-icon">📍</span>
                        <span>Rua Bonaparte, 86 — Padre Eustáquio<br><small>Belo Horizonte / MG — CEP: 30720-070</small></span>
                    </li>
                    <li>
                        <span class="eme-fc-icon eme-fc-whatsapp">📱</span>
                        <span>WhatsApp: <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas%20da%20EME." target="_blank">(31) 98420-1358</a></span>
                    </li>
                    <li>
                        <span class="eme-fc-icon eme-fc-email">✉️</span>
                        <span>E-mail: <a href="mailto:contato@escolaeme.com">contato@escolaeme.com</a></span>
                    </li>
                    <li>
                        <span class="eme-fc-icon eme-fc-clock">⏰</span>
                        <span>Segunda a sexta-feira, das 8h às 22h</span>
                    </li>
                </ul>
            </div>

            <!-- Coluna 3: Rede Social Oficial & LGPD -->
            <div class="eme-footer-col">
                <h4 class="eme-footer-heading">Canal Oficial</h4>
                <div class="eme-footer-social">
                    <a href="https://www.instagram.com/eme.esperanca/" target="_blank" rel="noopener noreferrer" class="eme-social-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        <span>@eme.esperanca</span>
                    </a>
                </div>
                <div class="eme-footer-legal">
                    <a href="javascript:void(0);" class="eme-footer-policy-link eme-open-lgpd-modal" id="eme-footer-lgpd-btn" role="button">
                        Termos de Privacidade & Proteção de Dados (LGPD)
                    </a>
                </div>
            </div>
        </div>

        <!-- Rodapé Inferior (Copyright) -->
        <div class="eme-footer-bottom">
            <p>
                &copy; <?php echo date('Y'); ?> <strong>Escola de Música Esperança (EME)</strong> — Núcleo de Arte e Música Esperança (NAME) / Igreja Esperança. Todos os direitos reservados.
            </p>
        </div>
    </div>
</footer>

<!-- Pop-up Modal Global de Termos de Privacidade e Proteção de Dados (LGPD) -->
<div id="eme-modal-lgpd-global" class="eme-modal-overlay" aria-hidden="true" role="dialog" aria-modal="true">
    <div class="eme-modal-content">
        <button type="button" class="eme-modal-close eme-modal-close-btn" aria-label="Fechar">&times;</button>
        <div class="eme-modal-header">
            <h3>Termos de Privacidade e Proteção de Dados (LGPD)</h3>
            <span class="eme-modal-sub">Escola de Música Esperança (EME / NAME)</span>
        </div>
        <div class="eme-modal-body">
            <p><strong>1. Coleta e Finalidade dos Dados:</strong> Os dados pessoais fornecidos neste portal (nome completo, e-mail, telefone/WhatsApp, assunto e curso de interesse) são coletados única e exclusivamente para possibilitar o atendimento da secretaria pedagógica da EME, agendamento de visitas presenciais, envio de orientações sobre turmas e esclarecimento de dúvidas.</p>
            
            <p><strong>2. Uso Exclusivo e Não Compartilhamento:</strong> A EME compromete-se a não vender, alugar ou compartilhar suas informações com terceiros ou parceiros comerciais para fins de publicidade não solicitada (spam).</p>
            
            <p><strong>3. Armazenamento Seguro:</strong> Todas as informações fornecidas são tratadas com sigilo e armazenadas em ambiente seguro, em conformidade com a Lei Geral de Proteção de Dados Pessoais (Lei nº 13.709/2018 - LGPD).</p>
            
            <p><strong>4. Direitos do Titular:</strong> Você tem o direito de solicitar a atualização, confirmação, correção ou exclusão definitiva dos seus dados de nossos cadastros a qualquer momento pelo e-mail oficial <a href="mailto:contato@escolaeme.com">contato@escolaeme.com</a>.</p>
        </div>
        <div class="eme-modal-footer">
            <button type="button" class="eme-btn-primary eme-modal-accept-btn" style="padding: 10px 26px; font-size: 13.5px;">Compreendi e Aceito</button>
        </div>
    </div>
</div>

<!-- Botão Flutuante de WhatsApp -->
<a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas%20da%20EME." 
   target="_blank" 
   class="eme-whatsapp-float" 
   aria-label="Falar pelo WhatsApp com a Secretaria EME" 
   title="Falar com a Secretaria da EME">
    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="#FFFFFF">
        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.087z"/>
        <path d="M17.472 14.382c-.301-.15-1.782-.88-2.058-.98-.275-.1-.476-.15-.676.15-.2.299-.776.98-.952 1.18-.175.2-.351.225-.652.075-.3-.15-1.268-.468-2.416-1.493-.893-.797-1.496-1.78-1.672-2.081-.175-.301-.019-.464.131-.614.136-.135.301-.351.451-.526.15-.175.2-.301.3-.501.1-.2.05-.376-.025-.526-.075-.15-.676-1.63-.926-2.233-.243-.587-.49-.508-.676-.517-.175-.008-.376-.01-.576-.01-.2 0-.526.075-.802.376-.275.301-1.052 1.028-1.052 2.507 0 1.478 1.077 2.906 1.228 3.107.15.2 2.119 3.235 5.133 4.537.717.31 1.277.495 1.714.634.72.229 1.375.197 1.892.12.576-.086 1.782-.728 2.033-1.43.25-.702.25-1.303.175-1.43-.075-.128-.275-.203-.576-.353z"/>
    </svg>
</a>

<!-- Botão Back-to-Top -->
<button class="eme-back-to-top" id="eme-back-to-top" aria-label="Voltar ao topo" title="Voltar ao topo">
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
</button>

<?php wp_footer(); ?>
</body>
</html>
