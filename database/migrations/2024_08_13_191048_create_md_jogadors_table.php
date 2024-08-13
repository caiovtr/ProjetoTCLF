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
        Schema::create('md_jogadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("Nome");
            $table->string("Posicao");
            $table->integer("Idade");
            $table->integer("Numero");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('md_jogadors');
    }
};
