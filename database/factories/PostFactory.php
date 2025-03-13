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

        $ImagesAleatori = [
            'blog/1.jpg',
            'blog/2.jpg',
            'blog/3.jpg',
            'blog/4.jpg',
            'blog/5.jpg',
            'blog/6.jpg',
            'blog/7.jpg',
            'blog/8.jpg',
            'blog/9.jpg',
            'blog/10.jpg',
            'blog/11.jpg',
            'blog/12.jpg',
            'blog/13.jpg',
            'blog/14.jpg',
            'blog/15.jpg',
            'blog/16.jpg',
            'blog/1.jpg',
            'blog/2.jpg',
            'blog/3.jpg',
            'blog/20.jpg',
            'blog/21.jpg',
            'blog/22.jpg',
            'blog/23.jpg',
            'blog/24.jpg',
            'blog/25.jpg',
            'blog/26.jpg',
            'blog/27.jpg',
            'blog/28.jpg',
            'blog/29.jpg',
            'blog/30.jpg',
        ];
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraph(5, true),
            'excerpt' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['draft', 'published', 'archived']),
            'main_image' => $this->faker->randomElement($ImagesAleatori),
            'published_at' => $this->faker->dateTimeThisYear(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
