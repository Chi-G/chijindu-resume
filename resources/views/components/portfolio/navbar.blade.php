<!-- Sticky Header / Navbar -->
<header class="sticky top-0 z-40 w-full bg-background/55 backdrop-blur-md border-b border-outline/10 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="#" @click.prevent="activeTab = 'home'" class="font-h1 text-2xl font-bold tracking-tight text-white hover:text-primary transition-colors cursor-pointer flex items-center gap-2">
                <span class="text-primary font-extrabold">&lt;</span>Chijindu<span class="text-secondary font-extrabold">.dev /&gt;</span>
            </a>
        </div>

        <!-- Desktop Nav Tabs -->
        <nav class="hidden md:flex items-center gap-1">
            <button 
                @click="activeTab = 'home'" 
                :class="activeTab === 'home' ? 'text-primary' : 'text-on-surface-variant hover:text-on-surface'"
                class="px-4 py-2 text-sm font-semibold tracking-wide font-code-label transition-colors duration-200 cursor-pointer flex items-center gap-1.5"
            >
                <span class="material-symbols-outlined text-lg">home</span> Home
            </button>
            <button 
                @click="activeTab = 'about'" 
                :class="activeTab === 'about' ? 'text-primary' : 'text-on-surface-variant hover:text-on-surface'"
                class="px-4 py-2 text-sm font-semibold tracking-wide font-code-label transition-colors duration-200 cursor-pointer flex items-center gap-1.5"
            >
                <span class="material-symbols-outlined text-lg">person</span> About
            </button>
            <button 
                @click="activeTab = 'projects'" 
                :class="activeTab === 'projects' ? 'text-primary' : 'text-on-surface-variant hover:text-on-surface'"
                class="px-4 py-2 text-sm font-semibold tracking-wide font-code-label transition-colors duration-200 cursor-pointer flex items-center gap-1.5"
            >
                <span class="material-symbols-outlined text-lg">terminal</span> Projects
            </button>
            <button 
                @click="activeTab = 'resume'" 
                :class="activeTab === 'resume' ? 'text-primary' : 'text-on-surface-variant hover:text-on-surface'"
                class="px-4 py-2 text-sm font-semibold tracking-wide font-code-label transition-colors duration-200 cursor-pointer flex items-center gap-1.5"
            >
                <span class="material-symbols-outlined text-lg">description</span> Resume
            </button>
            <button 
                @click="activeTab = 'contact'" 
                :class="activeTab === 'contact' ? 'text-primary' : 'text-on-surface-variant hover:text-on-surface'"
                class="px-4 py-2 text-sm font-semibold tracking-wide font-code-label transition-colors duration-200 cursor-pointer flex items-center gap-1.5"
            >
                <span class="material-symbols-outlined text-lg">alternate_email</span> Contact
            </button>
        </nav>

        <!-- GitHub Button -->
        <div class="hidden md:flex items-center">
            <a 
                href="https://github.com/Chi-G" 
                target="_blank" 
                class="bg-surface-dim/50 hover:bg-surface-dim border border-outline/30 hover:border-primary/50 text-on-surface text-xs font-bold uppercase tracking-wider px-4 py-2.5 rounded-lg transition-all duration-300 flex items-center gap-2"
            >
                <svg class="w-4 h-4 fill-current text-primary" viewBox="0 0 24 24">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                </svg>
                GitHub Profile
            </a>
        </div>

        <!-- Mobile Hamburger Button -->
        <div class="md:hidden flex items-center">
            <button 
                @click="isMobileMenuOpen = !isMobileMenuOpen"
                class="text-on-surface-variant hover:text-white p-2 focus:outline-none cursor-pointer"
            >
                <span class="material-symbols-outlined text-2xl" x-text="isMobileMenuOpen ? 'close' : 'menu'">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div 
        x-show="isMobileMenuOpen" 
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="md:hidden absolute top-20 left-0 w-full bg-surface-dim/95 backdrop-blur-lg border-b border-outline/10 px-4 py-4 space-y-2 z-35"
    >
        <button 
            @click="activeTab = 'home'; isMobileMenuOpen = false" 
            :class="activeTab === 'home' ? 'text-primary bg-primary/10' : 'text-on-surface-variant'"
            class="w-full text-left px-4 py-3 rounded-lg text-sm font-semibold font-code-label flex items-center gap-2 cursor-pointer"
        >
            <span class="material-symbols-outlined">home</span> Home
        </button>
        <button 
            @click="activeTab = 'about'; isMobileMenuOpen = false" 
            :class="activeTab === 'about' ? 'text-primary bg-primary/10' : 'text-on-surface-variant'"
            class="w-full text-left px-4 py-3 rounded-lg text-sm font-semibold font-code-label flex items-center gap-2 cursor-pointer"
        >
            <span class="material-symbols-outlined">person</span> About
        </button>
        <button 
            @click="activeTab = 'projects'; isMobileMenuOpen = false" 
            :class="activeTab === 'projects' ? 'text-primary bg-primary/10' : 'text-on-surface-variant'"
            class="w-full text-left px-4 py-3 rounded-lg text-sm font-semibold font-code-label flex items-center gap-2 cursor-pointer"
        >
            <span class="material-symbols-outlined">terminal</span> Projects
        </button>
        <button 
            @click="activeTab = 'resume'; isMobileMenuOpen = false" 
            :class="activeTab === 'resume' ? 'text-primary bg-primary/10' : 'text-on-surface-variant'"
            class="w-full text-left px-4 py-3 rounded-lg text-sm font-semibold font-code-label flex items-center gap-2 cursor-pointer"
        >
            <span class="material-symbols-outlined">description</span> Resume
        </button>
        <button 
            @click="activeTab = 'contact'; isMobileMenuOpen = false" 
            :class="activeTab === 'contact' ? 'text-primary bg-primary/10' : 'text-on-surface-variant'"
            class="w-full text-left px-4 py-3 rounded-lg text-sm font-semibold font-code-label flex items-center gap-2 cursor-pointer"
        >
            <span class="material-symbols-outlined">alternate_email</span> Contact
        </button>

        <hr class="border-outline/10 my-2">
        <a 
            href="https://github.com/Chi-G" 
            target="_blank" 
            class="w-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold uppercase tracking-wider py-3 rounded-lg flex justify-center items-center gap-2"
        >
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
            </svg>
            GitHub Profile
        </a>
    </div>
</header>
