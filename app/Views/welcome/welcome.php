<?php $layout = 'public'; ?>
<section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto animate-slide-up">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-950/30 border border-green-800/50 text-green-400 text-sm font-medium mb-8 animate-float">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span><?= $this->lang('installation_success', 'welcome') ?></span>
            </div>

            <h1 class="text-5xl md:text-7xl font-bold mb-6 tracking-tight">
                <span class="text-white"><?= $this->lang('welcome_to', 'welcome') ?></span>
                <br>
                <span class="gradient-text">SwiftPHP</span>
                <span class="text-3xl md:text-5xl align-top text-primary-400">⚡</span>
                <br>
                <span class="text-white"><?= $this->lang('swiftphp_world', 'welcome') ?></span>
            </h1>

            <p class="text-xl md:text-2xl text-slate-400 mb-10 max-w-2xl mx-auto leading-relaxed font-light">
                <?= $this->lang('framework_desc', 'welcome') ?>
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
                <a href="/auth/register" class="group bg-primary-600 hover:bg-primary-500 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all shadow-xl shadow-primary-600/20 hover:shadow-primary-600/40 flex items-center justify-center gap-2">
                    <span><?= $this->lang('get_started', 'welcome') ?></span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="#documentation" class="glass-effect hover:bg-white/5 text-slate-300 px-8 py-4 rounded-full font-semibold text-lg transition-all border border-slate-700 hover:border-primary-500/50 flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <?= $this->lang('documentation', 'welcome') ?>
                </a>
            </div>

            <div class="max-w-3xl mx-auto transform hover:scale-[1.02] transition-transform duration-500 animate-slide-up" style="animation-delay: 0.2s;">
                <div class="code-window rounded-2xl overflow-hidden border border-slate-700">
                    <div class="flex items-center px-4 py-3 bg-slate-900/80 border-b border-slate-700">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500/80"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500/80"></div>
                        </div>
                        <span class="ml-4 text-slate-500 text-xs font-mono">app/Controllers/Welcome.php</span>
                    </div>
                    <div class="p-6 text-left overflow-x-auto">
                        <pre class="text-sm font-mono leading-relaxed"><code><span class="text-purple-400">&lt;?php</span>

<span class="text-purple-400">namespace</span> <span class="text-yellow-400">App\Controllers</span>;

<span class="text-purple-400">use</span> <span class="text-yellow-400">App\Core\Controller</span>;

<span class="text-purple-400">class</span> <span class="text-yellow-400">Welcome</span> <span class="text-purple-400">extends</span> <span class="text-yellow-400">Controller</span>
{
    <span class="text-purple-400">public function</span> <span class="text-blue-400">index</span>()
    {
        <span class="text-slate-500"><?= $this->lang('code_comment', 'welcome') ?></span>
        <span class="text-purple-400">return</span> <span class="text-red-400">$this</span>-><span class="text-blue-400">view</span>(<span class="text-green-400">'welcome/welcome'</span>, [
            <span class="text-green-400">'title'</span> => <span class="text-green-400">'SwiftPHP'</span>
        ]);
    }
}</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-slide-up" style="animation-delay: 0.3s;">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4"><?= $this->lang('why_choose', 'welcome') ?></h2>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto"><?= $this->lang('features_desc', 'welcome') ?></p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="glass-effect rounded-2xl p-8 border border-slate-800 hover:border-primary-500/30 transition-all duration-300 group animate-slide-up" style="animation-delay: 0.4s;">
                <div class="w-14 h-14 rounded-2xl bg-primary-950/50 border border-primary-800/30 flex items-center justify-center mb-6 group-hover:bg-primary-600/20 transition-colors">
                    <svg class="w-7 h-7 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3"><?= $this->lang('feature_1_title', 'welcome') ?></h3>
                <p class="text-slate-400 leading-relaxed"><?= $this->lang('feature_1_desc', 'welcome') ?></p>
            </div>

            <div class="glass-effect rounded-2xl p-8 border border-slate-800 hover:border-primary-500/30 transition-all duration-300 group animate-slide-up" style="animation-delay: 0.5s;">
                <div class="w-14 h-14 rounded-2xl bg-primary-950/50 border border-primary-800/30 flex items-center justify-center mb-6 group-hover:bg-primary-600/20 transition-colors">
                    <svg class="w-7 h-7 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3"><?= $this->lang('feature_2_title', 'welcome') ?></h3>
                <p class="text-slate-400 leading-relaxed"><?= $this->lang('feature_2_desc', 'welcome') ?></p>
            </div>

            <div class="glass-effect rounded-2xl p-8 border border-slate-800 hover:border-primary-500/30 transition-all duration-300 group animate-slide-up" style="animation-delay: 0.6s;">
                <div class="w-14 h-14 rounded-2xl bg-primary-950/50 border border-primary-800/30 flex items-center justify-center mb-6 group-hover:bg-primary-600/20 transition-colors">
                    <svg class="w-7 h-7 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3"><?= $this->lang('feature_3_title', 'welcome') ?></h3>
                <p class="text-slate-400 leading-relaxed"><?= $this->lang('feature_3_desc', 'welcome') ?></p>
            </div>

            <div class="glass-effect rounded-2xl p-8 border border-slate-800 hover:border-primary-500/30 transition-all duration-300 group animate-slide-up" style="animation-delay: 0.7s;">
                <div class="w-14 h-14 rounded-2xl bg-primary-950/50 border border-primary-800/30 flex items-center justify-center mb-6 group-hover:bg-primary-600/20 transition-colors">
                    <svg class="w-7 h-7 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3"><?= $this->lang('feature_4_title', 'welcome') ?></h3>
                <p class="text-slate-400 leading-relaxed"><?= $this->lang('feature_4_desc', 'welcome') ?></p>
            </div>

            <div class="glass-effect rounded-2xl p-8 border border-slate-800 hover:border-primary-500/30 transition-all duration-300 group animate-slide-up" style="animation-delay: 0.8s;">
                <div class="w-14 h-14 rounded-2xl bg-primary-950/50 border border-primary-800/30 flex items-center justify-center mb-6 group-hover:bg-primary-600/20 transition-colors">
                    <svg class="w-7 h-7 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3"><?= $this->lang('feature_5_title', 'welcome') ?></h3>
                <p class="text-slate-400 leading-relaxed"><?= $this->lang('feature_5_desc', 'welcome') ?></p>
            </div>

            <div class="glass-effect rounded-2xl p-8 border border-slate-800 hover:border-primary-500/30 transition-all duration-300 group animate-slide-up" style="animation-delay: 0.9s;">
                <div class="w-14 h-14 rounded-2xl bg-primary-950/50 border border-primary-800/30 flex items-center justify-center mb-6 group-hover:bg-primary-600/20 transition-colors">
                    <svg class="w-7 h-7 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3"><?= $this->lang('feature_6_title', 'welcome') ?></h3>
                <p class="text-slate-400 leading-relaxed"><?= $this->lang('feature_6_desc', 'welcome') ?></p>
            </div>
        </div>
    </div>
