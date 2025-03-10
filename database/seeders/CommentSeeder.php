<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Make 50 comments
        Comment::factory()->count(50)->create();

        // Make 25 deleted comments
        Comment::factory()->softDeleted()->count(25)->create();
    
        // Make 25 deleted comments on a deleted post
        Comment::factory()->softDeleted()->withTrashedPost()->count(25)->create();
    
    }
}
