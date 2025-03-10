<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::inRandomOrder()->value('id'),
            'user_id' => User::inRandomOrder()->value('id'),
            'content' => fake()->realTextBetween(20, 200)
        ];
    }

    /**
     * Define a function that soft deletes the model
     *
     * @return Factory::state
     */
    public function softDeleted(): static
    {
        return $this->state(fn() => [
            'deleted_at' => Carbon::now()
        ]);
    }

    /**
     * Ensure the post_id is assigned from a soft-deleted post.
     *
     * @return static
     */
    public function withTrashedPost(): static
    {
        return $this->state(function () {
            $trashedPost = Post::onlyTrashed()->inRandomOrder()->value('id');

            // If no trashed post exists, create one and soft delete it
            if (!$trashedPost) {
                $trashedPost = Post::factory()->softDeleted()->create()->id;
            }

            return ['post_id' => $trashedPost];
        });
    }
}
