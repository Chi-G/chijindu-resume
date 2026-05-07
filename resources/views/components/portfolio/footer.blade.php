<!-- Elegant Footer -->
<footer class="border-t border-outline/10 bg-surface-dim/30 py-8 relative z-10 w-full mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-4 text-center">
        <span class="text-on-surface-variant text-sm">Designed & Engineered by <strong class="text-white">Chijindu Nwokeohuru</strong></span>
        <span class="text-on-surface-variant text-xs">Copyright &copy; {{ date('Y') }} CN. All Rights Reserved.</span>
        <div class="flex items-center gap-4">
            <a href="https://github.com/Chi-G" target="_blank" class="text-on-surface-variant hover:text-primary transition-colors text-xs font-semibold">GitHub</a>
            <span class="text-outline-variant">|</span>
            <a href="#" @click.prevent="activeTab = 'contact'" class="text-on-surface-variant hover:text-primary transition-colors text-xs font-semibold">Contact</a>
        </div>
    </div>
</footer>
