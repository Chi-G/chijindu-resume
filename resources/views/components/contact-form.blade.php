<?php

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

new class extends Component
{
    #[Validate('required|min:2')]
    public $name = '';

    #[Validate('required|email:rfc,dns')]
    public $email = '';

    public $subject = '';

    #[Validate('required|min:10')]
    public $message = '';

    public $isSuccess = false;

    public function submit()
    {
        $this->validate();

        // 1. Save message to Database
        DB::table('contact_messages')->insert([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
            'created_at' => now(), 
            'updated_at' => now(),
        ]);

        // 2. Send email notification via Hostinger SMTP
        try {
            $visitorName = $this->name;
            $visitorEmail = $this->email;
            $emailSubject = $this->subject ?: 'New Portfolio Contact Message';
            $messageBody = $this->message;

            Mail::send([], [], function ($message) use ($visitorName, $visitorEmail, $emailSubject, $messageBody) {
                $message->to('chijindu@forahia.com')
                    ->subject("[Portfolio] {$emailSubject}")
                    ->from(config('mail.from.address'), "{$visitorName} via Portfolio")
                    ->replyTo($visitorEmail, $visitorName)
                    ->html("
                        <div style=\"font-family: sans-serif; padding: 20px; line-height: 1.6; color: #333;\">
                            <h2 style=\"color: #cd5ff8; border-bottom: 2px solid #cd5ff8; padding-bottom: 10px;\">New Portfolio Message</h2>
                            <p><strong>Name:</strong> {$visitorName}</p>
                            <p><strong>Email:</strong> <a href=\"mailto:{$visitorEmail}\">{$visitorEmail}</a></p>
                            <p><strong>Subject:</strong> {$emailSubject}</p>
                            <div style=\"background: #f9f9f9; padding: 15px; border-radius: 5px; margin-top: 15px; border-left: 4px solid #cd5ff8;\">
                                <p style=\"margin: 0; white-space: pre-wrap;\">" . e($messageBody) . "</p>
                            </div>
                        </div>
                    ");
            });
        } catch (\Exception $e) {
            logger()->error('Failed to send contact form email: ' . $e->getMessage());
        }

        $this->reset(['name', 'email', 'subject', 'message']);
        $this->isSuccess = true;

        session()->flash('success', 'Message sent successfully! I will get back to you soon.');
    }

    public function closeSuccess()
    {
        $this->isSuccess = false;
    }
};
?>

<div class="glass-panel p-6 sm:p-10 rounded-2xl border border-outline/30 glow-hover transition-all duration-300 max-w-2xl mx-auto relative overflow-hidden">
    <!-- Star particle decorations inside form -->
    <div class="absolute -top-12 -right-12 w-24 h-24 bg-primary/10 rounded-full blur-xl pointer-events-none"></div>
    <div class="absolute -bottom-12 -left-12 w-24 h-24 bg-secondary/10 rounded-full blur-xl pointer-events-none"></div>

    <h3 class="font-h2 text-2xl font-bold mb-6 text-center text-on-surface">
        Send a <span class="text-primary font-bold">Message</span>
    </h3>

    @if ($isSuccess)
        <div class="mb-6 p-4 rounded-xl bg-secondary/10 border border-secondary/30 flex justify-between items-start animate-fade-in">
            <div class="flex items-start gap-3">
                <span class="material-symbols-outlined text-secondary mt-0.5">check_circle</span>
                <div>
                    <h4 class="font-bold text-on-surface text-sm">Success!</h4>
                    <p class="text-on-surface-variant text-xs mt-1">{{ session('success') }}</p>
                </div>
            </div>
            <button wire:click="closeSuccess" class="text-on-surface-variant hover:text-on-surface transition-colors cursor-pointer p-1">
                <span class="material-symbols-outlined text-sm">close</span>
            </button>
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-5 relative z-10">
        <div>
            <label for="name" class="block font-code-label text-xs uppercase tracking-wider text-on-surface-variant mb-2">Name</label>
            <input type="text" id="name" wire:model.blur="name" class="w-full bg-surface-dim/40 border border-outline/30 rounded-lg px-4 py-3 text-on-surface text-sm focus:border-primary/60 focus:ring-1 focus:ring-primary/40 focus:outline-none transition-colors duration-200 placeholder-on-surface-variant/40" placeholder="John Doe">
            @error('name') 
                <span class="text-red-400 text-xs mt-1 block flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">error</span>{{ $message }}
                </span> 
            @enderror
        </div>

        <div>
            <label for="email" class="block font-code-label text-xs uppercase tracking-wider text-on-surface-variant mb-2">Email Address</label>
            <input type="email" id="email" wire:model.blur="email" class="w-full bg-surface-dim/40 border border-outline/30 rounded-lg px-4 py-3 text-on-surface text-sm focus:border-primary/60 focus:ring-1 focus:ring-primary/40 focus:outline-none transition-colors duration-200 placeholder-on-surface-variant/40" placeholder="john@example.com">
            @error('email') 
                <span class="text-red-400 text-xs mt-1 block flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">error</span>{{ $message }}
                </span> 
            @enderror
        </div>

        <div>
            <label for="subject" class="block font-code-label text-xs uppercase tracking-wider text-on-surface-variant mb-2">Subject (Optional)</label>
            <input type="text" id="subject" wire:model="subject" class="w-full bg-surface-dim/40 border border-outline/30 rounded-lg px-4 py-3 text-on-surface text-sm focus:border-primary/60 focus:ring-1 focus:ring-primary/40 focus:outline-none transition-colors duration-200 placeholder-on-surface-variant/40" placeholder="Consulting Inquiry">
        </div>

        <div>
            <label for="message" class="block font-code-label text-xs uppercase tracking-wider text-on-surface-variant mb-2">Message</label>
            <textarea id="message" wire:model.blur="message" rows="5" class="w-full bg-surface-dim/40 border border-outline/30 rounded-lg px-4 py-3 text-on-surface text-sm focus:border-primary/60 focus:ring-1 focus:ring-primary/40 focus:outline-none transition-colors duration-200 placeholder-on-surface-variant/40 resize-none" placeholder="Let's build something amazing together..."></textarea>
            @error('message') 
                <span class="text-red-400 text-xs mt-1 block flex items-center gap-1">
                    <span class="material-symbols-outlined text-xs">error</span>{{ $message }}
                </span> 
            @enderror
        </div>

        <button type="submit" wire:loading.attr="disabled" class="w-full bg-gradient-to-r from-primary-dim to-primary hover:from-primary hover:to-primary-dim text-white font-code-label font-bold text-xs uppercase tracking-widest py-4 rounded-lg cursor-pointer transition-all duration-300 transform active:scale-95 flex justify-center items-center gap-2">
            <span wire:loading.remove wire:target="submit" class="flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">send</span> Send Message
            </span>
            <span wire:loading wire:target="submit" class="flex items-center gap-2">
                <svg class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg> Sending...
            </span>
        </button>
    </form>
</div>