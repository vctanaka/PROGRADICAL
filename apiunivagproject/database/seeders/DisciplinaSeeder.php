<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('disciplinas')->insert([[
            'nome' => "Matematica",
        ],[
            'nome' => "Portugues",
        ],[
            'nome' => "Ingles",
        ],]);
    }
}
