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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description")->nullable()->default(null);
            $table->integer("event_category_id")->nullable()->default(null);
            $table->unsignedBigInteger("user_id")->nullable()->default(null);
            $table->dateTime("start_time")->nullable()->default(null);
            $table->dateTime("end_time")->nullable()->default(null);
            $table->string("country")->nullable()->default(null);
            $table->string("state")->nullable()->default(null);
            $table->string("city")->nullable()->default(null);
            $table->string("zipcode")->nullable()->default(null);
            $table->string("address")->nullable()->default(null);
            $table->string("image")->nullable()->default(null);
            $table->string("sound")->nullable()->default(null);
            $table->tinyInteger("status")->default(0);
            $table->timestamps();

            $table->string("promoter_first_name")->nullable()->default(null);
            $table->string("promoter_last_name")->nullable()->default(null);
            $table->string("promoter_email")->nullable()->default(null);
            $table->string("promoter_phone_number")->nullable()->default(null);
            $table->string("promoter_rojava_name")->nullable()->default(null);
            $table->string("promoter_rojava_id")->nullable()->default(null);

            $table->boolean("ticket_sale")->default(true);
            $table->boolean("online_sale")->default(true);
            $table->decimal("price", 10, 2)->nullable()->default(null);
            $table->decimal("price_male", 10, 2)->nullable()->default(null);
            $table->string("price_male_notification")->nullable()->default(null);
            $table->decimal("price_female", 10, 2)->nullable()->default(null);
            $table->string("price_female_notification")->nullable()->default(null);
            $table->decimal("price_kids", 10, 2)->nullable()->default(null);
            $table->string("price_kids_notification")->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
