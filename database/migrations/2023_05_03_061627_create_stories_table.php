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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable()->default(null);
            $table->string("title")->nullable()->default(null);
            $table->text("description")->nullable()->default(null);
            $table->string("media_path")->nullable()->default(null);
            $table->string("thumbnail_path")->nullable()->default(null);
            $table->integer("duration")->nullable()->default(null);
            $table->string("app")->default("main");
            $table->tinyInteger("status")->default(1);
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
        Schema::dropIfExists('stories');
    }
};
