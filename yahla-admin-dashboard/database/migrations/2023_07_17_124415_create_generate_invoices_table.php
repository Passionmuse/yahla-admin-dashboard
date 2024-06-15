<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $casts = ['item' => 'array'];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generate_invoices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('invoice_no')->nullable();
            $table->string('date')->nullable();
            $table->string('due_date')->nullable();
            $table->json('item')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('generate_invoices');
    }
};
