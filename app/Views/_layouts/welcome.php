<?php
$composerFile = __DIR__ . '/../../../composer.json';
$swiftPhpVersion = 'unknown';
if (file_exists($composerFile)) {
    $composer = json_decode(file_get_contents($composerFile), true);
    $swiftPhpVersion = $composer['version'] ?? '1.0.0';
}
?>

<body class="bg-slate-950 text-slate-100 min-h-screen mesh-gradient font-sans antialiased">

    <nav class="fixed w-full z-50 glass-effect border-b border-slate-800/50 animate-fade-in">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                <div class="flex items-center space-x-3 shrink-0">
                    <img src="/assets/images/swiftphp.svg" class="w-8 h-8 shadow-lg" alt="Logo">
                    <span class="text-xl font-bold text-white tracking-tight hidden sm:block">
                        <?= $this->lang('app_name', 'common') ?>
                    </span>
                </div>

                <div class="flex items-center space-x-2 sm:space-x-4">

                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-2.5 flex items-center pointer-events-none text-slate-400 group-hover:text-primary-400 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <select
                            onchange="changeLanguage(this.value)"
                            class="bg-slate-900/50 border border-slate-700 text-slate-300 text-xs rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-8 pr-2 py-1.5 appearance-none cursor-pointer hover:bg-slate-800 transition-all shadow-sm">
                            <option value="hu" <?= $this->locale === 'hu' ? 'selected' : '' ?>>HU</option>
                            <option value="en" <?= $this->locale === 'en' ? 'selected' : '' ?>>EN</option>
                            <option value="de" <?= $this->locale === 'de' ? 'selected' : '' ?>>DE</option>
                            <option value="es" <?= $this->locale === 'es' ? 'selected' : '' ?>>ES</option>
                            <option value="fr" <?= $this->locale === 'fr' ? 'selected' : '' ?>>FR</option>
                            <option value="it" <?= $this->locale === 'it' ? 'selected' : '' ?>>IT</option>
                            <option value="pt" <?= $this->locale === 'pt' ? 'selected' : '' ?>>PT</option>
                        </select>
                    </div>

                    <span class="h-6 w-[1px] bg-slate-800 mx-2"></span>

                    <div class="flex items-center space-x-1 sm:space-x-3">
                        <a href="/auth/login" class="text-slate-400 hover:text-white transition-colors text-sm font-medium px-3 py-2">
                            <?= $this->lang('login', 'common') ?>
                        </a>
                        <a href="/auth/register" class="bg-primary-600 hover:bg-primary-500 text-white px-4 py-2 rounded-full text-sm font-semibold transition-all shadow-lg shadow-primary-600/20 hover:scale-105 active:scale-95">
                            <?= $this->lang('register', 'common') ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-20">
        <?= $content ?? '' ?>
    </main>

    <footer class="border-t border-slate-800/50 bg-slate-950/80 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8">

                <div class="flex items-center space-x-4">
                    <img src="/assets/images/swiftphp.svg" class="w-10 h-10 opacity-80" alt="SwiftPHP">
                    <div>
                        <span class="text-lg font-bold text-white leading-none inline-block mb-1">
                            <?= $this->lang('app_name', 'common') ?>
                        </span>
                        <p class="text-slate-500 text-xs font-mono">
                            v<?= htmlspecialchars($swiftPhpVersion) ?> • <?= $this->lang('version_license', 'common') ?>
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center items-center gap-x-8 gap-y-4 text-sm text-slate-400">
                    <a href="https://github.com/szdanieldev/swiftphp" target="_blank" class="hover:text-primary-400 transition-colors flex items-center gap-2 group">
                        <svg class="w-5 h-5 fill-current group-hover:scale-110 transition-transform" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                        <span>GitHub</span>
                    </a>
                    <span class="text-slate-800 hidden sm:inline">|</span>
                    <span class="bg-slate-900/50 px-3 py-1 rounded-md border border-slate-800/50"><?= $this->lang('pure_php', 'common') ?></span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function changeLanguage(lang) {
            // A window.location.search kezelése biztosítja, hogy más GET paraméterek is megmaradjanak (ha vannak)
            const url = new URL(window.location.href);
            url.searchParams.set('lang', lang);
            window.location.href = url.toString();
        }
    </script>
</body>