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
        Schema::create('aula_dia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_professores')->constrained('professores')->nullable();;
            $table->foreignId('id_disciplinas')->constrained('disciplinas')->nullable();;
            $table->string('link_aula')->nullable();;
            $table->text('conteudo');
            $table->date('realizado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aula_dia');
    }
};
