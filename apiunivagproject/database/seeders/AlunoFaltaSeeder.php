<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoFaltaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alunos_faltas')->insert([[
            'id_alunos' => "1",
            'id_aula_dia' => "1",
        ],[
            'id_alunos' => "1",
            'id_aula_dia' => "2",
        ],[
            'id_alunos' => "2",
            'id_aula_dia' => "1",
        ],]);
    }
}
