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
        Schema::create('md_time_campeonatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('time_id');
            $table->unsignedBigInteger('campeonato_id');
            $table->foreign('time_id')->references('id')->on('md_times');
            $table->foreign('campeonato_id')->references('id')->on('md_campeonatos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('md_time_campeonatos');
    }
};
