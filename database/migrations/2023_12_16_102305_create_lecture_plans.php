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
        Schema::create('lecture_plans', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('lecture_id')->nullable();
            $table->integer('week_day')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecture_plans');
    }
};
