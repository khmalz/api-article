<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Khairul Akmal',
            'username' => 'Akmal',
            'email' => 'akmal@gmail.com',
        ]);

        \App\Models\Subject::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
        ]);

        \App\Models\Subject::create([
            'name' => 'PHP',
            'slug' => 'php',
        ]);
    }
}
