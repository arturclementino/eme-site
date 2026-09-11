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
        <div class="eme-footer-grid" style="display: grid; grid-template-columns: 2fr 1.5fr 1fr; gap: 40px;">
            <!-- Coluna 1: Marca & Apresentação -->
            <div class="eme-footer-col">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="eme-brand eme-footer-brand">
                    <img src="https://escolaeme.com/wp-content/uploads/2026/08/eme-horizontal-verde-renovo-scaled-e1787075643364.png" alt="Escola de Música Esperança" class="eme-footer-logo" style="filter: brightness(0) invert(1) !important;" />
                </a>
                <p class="eme-footer-about" style="line-height: 1.7; opacity: 0.9;">
                    Projeto do Núcleo de Arte e Música Esperança (NAME), braço cultural e educacional da Igreja Esperança. Integrando fé, cultura e excelência no ensino musical em Belo Horizonte.
                </p>
            </div>

            <!-- Coluna 2: Contato & Atendimento -->
            <div class="eme-footer-col">
                <h4>Contato & Atendimento</h4>
                <ul class="eme-footer-contact" style="list-style: none; padding: 0; margin: 0; line-height: 2;">
                    <li>📍 Rua Bonaparte, 86 — Padre Eustáquio, Belo Horizonte / MG</li>
                    <li>📱 WhatsApp: <a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20a%20EME." target="_blank">(31) 98420-1358</a></li>
                    <li>✉️ <a href="mailto:contato@escolaeme.com">contato@escolaeme.com</a></li>
                    <li>⏰ Segunda a sexta, 8h às 22h</li>
                </ul>
            </div>

            <!-- Coluna 3: Redes & LGPD -->
            <div class="eme-footer-col">
                <h4>Rede Social Oficial</h4>
                <div class="eme-footer-social">
                    <a href="https://instagram.com/escolaeme" target="_blank" class="eme-social-pill" style="display: inline-flex; align-items: center; gap: 8px; font-weight: 700; background: rgba(255,255,255,0.12); color: #fff; padding: 10px 18px; border-radius: 30px; text-decoration: none; border: 1px solid rgba(255,255,255,0.2);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        <span>Instagram @escolaeme</span>
                    </a>
                </div>
                <div style="margin-top: 25px;">
                    <a href="<?php echo esc_url(home_url('/contato')); ?>" class="eme-footer-policy-link" style="color: rgba(255,255,255,0.8); font-size: 13px;">Termos de Privacidade & Proteção de Dados (LGPD)</a>
                </div>
            </div>
        </div>

        <div class="eme-footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> EME — Escola de Música Esperança / Núcleo de Arte e Música Esperança (NAME). Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<!-- Botão Flutuante de WhatsApp -->
<a href="https://wa.me/5531984201358?text=Ol%C3%A1!%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20as%20aulas%20da%20EME." target="_blank" class="eme-whatsapp-float" aria-label="Falar pelo WhatsApp com a Secretaria EME" title="Falar com a Secretaria da EME">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.087z"/></svg>
</a>

<?php wp_footer(); ?>
</body>
</html>
