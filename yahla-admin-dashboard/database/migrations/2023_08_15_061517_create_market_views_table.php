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
        Schema::create('market_views', function (Blueprint $table) {
            $table->id();
            $table->integer('mail_contact')->nullable();
            $table->integer('message')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('address')->nullable();
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
        Schema::dropIfExists('market_views');
    }
};
