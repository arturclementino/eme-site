# Workspace Rule: Tema Ativo Fixo & Deploy Obrigatório Hostinger

O site em produção (`escolaeme.com`) utiliza como tema filho ativo e fixo:
- **Diretório do tema:** `wp-content/themes/eme-child-theme-old-6abacacb3cc53`
- **Nome do tema:** `Hello Elementor Child EME`
- **Stylesheet:** `eme-child-theme-old-6abacacb3cc53`

### Regra de Ouro do Usuário
**Toda e qualquer alteração de código ou estilo no tema deve ser enviada TANTO ao GitHub quanto à Hostinger.**
O repositório Git NÃO faz deploy automático. Portanto, uma tarefa só pode ser dada como concluída após o envio direto ao servidor Hostinger e a limpeza de cache.

### Protocolo de Publicação Passo a Passo:
1. **Git**:
   * `git add .`
   * `git commit -m "..."`
   * `git push origin main`
2. **Deploy Hostinger**:
   * Obter URL/chaves TUS via MCP `hostinger-hosting` (`hosting_files_generate-upload-url` com `domain: "escolaeme.com"` e `username: "u679026315"`).
   * Executar `node scripts/deploy.js` com as variáveis `$env:TUS_URL`, `$env:TUS_AUTH_KEY` e `$env:TUS_REST_AUTH_KEY`.
3. **Limpeza de Cache**:
   * Executar `hostinger-ai/litespeed-cache-flush` via MCP `wordpress-escolaeme.com` (ou `wordpress_litespeed-cache_purge-lite-speed` no `hostinger-wordpress`).
4. **Validação Ao Vivo**:
   * Fazer um teste de `fetch()` direto na URL de produção para verificar se as alterações já estão ativas para o usuário final antes de responder.
