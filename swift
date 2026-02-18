#!/usr/bin/env php
<?php

/**
 * SwiftPHP CLI Tool
 */

if (php_sapi_name() !== 'cli') exit("This tool must be run from the command line.\n");

$command = $argv[1] ?? 'help';

match ($command) {
    'make:controller' => makeController(),
    'make:model'      => makeModel(),
    'make:view'       => makeView(),
    'make:layout'     => makeLayout(),
    'db:init'         => initDatabase(),
    'serve'           => serveApp($argv[2] ?? 8000),
    'help'            => showHelp(),
    default           => print("Unknown command. Use 'php swift help' for a list of commands.\n"),
};

// --- HELPER: Interactive Input ---
function ask(string $question, string $default = null): string
{
    $placeholder = $default ? " [$default]" : "";
    echo "\033[1;34m?\033[0m $question$placeholder: ";
    $input = trim(fgets(STDIN));
    return $input ?: ($default ?? '');
}

// --- COMMANDS ---

function makeController()
{
    echo "\033[1;33m--- Create New Controller ---\033[0m\n";
    $name = ask("Controller Name (e.g. Product)");
    $name = ucfirst($name);

    $path = __DIR__ . "/app/Controllers/{$name}.php";
    if (file_exists($path)) exit("❌ Error: Controller already exists!\n");

    $template = "<?php\n\nnamespace App\Controllers;\n\nuse App\Core\Controller;\n\nclass {$name} extends Controller\n{\n    public function index()\n    {\n        return \$this->view('" . strtolower($name) . "/index', [\n            'title' => '{$name} Page'\n        ]);\n    }\n}\n";

    file_put_contents($path, $template);
    echo "✅ Created Controller: $path\n";

    // Auto-update Router
    updateRouter($name);
}

function makeModel()
{
    echo "\033[1;33m--- Create New Model ---\033[0m\n";
    $name = ask("Model Name (e.g. Product)");
    $name = ucfirst($name);
    $table = strtolower($name) . "s";

    $path = __DIR__ . "/app/Models/{$name}.php";
    $template = "<?php\n\nnamespace App\Models;\n\nuse App\Core\Database;\nuse PDO;\n\nclass {$name}\n{\n    protected PDO \$db;\n    protected string \$table = '{$table}';\n\n    public function __construct()\n    {\n        \$database = new Database();\n        \$this->db = \$database->getConnection();\n    }\n\n    public function all(): array\n    {\n        \$stmt = \$this->db->query(\"SELECT * FROM {\$this->table}\");\n        return \$stmt->fetchAll(PDO::FETCH_ASSOC);\n    }\n\n    public function find(int \$id): ?array\n    {\n        \$stmt = \$this->db->prepare(\"SELECT * FROM {\$this->table} WHERE id = :id LIMIT 1\");\n        \$stmt->execute(['id' => \$id]);\n        return \$stmt->fetch(PDO::FETCH_ASSOC) ?: null;\n    }\n}\n";

    file_put_contents($path, $template);
    echo "✅ Created Model: $path\n";
}

function makeView()
{
    echo "\033[1;33m--- Create New View ---\033[0m\n";
    $folder = ask("Folder name (e.g. product)");
    $file = ask("Filename", "index");

    $dir = __DIR__ . "/app/Views/" . strtolower($folder);
    if (!is_dir($dir)) mkdir($dir, 0777, true);

    $path = "$dir/{$file}.php";
    $template = "<div class=\"max-w-7xl mx-auto py-12 px-4\">\n    <h1 class=\"text-3xl font-bold\">Welcome to " . ucfirst($folder) . "</h1>\n    <p class=\"mt-4 text-slate-400\">Template for {$folder}/{$file}</p>\n</div>\n";

    file_put_contents($path, $template);
    echo "✅ Created View: $path\n";
}

function makeLayout()
{
    echo "\033[1;33m--- Create New Layout ---\033[0m\n";
    $name = ask("Layout Name (e.g. admin)");

    $path = __DIR__ . "/app/Views/_layouts/" . strtolower($name) . ".php";
    $template = "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n    <meta charset=\"UTF-8\">\n    <title><?= \$title ?? 'SwiftPHP' ?></title>\n    <script src=\"https://cdn.tailwindcss.com\"></script>\n</head>\n<body class=\"bg-slate-950 text-slate-100\">\n    <?= \$content ?>\n</body>\n</html>";

    file_put_contents($path, $template);
    echo "✅ Created Layout: $path\n";
}

function updateRouter($name)
{
    $routePath = __DIR__ . "/config/routes.php";
    $routeFile = file_get_contents($routePath);
    $slug = strtolower($name);

    // Add to GET
    $getSearch = "'GET' => [";
    $getReplacement = "'GET' => [\n        '/{$slug}' => ['action' => '{$name}@index', 'protected' => false],";
    $routeFile = str_replace($getSearch, $getReplacement, $routeFile);

    // Add to POST
    $postSearch = "'POST' => [";
    $postReplacement = "'POST' => [\n        '/{$slug}' => ['action' => '{$name}@index', 'protected' => false],";
    $routeFile = str_replace($postSearch, $postReplacement, $routeFile);

    file_put_contents($routePath, $routeFile);
    echo "✅ Updated Router: Added /$slug routes.\n";
}

function initDatabase()
{
    echo "\033[1;33m--- Database Initialization ---\033[0m\n";
    $config = require __DIR__ . '/config/config.php';
    $dbCfg = $config['database'];

    try {
        $pdo = new PDO("mysql:host={$dbCfg['host']}", $dbCfg['user'], $dbCfg['pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $pdo->exec("CREATE DATABASE IF NOT EXISTS `{$dbCfg['name']}` CHARACTER SET utf8mb4");
        $pdo->exec("USE `{$dbCfg['name']}`");

        $sqlPath = __DIR__ . '/database/init.sql';
        if (file_exists($sqlPath)) {
            $pdo->exec(file_get_contents($sqlPath));
            echo "✅ SQL initialization successful.\n";
        } else {
            echo "⚠️ Warning: database/init.sql not found.\n";
        }
    } catch (Exception $e) {
        exit("❌ DB Error: " . $e->getMessage() . "\n");
    }
}

function serveApp($port)
{
    echo "\n\033[1;32mSwiftPHP Development Server\033[0m\n";
    echo "Listening on http://localhost:$port\n";
    echo "Document root: public/\n";
    echo "Press Ctrl+C to stop.\n\n";

    // -d opcache.enable=0 forces PHP to re-read files every request
    passthru("php -d opcache.enable=0 -S localhost:{$port} -t public/");
}

function showHelp()
{
    echo "
Usage: php swift [command] [options]

Commands:
  \033[1;34mmake:controller\033[0m   Interactive controller & route generator
  \033[1;34mmake:model\033[0m        Interactive model generator (PDO)
  \033[1;34mmake:view\033[0m         Interactive view generator
  \033[1;34mmake:layout\033[0m       Interactive layout generator
  \033[1;34mdb:init\033[0m           Create DB & run database/init.sql
  \033[1;34mserve [port]\033[0m      Start dev server (Default: 8000)
";
}
