# Regras do Projeto Escola EME (escolaeme.com)

## Regra de Ouro: Deploy Obrigatório Hostinger + Git
**Toda e qualquer alteração de código ou estilo no tema deve ser enviada TANTO ao GitHub quanto ao servidor Hostinger.**
O repositório Git NÃO faz deploy automático. Portanto, **o trabalho só é considerado concluído após a publicação ao vivo no Hostinger e limpeza de cache**.

---

### Fluxo Obrigatório de Publicação

Sempre que fizer alterações no projeto:

1. **Commit & Push Git**:
   ```bash
   git add .
   git commit -m "tipo(escopo): descrição clara"
   git push origin main
   ```

2. **Deploy na Hostinger (Tema Ativo Fixo)**:
   * **Tema ativo no servidor**: `wp-content/themes/eme-child-theme-old-6abacacb3cc53`
   * **NUNCA trocar o slug ou ativar outro tema** (para não desvincular configurações do Elementor).
   * Obter credenciais de upload via MCP Hostinger (`hostinger-hosting` -> `execute` com `operation: "hosting_files_generate-upload-url"`, `domain: "escolaeme.com"`, `username: "u679026315"`).
   * Executar o script de sincronização:
     ```powershell
     $env:TUS_URL = "<url_gerada>"
     $env:TUS_AUTH_KEY = "<auth_key>"
     $env:TUS_REST_AUTH_KEY = "<rest_auth_key>"
     node scripts/deploy.js
     ```

3. **Limpeza Obrigatória de Cache**:
   * Executar a limpeza completa via MCP `wordpress-escolaeme.com`:
     `hostinger-ai-execute-ability` com `name: "hostinger-ai/litespeed-cache-flush"`, `parameters: {}`
     *(ou via `hostinger-wordpress` -> `wordpress_litespeed-cache_purge-lite-speed`)*.

4. **Validação Ao Vivo**:
   * Fazer requisição HTTP (`fetch` com timestamp/nocache) nas páginas afetadas para confirmar que o conteúdo novo já está respondendo com HTTP 200 antes de entregar a resposta ao usuário.
