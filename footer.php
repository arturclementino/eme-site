<?php
/**
 * Footer Template - Hello Elementor Child EME
 */
if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Footer Completo EME -->
<footer class="eme-main-footer" style="background: linear-gradient(180deg, #0F2E23 0%, #091F17 100%) !important; color: #FFFFFF !important; padding: 60px 0 30px !important; border-top: 4px solid #C17B4A !important; position: relative !important; font-family: 'Source Sans 3', sans-serif !important;">
    <div class="eme-container">
        <div class="eme-footer-grid" style="display: grid; grid-template-columns: 1.8fr 1.4fr 1.2fr; gap: 40px; margin-bottom: 30px;">
            <!-- Coluna 1: Marca & Identidade -->
            <div class="eme-footer-col">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="eme-brand eme-footer-brand" style="display: inline-block; margin-bottom: 16px;">
                    <img src="https://escolaeme.com/wp-content/uploads/2026/08/eme-horizontal-verde-renovo-scaled-e1787075643364.png" alt="Escola de Música Esperança — EME" class="eme-footer-logo" style="height: 48px; width: auto; filter: brightness(0) invert(1) !important; opacity: 0.98;" />
                </a>
                <p class="eme-footer-about" style="line-height: 1.65; color: rgba(255, 255, 255, 0.88); font-size: 14px; margin-bottom: 16px;">
                    Projeto do <strong>Núcleo de Arte e Música Esperança (NAME)</strong>, braço cultural e educacional da Igreja Esperança. Unindo técnica e acolhimento, excelência e acessibilidade para servir Belo Horizonte através do ensino musical com propósito.
                </p>
                <div style="display: flex; gap: 12px; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #E5A93C;">
                    <span>🎵 Arte</span> • <span>✝️ Fé</span> • <span>🎓 Excelência</span>
                </div>
            </div>

            <!-- Coluna 2: Atendimento & Sede -->
            <div class="eme-footer-col">
                <h4 style="font-family: 'Cinzel', serif !important; color: #FFFFFF !important; font-size: 17px; font-weight: 700; margin-bottom: 16px; letter-spacing: 0.5px; border-bottom: 2px solid #C17B4A; padding-bottom: 6px; display: inline-block;">
                    Atendimento & Sede
                </h4>
                <ul class="eme-footer-contact" style="list-style: none; padding: 0; margin: 0; line-height: 2; font-size: 14px; color: rgba(255, 255, 255, 0.9);">
                    <li style="display: flex; align-items: flex-start; gap: 10px;">
                        <span style="color: #C17B4A; font-size: 16px;">📍</span>
                        <span>Rua Bonaparte, 86 — Padre Eustáquio<br><small style="color: rgba(255,255,255,0.7);">Belo Horizonte / MG — CEP: 30720-070</small></span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 10px; margin-top: 4px;">
                        <span style="color: #25D366; font-size: 16px;">📱</span>
                        <span>WhatsApp: <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas%20da%20EME." target="_blank" style="color: #FFFFFF; font-weight: 700; text-decoration: underline;">(31) 98420-1358</a></span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 10px;">
                        <span style="color: #E5A93C; font-size: 16px;">✉️</span>
                        <span>E-mail: <a href="mailto:contato@escolaeme.com" style="color: #FFFFFF; font-weight: 700;">contato@escolaeme.com</a></span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 10px;">
                        <span style="color: rgba(255,255,255,0.7); font-size: 16px;">⏰</span>
                        <span>Segunda a sexta-feira, das 8h às 22h</span>
                    </li>
                </ul>
            </div>

            <!-- Coluna 3: Rede Social Oficial & LGPD -->
            <div class="eme-footer-col">
                <h4 style="font-family: 'Cinzel', serif !important; color: #FFFFFF !important; font-size: 17px; font-weight: 700; margin-bottom: 16px; letter-spacing: 0.5px; border-bottom: 2px solid #C17B4A; padding-bottom: 6px; display: inline-block;">
                    Canal Oficial
                </h4>
                <div class="eme-footer-social" style="margin-bottom: 18px;">
                    <a href="https://www.instagram.com/eme.esperanca/" target="_blank" rel="noopener noreferrer" class="eme-social-pill" style="display: inline-flex; align-items: center; gap: 10px; font-weight: 700; font-size: 13px; background: linear-gradient(135deg, #833ab4 0%, #fd1d1d 50%, #fcb045 100%); color: #FFFFFF !important; padding: 10px 20px; border-radius: 30px; text-decoration: none; box-shadow: 0 6px 20px rgba(253, 29, 29, 0.3); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        <span>@eme.esperanca</span>
                    </a>
                </div>
                <div>
                    <a href="<?php echo esc_url(home_url('/contato')); ?>" class="eme-footer-policy-link" style="color: rgba(255, 255, 255, 0.85); font-size: 13px; text-decoration: underline;">
                        Termos de Privacidade & Proteção de Dados (LGPD)
                    </a>
                </div>
            </div>
        </div>

        <!-- Rodapé Inferior (Copyright) -->
        <div class="eme-footer-bottom" style="padding-top: 20px; border-top: 1px solid rgba(255, 255, 255, 0.1); text-align: center; font-size: 13px; color: rgba(255, 255, 255, 0.75);">
            <p style="margin: 0; line-height: 1.6;">
                &copy; <?php echo date('Y'); ?> <strong>Escola de Música Esperança (EME)</strong> — Núcleo de Arte e Música Esperança (NAME) / Igreja Esperança. Todos os direitos reservados.
            </p>
        </div>
    </div>
</footer>

<!-- Botão Flutuante de WhatsApp -->
<a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas%20da%20EME." 
   target="_blank" 
   class="eme-whatsapp-float" 
   aria-label="Falar pelo WhatsApp com a Secretaria EME" 
   title="Falar com a Secretaria da EME"
   style="position: fixed !important; bottom: 25px !important; right: 25px !important; width: 60px !important; height: 60px !important; background-color: #25D366 !important; color: #FFFFFF !important; border-radius: 50% !important; display: flex !important; align-items: center !important; justify-content: center !important; box-shadow: 0 8px 25px rgba(37, 211, 102, 0.45) !important; z-index: 999999 !important; text-decoration: none !important; transition: transform 0.3s ease, box-shadow 0.3s ease !important;">
    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="#FFFFFF" style="width: 34px !important; height: 34px !important; display: block !important;">
        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.087z"/>
        <path d="M17.472 14.382c-.301-.15-1.782-.88-2.058-.98-.275-.1-.476-.15-.676.15-.2.299-.776.98-.952 1.18-.175.2-.351.225-.652.075-.3-.15-1.268-.468-2.416-1.493-.893-.797-1.496-1.78-1.672-2.081-.175-.301-.019-.464.131-.614.136-.135.301-.351.451-.526.15-.175.2-.301.3-.501.1-.2.05-.376-.025-.526-.075-.15-.676-1.63-.926-2.233-.243-.587-.49-.508-.676-.517-.175-.008-.376-.01-.576-.01-.2 0-.526.075-.802.376-.275.301-1.052 1.028-1.052 2.507 0 1.478 1.077 2.906 1.228 3.107.15.2 2.119 3.235 5.133 4.537.717.31 1.277.495 1.714.634.72.229 1.375.197 1.892.12.576-.086 1.782-.728 2.033-1.43.25-.702.25-1.303.175-1.43-.075-.128-.275-.203-.576-.353z"/>
    </svg>
</a>

<?php wp_footer(); ?>
</body>
</html>
