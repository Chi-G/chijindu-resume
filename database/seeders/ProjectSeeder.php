<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing projects first to avoid duplication
        Project::truncate();

        $projects = [
            [
                'title' => 'EcoTrack NG',
                'description' => 'An AI-powered environmental waste management platform connecting households, recyclers, and collection agencies across Nigeria.',
                'long_description' => "Developed utilizing Laravel 12, React 18, Inertia.js, Tailwind CSS, Pusher WebSockets, and MySQL.\n\nImplements Google Gemini AI model integration for automated real-time waste material classification, dynamic route tracking with GPS mapping optimization, offline Progressive Web App (PWA) support, and an escrow-inspired digital token rewards system.",
                'image_url' => null,
                'tags' => ['Laravel 12', 'React', 'Google Gemini AI', 'Pusher', 'PWA', 'MySQL'],
                'category' => 'Fullstack',
                'github_url' => 'https://github.com/Chi-G/EcoTrack-NG',
                'demo_url' => 'https://ecotrack.laravel.cloud',
            ],
            [
                'title' => 'FlowSlot',
                'description' => 'An enterprise smart appointment booking system eliminating scheduling conflicts through automated real-time slot locking.',
                'long_description' => "Architected with Laravel 11, React 18, Inertia.js, and MySQL on shared hosting.\n\nFeatures advanced concurrency safety with row-level database transactional locking, idempotent booking API design, queued email/SMS notifications via Redis, and automated GitHub Actions CI/CD deployment workflows optimized for zero-downtime rollouts.",
                'image_url' => null,
                'tags' => ['Laravel', 'React', 'Inertia.js', 'MySQL', 'Redis', 'GitHub Actions'],
                'category' => 'Fullstack',
                'github_url' => 'https://github.com/Chi-G/FlowSlot',
                'demo_url' => 'https://flowslot.laravel.cloud',
            ],
            [
                'title' => 'FORAFIX',
                'description' => 'A secure, two-sided on-demand home services marketplace connecting clients with vetted local service professionals.',
                'long_description' => "Engineered using ReactJS for the web client, Flutter for mobile apps, and a Laravel backend API.\n\nFeatures MySQL spatial indexing for geolocation-based service area detection, automated provider-to-client matching, live in-app chat via Pusher, and secure escrow-based payment processing with Paystack and Google Maps route optimization.",
                'image_url' => null,
                'tags' => ['Laravel API', 'React', 'Flutter', 'MySQL Spatial', 'Pusher', 'Paystack'],
                'category' => 'Fullstack',
                'github_url' => 'https://github.com/Chi-G/forafix-web',
                'demo_url' => 'https://forafix.laravel.cloud',
            ],
            [
                'title' => 'ServeEase',
                'description' => 'A scalable multi-tenant SaaS backend API engine featuring automated subscription billing and robust Redis event queue processing.',
                'long_description' => "Designed following Clean Architecture and DDD principles in Laravel.\n\nProvides robust multi-tenant tokenized authorization, secure Stripe subscription payment webhook integration, dynamic resource throttling, and 100% automated test coverage using Pest and PHPUnit for secure, fast continuous deployment.",
                'image_url' => null,
                'tags' => ['Laravel', 'Redis', 'MySQL', 'Stripe API', 'Pest PHP', 'Clean Architecture'],
                'category' => 'Backend',
                'github_url' => 'https://github.com/Chi-G/serve_ease',
                'demo_url' => 'https://serveease.laravel.cloud',
            ],
            [
                'title' => 'UPWEARLANE',
                'description' => 'A premium fashion and luxury apparel e-commerce marketplace featuring interactive catalogs and advanced order workflows.',
                'long_description' => "Developed utilizing Laravel, Livewire, and Tailwind CSS.\n\nFeatures sub-second product catalog queries through optimized database indexing, multi-tier product category sorting, full payment processing integration, and a comprehensive, interactive administrative inventory dashboard deployed on Laravel Cloud.",
                'image_url' => null,
                'tags' => ['Laravel', 'Livewire', 'Tailwind CSS', 'MySQL', 'E-Commerce'],
                'category' => 'Fullstack',
                'github_url' => 'https://github.com/Chi-G/UPWEARLANE',
                'demo_url' => 'https://upwearlane.laravel.cloud',
            ],
            [
                'title' => 'Elevate Interiors Inventory',
                'description' => 'An automated stock and asset management dashboard designed for architectural and premium physical product tracking.',
                'long_description' => "Built utilizing Laravel and Filament PHP.\n\nEmploys robust real-time database queries, live stock level auditing, low-inventory automated alerts, reorder workflow triggers, and secure multi-role permission schemas optimized for rapid deployment and high responsiveness on Laravel Cloud.",
                'image_url' => null,
                'tags' => ['Laravel', 'Filament PHP', 'MySQL', 'Inventory', 'Analytics Dashboard'],
                'category' => 'Backend',
                'github_url' => 'https://github.com/Chi-G/inventory',
                'demo_url' => 'https://elevate-interiors.laravel.cloud/',
            ],
            [
                'title' => 'AuraMed CMS',
                'description' => 'A comprehensive clinical management platform for alternative medicine clinics, digitizing records, stock, and visits.',
                'long_description' => "Designed with a responsive React/TypeScript frontend and a secure Python FastAPI backend utilizing SQLAlchemy ORM.\n\nFeatures JWT token security, role-based access, real-time BMI calculations, automated medical billing, and pharmacy stock validation with low-stock alerts deployed on Hostinger servers.",
                'image_url' => null,
                'tags' => ['Python', 'FastAPI', 'React', 'TypeScript', 'SQLAlchemy', 'MySQL'],
                'category' => 'Fullstack',
                'github_url' => 'https://github.com/Chi-G/auramed',
                'demo_url' => 'https://forahia.com/auramed',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
