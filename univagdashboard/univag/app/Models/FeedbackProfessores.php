<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class FeedbackProfessor extends Model
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
        $feedbackProfessor = Http::get('https://dummyjson.com/products')->json();

        //filtering some attributes
        $feedbackProfessor = Arr::map($feedbackProfessor['feedback_professor'], function ($item) {
            return Arr::only($item,
                [
                    'id',
                    'id_professores',
                    'id_alunos',
                    'estrela',
                    'comentario',
                ]
            );
        });

        return $feedbackProfessor;
    }
}
