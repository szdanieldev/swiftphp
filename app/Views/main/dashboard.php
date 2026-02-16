<?php $layout = 'main'; ?>
<div class="mb-8">
    <h1 class="text-3xl font-bold text-white mb-2">
        <?= sprintf($this->lang('greeting', 'main'), htmlspecialchars($_SESSION['user']['fullname'] ?? 'N/A')) ?>
    </h1>
    <p class="text-slate-400"><?= $this->lang('dashboard_welcome', 'main') ?></p>
</div>

<div class="grid md:grid-cols-3 gap-6 mb-8">
    <div class="glass-effect rounded-xl p-6 border border-slate-800">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 rounded-lg bg-primary-950/50 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>
            <span class="text-slate-500 text-sm uppercase"><?= $this->lang('username', 'main') ?></span>
        </div>
        <p class="text-xl font-semibold text-white">@<?= htmlspecialchars($_SESSION['user']['username'] ?? 'N/A') ?></p>
    </div>

    <div class="glass-effect rounded-xl p-6 border border-slate-800">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 rounded-lg bg-primary-950/50 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <span class="text-slate-500 text-sm uppercase"><?= $this->lang('email', 'main') ?></span>
        </div>
        <p class="text-lg font-semibold text-white truncate" title="<?= htmlspecialchars($_SESSION['user']['email'] ?? 'N/A') ?>">
            <?= htmlspecialchars($_SESSION['user']['email'] ?? 'N/A') ?>
        </p>
    </div>

    <div class="glass-effect rounded-xl p-6 border border-slate-800">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 rounded-lg bg-primary-950/50 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                </svg>
            </div>
            <span class="text-slate-500 text-sm uppercase"><?= $this->lang('id', 'main') ?></span>
        </div>
        <p class="text-xl font-semibold text-white">#<?= htmlspecialchars($_SESSION['user']['id'] ?? '0') ?></p>
    </div>
</div>

<div class="glass-effect rounded-xl p-6 border border-slate-800">
    <h2 class="text-lg font-semibold text-white mb-4"><?= $this->lang('quick_actions', 'main') ?></h2>
    <div class="flex flex-wrap gap-3">
        <a href="/profile/edit" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-primary-600 hover:bg-primary-500 text-white text-sm font-medium transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
            <?= $this->lang('edit_profile', 'main') ?>
        </a>
        <a href="/profile/password" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-slate-800 hover:bg-slate-700 text-white text-sm font-medium transition-colors border border-slate-700">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
            <?= $this->lang('change_password', 'main') ?>
        </a>
    </div>
</div>