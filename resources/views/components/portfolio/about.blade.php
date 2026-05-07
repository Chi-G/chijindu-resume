<!-- ABOUT TAB -->
<div 
    x-show="activeTab === 'about'" 
    x-transition:enter="transition ease-out duration-300 transform"
    x-transition:enter-start="opacity-0 translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    class="space-y-16"
>
    <!-- Bio Intro Section -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-8 space-y-6">
            <h2 class="font-h1 text-3xl sm:text-4xl font-extrabold text-white">
                Know Who <span class="text-primary font-extrabold">I AM</span>
            </h2>
            <div class="space-y-4 text-on-surface-variant text-base leading-relaxed">
                <p>
                    Hi Everyone, I am <strong class="text-white font-semibold">Chijindu Nwokeohuru</strong> from <strong class="text-white">Lagos, Nigeria</strong>.
                </p>
                <p>
                    I am a passionate Fullstack & DevOps Engineer with a proven track record of developing enterprise web products, optimizing complex query speeds, and managing cloud systems.
                </p>
                <p>
                    Apart from coding, some other activities that I absolutely love to do!
                </p>
                <ul class="space-y-2 pl-4">
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-sm">smart_toy</span> Playing Retro Games & Game Emulation</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-sm">book_5</span> Reading Engineering Blogs & Tech Case Studies</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary text-sm">travel</span> Exploring Natural Landscapes & Traveling</li>
                </ul>
            </div>
        </div>

        <!-- Bio Avatar Mockup -->
        <div class="lg:col-span-4 flex justify-center items-center relative select-none">
            <div class="absolute w-64 h-64 bg-secondary/10 rounded-full blur-[70px] pointer-events-none"></div>
            <div class="w-64 h-64 rounded-full border border-primary/30 bg-surface-dim/50 flex justify-center items-center text-primary text-9xl font-extrabold shadow-[0_0_30px_rgba(205,95,248,0.2)] animate-pulse">
                CN
            </div>
        </div>
    </div>

    <!-- Skillset Bento Grid -->
    <div class="space-y-8 pt-12 border-t border-outline/10">
        <div class="text-center max-w-2xl mx-auto space-y-2">
            <h2 class="font-h1 text-2xl sm:text-3xl font-extrabold text-white">
                Professional <span class="text-primary font-extrabold">Skillset</span>
            </h2>
            <p class="text-on-surface-variant text-sm">Core languages, backend frameworks, databases, and DevOps utilities I excel with daily.</p>
        </div>

        <!-- Skills Cards -->
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-5 max-w-6xl mx-auto">
            <!-- PHP -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-primary text-3xl">terminal</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">PHP</span>
            </div>
            <!-- Python -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-primary text-3xl">code</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">Python</span>
            </div>
            <!-- TypeScript -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-primary text-3xl">javascript</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">TypeScript</span>
            </div>
            <!-- Laravel -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-primary text-3xl">view_quilt</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">Laravel</span>
            </div>
            <!-- Django -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-primary text-3xl">layers</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">Django</span>
            </div>
            <!-- Flask -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-primary text-3xl">api</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">Flask</span>
            </div>
            <!-- MySQL -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-secondary text-3xl">database</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">MySQL</span>
            </div>
            <!-- PostgreSQL -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-secondary text-3xl">storage</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">PostgreSQL</span>
            </div>
            <!-- Redis -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-secondary text-3xl">bolt</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">Redis</span>
            </div>
            <!-- React -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-primary text-3xl">widgets</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">React</span>
            </div>
            <!-- AWS -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-secondary text-3xl">cloud_queue</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">AWS</span>
            </div>
            <!-- Docker -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-secondary text-3xl">grid_view</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">Docker</span>
            </div>
        </div>
    </div>

    <!-- Tools Bento Grid -->
    <div class="space-y-8 pt-12 border-t border-outline/10">
        <div class="text-center max-w-2xl mx-auto space-y-2">
            <h2 class="font-h1 text-2xl sm:text-3xl font-extrabold text-white">
                <span class="text-primary font-extrabold">Tools</span> I Use
            </h2>
            <p class="text-on-surface-variant text-sm">Professional applications and software platforms that form my engineering pipeline.</p>
        </div>

        <!-- Tools Cards -->
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-5 max-w-6xl mx-auto">
            <!-- VS Code -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-primary text-3xl">integration_instructions</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">VS Code</span>
            </div>
            <!-- Postman -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-primary text-3xl">send_and_archive</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">Postman</span>
            </div>
            <!-- Docker -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-secondary text-3xl">container</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">Docker</span>
            </div>
            <!-- TablePlus -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-secondary text-3xl">table_rows</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">TablePlus</span>
            </div>
            <!-- Slack -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-primary text-3xl">forum</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">Slack</span>
            </div>
            <!-- Git -->
            <div class="glass-panel rounded-xl border border-outline/10 p-5 flex flex-col justify-center items-center gap-3 text-center hover:border-primary/50 hover:shadow-[0_0_20px_rgba(205,95,248,0.15)] transition-all duration-300 select-none">
                <span class="material-symbols-outlined text-primary text-3xl">fork_left</span>
                <span class="font-code-label text-xs uppercase font-bold tracking-wide text-white">Git</span>
            </div>
        </div>
    </div>
</div>
