<?php

use App\Http\Controllers\WhatsAppController;
use App\Mail\NotificacaoMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {



    Mail::to('victorctanaka@gmail.com')->send(new NotificacaoMail());
    // Mail::to('univagtest@gmail.com')->send(new NotificacaoMail());


    return view('welcome');
});


Route::get('/send-whatsapp-message/{number}/{message}', [WhatsAppController::class, 'sendMessage']);