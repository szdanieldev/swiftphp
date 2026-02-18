#!/usr/bin/env php
<?php

/**
 * SwiftPHP CLI Tool - v1.2
 * Refined Validation & Manual Routing
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
    default           => print("Unknown command. Use 'php swift help'.\n"),
};

// --- HELPER: Interactive Input with Validation ---
function ask(string $question, bool $required = true, string $default = null): string
{
    while (true) {
        $placeholder = $default ? " [$default]" : "";
        echo "\033[1;34m?\033[0m $question$placeholder: ";
        $input = trim(fgets(STDIN));

        $final = $input ?: $default;

        if ($required && empty($final)) {
            echo "\033[1;31m  ! Error: This field cannot be empty.\033[0m\n";
            continue;
        }
        return (string)$final;
    }
}

// --- COMMANDS ---

function makeController()
{
    echo "\033[1;33m--- Create New Controller ---\033[0m\n";
    $name = ask("Controller Name (e.g. Profile)");
    $name = ucfirst($name);

    $path = __DIR__ . "/app/Controllers/{$name}.php";
    if (file_exists($path)) exit("❌ Error: Controller '{$name}' already exists!\n");

    $template = "<?php\n\nnamespace App\Controllers;\n\nuse App\Core\Controller;\n\nclass {$name} extends Controller\n{\n    public function index()\n    {\n        return \$this->view('" . strtolower($name) . "/index', [\n            'title' => '{$name} Page'\n        ]);\n    }\n}\n";

    file_put_contents($path, $template);

    echo "\n✅ \033[1;32mCreated Controller:\033[0m $path\n";
    echo "\033[1;36m💡 Please add the following to routes/web.php:\033[0m\n";
    echo "   '/" . strtolower($name) . "' => ['action' => '{$name}@index', 'protected' => false],\n\n";
}

function makeModel()
{
    echo "\033[1;33m--- Create New Model ---\033[0m\n";
    $name = ask("Model Name (e.g. User)");
    $name = ucfirst($name);
    $table = strtolower($name) . "s";

    $path = __DIR__ . "/app/Models/{$name}.php";
    if (file_exists($path)) exit("❌ Error: Model '{$name}' already exists!\n");

    $template = "<?php\n\nnamespace App\Models;\n\nuse App\Core\Database;\nuse PDO;\n\nclass {$name}\n{\n    protected PDO \$db;\n    protected string \$table = '{$table}';\n\n    public function __construct()\n    {\n        \$database = new Database();\n        \$this->db = \$database->getConnection();\n    }\n\n    public function all(): array\n    {\n        \$stmt = \$this->db->query(\"SELECT * FROM {\$this->table}\");\n        return \$stmt->fetchAll(PDO::FETCH_ASSOC);\n    }\n\n    public function find(int \$id): ?array\n    {\n        \$stmt = \$this->db->prepare(\"SELECT * FROM {\$this->table} WHERE id = :id LIMIT 1\");\n        \$stmt->execute(['id' => \$id]);\n        return \$stmt->fetch(PDO::FETCH_ASSOC) ?: null;\n    }\n}\n";

    file_put_contents($path, $template);
    echo "✅ \033[1;32mCreated Model:\033[0m $path\n";
}

function makeView()
{
    echo "\033[1;33m--- Create New View ---\033[0m\n";
    $folder = ask("Folder name (e.g. auth)");
    $file = ask("Filename", false, "index");

    $dir = __DIR__ . "/app/Views/" . strtolower($folder);
    if (!is_dir($dir)) mkdir($dir, 0777, true);

    $path = "$dir/{$file}.php";
    $template = "<div class=\"max-w-7xl mx-auto py-12 px-4\">\n    <h1 class=\"text-3xl font-bold\">Welcome to " . ucfirst($folder) . "</h1>\n    <p class=\"mt-4 text-slate-400\">Template for {$folder}/{$file}</p>\n</div>\n";

    file_put_contents($path, $template);
    echo "✅ \033[1;32mCreated View:\033[0m $path\n";
}

function makeLayout()
{
    echo "\033[1;33m--- Create New Layout ---\033[0m\n";
    $name = ask("Layout Name (e.g. dashboard)");

    $path = __DIR__ . "/app/Views/_layouts/" . strtolower($name) . ".php";
    if (file_exists($path)) exit("❌ Error: Layout already exists!\n");

    $template = "<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n    <meta charset=\"UTF-8\">\n    <title><?= \$title ?? 'SwiftPHP' ?></title>\n    <script src=\"https://cdn.tailwindcss.com\"></script>\n</head>\n<body class=\"bg-slate-950 text-slate-100\">\n    <?= \$content ?>\n</body>\n</html>";

    file_put_contents($path, $template);
    echo "✅ \033[1;32mCreated Layout:\033[0m $path\n";
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
            echo "✅ \033[1;32mSQL initialization successful.\033[0m\n";
        } else {
            echo "⚠️ Warning: database/init.sql not found.\n";
        }
    } catch (Exception $e) {
        exit("❌ DB Error: " . $e->getMessage() . "\n");
    }
}

function serveApp($port)
{
    echo "\n\033[1;32mSwiftPHP Development Server Started\033[0m\n";
    echo "URL: http://localhost:$port\n";
    echo "Root: public/\n";
    echo "OPcache: Disabled\n";
    echo "Press Ctrl+C to stop.\n\n";

    passthru("php -d opcache.enable=0 -S localhost:{$port} -t public/");
}

function showHelp()
{
    echo "
Usage: php swift [command]

Commands:
  \033[1;34mmake:controller\033[0m   Generate a controller and see routing instructions
  \033[1;34mmake:model\033[0m        Generate a model with PDO boilerplate
  \033[1;34mmake:view\033[0m         Generate a view file in a subfolder
  \033[1;34mmake:layout\033[0m       Generate a new base layout template
  \033[1;34mdb:init\033[0m           Initialize MySQL database from config
  \033[1;34mserve [port]\033[0m      Run the app with auto-refresh support
";
}
