<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public $casts =["image" => "array"];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bazars', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->json('image')->nullable();
            $table->bigInteger('price')->nullable();
            $table->integer('warranty')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('bazars');
    }
};
