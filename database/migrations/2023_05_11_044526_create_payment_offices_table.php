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
        Schema::create('payment_offices', function (Blueprint $table) {
            $table->id();
            $table->string('office_name');
            $table->string('name')->nullable()->default(null);
            $table->string('last_name')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('phone')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('image_path')->nullable()->default(null);
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
        Schema::dropIfExists('payment_offices');
    }
};
