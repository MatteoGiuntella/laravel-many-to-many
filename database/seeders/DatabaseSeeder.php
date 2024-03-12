<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Technology;
use App\Models\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        TypeSeeder::class,
        ProjectSeeder::class,
        TechnologySeeder::class,
        Project_TechnologySeeder::class
       ]);
    }
}
