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
        // User::factory(10)->withPersonalTeam()->create();

        User::factory()->withPersonalTeam()->createMany([
            [
                'firstname' => 'Max Loued',
                'lastname' => 'Baisac',
                'is_admin' => true,
                'email' => 'mbaisac@bookshop.com',
                'password' => '123456789',
            ],
            [
                'firstname' => 'Stephanie May',
                'lastname' => 'Montera',
                'is_admin' => false,
                'email' => 'smontera@bookshop.com',
                'password' => '123456789',
            ],
        ]);
    }
}
