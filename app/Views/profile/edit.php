<?php $layout = 'master' ?>

<body class="bg-slate-950 text-slate-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-white mb-2"><?= $this->lang('edit_profile_title', 'profile') ?></h1>
            <p class="text-slate-400"><?= $this->lang('edit_profile_description', 'profile') ?></p>
        </div>

        <?php if (isset($data['success'])): ?>
            <div class="mb-6 p-4 rounded-xl bg-green-950/30 border border-green-800/50 text-green-400 text-sm">
                <?= htmlspecialchars($data['success']) ?>
            </div>
        <?php endif; ?>

        <?php if (isset($data['error'])): ?>
            <div class="mb-6 p-4 rounded-xl bg-red-950/30 border border-red-800/50 text-red-400 text-sm">
                <?= htmlspecialchars($data['error']) ?>
            </div>
        <?php endif; ?>

        <div class="bg-slate-900/50 rounded-2xl p-8 border border-slate-800 shadow-xl">
            <form action="/profile/edit" method="POST" class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-2"><?= $this->lang('fullname', 'profile') ?></label>
                    <input type="text" name="fullname" value="<?= htmlspecialchars($data['user']['fullname'] ?? '') ?>" required
                        class="w-full px-4 py-3 bg-slate-950 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-primary-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-2"><?= $this->lang('username', 'profile') ?></label>
                    <input type="text" name="username" value="<?= htmlspecialchars($data['user']['username'] ?? '') ?>" required
                        class="w-full px-4 py-3 bg-slate-950 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-primary-500 transition-colors">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-2"><?= $this->lang('email', 'profile') ?></label>
                    <input type="email" name="email" value="<?= htmlspecialchars($data['user']['email'] ?? '') ?>" required
                        class="w-full px-4 py-3 bg-slate-950 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-primary-500 transition-colors">
                </div>

                <button type="submit" class="w-full py-3 bg-primary-600 hover:bg-primary-500 text-white font-semibold rounded-xl transition-colors shadow-lg shadow-primary-600/20">
                    <?= $this->lang('save_button', 'profile') ?>
                </button>
            </form>

            <div class="mt-6 pt-6 border-t border-slate-800 text-center">
                <a href="/dashboard" class="text-slate-500 hover:text-slate-300 text-sm transition-colors">← <?= $this->lang('back_to_dashboard', 'profile') ?></a>
            </div>
        </div>
    </div>
</body>