<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class AlunosNotas extends Model
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
        $alunosNotas = Http::get('https://dummyjson.com/products')->json();

        //filtering some attributes
        $alunosNotas = Arr::map($alunosNotas['alunos_notas'], function ($item) {
            return Arr::only($item,
                [
                    'id',
                    'valor',
                    'id_alunos',
                    'id_periodos',
                    'id_disciplinas'
                ]
            );
        });

        return $alunosNotas;
    }
}
