<?php
// Betöltjük a configot
$config = require __DIR__ . '/../../../config/config.php';

$title = $title ?? $config['app']['default_title'] ?? 'App';
$lang  = $config['app']['default_lang'] ?? 'hu';
?>

<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
    <?= $content ?? '' ?>
</body>

</html>