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
        Schema::create('social_events', function (Blueprint $table) {
            $table->id();
            $table->string('social_writer');
            $table->string('social_department');
            $table->string('social_title');
            $table->text('social_description');
            $table->string('social_main_image');
            $table->string('social_second_image');
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
        Schema::dropIfExists('social_events');
    }
};
