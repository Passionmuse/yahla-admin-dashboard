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
        Schema::table('payments', function (Blueprint $table) {
            $table->string('payment_id')->nullable()->change();
            $table->string('payer_id')->nullable()->change();
            $table->string('payer_email')->nullable()->change();
            $table->float('amount', 10, 2)->nullable()->change();
            $table->string('currency')->nullable()->change();
            $table->string('payment_status')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->string('payment_id')->change();
            $table->string('payer_id')->change();
            $table->string('payer_email')->change();
            $table->float('amount', 10, 2)->change();
            $table->string('currency')->change();
            $table->string('payment_status')->change();
        });
    }
};
