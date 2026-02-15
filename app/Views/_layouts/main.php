<!DOCTYPE html>
<html lang="hu" class="h-full">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'My App' ?></title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-gray-100 text-gray-800 h-full">

    <header class="bg-white shadow p-4">
        <h1 class="text-xl font-bold">My App</h1>
    </header>

    <main class="container mx-auto p-4">
        <?= $content ?? '' ?>
    </main>

</body>

</html>