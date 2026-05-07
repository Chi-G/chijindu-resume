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
        $projects = [
            [
                'title' => 'ServeEase SaaS Engine',
                'description' => 'A scalable SaaS backend API platform offering multi-tenant authentication, automated subscription billing, and robust event queues.',
                'long_description' => 'Designed and implemented a high-performance multi-tenant API serving thousands of concurrent requests. Constructed using Clean Architecture principles in Laravel, featuring an event-driven design using Redis queues, integrated Stripe subscription lifecycles, and 100% automated test coverage with Pest and PHPUnit.',
                'image_url' => null,
                'tags' => ['Laravel', 'Redis', 'MySQL', 'Docker', 'Stripe', 'Pest'],
                'category' => 'Backend & APIs',
                'github_url' => 'https://github.com/Chi-G/serveease-backend',
                'demo_url' => 'https://serveease.chijindu.dev',
            ],
            [
                'title' => 'Elevate Interiors Web Portal',
                'description' => 'A premium, highly-animated glassmorphism experience showcase for architectural projects with sub-second page transitions.',
                'long_description' => 'Built a jaw-dropping digital portal using Next.js and Tailwind CSS. Employs modern design best practices including elegant glassmorphism panels, dynamic layouts, rich scroll-linked animations using Framer Motion, and absolute SEO optimizations (semantic HTML, metadata tagging, and fast initial-page paints).',
                'image_url' => null,
                'tags' => ['Next.js', 'React', 'TypeScript', 'Tailwind CSS', 'Framer Motion'],
                'category' => 'Frontend Architecture',
                'github_url' => 'https://github.com/Chi-G/elevate-interiors',
                'demo_url' => 'https://elevate-interiors.chijindu.dev',
            ],
            [
                'title' => 'HyperQuery Index Optimizer',
                'description' => 'An automated database performance utility built to analyze queries, optimize indices, and monitor large PostgreSQL and MySQL clusters.',
                'long_description' => 'Developed an automated database diagnostics engine in Python. It parses active query logs, detects index bottlenecks, recommends optimal ORM query bindings (such as Eloquent eager-loading fixes), and uses Redis caching to display sub-millisecond analytics inside a lightweight Flask control dashboard.',
                'image_url' => null,
                'tags' => ['PostgreSQL', 'Python', 'Flask', 'Query Optimization', 'MySQL', 'Redis'],
                'category' => 'Databases & Data',
                'github_url' => 'https://github.com/Chi-G/hyperquery-optimizer',
                'demo_url' => 'https://hyperquery.chijindu.dev',
            ],
            [
                'title' => 'CloudOps Deployer Suite',
                'description' => 'A containerized deployment orchestration suite integrating GitHub Actions, AWS Serverless hosting, and zero-downtime rollouts.',
                'long_description' => 'Engineered a highly reliable CI/CD container orchestration framework. Features multi-environment YAML workflows in GitHub Actions, Dockerized local dev services with Laravel Sail, serverless lambda deployments in AWS, and automated health checking to ensure absolute zero-downtime deployments under enterprise workloads.',
                'image_url' => null,
                'tags' => ['AWS', 'Docker', 'GitHub Actions', 'CI/CD', 'Serverless', 'Linux'],
                'category' => 'Cloud & DevOps',
                'github_url' => 'https://github.com/Chi-G/cloudops-deployer',
                'demo_url' => 'https://cloudops.chijindu.dev',
            ],
            [
                'title' => 'Laravel Boost Engine',
                'description' => 'A supercharged microservice log-caching and analytical system capable of sub-second streaming metrics.',
                'long_description' => 'Constructed an incredibly fast microservice analytics engine in Laravel and Swoole. It processes real-time event logs, manages massive in-memory caching layers with Redis, outputs structured reports using Eloquent aggregation, and feeds live Livewire-powered dashboards under high-concurrency standards.',
                'image_url' => null,
                'tags' => ['Laravel', 'Swoole', 'Redis', 'In-Memory Caching', 'Livewire', 'Pest'],
                'category' => 'Backend & APIs',
                'github_url' => 'https://github.com/Chi-G/laravel-boost',
                'demo_url' => 'https://boost.chijindu.dev',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
