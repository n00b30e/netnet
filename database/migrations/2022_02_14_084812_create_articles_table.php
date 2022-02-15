<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {

            $table->id();
            $table->string('slug');               // псевдоним для ссылки
            $table->string('title');              // заголовок статьи
            $table->text('short_description');  // короткое описание статьи. если будет пустым - будем брать первые 100 символов
            $table->longText('body');               // основной текст статьи
            $table->integer('counter')->default(0);
            $table->string('preview_image_path')->nullable(); // ссылка на изображение для превью
            $table->string('image_path')->nullable();         // ссылка на полноразмерную картинку

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
