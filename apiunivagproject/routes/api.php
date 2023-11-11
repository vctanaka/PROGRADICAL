<?php

use App\Http\Controllers\Api\{
    AlunoController,
    AlunoNotaController,
    AlunosAtrasoPagamentoController,
    AlunosFaltasController,
    AulaDiaController,
    DisciplinaController,
    FeedbackConteudosController,
    FeedbackFaculdadeController,
    FeedbackProfessoresController,
    PeriodoController,
    ProfessorController
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('professores', ProfessorController::class);
    Route::apiResource('alunos', AlunoController::class);
    Route::apiResource('disciplinas', DisciplinaController::class);
    Route::apiResource('periodos', PeriodoController::class);
    Route::apiResource('aulas-dia', AulaDiaController::class);
    Route::apiResource('alunos-notas', AlunoNotaController::class);
    Route::apiResource('alunos-atraso-pagamento', AlunosAtrasoPagamentoController::class);
    Route::apiResource('alunos-faltas', AlunosFaltasController::class);
    Route::apiResource('feedback-professores', FeedbackProfessoresController::class);
    Route::apiResource('feedback-faculdade', FeedbackFaculdadeController::class);
    Route::apiResource('feedback-conteudos', FeedbackConteudosController::class);

    
    // Route::resource('professores', ProfessorController::class);
    // Route::resource('alunos', AlunoController::class);
    // Route::resource('disciplinas', DisciplinaController::class);
    // Route::resource('periodos', PeriodoController::class);
    // Route::resource('aulas-dia', AulaDiaController::class);
    // Route::resource('alunos-notas', AlunoNotaController::class);
    // Route::resource('alunos-atraso-pagamento', AlunosAtrasoPagamentoController::class);
    // Route::resource('alunos-faltas', AlunosFaltasController::class);
    // Route::resource('feedback-professores', FeedbackProfessoresController::class);
    // Route::resource('feedback-faculdade', FeedbackFaculdadeController::class);
    // Route::resource('feedback-conteudos', FeedbackConteudosController::class);
});







