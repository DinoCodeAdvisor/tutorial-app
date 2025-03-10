<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Make a user for our account
        User::create([
            'name' => 'Dino',
            'email' => 'DinoCodeAdvisor@gmail.com',
            'password' => 'Dino'
        ]);

        // Make 5 additional users
        User::factory()->count(5)->create();
    }
}
