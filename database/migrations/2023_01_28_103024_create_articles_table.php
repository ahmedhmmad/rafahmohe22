<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('article_writer');
            $table->string('article_department');
            $table->string('article_title');
            $table->string('article_subtitle');
            $table->string('article_main_image');
            $table->string('article_second_image');
            $table->string('article_third_image');
            $table->string('article_forth_image');
            $table->string('article_fifth_image');
            $table->boolean('article_ismain');
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
};
