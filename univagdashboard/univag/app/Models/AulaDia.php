<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class AulaDia extends Model
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
        $aulaDia = Http::get('https://dummyjson.com/products')->json();

        //filtering some attributes
        $aulaDia = Arr::map($aulaDia['aula_dia'], function ($item) {
            return Arr::only($item,
                [
                    'id',
                    'id_professores',
                    'link_aula',
                    'conteudo',
                    'realizado',
                    'id_disciplinas',
                ]
            );
        });

        return $aulaDia;
    }
}
