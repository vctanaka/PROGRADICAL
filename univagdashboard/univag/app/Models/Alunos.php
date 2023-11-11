<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class Alunos extends Model
{
    // use Sushi;

    public function getRows()
    {
        /**
         * Model Rows
         *
         * @return void
         */
        //API
        // $response = Http::withToken('wwtVQuZVEUFKBgQW4EKwn6GPCIrOsYzvJugQBgFD6b2b46f2')->get('http://10.0.0.100:5000/api/professores');
        // $response = Http::withToken('qlMyCd601X8VzvZqIp9SvPFAbVeSoYdiAensP4hed1bc7711')->get('http://172.26.64.213:5000/api/professores');
        
        
        // dd($response->json());
        // return $response->json();
    }
}

