<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $casts = ['gallery' => 'array'];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_galleries', function (Blueprint $table) {
            $table->id();
            $table->json('gallery')->nullable();
            $table->timestamps();
        });
    }

    /**`
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('market_galleries');
    }
};
