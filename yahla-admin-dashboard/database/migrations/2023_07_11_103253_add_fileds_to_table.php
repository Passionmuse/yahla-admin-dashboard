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
            if (!Schema::hasColumn('posts', 'user_id')) {
                $table->integer('user_id')->nullable();
            }

            if (!Schema::hasColumn('posts', 'fanpage_id')) {
                $table->integer('fanpage_id')->nullable();
            }
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
            if (Schema::hasColumn('posts', 'user_id')) {
                $table->dropColumn('user_id');
            }

            if (Schema::hasColumn('posts', 'fanpage_id')) {
                $table->dropColumn('fanpage_id');
            }
        });
    }
};
