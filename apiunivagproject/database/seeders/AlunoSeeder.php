<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alunos')->insert([[
            'n_registro' => "546456",
            'nome' => "Lucas Mendes",
            'celular' => "556599752254",
            'email' => "adm@admin.com",
            'desistiu' => null,
        ],[
            'n_registro' => "435345",
            'nome' => "Camila Oliveira",
            'celular' => "556599752254",
            'email' => "adm@admin.com",
            'desistiu' => null,
        ],[
            'n_registro' => "235235",
            'nome' => "André Silva",
            'celular' => "556599752254",
            'email' => "adm@admin.com",
            'desistiu' => null,
        ],[
            'n_registro' => "456456",
            'nome' => "Juliana Santos",
            'celular' => "556599752254",
            'email' => "adm@admin.com",
            'desistiu' => null,
        ],[
            'n_registro' => "3453453",
            'nome' => "Felipe Almeida",
            'celular' => "556599752254",
            'email' => "adm@admin.com",
            'desistiu' => null,
        ],[
            'n_registro' => "3453453",
            'nome' => "Gabriel Ferreira",
            'celular' => "556599752254",
            'email' => "adm@admin.com",
            'desistiu' => null,
        ], ]);
    }
}
