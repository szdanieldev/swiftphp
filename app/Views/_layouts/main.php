<body class="bg-slate-950 text-slate-100 min-h-screen font-sans antialiased">
    <nav class="glass-effect border-b border-slate-800/50 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                <div class="flex items-center space-x-3">
                    <img src="/assets/images/swiftphp.svg" class="w-8 h-8 shadow-lg" alt="SwiftPHP Logo">
                    <span class="text-lg font-bold tracking-tight text-white"><?= $this->lang('app_name', 'common') ?></span>
                </div>

                <div class="flex items-center space-x-6">

                    <div class="relative flex items-center group gap-2">
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
                        </select>
                    </div>

                    <span class="h-4 w-[1px] bg-slate-800"></span>

                    <div class="flex items-center space-x-4">
                        <a href="/profile/edit" class="text-slate-400 hover:text-white transition-colors text-sm font-medium">
                            <?= $this->lang('profile', 'common') ?>
                        </a>
                        <a href="/profile/password" class="text-slate-400 hover:text-white transition-colors text-sm font-medium">
                            <?= $this->lang('password', 'common') ?>
                        </a>
                        <a href="/auth/logout" class="text-red-400/80 hover:text-red-400 transition-colors text-sm font-semibold px-2 py-1 rounded hover:bg-red-500/10">
                            <?= $this->lang('logout', 'common') ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="animate-fade-in">
            <?= $content ?>
        </div>
    </main>

    <script>
        /**
         * Nyelvváltás kezelése sütivel kombinálva
         * Az URL paraméter frissítése után a Controller.php elvégzi a többit.
         */
        function changeLanguage(lang) {
            const url = new URL(window.location.href);
            url.searchParams.set('lang', lang);
            window.location.href = url.toString();
        }
    </script>
</body>