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
        Schema::create('playlists', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('playlist_name');
            $table->integer('visibility');
            $table->integer('is_music')->nullable();
            $table->integer('is_feed')->nullable();
            $table->integer('is_news')->nullable();
            $table->integer('is_history')->nullable();
            $table->integer('is_vote')->nullable();
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
        Schema::dropIfExists('playlists');
    }
};
