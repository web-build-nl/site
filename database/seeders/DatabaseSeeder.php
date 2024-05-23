<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'web.build.nl@gmail.com',
            'password' => 'AmX86y2R..//!!'
        ]);
        Todo::factory(5)->create();
    }
}
