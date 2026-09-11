# Dynamic Workspace Rule: Always Deploy Updates to Git / Hostinger

Whenever making changes to theme code or files in this project:
1. Automatically stage modified files with `git add`.
2. Commit with a clear, descriptive message (`git commit`).
3. Push changes immediately to `origin main` (`git push`).
4. Execute `hosting_deployWordpressTheme` via Hostinger MCP tool for domain `escolaeme.com` and theme slug `eme-child-theme` to directly update theme files on the server.
5. Flush LiteSpeed Cache using `hostinger-ai-assistant-litespeed-cache-flush` so Hostinger reflects the changes live without delay.
