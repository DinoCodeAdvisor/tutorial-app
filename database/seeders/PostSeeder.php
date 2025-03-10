<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Make a 25 posts
        Post::factory()->count(25)->create();

        // Make a 5 deleted posts
        Post::factory()->softDeleted()->count(5)->create();
    }
}
