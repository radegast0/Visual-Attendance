<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('video_frames', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('video_id')->nullable();
            $table->double('time', 8, 2);
            $table->longText('path');

            $table->timestamps();

            $table->foreign('video_id')->references('id')->on('videos')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('VideoFrames');
    }
};
