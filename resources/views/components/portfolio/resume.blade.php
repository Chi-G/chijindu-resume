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
        <p class="text-on-surface-variant text-base">A complete overview of my work timeline, academic history, and technical expertise.</p>
    </div>

    <!-- Top Download CV Button -->
    <div class="flex justify-center mb-10">
        <a 
            href="{{ asset('Chijindu_Nwokeohuru_CV_May2026.pdf') }}" 
            download="Chijindu_Nwokeohuru_CV.pdf"
            class="bg-gradient-to-r from-primary-dim to-primary hover:from-primary hover:to-primary-dim text-white font-code-label font-bold text-xs uppercase tracking-widest px-8 py-4.5 rounded-lg transition-all duration-300 flex items-center gap-2 shadow-[0_0_20px_rgba(205,95,248,0.35)] cursor-pointer"
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
                    <span class="font-code-label text-[10px] uppercase tracking-wider bg-primary/10 border border-primary/20 px-2.5 py-1 rounded-full text-primary font-semibold">2025 - Present</span>
                    <h4 class="font-h2 text-lg font-bold text-white pt-1">Full-stack Developer</h4>
                    <p class="text-on-surface-variant text-xs font-semibold uppercase tracking-wider">Tribesquare Inc.</p>
                    <ul class="text-on-surface-variant text-sm leading-relaxed list-disc list-inside space-y-1.5 pt-1">
                        <li>Designed & optimized scalable full-stack solutions using Laravel and React.</li>
                        <li>Worked on NIPOST website redesign and implementation (<a href="https://nipost.tps.paystack.studio" target="_blank" class="text-primary hover:underline">nipost.tps.paystack.studio</a>), improving site architecture and performance.</li>
                        <li>Collaborated on an internal AI evaluation tool using Python and Node.js, building scripts to validate coding datasets, reducing review time by 40%.</li>
                        <li>Implemented Docker reproducible development environments and advanced Git workflows for team consistency.</li>
                    </ul>
                </div>

                <!-- Job 2 -->
                <div class="relative space-y-2">
                    <div class="absolute -left-[31px] top-1.5 w-4.5 h-4.5 rounded-full bg-primary border-4 border-background shadow-[0_0_10px_rgba(205,95,248,0.5)]"></div>
                    <span class="font-code-label text-[10px] uppercase tracking-wider bg-primary/10 border border-primary/20 px-2.5 py-1 rounded-full text-primary font-semibold">2023 - Present</span>
                    <h4 class="font-h2 text-lg font-bold text-white pt-1">Backend Consultant</h4>
                    <p class="text-on-surface-variant text-xs font-semibold uppercase tracking-wider">Sydani Technologies</p>
                    <ul class="text-on-surface-variant text-sm leading-relaxed list-disc list-inside space-y-1.5 pt-1">
                        <li>Lead backend developer for NEMSAS (National Emergency Medical Services & Ambulance System) using Python and PostgreSQL.</li>
                        <li>Led backend development for Dial-a-Doc telehealth platform using Laravel and MySQL.</li>
                        <li>Designed RESTful APIs, database schemas, and Python-based data pipelines for telehealth datasets.</li>
                        <li>Integrated CodeWhisperer LLM coding tool to assist in debugging TypeScript/Node.js notification modules.</li>
                    </ul>
                </div>

                <!-- Job 3 -->
                <div class="relative space-y-2">
                    <div class="absolute -left-[31px] top-1.5 w-4.5 h-4.5 rounded-full bg-primary border-4 border-background shadow-[0_0_10px_rgba(205,95,248,0.5)]"></div>
                    <span class="font-code-label text-[10px] uppercase tracking-wider bg-primary/10 border border-primary/20 px-2.5 py-1 rounded-full text-primary font-semibold">2021 - 2024</span>
                    <h4 class="font-h2 text-lg font-bold text-white pt-1">Full-stack Developer</h4>
                    <p class="text-on-surface-variant text-xs font-semibold uppercase tracking-wider">Kite App NG</p>
                    <ul class="text-on-surface-variant text-sm leading-relaxed list-disc list-inside space-y-1.5 pt-1">
                        <li>Built robust dashboard features using Laravel and Filament PHP, improving admin efficiency by 30%.</li>
                        <li>Developed an intelligent notification module and integrated activity tracking for dynamic analytics.</li>
                        <li>Created Python automation scripts simulating LLM reasoning scenarios to identify potential failure modes.</li>
                        <li>Configured Dockerized environments for dashboard QA testing, incorporating Bash automation.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Education & Certifications -->
        <div class="space-y-8">
            <h3 class="font-h1 text-2xl font-bold text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary text-2xl">school</span> Education & Projects
            </h3>

            <div class="relative pl-6 border-l border-outline/20 space-y-8">
                <!-- Education 1 -->
                <div class="relative space-y-2">
                    <div class="absolute -left-[31px] top-1.5 w-4.5 h-4.5 rounded-full bg-secondary border-4 border-background shadow-[0_0_10px_rgba(56,222,187,0.5)]"></div>
                    <span class="font-code-label text-[10px] uppercase tracking-wider bg-secondary/10 border border-secondary/20 px-2.5 py-1 rounded-full text-secondary font-semibold">2024 - 2025</span>
                    <h4 class="font-h2 text-lg font-bold text-white pt-1">Master's in Information Management</h4>
                    <p class="text-on-surface-variant text-xs font-semibold uppercase tracking-wider">Ahmadu Bello University</p>
                    <p class="text-on-surface-variant text-sm leading-relaxed pt-1">
                        Graduated with a cumulative GPA of 3.8. Conducted research on "Assessment of the Impact of E-Governance in Management of Public Services in Federal Capital Territory Administration (FCTA), Abuja."
                    </p>
                </div>

                <!-- Education 2 -->
                <div class="relative space-y-2">
                    <div class="absolute -left-[31px] top-1.5 w-4.5 h-4.5 rounded-full bg-secondary border-4 border-background shadow-[0_0_10px_rgba(56,222,187,0.5)]"></div>
                    <span class="font-code-label text-[10px] uppercase tracking-wider bg-secondary/10 border border-secondary/20 px-2.5 py-1 rounded-full text-secondary font-semibold">2011 - 2015</span>
                    <h4 class="font-h2 text-lg font-bold text-white pt-1">Bachelor's in Computer Science</h4>
                    <p class="text-on-surface-variant text-xs font-semibold uppercase tracking-wider">Adeleke University</p>
                    <p class="text-on-surface-variant text-sm leading-relaxed pt-1">
                        Graduated with a cumulative GPA of 3.6. Active in Computer Club and Music societies. Capstone research project: "Campus network and security."
                    </p>
                </div>

                <!-- IT Support Experience -->
                <div class="relative space-y-2">
                    <div class="absolute -left-[31px] top-1.5 w-4.5 h-4.5 rounded-full bg-secondary border-4 border-background shadow-[0_0_10px_rgba(56,222,187,0.5)]"></div>
                    <span class="font-code-label text-[10px] uppercase tracking-wider bg-secondary/10 border border-secondary/20 px-2.5 py-1 rounded-full text-secondary font-semibold">Previous Roles</span>
                    <h4 class="font-h2 text-lg font-bold text-white pt-1">IT Support & Web Developer</h4>
                    <p class="text-on-surface-variant text-xs font-semibold uppercase tracking-wider">AVO Health LTD & Abia State Government</p>
                    <p class="text-on-surface-variant text-sm leading-relaxed pt-1">
                        Designed billing receipt web apps, redeveloped organizational web platforms (avohealth.org, avologistics.org.ng), supported state revenue optimization, and implemented automated security systems.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Download CV Button -->
    <div class="flex justify-center pt-10">
        <a 
            href="{{ asset('Chijindu_Nwokeohuru_CV_May2026.pdf') }}" 
            download="Chijindu_Nwokeohuru_CV.pdf"
            class="bg-gradient-to-r from-primary-dim to-primary hover:from-primary hover:to-primary-dim text-white font-code-label font-bold text-xs uppercase tracking-widest px-8 py-4.5 rounded-lg transition-all duration-300 flex items-center gap-2 shadow-[0_0_20px_rgba(205,95,248,0.35)] cursor-pointer"
        >
            <span class="material-symbols-outlined text-base">download</span> Download CV
        </a>
    </div>
</div>