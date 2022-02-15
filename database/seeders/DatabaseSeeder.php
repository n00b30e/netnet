<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()->count(5)->create();
        // $this->call([
        //     ArticleFactory::Class
        // ]);
    }
}
