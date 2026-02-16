<?php
$layout = 'auth';
?>
<div class="absolute inset-0 bg-slate-950">
    <div class="absolute top-0 left-1/4 w-72 h-72 bg-primary-600/10 rounded-full blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 2s;"></div>
</div>

<div class="relative z-10 w-full max-w-md">
    <div class="text-center mb-8">
        <div class="inline-flex items-center justify-center w-16 h-16 mb-4 rounded-2xl bg-gradient-to-br from-primary-400 to-primary-600 shadow-lg shadow-primary-500/20 pulse-slow">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
        </div>
        <h1 class="text-3xl font-bold text-white mb-2"><?= $this->lang('login_title', 'auth') ?></h1>
        <p class="text-slate-400"><?= $this->lang('login_description', 'auth') ?></p>
    </div>

    <?php if (isset($data['error'])): ?>
        <div class="mb-6 p-4 rounded-xl bg-red-950/30 border border-red-800/50 flex items-start gap-3 animate-pulse">
            <div class="w-6 h-6 rounded-full bg-red-600/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <span class="text-red-400 text-sm font-bold">!</span>
            </div>
            <p class="text-red-300 text-sm"><?= htmlspecialchars($data['error']) ?></p>
        </div>
    <?php endif; ?>

    <div class="glass-effect rounded-2xl p-8 border border-slate-800 shadow-2xl">
        <form action="/auth/login" method="POST" class="space-y-6">
            <div class="space-y-2">
                <label for="username" class="block text-sm font-medium text-slate-300"><?= $this->lang('username', 'auth') ?></label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        autocomplete="off"
                        placeholder="<?= $this->lang('username_placeholder', 'auth') ?>"
                        required
                        class="w-full pl-10 pr-4 py-3 bg-slate-900/50 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-primary-500 input-glow transition-all">
                </div>
            </div>

            <div class="space-y-2">
                <label for="password" class="block text-sm font-medium text-slate-300"><?= $this->lang('password', 'auth') ?></label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        autocomplete="off"
                        placeholder="••••••••"
                        required
                        class="w-full pl-10 pr-4 py-3 bg-slate-900/50 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-primary-500 input-glow transition-all">
                </div>
            </div>

            <button
                type="submit"
                class="w-full py-3 px-4 bg-gradient-to-r from-primary-600 to-primary-500 hover:from-primary-500 hover:to-primary-400 text-white font-semibold rounded-xl shadow-lg shadow-primary-600/20 hover:shadow-primary-600/40 transform hover:scale-[1.02] transition-all duration-200 flex items-center justify-center gap-2">
                <span><?= $this->lang('login', 'auth') ?></span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </button>
        </form>
    </div>

    <div class="mt-6 text-center">
        <p class="text-slate-400 text-sm">
            <?= $this->lang('no_account', 'auth') ?>
            <a href="/auth/register" class="text-primary-400 hover:text-primary-300 font-medium transition-colors"><?= $this->lang('register', 'auth') ?></a>
        </p>
    </div>

    <div class="mt-8 text-center">
        <a href="/" class="inline-flex items-center gap-2 text-slate-500 hover:text-slate-300 text-sm transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <?= $this->lang('back_to_home', 'auth') ?>
        </a>
    </div>
</div>