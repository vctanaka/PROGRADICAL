<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class AlunosFaltas extends Model
{
    use Sushi;

    public function getRows()
    {
        /**
         * Model Rows
         *
         * @return void
         */
        //API
        $alunosFaltas = Http::get('https://dummyjson.com/products')->json();

        //filtering some attributes
        $alunosFaltas = Arr::map($alunosFaltas['alunos_faltas'], function ($item) {
            return Arr::only($item,
                [
                    'id',
                    'id_alunos',
                    'id_aula_dia'
                ]
            );
        });

        return $alunosFaltas;
    }
}

