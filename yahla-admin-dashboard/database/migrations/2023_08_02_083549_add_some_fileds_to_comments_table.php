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
        Schema::table('comments', function (Blueprint $table) {
            $table->boolean('type')->nullable();
            $table->integer('feed_id')->nullable();
            $table->integer('news_id')->nullable();
            $table->integer('history_id')->nullable();
            $table->integer('vote_id')->nullable();
            $table->integer('music_id')->nullable();
            $table->integer('emoji_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('feed_id');
            $table->dropColumn('news_id');
            $table->dropColumn('history_id');
            $table->dropColumn('vote_id');
            $table->dropColumn('music_id');
            $table->dropColumn('emoji_id');
        });
    }
};
