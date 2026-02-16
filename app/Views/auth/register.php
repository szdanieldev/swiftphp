<?php

use App\Core\Localization;

$locale = new Localization('en');
$layout = 'auth';
?>
<div class="absolute inset-0 bg-slate-950">
    <div class="absolute top-0 right-1/4 w-72 h-72 bg-primary-600/10 rounded-full blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 2s;"></div>
</div>

<div class="relative z-10 w-full max-w-md">
    <div class="text-center mb-8">
        <div class="inline-flex items-center justify-center w-16 h-16 mb-4 rounded-2xl bg-gradient-to-br from-primary-400 to-primary-600 shadow-lg shadow-primary-500/20 animate-float">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
            </svg>
        </div>
        <h1 class="text-3xl font-bold text-white mb-2"><?= $this->lang('register_title', 'auth') ?></h1>
        <p class="text-slate-400"><?= $this->lang('register_description', 'auth') ?></p>
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
        <form action="/auth/register" method="POST" class="space-y-5">
            <div class="space-y-2">
                <label for="fullname" class="block text-sm font-medium text-slate-300"><?= $this->lang('fullname', 'auth') ?></label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        id="fullname"
                        name="fullname"
                        placeholder="<?= $this->lang('fullname_placeholder', 'auth') ?>"
                        autocomplete="off"
                        required
                        autofocus
                        class="w-full pl-10 pr-4 py-3 bg-slate-900/50 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-primary-500 input-glow transition-all">
                </div>
            </div>

            <div class="space-y-2">
                <label for="username" class="block text-sm font-medium text-slate-300"><?= $this->lang('username', 'auth') ?></label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="<?= $this->lang('username_placeholder', 'auth') ?>"
                        autocomplete="off"
                        required
                        class="w-full pl-10 pr-4 py-3 bg-slate-900/50 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-primary-500 input-glow transition-all">
                </div>
            </div>

            <div class="space-y-2">
                <label for="email" class="block text-sm font-medium text-slate-300"><?= $this->lang('email', 'auth') ?></label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                        </svg>
                    </div>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="<?= $this->lang('email_placeholder', 'auth') ?>"
                        autocomplete="off"
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
                        placeholder="••••••••"
                        required
                        class="w-full pl-10 pr-4 py-3 bg-slate-900/50 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-primary-500 input-glow transition-all">
                </div>
            </div>

            <button
                type="submit"
                class="w-full py-3 px-4 bg-gradient-to-r from-primary-600 to-primary-500 hover:from-primary-500 hover:to-primary-400 text-white font-semibold rounded-xl shadow-lg shadow-primary-600/20 hover:shadow-primary-600/40 transform hover:scale-[1.02] transition-all duration-200 flex items-center justify-center gap-2 mt-6">
                <span><?= $this->lang('register', 'auth') ?></span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
            </button>
        </form>
    </div>

    <div class="mt-6 text-center">
        <p class="text-slate-400 text-sm">
            <?= $this->lang('have_account', 'auth') ?>
            <a href="/auth/login" class="text-primary-400 hover:text-primary-300 font-medium transition-colors"><?= $this->lang('login', 'auth') ?></a>
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