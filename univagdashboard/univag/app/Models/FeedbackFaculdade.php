<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class FeedbackFaculdade extends Model
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
        $feedbackFaculdade = Http::get('https://dummyjson.com/products')->json();

        //filtering some attributes
        $feedbackFaculdade = Arr::map($feedbackFaculdade['feedback_faculdade'], function ($item) {
            return Arr::only($item,
                [
                    'id',
                    'id_alunos',
                    'estrela',
                    'comentario',
                ]
            );
        });

        return $feedbackFaculdade;
    }
}
