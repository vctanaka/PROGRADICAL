<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class Professores extends Model
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
        $professores = Http::get('https://dummyjson.com/products')->json();

        //filtering some attributes
        $professores = Arr::map($professores['professores'], function ($item) {
            return Arr::only($item,
                [
                    'id',
                    'n_registro',
                    'nome',
                ]
            );
        });

        return $professores;
    }
}
