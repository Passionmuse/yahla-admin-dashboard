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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->text('description')->nullable()->default(null);
            $table->string('service_type')->nullable()->default(null);
            $table->string('payment_type')->nullable()->default(null);
            $table->string('image_url')->nullable()->default(null);
            $table->string('destination_url')->nullable()->default(null);
            $table->date('start_date')->nullable()->default(null);
            $table->date('end_date')->nullable()->default(null);
            $table->decimal('budget', 10, 2)->nullable()->default(null);
            $table->string('denied_reason')->nullable()->default(null);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('ads');
    }
};
