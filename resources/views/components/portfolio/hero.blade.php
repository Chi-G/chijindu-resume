<!-- HOME TAB -->
<div 
    x-show="activeTab === 'home'" 
    x-transition:enter="transition ease-out duration-300 transform"
    x-transition:enter-start="opacity-0 translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    class="space-y-24"
>
    <!-- Hero Section -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center pt-8">
        <!-- Text Block -->
        <div class="lg:col-span-7 space-y-6">
            <h2 class="font-sans text-3xl sm:text-4xl font-medium tracking-tight text-on-surface-variant flex items-center gap-2">
                Hi There! <span class="animate-bounce">👋</span>
            </h2>
            <h1 class="font-h1 text-4xl sm:text-6xl font-extrabold tracking-tight text-white leading-tight">
                I'M <span class="text-primary font-extrabold">CHIJiNDU NWOKEOHURU</span>
            </h1>
            
            <!-- Typewriter Effect Block -->
            <div 
                class="font-code-label text-2xl sm:text-3xl font-bold h-12 flex items-center"
                x-data="{
                    phrases: ['Fullstack Engineer', 'Backend Architect', 'Laravel Specialist', 'DevOps & Cloud Engineer'],
                    currentPhraseIdx: 0,
                    currentText: '',
                    isDeleting: false,
                    init() { this.type(); },
                    type() {
                        let fullPhrase = this.phrases[this.currentPhraseIdx];
                        if (this.isDeleting) {
                            this.currentText = fullPhrase.substring(0, this.currentText.length - 1);
                        } else {
                            this.currentText = fullPhrase.substring(0, this.currentText.length + 1);
                        }
                        let typeSpeed = 80;
                        if (this.isDeleting) { typeSpeed /= 2; }
                        if (!this.isDeleting && this.currentText === fullPhrase) {
                            typeSpeed = 1500;
                            this.isDeleting = true;
                        } else if (this.isDeleting && this.currentText === '') {
                            this.isDeleting = false;
                            this.currentPhraseIdx = (this.currentPhraseIdx + 1) % this.phrases.length;
                            typeSpeed = 400;
                        }
                        setTimeout(() => this.type(), typeSpeed);
                    }
                }"
            >
                <span class="text-secondary" x-text="currentText"></span>
                <span class="w-1.5 h-8 bg-secondary ml-1 animate-pulse"></span>
            </div>

            <p class="text-on-surface-variant text-base sm:text-lg leading-relaxed max-w-2xl">
                I build highly optimized backend architectures, scalable web APIs, and premium user-interactive interfaces using PHP, Python, and TypeScript.
            </p>

            <!-- CTA buttons -->
            <div class="flex flex-wrap gap-4 pt-4">
                <button @click="activeTab = 'projects'" class="bg-gradient-to-r from-primary-dim to-primary hover:from-primary hover:to-primary-dim text-white font-code-label font-bold text-xs uppercase tracking-widest px-6 py-4 rounded-lg cursor-pointer transition-all duration-300 transform active:scale-95 shadow-[0_0_20px_rgba(205,95,248,0.35)]">
                    View Projects
                </button>
                <button @click="activeTab = 'contact'" class="bg-surface-dim/40 hover:bg-surface-dim border border-outline/30 hover:border-primary/50 text-white font-code-label font-bold text-xs uppercase tracking-widest px-6 py-4 rounded-lg cursor-pointer transition-all duration-300 transform active:scale-95">
                    Let's Connect
                </button>
            </div>
        </div>

        <!-- Hero SVG Graphic -->
        <div class="lg:col-span-5 flex justify-center items-center relative select-none">
            <!-- Neon Circle Glow Behind Graphic -->
            <div class="absolute w-72 h-72 bg-primary/20 rounded-full blur-[80px] pointer-events-none"></div>
            <svg class="w-full max-w-[380px] h-auto drop-shadow-[0_0_25px_rgba(205,95,248,0.25)] animate-pulse" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Background Grid Panel in Graphic -->
                <rect x="50" y="50" width="400" height="400" rx="40" fill="rgba(27, 26, 46, 0.4)" stroke="rgba(205, 95, 248, 0.3)" stroke-width="2"/>
                <!-- Inner Terminal Header -->
                <path d="M50 90C50 67.9086 67.9086 50 90 50H410C432.091 50 450 67.9086 450 90V100H50V90Z" fill="rgba(205, 95, 248, 0.1)"/>
                <!-- Red, Yellow, Green Window Dots -->
                <circle cx="85" cy="75" r="7" fill="#ff5f56"/>
                <circle cx="105" cy="75" r="7" fill="#ffbd2e"/>
                <circle cx="125" cy="75" r="7" fill="#27c93f"/>
                
                <!-- Animated Code Brackets & Tech Elements -->
                <path d="M140 180L100 220L140 260" stroke="#cd5ff8" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M360 180L400 220L360 260" stroke="#cd5ff8" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M220 300L280 140" stroke="#38debb" stroke-width="6" stroke-linecap="round"/>
                
                <!-- Glowing Stars inside vector -->
                <path d="M250 80L253 87L260 90L253 93L250 100L247 93L240 90L247 87L250 80Z" fill="#38debb" class="particle"/>
                <path d="M380 340L382 345L387 347L382 349L380 354L378 349L373 347L378 345L380 340Z" fill="#cd5ff8" class="particle-slow"/>
            </svg>
        </div>
    </div>

    <!-- Introduction Info Subsection -->
    <div class="space-y-12 pt-16 border-t border-outline/10">
        <div class="text-center max-w-3xl mx-auto space-y-4">
            <h2 class="font-h1 text-3xl sm:text-4xl font-extrabold text-white">
                LET ME <span class="text-primary font-extrabold">INTRODUCE</span> MYSELF
            </h2>
            <p class="text-on-surface-variant text-base sm:text-lg leading-relaxed">
                A high-performing Fullstack Engineer with a true love for crafting elegant server architectures, optimal databases, and premium digital solutions.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- Intro Card 1 -->
            <div class="glass-panel p-8 rounded-2xl border border-outline/10 hover:border-primary/40 transition-all duration-300">
                <span class="material-symbols-outlined text-primary text-4xl mb-4">code</span>
                <h3 class="font-h2 text-xl font-bold text-white mb-2">Fluent Stack Specialist</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed">
                    Extremely fluent in classics like <strong class="text-white">PHP</strong>, <strong class="text-white">Python</strong>, and <strong class="text-white">TypeScript</strong>, driving robust integrations across enterprise servers and dynamic interactive frontends.
                </p>
            </div>

            <!-- Intro Card 2 -->
            <div class="glass-panel p-8 rounded-2xl border border-outline/10 hover:border-primary/40 transition-all duration-300">
                <span class="material-symbols-outlined text-secondary text-4xl mb-4">cloud</span>
                <h3 class="font-h2 text-xl font-bold text-white mb-2">Cloud & DevOps Focused</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed">
                    Deep expertise in deploying containerized solutions using <strong class="text-white">AWS</strong>, <strong class="text-white">Docker</strong>, and automated <strong class="text-white">CI/CD pipelines</strong>, establishing zero-downtime, fully audited cloud servers.
                </p>
            </div>
        </div>

        <!-- Social / Find me Section -->
        <div class="text-center space-y-6 pt-10">
            <h3 class="font-h2 text-2xl font-bold text-white">FIND ME ON</h3>
            <p class="text-on-surface-variant text-sm">Feel free to <span class="text-primary font-semibold">connect</span> with me</p>
            <div class="flex justify-center items-center gap-5">
                <!-- GitHub -->
                <a href="https://github.com/Chi-G" target="_blank" class="w-12 h-12 rounded-full glass-panel border border-outline/25 flex justify-center items-center text-on-surface hover:text-white hover:border-primary/60 hover:shadow-[0_0_15px_rgba(205,95,248,0.4)] transition-all duration-300 cursor-pointer">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                </a>
                <!-- LinkedIn -->
                <a href="https://linkedin.com/" target="_blank" class="w-12 h-12 rounded-full glass-panel border border-outline/25 flex justify-center items-center text-on-surface hover:text-white hover:border-primary/60 hover:shadow-[0_0_15px_rgba(205,95,248,0.4)] transition-all duration-300 cursor-pointer">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
                <!-- Twitter -->
                <a href="https://twitter.com/" target="_blank" class="w-12 h-12 rounded-full glass-panel border border-outline/25 flex justify-center items-center text-on-surface hover:text-white hover:border-primary/60 hover:shadow-[0_0_15px_rgba(205,95,248,0.4)] transition-all duration-300 cursor-pointer">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <!-- Mail -->
                <a href="mailto:chijindu@example.com" class="w-12 h-12 rounded-full glass-panel border border-outline/25 flex justify-center items-center text-on-surface hover:text-white hover:border-primary/60 hover:shadow-[0_0_15px_rgba(205,95,248,0.4)] transition-all duration-300 cursor-pointer">
                    <span class="material-symbols-outlined text-lg">mail</span>
                </a>
            </div>
        </div>
    </div>
</div>