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
        Schema::table('users', function (Blueprint $table) {
            $table->string('number')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('username')->nullable();
            $table->string('dob')->nullable();
            $table->longText('address')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->boolean('is_verfied')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('number');
            $table->dropColumn('fname');
            $table->dropColumn('lname');
            $table->dropColumn('username');
            $table->dropColumn('dob');
            $table->dropColumn('address');
            $table->dropColumn('province');
            $table->dropColumn('city');
            $table->dropColumn('is_verfied');
        });
    }
};
