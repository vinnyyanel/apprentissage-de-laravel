<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{ Film, Category };

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    

    public function run(): void
    {
        Category::factory()
            ->has(Film::factory()->count(4))
            ->count(10)
            ->create();
    }
}
