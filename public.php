<?php $layout = 'public'; ?>
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center pt-16 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-slate-950">
            <div class="absolute top-20 left-1/4 w-72 h-72 bg-primary-600/10 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute bottom-20 right-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 2s;"></div>
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary-950/50 border border-primary-800/50 text-primary-300 text-sm font-medium mb-8 animate-float">
                <span class="w-2 h-2 rounded-full bg-primary-400 animate-pulse"></span>
                Pure PHP • No Node.js Required
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold mb-6 tracking-tight">
                <span class="text-white">Swift</span><span class="gradient-text">PHP</span>
                <span class="text-3xl md:text-5xl align-top text-primary-400">⚡</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-slate-400 mb-6 max-w-3xl mx-auto leading-relaxed font-light">
                A lightweight and modern MVC framework built with pure PHP. 
                Focused on <span class="text-primary-400 font-medium">simplicity</span>, 
                <span class="text-primary-400 font-medium">performance</span>, and 
                <span class="text-primary-400 font-medium">developer control</span>.
            </p>
            
            <p class="text-lg text-slate-500 mb-12 max-w-2xl mx-auto">
                Clean foundation for web applications with built-in routing, authentication, 
                localization, and configuration handling.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
                <a href="#installation" class="group bg-primary-600 hover:bg-primary-500 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all shadow-xl shadow-primary-600/20 hover:shadow-primary-600/40 flex items-center justify-center gap-2">
                    Start Building
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                </a>
                <a href="https://github.com/szdanieldev/swiftphp" class="glass-effect hover:bg-white/5 text-slate-300 px-8 py-4 rounded-full font-semibold text-lg transition-all border border-slate-700 hover:border-primary-500/50 flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    View on GitHub
                </a>
            </div>

            <!-- Code Preview -->
            <div class="max-w-3xl mx-auto transform hover:scale-[1.02] transition-transform duration-500">
                <div class="code-block rounded-2xl shadow-2xl border border-slate-800 overflow-hidden">
                    <div class="flex items-center px-4 py-3 bg-slate-900/50 border-b border-slate-800">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500/80"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500/80"></div>
                        </div>
                        <span class="ml-4 text-slate-500 text-xs font-mono">config/config.php</span>
                    </div>
                    <pre class="p-6 text-left text-sm overflow-x-auto"><code class="font-mono text-slate-300"><span class="text-purple-400">return</span> [
    <span class="text-slate-500">'app_name'</span> => <span class="text-green-400">'My SwiftPHP App'</span>,
    <span class="text-slate-500">'debug'</span> => <span class="text-primary-400">true</span>,
    <span class="text-slate-500">'locale'</span> => <span class="text-green-400">'en'</span>,
    <span class="text-slate-500">'database'</span> => [
        <span class="text-slate-500">'host'</span> => <span class="text-green-400">'localhost'</span>,
        <span class="text-slate-500">'name'</span> => <span class="text-green-400">'swiftphp_db'</span>,
    ],
];</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-white">Core <span class="gradient-text">Features</span></h2>
                <p class="text-slate-400 text-lg max-w-2xl mx-auto">Everything you need to build modern web applications without the bloat.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Feature 1 -->
                <div class="group p-6 rounded-2xl glass-effect border border-slate-800 hover:border-primary-500/30 transition-all duration-300 hover:bg-slate-900/50">
                    <div class="w-12 h-12 bg-primary-950/50 rounded-xl flex items-center justify-center mb-4 border border-primary-800/30">
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-white">Clean MVC Architecture</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Well-organized Model-View-Controller pattern for maintainable code structure.</p>
                </div>

                <!-- Feature 2 -->
                <div class="group p-6 rounded-2xl glass-effect border border-slate-800 hover:border-primary-500/30 transition-all duration-300 hover:bg-slate-900/50">
                    <div class="w-12 h-12 bg-primary-950/50 rounded-xl flex items-center justify-center mb-4 border border-primary-800/30">
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-white">Custom Routing</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Flexible routing system for defining clean URLs and request handling.</p>
                </div>

                <!-- Feature 3 -->
                <div class="group p-6 rounded-2xl glass-effect border border-slate-800 hover:border-primary-500/30 transition-all duration-300 hover:bg-slate-900/50">
                    <div class="w-12 h-12 bg-primary-950/50 rounded-xl flex items-center justify-center mb-4 border border-primary-800/30">
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-white">Built-in Authentication</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Ready-to-use login, register, and logout system with session handling.</p>
                </div>

                <!-- Feature 4 -->
                <div class="group p-6 rounded-2xl glass-effect border border-slate-800 hover:border-primary-500/30 transition-all duration-300 hover:bg-slate-900/50">
                    <div class="w-12 h-12 bg-primary-950/50 rounded-xl flex items-center justify-center mb-4 border border-primary-800/30">
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-white">Configuration Based</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Simple PHP configuration files for application settings and database credentials.</p>
                </div>

                <!-- Feature 5 -->
                <div class="group p-6 rounded-2xl glass-effect border border-slate-800 hover:border-primary-500/30 transition-all duration-300 hover:bg-slate-900/50">
                    <div class="w-12 h-12 bg-primary-950/50 rounded-xl flex items-center justify-center mb-4 border border-primary-800/30">
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-white">Multi-language Support</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Built-in localization system for creating multilingual applications.</p>
                </div>

                <!-- Feature 6 -->
                <div class="group p-6 rounded-2xl glass-effect border border-slate-800 hover:border-primary-500/30 transition-all duration-300 hover:bg-slate-900/50">
                    <div class="w-12 h-12 bg-primary-950/50 rounded-xl flex items-center justify-center mb-4 border border-primary-800/30">
                        <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2 text-white">HTTP Error Handling</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Proper HTTP status codes and error pages for better debugging.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Installation Section -->
    <section id="installation" class="py-24 bg-slate-900/30 border-y border-slate-800/50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">Quick <span class="gradient-text">Installation</span></h2>
                <p class="text-slate-400">Get up and running in minutes. No Node.js required.</p>
            </div>

            <div class="space-y-4">
                <div class="code-block rounded-xl border border-slate-800 overflow-hidden">
                    <div class="flex items-center justify-between px-4 py-3 bg-slate-900/80 border-b border-slate-800">
                        <span class="text-slate-500 text-xs font-mono">1. Clone the repository</span>
                        <button onclick="navigator.clipboard.writeText('git clone https://github.com/szdanieldev/swiftphp.git')" class="text-xs text-primary-400 hover:text-primary-300 transition-colors">Copy</button>
                    </div>
                    <div class="p-4 overflow-x-auto">
                        <code class="text-sm font-mono text-slate-300">git clone https://github.com/szdanieldev/swiftphp.git</code>
                    </div>
                </div>

                <div class="code-block rounded-xl border border-slate-800 overflow-hidden">
                    <div class="flex items-center justify-between px-4 py-3 bg-slate-900/80 border-b border-slate-800">
                        <span class="text-slate-500 text-xs font-mono">2. Navigate to project</span>
                        <button onclick="navigator.clipboard.writeText('cd swiftphp')" class="text-xs text-primary-400 hover:text-primary-300 transition-colors">Copy</button>
                    </div>
                    <div class="p-4 overflow-x-auto">
                        <code class="text-sm font-mono text-slate-300">cd swiftphp</code>
                    </div>
                </div>

                <div class="code-block rounded-xl border border-slate-800 overflow-hidden">
                    <div class="flex items-center justify-between px-4 py-3 bg-slate-900/80 border-b border-slate-800">
                        <span class="text-slate-500 text-xs font-mono">3. Create configuration</span>
                        <button onclick="navigator.clipboard.writeText('cp config/config.php.example config/config.php')" class="text-xs text-primary-400 hover:text-primary-300 transition-colors">Copy</button>
                    </div>
                    <div class="p-4 overflow-x-auto">
                        <code class="text-sm font-mono text-slate-300">cp config/config.php.example config/config.php</code>
                    </div>
                </div>

                <div class="code-block rounded-xl border border-slate-800 overflow-hidden">
                    <div class="flex items-center justify-between px-4 py-3 bg-slate-900/80 border-b border-slate-800">
                        <span class="text-slate-500 text-xs font-mono">4. Configure & Set document root to /public</span>
                    </div>
                    <div class="p-4">
                        <p class="text-sm text-slate-400">Edit <span class="text-primary-400 font-mono">config/config.php</span> with your database credentials and set your web server document root to the <span class="text-primary-400 font-mono">/public</span> directory.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Authentication Section -->
    <section id="auth" class="py-24 relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Built-in <span class="gradient-text">Authentication</span></h2>
                    <p class="text-slate-400 mb-8 leading-relaxed">
                        SwiftPHP includes a complete authentication system out of the box. 
                        User registration, login, session handling, and logout functionality 
                        ready to use and fully customizable.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-primary-950/50 border border-primary-800/30 flex items-center justify-center">
                                <span class="text-primary-400 text-sm font-mono">01</span>
                            </div>
                            <span class="text-slate-300">User Registration</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-primary-950/50 border border-primary-800/30 flex items-center justify-center">
                                <span class="text-primary-400 text-sm font-mono">02</span>
                            </div>
                            <span class="text-slate-300">Secure Login</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-primary-950/50 border border-primary-800/30 flex items-center justify-center">
                                <span class="text-primary-400 text-sm font-mono">03</span>
                            </div>
                            <span class="text-slate-300">Session Management</span>
                        </div>
                    </div>

                    <div class="mt-8 p-4 rounded-lg bg-primary-950/30 border border-primary-800/30">
                        <p class="text-sm text-primary-300 font-mono">Available routes: /auth/login, /auth/register, /auth/logout</p>
                    </div>
                </div>

                <div class="code-block rounded-2xl border border-slate-800 overflow-hidden shadow-2xl">
                    <div class="flex items-center px-4 py-3 bg-slate-900/80 border-b border-slate-800">
                        <span class="text-slate-500 text-xs font-mono">Auth Controller Example</span>
                    </div>
                    <pre class="p-6 text-sm overflow-x-auto"><code class="font-mono text-slate-300"><span class="text-purple-400">class</span> <span class="text-yellow-400">AuthController</span> <span class="text-purple-400">extends</span> <span class="text-yellow-400">Controller</span> {
    
    <span class="text-purple-400">public function</span> <span class="text-blue-400">login</span>() {
        <span class="text-slate-500">// Handle login logic</span>
        <span class="text-purple-400">if</span> (<span class="text-blue-400">validate</span>($data)) {
            <span class="text-blue-400">session_start</span>();
            <span class="text-slate-500">// Set user session...</span>
            <span class="text-purple-400">return</span> <span class="text-blue-400">redirect</span>(<span class="text-green-400">'/dashboard'</span>);
        }
    }
    
    <span class="text-purple-400">public function</span> <span class="text-blue-400">register</span>() {
        <span class="text-slate-500">// Handle registration</span>
    }
}</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Localization Section -->
    <section id="localization" class="py-24 bg-slate-900/30 border-y border-slate-800/50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <div class="code-block rounded-2xl border border-slate-800 overflow-hidden shadow-2xl">
                        <div class="flex items-center px-4 py-3 bg-slate-900/80 border-b border-slate-800">
                            <span class="text-slate-500 text-xs font-mono">localization/en/auth.php</span>
                        </div>
                        <pre class="p-6 text-sm overflow-x-auto"><code class="font-mono text-slate-300"><span class="text-purple-400">return</span> [
    <span class="text-green-400">'login_title'</span> => <span class="text-green-400">'Sign In'</span>,
    <span class="text-green-400">'login_button'</span> => <span class="text-green-400">'Login'</span>,
    <span class="text-green-400">'register_title'</span> => <span class="text-green-400">'Create Account'</span>,
    <span class="text-green-400">'email_label'</span> => <span class="text-green-400">'Email Address'</span>,
    <span class="text-green-400">'password_label'</span> => <span class="text-green-400">'Password'</span>,
];</code></pre>
                    </div>
                    
                    <div class="mt-4 code-block rounded-2xl border border-slate-800 overflow-hidden">
                        <div class="flex items-center px-4 py-3 bg-slate-900/80 border-b border-slate-800">
                            <span class="text-slate-500 text-xs font-mono">Usage in Controller</span>
                        </div>
                        <pre class="p-6 text-sm overflow-x-auto"><code class="font-mono text-slate-300"><span class="text-slate-500">// Get translated string</span>
