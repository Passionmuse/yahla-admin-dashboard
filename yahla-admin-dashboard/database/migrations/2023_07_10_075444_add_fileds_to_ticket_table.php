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
        Schema::table('tickets', function (Blueprint $table) {
            $table->boolean('activate_sales')->default(1);
            $table->boolean('standard')->default(0);
            $table->boolean('vip')->default(1);
            $table->integer('total_seats')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropColumn('activate_sales');
            $table->dropColumn('standard');
            $table->dropColumn('vip');
            $table->dropColumn('total_seats');
        });
    }
};
