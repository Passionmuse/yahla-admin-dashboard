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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->nullable()->default(null);
            $table->string('flag_path')->nullable()->default(null);
            $table->string('image_path')->nullable()->default(null);
            $table->text('icon_code')->nullable()->default(null);
            $table->integer('capital_id')->nullable()->default(null);
            $table->integer('language_id')->nullable()->default(null);
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('countries');
    }
};
