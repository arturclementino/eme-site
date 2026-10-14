# Dynamic Workspace Rule: Tema Ativo Fixo & Deploy Hostinger

O site em produção (`escolaeme.com`) utiliza como tema filho ativo e fixo:
- **Diretório do tema:** `wp-content/themes/eme-child-theme-old-6abacacb3cc53`
- **Nome do tema:** `Hello Elementor Child EME`
- **Stylesheet:** `eme-child-theme-old-6abacacb3cc53`

### Regras Críticas:
1. **NUNCA trocar ou ativar outro tema** no WordPress. A troca de slug quebra a vinculação de `theme_mods`, menus e configurações do Elementor Kit com a apresentação ao vivo.
2. Todas as alterações locais devem ser sincronizadas diretamente para a pasta do tema ativo (`wp-content/themes/eme-child-theme-old-6abacacb3cc53/`).
3. Ao finalizar alterações no código do tema:
   - Fazer commit com mensagem descritiva (`git commit`).
   - Fazer push para `origin main` (`git push`).
   - Enviar os arquivos alterados diretamente para `wp-content/themes/eme-child-theme-old-6abacacb3cc53/` via File Browser / TUS API do Hostinger.
   - Limpar o cache LiteSpeed (`hostinger-ai/litespeed-cache-flush`) para refletir as mudanças ao vivo imediatamente.

