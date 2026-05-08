<!-- RESUME TAB -->
<div 
    x-show="activeTab === 'resume'" 
    x-transition:enter="transition ease-out duration-300 transform"
    x-transition:enter-start="opacity-0 translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    class="space-y-12"
>
    <div class="text-center max-w-2xl mx-auto space-y-4">
        <h2 class="font-h1 text-3xl sm:text-4xl font-extrabold text-white">
            Professional <span class="text-primary font-extrabold">Resume</span>
        </h2>
        <p class="text-on-surface-variant text-base">A complete overview of my work timeline, academic history, and technical certifications.</p>
    </div>

    <!-- Top Download CV Button -->
    <div class="flex justify-center mb-10">
        <a 
            href="#" 
            class="bg-gradient-to-r from-primary-dim to-primary hover:from-primary hover:to-primary-dim text-white font-code-label font-bold text-xs uppercase tracking-widest px-8 py-4.5 rounded-lg transition-all duration-300 flex items-center gap-2 shadow-[0_0_20px_rgba(205,95,248,0.35)]"
        >
            <span class="material-symbols-outlined text-base">download</span> Download CV
        </a>
    </div>

    <!-- Timeline Resume Representation -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
        <!-- Professional Experience -->
        <div class="space-y-8">
            <h3 class="font-h1 text-2xl font-bold text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-2xl">work</span> Professional Experience
            </h3>

            <div class="relative pl-6 border-l border-outline/20 space-y-8">
                <!-- Job 1 -->
                <div class="relative space-y-2">
                    <div class="absolute -left-[31px] top-1.5 w-4.5 h-4.5 rounded-full bg-primary border-4 border-background shadow-[0_0_10px_rgba(205,95,248,0.5)]"></div>
                    <span class="font-code-label text-[10px] uppercase tracking-wider bg-primary/10 border border-primary/20 px-2.5 py-1 rounded-full text-primary font-semibold">2022 - Present</span>
                    <h4 class="font-h2 text-lg font-bold text-white pt-1">Senior Fullstack Engineer</h4>
                    <p class="text-on-surface-variant text-xs font-semibold uppercase tracking-wider">Lagos DevCorp</p>
                    <p class="text-on-surface-variant text-sm leading-relaxed pt-1">
                        Architected microservices processing over 1M monthly operations with Laravel & AWS. Optimized database indices to drop SQL latency by 45%. Led DevOps server migrations to automated Docker pipelines.
                    </p>
                </div>

                <!-- Job 2 -->
                <div class="relative space-y-2">
                    <div class="absolute -left-[31px] top-1.5 w-4.5 h-4.5 rounded-full bg-primary border-4 border-background shadow-[0_0_10px_rgba(205,95,248,0.5)]"></div>
                    <span class="font-code-label text-[10px] uppercase tracking-wider bg-primary/10 border border-primary/20 px-2.5 py-1 rounded-full text-primary font-semibold">2020 - 2022</span>
                    <h4 class="font-h2 text-lg font-bold text-white pt-1">Fullstack Web Developer</h4>
                    <p class="text-on-surface-variant text-xs font-semibold uppercase tracking-wider">Apex Technologies</p>
                    <p class="text-on-surface-variant text-sm leading-relaxed pt-1">
                        Developed dynamic database-driven applications with Django and React. Set up secure, reliable queues using Redis and Django Celery. Integrated functional Stripe gateways and REST/GraphQL APIs.
                    </p>
                </div>
            </div>
        </div>

        <!-- Education & Certifications -->
        <div class="space-y-8">
            <h3 class="font-h1 text-2xl font-bold text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary text-2xl">school</span> Education & Certs
            </h3>

            <div class="relative pl-6 border-l border-outline/20 space-y-8">
                <!-- Education 1 -->
                <div class="relative space-y-2">
                    <div class="absolute -left-[31px] top-1.5 w-4.5 h-4.5 rounded-full bg-secondary border-4 border-background shadow-[0_0_10px_rgba(56,222,187,0.5)]"></div>
                    <span class="font-code-label text-[10px] uppercase tracking-wider bg-secondary/10 border border-secondary/20 px-2.5 py-1 rounded-full text-secondary font-semibold">2016 - 2020</span>
                    <h4 class="font-h2 text-lg font-bold text-white pt-1">Bachelor of Science in Computer Science</h4>
                    <p class="text-on-surface-variant text-xs font-semibold uppercase tracking-wider">University of Technology</p>
                    <p class="text-on-surface-variant text-sm leading-relaxed pt-1">
                        Specialized in software engineering principles, core relational databases, object-oriented paradigms, and algorithm complexity.
                    </p>
                </div>

                <!-- Certification 1 -->
                <div class="relative space-y-2">
                    <div class="absolute -left-[31px] top-1.5 w-4.5 h-4.5 rounded-full bg-secondary border-4 border-background shadow-[0_0_10px_rgba(56,222,187,0.5)]"></div>
                    <span class="font-code-label text-[10px] uppercase tracking-wider bg-secondary/10 border border-secondary/20 px-2.5 py-1 rounded-full text-secondary font-semibold">Certified</span>
                    <h4 class="font-h2 text-lg font-bold text-white pt-1">AWS Certified Solutions Architect</h4>
                    <p class="text-on-surface-variant text-xs font-semibold uppercase tracking-wider">Amazon Web Services</p>
                    <p class="text-on-surface-variant text-sm leading-relaxed pt-1">
                        Validated deep understanding of AWS cloud systems design, high security, multi-tier hosting, and automated serverless workflows.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Download CV Button -->
    <div class="flex justify-center pt-10">
        <a 
            href="#" 
            class="bg-gradient-to-r from-primary-dim to-primary hover:from-primary hover:to-primary-dim text-white font-code-label font-bold text-xs uppercase tracking-widest px-8 py-4.5 rounded-lg transition-all duration-300 flex items-center gap-2 shadow-[0_0_20px_rgba(205,95,248,0.35)]"
        >
            <span class="material-symbols-outlined text-base">download</span> Download CV
        </a>
    </div>
</div>