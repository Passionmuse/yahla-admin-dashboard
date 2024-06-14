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
        Schema::table('artists', function (Blueprint $table) {
            $table->bigInteger('province_id')->nullable();
            $table->bigInteger('city_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->dropColumn('province_id');
            $table->dropColumn('city_id');
        });
    }
};
