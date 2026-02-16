<body class="bg-slate-950 text-slate-100 min-h-screen">
    <nav class="glass-effect border-b border-slate-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <img src="/assets/images/swiftphp.svg" class="w-8 h-8 shadow-lg" alt="SwiftPHP Logo">
                    <span class="text-lg font-bold"><?= $this->lang('app_name', 'common') ?></span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/profile/edit" class="text-slate-400 hover:text-white transition-colors text-sm"><?= $this->lang('profile', 'common') ?></a>
                    <a href="/profile/password" class="text-slate-400 hover:text-white transition-colors text-sm"><?= $this->lang('password', 'common') ?></a>
                    <a href="/auth/logout" class="text-red-400 hover:text-red-300 transition-colors text-sm"><?= $this->lang('logout', 'common') ?></a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <?= $content ?>
    </main>
</body>