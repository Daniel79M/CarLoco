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
        User::create([
            'nom' => 'Test User',
            'prenoms' => 'Test',
            'numero' => '1234567890',
            'address' => '123 Main St',
            'ville' => 'New York',
            'email' => 'test@example.com',
            'password' => 'test@',
            'is_admin' => true
        ]);
    }
}