</section>

<section id="documentation" class="py-20 bg-slate-900/30 border-y border-slate-800/50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-slide-up">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4"><?= $this->lang('quick_start_title', 'welcome') ?></h2>
            <p class="text-slate-400 text-lg"><?= $this->lang('quick_start_desc', 'welcome') ?></p>
        </div>

        <div class="space-y-4">
            <div class="code-window rounded-xl border border-slate-800 overflow-hidden">
                <div class="flex items-center justify-between px-4 py-3 bg-slate-900/80 border-b border-slate-800">
                    <span class="text-slate-500 text-xs font-mono"><?= $this->lang('step_1_label', 'welcome') ?></span>
                    <button onclick="navigator.clipboard.writeText('cp config/config.php.example config/config.php')" class="text-xs text-primary-400 hover:text-primary-300 transition-colors"><?= $this->lang('copy_btn', 'welcome') ?></button>
                </div>
                <div class="p-4 overflow-x-auto">
                    <code class="text-sm font-mono text-slate-300">cp config/config.php.example config/config.php</code>
                </div>
            </div>

            <div class="code-window rounded-xl border border-slate-800 overflow-hidden">
                <div class="flex items-center justify-between px-4 py-3 bg-slate-900/80 border-b border-slate-800">
                    <span class="text-slate-500 text-xs font-mono"><?= $this->lang('step_2_label', 'welcome') ?></span>
                </div>
                <div class="p-4 overflow-x-auto">
                    <pre class="text-sm font-mono text-slate-300"><code><span class="text-green-400">'database'</span> => [
    <span class="text-green-400">'host'</span> => <span class="text-green-400">'localhost'</span>,
    <span class="text-green-400">'name'</span> => <span class="text-green-400">'swiftphp_db'</span>,
    <span class="text-green-400">'user'</span> => <span class="text-green-400">'root'</span>,
    <span class="text-green-400">'pass'</span> => <span class="text-green-400">'password'</span>,
],</code></pre>
                </div>
            </div>

            <div class="code-window rounded-xl border border-slate-800 overflow-hidden">
                <div class="flex items-center justify-between px-4 py-3 bg-slate-900/80 border-b border-slate-800">
                    <span class="text-slate-500 text-xs font-mono"><?= $this->lang('step_3_label', 'welcome') ?></span>
                </div>
                <div class="p-4">
                    <p class="text-sm text-slate-400"><?= $this->lang('step_3_desc', 'welcome') ?></p>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <p class="text-slate-500 text-sm">
                <?= $this->lang('full_docs_label', 'welcome') ?> <span class="text-primary-400 font-mono"><?= $this->lang('docs_folder', 'welcome') ?></span>
            </p>
        </div>
    </div>
</section>

<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-primary-950/30 to-blue-950/30"></div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-slide-up">
        <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white"><?= $this->lang('ready_to_build', 'welcome') ?></h2>
        <p class="text-xl text-slate-400 mb-10 max-w-2xl mx-auto">
            <?= $this->lang('cta_desc', 'welcome') ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/auth/register" class="inline-flex items-center justify-center gap-2 bg-primary-600 hover:bg-primary-500 text-white px-8 py-4 rounded-full font-bold text-lg transition-all shadow-xl shadow-primary-600/20 hover:shadow-primary-600/40">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
                <?= $this->lang('register_btn', 'welcome') ?>
            </a>
            <a href="/auth/login" class="inline-flex items-center justify-center gap-2 border-2 border-slate-700 text-white px-8 py-4 rounded-full font-bold text-lg hover:border-primary-500 hover:bg-primary-950/30 transition-all">
                <?= $this->lang('login_btn', 'welcome') ?>
            </a>
        </div>
    </div>
</section>