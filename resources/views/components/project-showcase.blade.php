<?php

use Livewire\Component;
use App\Models\Project;

new class extends Component
{
    public $selectedCategory = 'All';
    public $selectedProject = null;

    public function selectCategory($category) 
    {
        $this->selectedCategory = $category;
    }

    public function showProject($projectId)
    {
        $this->selectedProject = Project::find($projectId);
    }

    public function closeProject()
    {
        $this->selectedProject = null;
    }

    public function getProjectsProperty()
    {
        if ($this->selectedCategory === 'All') {
            return Project::latest()->get();
        }

        return Project::where('category', $this->selectedCategory)->latest()->get();
    }

    public function getCategoriesProperty()
    {
        return ['All', 'Fullstack', 'Backend', 'DevOps'];
    }
};
?>

<div>
    <!-- Category Filter Tabs -->
    <div class="flex flex-wrap justify-center items-center gap-3 mb-12">
        @foreach ($this->categories as $category)
            <button 
                wire:click="selectCategory('{{ $category }}')"
                class="font-code-label text-xs uppercase tracking-widest px-5 py-2.5 rounded-full border transition-all duration-300 cursor-pointer {{ $selectedCategory === $category ? 'bg-primary border-primary text-white shadow-[0_0_15px_rgba(205,95,248,0.4)]' : 'bg-surface-dim/40 border-outline/20 text-on-surface-variant hover:text-on-surface hover:border-primary/40' }}"
            >
                {{ $category }}
            </button>
        @endforeach
    </div>

    <!-- Projects Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($this->projects as $project)
            <div class="glass-panel rounded-2xl border border-outline/20 p-6 flex flex-col justify-between glow-hover transition-all duration-300 relative overflow-hidden group">
                <!-- Glowing corner accent -->
                <div class="absolute -top-12 -right-12 w-24 h-24 bg-primary/5 group-hover:bg-primary/10 rounded-full blur-xl pointer-events-none transition-all duration-500"></div>

                <div>
                    <!-- Folder Header -->
                    <div class="flex justify-between items-center mb-5">
                        <span class="material-symbols-outlined text-primary text-3xl opacity-80 group-hover:opacity-100 transition-opacity duration-300">folder_open</span>
                        <span class="font-code-label text-[10px] uppercase tracking-widest bg-primary/10 border border-primary/20 px-2.5 py-1 rounded-full text-primary font-semibold">
                            {{ $project->category }}
                        </span>
                    </div>

                    <!-- Title -->
                    <h3 class="font-h2 text-xl font-bold text-on-surface group-hover:text-primary transition-colors duration-300 mb-3">
                        {{ $project->title }}
                    </h3>

                    <!-- Description -->
                    <p class="text-on-surface-variant text-sm leading-relaxed mb-6 line-clamp-3">
                        {{ $project->description }}
                    </p>

                    <!-- Tech Tags -->
                    <div class="flex flex-wrap gap-1.5 mb-6">
                        @foreach ($project->tags as $tag)
                            <span class="text-[10px] font-medium font-code-label bg-surface-dim/60 border border-outline/10 text-on-surface-variant/80 px-2.5 py-0.5 rounded-md">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- Footer Actions -->
                <div class="flex items-center justify-between pt-4 border-t border-outline/10">
                    <button 
                        wire:click="showProject({{ $project->id }})"
                        class="text-xs font-semibold text-primary hover:text-white transition-colors cursor-pointer flex items-center gap-1.5"
                    >
                        <span class="material-symbols-outlined text-sm">visibility</span> View Details
                    </button>

                    <div class="flex items-center gap-3">
                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" class="text-on-surface-variant hover:text-primary transition-colors p-1" title="GitHub Repository">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                                </svg>
                            </a>
                        @endif

                        @if ($project->demo_url)
                            <a href="{{ $project->demo_url }}" target="_blank" class="text-on-surface-variant hover:text-secondary transition-colors p-1" title="Live Demo">
                                <span class="material-symbols-outlined text-xl">open_in_new</span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Details Modal -->
    @if ($selectedProject)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-background/80 backdrop-blur-md animate-fade-in">
            <div wire:click="closeProject" class="absolute inset-0 cursor-pointer"></div>

            <div class="glass-panel w-full max-w-3xl rounded-2xl border border-primary/30 p-6 sm:p-8 max-h-[90vh] overflow-y-auto relative z-10 animate-scale-up shadow-[0_0_50px_rgba(205,95,248,0.2)]">
                <!-- Close Button -->
                <button 
                    wire:click="closeProject" 
                    class="absolute top-4 right-4 text-on-surface-variant hover:text-white transition-colors cursor-pointer p-1.5 bg-surface-dim/40 hover:bg-surface-dim/80 rounded-full border border-outline/10"
                >
                    <span class="material-symbols-outlined">close</span>
                </button>

                <!-- Category -->
                <span class="font-code-label text-[10px] uppercase tracking-widest bg-primary/15 border border-primary/25 px-3 py-1 rounded-full text-primary font-semibold mb-4 inline-block">
                    {{ $selectedProject->category }}
                </span>

                <!-- Title -->
                <h2 class="font-h1 text-2xl sm:text-3xl font-bold text-on-surface mb-4">
                    {{ $selectedProject->title }}
                </h2>

                <!-- Tech Badges -->
                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach ($selectedProject->tags as $tag)
                        <span class="text-xs font-semibold font-code-label bg-primary/10 border border-primary/20 text-primary px-3 py-1 rounded-md">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>

                <hr class="border-outline/10 mb-6">

                <!-- Detailed Description -->
                <div class="space-y-4 text-on-surface-variant text-sm sm:text-base leading-relaxed mb-8">
                    <p class="font-medium text-on-surface">Overview</p>
                    <p>{{ $selectedProject->description }}</p>
                    @if ($selectedProject->long_description)
                        <p class="font-medium text-on-surface pt-4">Technical Architecture & Impact</p>
                        <p class="text-sm leading-relaxed whitespace-pre-line">{{ $selectedProject->long_description }}</p>
                    @endif
                </div>

                <!-- Footer Buttons -->
                <div class="flex flex-col sm:flex-row items-center gap-4 pt-4 border-t border-outline/10">
                    @if ($selectedProject->github_url)
                        <a 
                            href="{{ $selectedProject->github_url }}" 
                            target="_blank" 
                            class="w-full sm:w-auto bg-surface-dim/80 hover:bg-surface-dim border border-outline/30 hover:border-primary/50 text-on-surface font-code-label font-bold text-xs uppercase tracking-widest px-6 py-3.5 rounded-lg transition-all duration-300 flex justify-center items-center gap-2"
                        >
                            <svg class="w-4.5 h-4.5 fill-current" viewBox="0 0 24 24">
                                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                            </svg> Code Repository
                        </a>
                    @endif

                    @if ($selectedProject->demo_url)
                        <a 
                            href="{{ $selectedProject->demo_url }}" 
                            target="_blank" 
                            class="w-full sm:w-auto bg-gradient-to-r from-primary-dim to-primary hover:from-primary hover:to-primary-dim text-white font-code-label font-bold text-xs uppercase tracking-widest px-6 py-3.5 rounded-lg transition-all duration-300 flex justify-center items-center gap-2 shadow-[0_0_15px_rgba(205,95,248,0.3)]"
                        >
                            <span class="material-symbols-outlined text-sm">open_in_new</span> Live Demonstration
                        </a>
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>