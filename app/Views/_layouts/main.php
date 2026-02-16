<body class="bg-slate-950 text-slate-100 min-h-screen">
    <nav class="glass-effect border-b border-slate-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-primary-400 to-primary-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-sm">S</span>
                    </div>
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