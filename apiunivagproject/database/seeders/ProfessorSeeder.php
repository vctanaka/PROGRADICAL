<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('professores')->insert([[
            'n_registro' => "1234",
            'nome' => "Maria Silva",
        ],[
            'n_registro' => "4321",
            'nome' => "João Martins",
        ],[
            'n_registro' => "7689",
            'nome' => "Ana Rodrigues",
        ],[
            'n_registro' => "5645",
            'nome' => "Carlos Oliveira",
        ],[
            'n_registro' => "4567",
            'nome' => "Sofia Santos",
        ],]);
    }
}
