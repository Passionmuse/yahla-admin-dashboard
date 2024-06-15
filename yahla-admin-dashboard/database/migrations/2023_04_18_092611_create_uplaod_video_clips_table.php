<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $casts=['video' => 'array'];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uplaod_video_clips', function (Blueprint $table) {
            $table->id();                  
            $table->foreignId('artist_id')->constrained('artists')->onDelete('cascade');               
            $table->json('video')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('uplaod_video_clips');
    }
};
