/**
 * Deploy Script para o tema ativo fixo: eme-child-theme-old-6abacacb3cc53
 * Atualiza os arquivos diretamente no diretório do tema no Hostinger sem trocar de tema.
 */
const fs = require('fs');
const path = require('path');

const THEME_DIR_NAME = 'eme-child-theme-old-6abacacb3cc53';
const DOMAIN = 'escolaeme.com';

function getEnvConfig() {
    const envContent = fs.readFileSync(path.join(__dirname, '..', '.env'), 'utf8');
    const config = {};
    for (const line of envContent.split('\n')) {
        const match = line.match(/^\s*([\w.-]+)\s*=\s*(.*)?\s*$/);
        if (match) {
            config[match[1]] = (match[2] || '').trim();
        }
    }
    return config;
}

async function uploadFileTus(uploadBaseUrl, authKey, restAuthKey, remoteSubPath, localFilePath) {
    const fileBuffer = fs.readFileSync(localFilePath);
    const size = fileBuffer.length;
    const destUrl = `${uploadBaseUrl}/${remoteSubPath}?override=true`;

    // 1. POST create upload
    const postRes = await fetch(destUrl, {
        method: 'POST',
        headers: {
            'X-Auth': authKey,
            'X-Auth-Rest': restAuthKey,
            'Tus-Resumable': '1.0.0',
            'Upload-Length': size.toString(),
            'Upload-Offset': '0'
        }
    });

    if (postRes.status !== 201 && postRes.status !== 200) {
        throw new Error(`POST ${destUrl} failed with status ${postRes.status}: ${await postRes.text()}`);
    }

    // 2. PATCH upload content
    const patchRes = await fetch(destUrl, {
        method: 'PATCH',
        headers: {
            'X-Auth': authKey,
            'X-Auth-Rest': restAuthKey,
            'Tus-Resumable': '1.0.0',
            'Content-Type': 'application/offset+octet-stream',
            'Upload-Offset': '0'
        },
        body: fileBuffer
    });

    if (patchRes.status !== 204 && patchRes.status !== 200) {
        throw new Error(`PATCH ${destUrl} failed with status ${patchRes.status}: ${await patchRes.text()}`);
    }
}

async function main() {
    console.log(`[Deploy] Iniciando sincronização para o tema fixo: ${THEME_DIR_NAME}`);
    const env = getEnvConfig();
    const apiKey = env.HOSTINGER_API_KEY;
    const username = env.HOSTINGER_FTP_USER.split('.')[0]; // u679026315

    let url = process.env.TUS_URL;
    let auth_key = process.env.TUS_AUTH_KEY;
    let rest_auth_key = process.env.TUS_REST_AUTH_KEY;

    if (!url || !auth_key || !rest_auth_key) {
        // Obter credenciais de upload TUS
        console.log('[Deploy] Gerando credenciais TUS via Hostinger API...');
        const urlGenRes = await fetch(`https://api.hostinger.com/api/hosting/v1/accounts/${username}/websites/${DOMAIN}/files/upload-url`, {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${apiKey}`,
                'Content-Type': 'application/json'
            }
        });

        if (!urlGenRes.ok) {
            throw new Error(`Falha ao obter URL de upload: ${urlGenRes.status} ${await urlGenRes.text()}`);
        }

        const creds = await urlGenRes.json();
        url = creds.url;
        auth_key = creds.auth_key;
        rest_auth_key = creds.rest_auth_key;
    }
    console.log('[Deploy] Credenciais TUS configuradas com sucesso.');

    // Arquivos para upload (apenas arquivos do tema)
    const baseDir = path.join(__dirname, '..');
    const ignoreList = new Set(['.git', '.vscode', '.agents', 'node_modules', '.env', 'test_ftp.ps1', 'scripts']);

    function collectFiles(dir, relativeTo) {
        let results = [];
        const entries = fs.readdirSync(dir, { withFileTypes: true });
        for (const entry of entries) {
            if (ignoreList.has(entry.name)) continue;
            const fullPath = path.join(dir, entry.name);
            const relPath = path.relative(relativeTo, fullPath).replace(/\\/g, '/');
            if (entry.isDirectory()) {
                results = results.concat(collectFiles(fullPath, relativeTo));
            } else if (entry.isFile()) {
                results.push({ fullPath, relPath });
            }
        }
        return results;
    }

    const files = collectFiles(baseDir, baseDir);
    console.log(`[Deploy] Enviando ${files.length} arquivos para wp-content/themes/${THEME_DIR_NAME}...`);

    for (const f of files) {
        const destPath = `wp-content/themes/${THEME_DIR_NAME}/${f.relPath}`;
        process.stdout.write(`  -> Upload: ${f.relPath}... `);
        await uploadFileTus(url, auth_key, rest_auth_key, destPath, f.fullPath);
        console.log('OK');
    }

    console.log('\n[Deploy] Todos os arquivos foram sincronizados com sucesso no tema ativo fixo!');
}

main().catch(err => {
    console.error('[Deploy ERROR]:', err);
    process.exit(1);
});
