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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer("event_id");
            $table->string("name")->nullable()->default(null);
            $table->text("description")->nullable()->default(null);
            $table->decimal("price", 10, 2)->nullable()->default(null);
            $table->decimal("price_male", 10, 2)->nullable()->default(null);
            $table->decimal("price_female", 10, 2)->nullable()->default(null);
            $table->decimal("price_kids", 10, 2)->nullable()->default(null);
            $table->integer("quantity")->default(0);
            $table->integer("total_sales")->default(0);
            $table->dateTime("start_sale")->nullable()->default(null);
            $table->dateTime("end_sale")->nullable()->default(null);
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
        Schema::dropIfExists('tickets');
    }
};
