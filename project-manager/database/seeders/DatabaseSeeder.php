<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\City::factory(10)->create();
        \App\Models\Company::factory(10)->create();
        \App\Models\User::factory()->create([
            "name" => 'L9029',
            "email" => "test@gmail.com",
        ]);
        \App\Models\Project::factory(900)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
