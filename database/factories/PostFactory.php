<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->value('id'),
            'title' => fake()->realTextBetween(25,100),
            'content' => fake()->realTextBetween(150,250)
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
}
