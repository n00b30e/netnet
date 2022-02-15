<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Article::factory()->times(20)->create();
    }
}
