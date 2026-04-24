<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Project::create([
            'title' => 'Application Mobile',
            'description' => 'Développement des applications mobiles',
            'image' => 'images/project1.png',
            'category' => 'Mobile',
        ]);

        \App\Models\Project::create([
            'title' => 'Application Desktop',
            'description' => "Développement d'applications Desktop",
            'image' => 'images/project1.png',
            'category' => 'Desktop',
        ]);

        \App\Models\Project::create([
            'title' => 'Application Web',
            'description' => 'Développement de solutions web',
            'image' => 'images/project1.png',
            'category' => 'Web',
        ]);

        \App\Models\Project::create([
            'title' => 'CI-CD',
            'description' => 'Intégration et Déploiement continus',
            'image' => 'images/project2.png',
            'category' => 'DevOps',
        ]);

        \App\Models\Project::create([
            'title' => 'DevOps',
            'description' => "Automatisation et gestion de l'infrastructure",
            'image' => 'images/project2.png',
            'category' => 'DevOps',
        ]);
    }
}
