<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chijindu Nwokeohuru - Portfolio & Resume</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">

        <!-- Google Fonts & Material Symbols -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

        <!-- Livewire & Tailwind Styles -->
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body 
        class="bg-background text-on-surface antialiased bg-grid-pattern min-h-screen relative overflow-x-hidden flex flex-col justify-between"
        x-data="{ activeTab: 'home', isMobileMenuOpen: false }"
    >
        <!-- Background Ambient Glowing Orbs -->
        <div class="absolute top-[10%] left-[5%] w-[350px] h-[350px] bg-primary/8 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-[20%] right-[5%] w-[400px] h-[400px] bg-secondary/6 rounded-full blur-[140px] pointer-events-none"></div>

        <!-- Sticky Header / Navbar Component -->
        <x-portfolio.navbar />

        <!-- Main Content Area -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 flex-grow w-full">
            
            <!-- HOME TAB Component -->
            <x-portfolio.hero />

            <!-- ABOUT TAB Component -->
            <x-portfolio.about />

            <!-- PROJECTS TAB -->
            <div 
                x-show="activeTab === 'projects'" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="space-y-12"
            >
                <div class="text-center max-w-3xl mx-auto space-y-4">
                    <h2 class="font-h1 text-3xl sm:text-4xl font-extrabold text-white">
                        My Recent <span class="text-primary font-extrabold">Works</span>
                    </h2>
                    <p class="text-on-surface-variant text-base sm:text-lg leading-relaxed">
                        Here are a few high-quality architectural backend and full-stack software products I've engineered recently.
                    </p>
                </div>

                <!-- Dynamic Livewire Project Showcase Component -->
                <livewire:⚡project-showcase />
            </div>

            <!-- RESUME TAB Component -->
            <x-portfolio.resume />

            <!-- CONTACT TAB -->
            <div 
                x-show="activeTab === 'contact'" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="space-y-12"
            >
                <div class="text-center max-w-2xl mx-auto space-y-4">
                    <h2 class="font-h1 text-3xl sm:text-4xl font-extrabold text-white">
                        Get In <span class="text-primary font-extrabold">Touch</span>
                    </h2>
                    <p class="text-on-surface-variant text-base">Have a project idea, a position opening, or just want to say hi? Send a message below!</p>
                </div>

                <!-- Dynamic Livewire Contact Form Component -->
                <livewire:⚡contact-form />
            </div>

        </main>

        <!-- Elegant Footer Component -->
        <x-portfolio.footer />

        @livewireScripts
    </body>
</html>
