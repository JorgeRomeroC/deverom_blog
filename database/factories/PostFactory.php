<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'user_id' => User::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraph(5, true),
            'excerpt' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['draft', 'published', 'archived']),
            'main_image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'published_at' => $this->faker->dateTimeThisYear(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
