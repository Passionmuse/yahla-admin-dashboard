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
        Schema::create('reactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('feed_id')->nullable();
            $table->integer('news_id')->nullable();
            $table->integer('history_id')->nullable();
            $table->integer('vote_id')->nullable();
            $table->integer('music_id')->nullable();
            $table->integer('emoji_id');
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
        Schema::dropIfExists('reactions');
    }
};
