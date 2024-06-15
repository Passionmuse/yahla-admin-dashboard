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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable()->default(null);
            $table->string("title")->nullable()->default(null);
            $table->longText("content")->nullable()->default(null);
            $table->string("image")->nullable()->default(null);
            $table->bigInteger("likes")->default(0);
            $table->bigInteger("shares")->default(0);
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
        Schema::dropIfExists('posts');
    }
};
