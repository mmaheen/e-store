<?php

namespace Database\Seeders;

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
            'name' => 'Mushrif Maheen',
            'email' => 'mushrifmaheen@gmail.com',
            'role' => 'admin',
            'password' => '12345678'
        ]);

        User::factory(10)->create();

    }
}
