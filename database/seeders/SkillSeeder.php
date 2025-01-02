<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run()
    {
        // Linguagens de Programação
        Skill::create(['name' => 'PHP']);
        Skill::create(['name' => 'JavaScript']);
        Skill::create(['name' => 'Python']);
        Skill::create(['name' => 'Java']);
        Skill::create(['name' => 'C#']);
        Skill::create(['name' => 'Ruby']);
        Skill::create(['name' => 'TypeScript']);
        Skill::create(['name' => 'Go']);
        Skill::create(['name' => 'Swift']);
        Skill::create(['name' => 'Kotlin']);

        // Frontend
        Skill::create(['name' => 'HTML']);
        Skill::create(['name' => 'CSS']);
        Skill::create(['name' => 'React']);
        Skill::create(['name' => 'Vue.js']);
        Skill::create(['name' => 'Angular']);
        Skill::create(['name' => 'Tailwind']);
        Skill::create(['name' => 'Bootstrap']);

        // Backend Frameworks
        Skill::create(['name' => 'Laravel']);
        Skill::create(['name' => 'Nodejs']);
        Skill::create(['name' => 'Django']);
        Skill::create(['name' => 'Spring']);
        Skill::create(['name' => 'Express']);
        Skill::create(['name' => 'Flask']);

        // Banco de Dados
        Skill::create(['name' => 'MySQL']);
        Skill::create(['name' => 'PostgreSQL']);
        Skill::create(['name' => 'MongoDB']);
        Skill::create(['name' => 'Redis']);
        Skill::create(['name' => 'SQLite']);
        Skill::create(['name' => 'Oracle']);
        Skill::create(['name' => 'SQLServer']);

        // DevOps & Cloud
        Skill::create(['name' => 'Docker']);
        Skill::create(['name' => 'Kubernetes']);
        Skill::create(['name' => 'AWS']);
        Skill::create(['name' => 'Azure']);
        Skill::create(['name' => 'Linux']);
        Skill::create(['name' => 'Git']);

        // Mobile
        Skill::create(['name' => 'ReactNative']);
        Skill::create(['name' => 'Flutter']);
        Skill::create(['name' => 'Ionic']);

        // Outros
        Skill::create(['name' => 'GraphQL']);
        Skill::create(['name' => 'Firebase']);
        Skill::create(['name' => 'WordPress']);
        Skill::create(['name' => 'Figma']);
    }
}