<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    // protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraph(3),
            'short' => $this->faker->sentence(),
            'preview'=> null,
            'image' => null,
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