<span class="text-blue-400">$this</span>-><span class="text-blue-400">lang</span>(<span class="text-green-400">'login_title'</span>, <span class="text-green-400">'auth'</span>);
<span class="text-slate-500">// Returns: "Sign In"</span></code></pre>
                    </div>
                </div>

                <div class="order-1 md:order-2">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Multi-language <span class="gradient-text">Support</span></h2>
                    <p class="text-slate-400 mb-8 leading-relaxed">
                        Build applications for global audiences with the built-in localization system. 
                        Organize translations by language and category for easy maintenance.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="p-4 rounded-lg glass-effect border border-slate-800">
                            <div class="flex items-center gap-3 mb-2">
                                <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                                <span class="text-white font-medium">Directory Structure</span>
                            </div>
                            <p class="text-sm text-slate-400 pl-8">localization/{locale}/{file}.php</p>
                        </div>
                        
                        <div class="p-4 rounded-lg glass-effect border border-slate-800">
                            <div class="flex items-center gap-3 mb-2">
                                <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-white font-medium">Configurable Default</span>
                            </div>
                            <p class="text-sm text-slate-400 pl-8">Set default locale in config/config.php</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Roadmap Section -->
    <section id="roadmap" class="py-24 relative">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">Development <span class="gradient-text">Roadmap</span></h2>
                <p class="text-slate-400">Exciting features planned for future releases.</p>
            </div>

            <div class="space-y-6">
                <div class="flex items-start gap-4 p-6 rounded-2xl glass-effect border border-slate-800 hover:border-primary-500/30 transition-all">
                    <div class="w-10 h-10 rounded-full bg-primary-950/50 border border-primary-800/30 flex items-center justify-center flex-shrink-0 mt-1">
                        <span class="text-primary-400 text-lg">→</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-1">Middleware System</h3>
                        <p class="text-slate-400 text-sm">Enhanced request/response filtering and processing pipeline.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 rounded-2xl glass-effect border border-slate-800 hover:border-primary-500/30 transition-all">
                    <div class="w-10 h-10 rounded-full bg-primary-950/50 border border-primary-800/30 flex items-center justify-center flex-shrink-0 mt-1">
                        <span class="text-primary-400 text-lg">⌘</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-1">CLI Tooling</h3>
                        <p class="text-slate-400 text-sm">Command-line interface for scaffolding and management tasks.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 rounded-2xl glass-effect border border-slate-800 hover:border-primary-500/30 transition-all">
                    <div class="w-10 h-10 rounded-full bg-primary-950/50 border border-primary-800/30 flex items-center justify-center flex-shrink-0 mt-1">
                        <span class="text-primary-400 text-lg">📦</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-1">Plugin / Package System</h3>
                        <p class="text-slate-400 text-sm">Extensible architecture for third-party extensions.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 rounded-2xl glass-effect border border-slate-800 hover:border-primary-500/30 transition-all">
                    <div class="w-10 h-10 rounded-full bg-primary-950/50 border border-primary-800/30 flex items-center justify-center flex-shrink-0 mt-1">
                        <span class="text-primary-400 text-lg">🐛</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-1">Improved Debugging Mode</h3>
                        <p class="text-slate-400 text-sm">Enhanced error reporting and development tools.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 rounded-2xl glass-effect border border-slate-800 hover:border-primary-500/30 transition-all">
                    <div class="w-10 h-10 rounded-full bg-primary-950/50 border border-primary-800/30 flex items-center justify-center flex-shrink-0 mt-1">
                        <span class="text-primary-400 text-lg">🎨</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-1">Optional Template Engine</h3>
                        <p class="text-slate-400 text-sm">Blade-like syntax support for views (optional).</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 rounded-2xl glass-effect border border-slate-800 hover:border-primary-500/30 transition-all">
                    <div class="w-10 h-10 rounded-full bg-primary-950/50 border border-primary-800/30 flex items-center justify-center flex-shrink-0 mt-1">
                        <span class="text-primary-400 text-lg">⚡</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white mb-1">Caching Layer & REST API Utilities</h3>
                        <p class="text-slate-400 text-sm">Performance optimization and API development tools.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-950/50 to-blue-950/50"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-primary-900/20 via-slate-950/0 to-slate-950/0"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">Ready to go <span class="gradient-text">Swift</span>?</h2>
            <p class="text-lg text-slate-400 mb-10 max-w-2xl mx-auto">
                Start building lightweight, modern PHP applications today. 
                No unnecessary complexity, just pure performance.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://github.com/szdanieldev/swiftphp" class="inline-flex items-center justify-center gap-2 bg-white text-slate-900 px-8 py-4 rounded-full font-bold text-lg hover:bg-slate-100 transition-all shadow-xl">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    Star on GitHub
                </a>
                <a href="#installation" class="inline-flex items-center justify-center gap-2 border-2 border-slate-700 text-white px-8 py-4 rounded-full font-bold text-lg hover:border-primary-500 hover:bg-primary-950/30 transition-all">
                    Read Documentation
                </a>
            </div>
            
            <div class="mt-12 pt-8 border-t border-slate-800/50">
                <p class="text-sm text-slate-500">
                    Released under the <a href="https://github.com/szdanieldev/swiftphp/blob/master/LICENSE" class="text-primary-400 hover:text-primary-300 transition-colors">MIT License</a>
                </p>
            </div>
        </div>
    </section>

