<?php
$composerFile = __DIR__ . '/../../../composer.json';
$swiftPhpVersion = 'unknown';
if (file_exists($composerFile)) {
    $composer = json_decode(file_get_contents($composerFile), true);
    if (isset($composer['version'])) {
        $swiftPhpVersion = $composer['version'];
    }
}
?>

<body class="bg-slate-950 text-slate-100 min-h-screen mesh-gradient">

    <nav class="fixed w-full z-50 glass-effect border-b border-slate-800/50 animate-fade-in">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-primary-400 to-primary-600 rounded-lg flex items-center justify-center shadow-lg shadow-primary-500/20">
                        <span class="text-white font-bold text-lg">S</span>
                    </div>
                    <span class="text-xl font-bold text-white tracking-tight"><?= $this->lang('app_name', 'common') ?></span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/auth/login" class="text-slate-300 hover:text-white transition-colors text-sm font-medium px-4 py-2">
                        <?= $this->lang('login', 'common') ?>
                    </a>
                    <a href="/auth/register" class="bg-primary-600 hover:bg-primary-500 text-white px-5 py-2 rounded-full text-sm font-semibold transition-all shadow-lg shadow-primary-600/25 hover:shadow-primary-600/40">
                        <?= $this->lang('register', 'common') ?>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <?= $content ?? '' ?>

    <footer class="border-t border-slate-800/50 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-primary-400 to-primary-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-sm">S</span>
                    </div>
                    <div>
                        <span class="text-lg font-bold text-white"><?= $this->lang('app_name', 'common') ?></span>
                        <p class="text-slate-500 text-xs"><?= htmlspecialchars($swiftPhpVersion) ?> • <?= $this->lang('version_license', 'common') ?></p>
                    </div>
                </div>

                <div class="flex items-center space-x-6 text-sm text-slate-400">
                    <a href="https://github.com/szdanieldev/swiftphp" class="hover:text-primary-400 transition-colors flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                        GitHub
                    </a>
                    <span class="text-slate-600">|</span>
                    <span><?= $this->lang('pure_php', 'common') ?></span>
                </div>
            </div>
        </div>
    </footer>
</body>