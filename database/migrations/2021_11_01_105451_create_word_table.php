<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('word', function (Blueprint $table) {
            $table->increments('word_id');
            $table->string('word');
            $table->string('meaning');
            $table->text('example');
            $table->text('sound_url')->nullable();
            $table->text('photo');
            $table->integer('language_id');
            $table->integer('category_id');
            $table->boolean('type');
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
        Schema::dropIfExists('word');
    }
}
