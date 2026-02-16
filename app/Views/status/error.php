<?php
$layout = 'master';

$config = require __DIR__ . '/../../../config/config.php';
$appName    = $config['app']['name'] ?? 'App';
$appVersion = $config['app']['version'] ?? '1.0.0';

$composerFile = __DIR__ . '/../../../composer.json';
$swiftPhpVersion = 'unknown';
if (file_exists($composerFile)) {
    $composer = json_decode(file_get_contents($composerFile), true);
    if (isset($composer['version'])) {
        $swiftPhpVersion = $composer['version'];
    }
}
?>

<body class="bg-slate-950 text-slate-100 min-h-screen flex items-center justify-center p-4 relative overflow-hidden">

    <div class="absolute inset-0 bg-slate-950">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-red-600/5 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-primary-600/5 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>

    <div class="relative z-10 w-full max-w-lg text-center">

        <div class="inline-flex items-center justify-center mb-8 animate-float">
            <div class="relative">
                <div class="absolute inset-0 bg-red-500/20 rounded-full blur-xl"></div>
                <div class="relative w-32 h-32 rounded-full glass-effect border border-red-500/20 flex items-center justify-center">
                    <span class="text-6xl font-bold text-red-400"><?= $data['code'] ?? '500' ?></span>
                </div>
            </div>
        </div>

        <div class="glass-effect rounded-2xl p-8 border border-slate-800 shadow-2xl">
            <h1 class="text-2xl md:text-3xl font-bold text-white mb-4"><?= $this->lang('title', 'error') ?></h1>
            <p class="text-slate-400 text-lg mb-8 leading-relaxed">
                <?= htmlspecialchars($data['message'] ?? $this->lang('description', 'error')) ?>
            </p>

            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="/" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-primary-600 hover:bg-primary-500 text-white font-medium transition-all shadow-lg shadow-primary-600/20 hover:shadow-primary-600/40">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <?= $this->lang('home_button', 'error') ?>
                </a>
                <a href="javascript:history.back()" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 font-medium transition-all border border-slate-700 hover:border-slate-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    <?= $this->lang('back_button', 'error') ?>
                </a>
            </div>
        </div>

        <div class="mt-8 text-slate-600 text-sm">
            <p><?= htmlspecialchars($this->lang('app_label', 'error')) ?>: <?= htmlspecialchars($appName) ?> (<?= htmlspecialchars($appVersion) ?>)</p>
            <span><?= htmlspecialchars($this->lang('swiftphp_label', 'error')) ?>: <?= htmlspecialchars($swiftPhpVersion) ?></span>
        </div>

    </div>

</body>