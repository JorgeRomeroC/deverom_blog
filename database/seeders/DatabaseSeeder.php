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
         // Crear 5 usuarios
        \App\Models\User::factory()->create(['name' => 'Admin User', 'email' => 'admin@example.com', 'role' => 'admin']);
        \App\Models\User::factory(4)->create();

        // Crear 5 categorías
        $categories = \App\Models\Category::factory(5)->create();

        // Crear 5 tags
        $tags = \App\Models\Tag::factory(5)->create();

        // Crear 50 posts
        $posts = \App\Models\Post::factory(50)->create();

        // Asignar categorías y tags a los posts
        $posts->each(function ($post) use ($categories, $tags) {
            // Asociar 1-3 categorías aleatorias por post
            $post->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );

            // Asociar 1-5 tags aleatorios por post
            $post->tags()->attach(
                $tags->random(rand(1, 5))->pluck('id')->toArray()
            );
        });
    }
}
