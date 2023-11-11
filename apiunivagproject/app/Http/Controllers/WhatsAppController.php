<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class WhatsAppController extends Controller
{
    public function sendMessage($number, $message)
    {
        $sid    = env('TWILIO_SID');
        $token  = env('TWILIO_TOKEN');
        $twilio = new Client($sid, $token);

        // dd(env('TWILIO_WHATSAPP_FROM'));

        // http://localhost:5000/send-whatsapp-message/+556599752254/Sua%20mensagem%20aqui

        $message = $twilio->messages
                            ->create("whatsapp:+556599752254",
                                   [
                                       "from" => env('TWILIO_WHATSAPP_FROM'),
                                    //    "body" => "Olá meu caro! Esta é uma mensagem do Laravel via WhatsApp.
                                    //    Alias voce faltou na aula ontem, portanto acesse esse link para assistir a aula e ficar em dia com a disciplina :D"
                                       "body" => "1234 Chegou?"
                                   ]
                          );

        dd($message);
    }
}
