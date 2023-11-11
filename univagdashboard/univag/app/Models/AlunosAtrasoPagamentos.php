<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class AlunosAtrasoPagamentos extends Model
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
        $alunosAtrasoPagamentos = Http::get('https://dummyjson.com/products')->json();

        //filtering some attributes
        $alunosAtrasoPagamentos = Arr::map($alunosAtrasoPagamentos['alunos_atraso_pagamentos'], function ($item) {
            return Arr::only($item,
                [
                    'id',
                    'id_alunos',
                    'mes',
                ]
            );
        });

        return $alunosAtrasoPagamentos;
    }
}
