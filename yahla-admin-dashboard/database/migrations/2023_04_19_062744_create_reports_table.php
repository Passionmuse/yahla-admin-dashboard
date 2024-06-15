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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("reported_user_id")->nullable()->default(null);
            $table->unsignedBigInteger("reported_post_id")->nullable()->default(null);
            $table->unsignedBigInteger("reported_comment_id")->nullable()->default(null);
            $table->string("reason")->nullable()->default(null);
            $table->text("description")->nullable()->default(null);
            $table->tinyInteger("status")->default(0);
            $table->tinyInteger("action_taken")->default(0);
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
        Schema::dropIfExists('reports');
    }
};
