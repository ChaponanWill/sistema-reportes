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
        Schema::create('dias', function (Blueprint $table) {
            $table->id();

            // fecha, cosechador, grupo 
            $table->date('fecha');
            $table->foreignId('cosechador_id')->constrained()->restrictOnDelete();
            $table->foreignId('grupo_id')->constrained()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dias');
    }
};
