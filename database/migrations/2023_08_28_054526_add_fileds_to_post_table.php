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
        Schema::table('posts', function (Blueprint $table) {
            $table->longText('description')->nullable();
            $table->integer('type')->nullable();
            $table->json('media')->nullable();
            $table->integer('background_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('type');
            $table->dropColumn('media');
            $table->dropColumn('background_id');
        });
    }
};
