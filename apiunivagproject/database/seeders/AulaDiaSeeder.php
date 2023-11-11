<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AulaDiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aula_dia')->insert([[
            'id_professores' => "1",
            'id_disciplinas' => "2",
            'link_aula' => "https://www.youtube.com/watch?v=kiqxD9wtTQ4&ab_channel=AndresanCursoseConcursos",
            'conteudo' => "Algoristimos, soma e subtração",
            'realizado' => "2023-10-31",
        ],[
            'id_professores' => "2",
            'id_disciplinas' => "1",
            'link_aula' => "https://www.youtube.com/watch?v=vxKV2UZkKm8&ab_channel=EquacionaComPauloPereira",
            'conteudo' => "sintaxe e semantica",
            'realizado' => "2023-10-31",
        ],[
            'id_professores' => "3",
            'id_disciplinas' => "1",
            'link_aula' => "https://www.youtube.com/watch?v=vxKV2UZkKm8&ab_channel=EquacionaComPauloPereira",
            'conteudo' => "morfologia",
            'realizado' => null,
        ],]);
    }
}
