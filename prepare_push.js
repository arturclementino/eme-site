const fs = require('fs');
const path = require('path');

const root = __dirname;
const relativeFiles = [
    'style.css',
    'header.php',
    'footer.php',
    'functions.php',
    '.gitignore',
    'assets/css/style.css',
    'assets/js/main.js',
    'shortcodes/amigos.php',
    'shortcodes/aulas.php',
    'shortcodes/blog.php',
    'shortcodes/contato.php',
    'shortcodes/eventos.php',
    'shortcodes/faq.php',
    'shortcodes/galeria.php',
    'shortcodes/home.php',
    'shortcodes/politicas.php',
    'shortcodes/professores.php',
    'shortcodes/quemsomos.php'
];

const files = relativeFiles.map(rel => {
    const fullPath = path.join(root, rel);
    const content = fs.readFileSync(fullPath, 'utf8');
    return {
        path: rel.replace(/\\/g, '/'),
        content
    };
});

fs.writeFileSync(path.join(root, 'files_payload.json'), JSON.stringify(files, null, 2));
console.log(`Prepared ${files.length} files for push.`);
