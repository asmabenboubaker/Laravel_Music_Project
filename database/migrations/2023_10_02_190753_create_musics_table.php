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
        Schema::create('musics', function (Blueprint $table) {
            $table->id();
            // 
            $table->string('title');
            $table->string('artist');
            $table->string('album');
            $table->string('genre');
            $table->string('year');
            $table->string('image');
            $table->string('audio');
            $table->string('duration');
            $table->string('size');
            $table->string('lyrics');
            // 
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
        Schema::dropIfExists('musics');
    }
};
