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
        Schema::create('alunos_faltas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_alunos')->constrained('alunos');
            $table->foreignId('id_aula_dia')->constrained('aula_dia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos_faltas');
    }
};
