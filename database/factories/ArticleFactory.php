<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $faker->sentence;
        $slug = str_slug($title, '_');
    
        return [
            'slug' => $title,               // псевдоним для ссылки
            'title' => $slug,              // заголовок статьи
            'short_description' => $this->faker->sentence(),  // короткое описание статьи. если будет пустым - будем брать первые 100 символов
            'body' => $this->faker->paragraph(5),               // основной текст статьи
            'preview_image_path' => 'placeholder_link_here',// ссылка на изображение для превью
            'image_path' => 'placeholder_link_here',         // ссылка на полноразмерную картинку
        ];
    }
}
