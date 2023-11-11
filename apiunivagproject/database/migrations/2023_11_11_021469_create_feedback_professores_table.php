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
        Schema::create('feedback_professores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_professores')->constrained('professores');
            $table->foreignId('id_alunos')->constrained('alunos');
            $table->integer('estrela');
            $table->text('comentario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback_professores');
    }
};
