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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description")->nullable()->default(null);
            $table->integer("organization_id")->nullable()->default(null);
            $table->json("tags")->nullable()->default(null);
            $table->timestamp("start_date")->nullable()->default(null);
            $table->timestamp("end_date")->nullable()->default(null);
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
        Schema::dropIfExists('donations');
    }
};
