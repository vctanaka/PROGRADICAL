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
        Schema::create('alunos_notas', function (Blueprint $table) {
            $table->id();
            $table->float('nota');
            $table->foreignId('id_alunos')->constrained('alunos');
            $table->foreignId('id_periodos')->constrained('periodos');
            $table->foreignId('id_disciplinas')->constrained('disciplinas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos_notas');
    }
};
