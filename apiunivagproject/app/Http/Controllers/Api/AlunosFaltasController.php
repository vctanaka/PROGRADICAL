<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AlunosFaltas;
use Illuminate\Http\Request;

class AlunosFaltasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunosFaltas = AlunosFaltas::all();
        return response()->json($alunosFaltas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alunosFaltas = AlunosFaltas::create($request->all());
        return response()->json($alunosFaltas, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alunosFaltas = AlunosFaltas::find($id);

        if (!$alunosFaltas) {
            return response()->json(['mensagem' => 'Alunos Faltas não encontrado'], 404);
        }

        return response()->json($alunosFaltas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alunosFaltas = AlunosFaltas::find($id);

        if (!$alunosFaltas) {
            return response()->json(['mensagem' => 'Alunos Faltas não encontrado'], 404);
        }

        $alunosFaltas->update($request->all());
        return response()->json($alunosFaltas);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alunosFaltas = AlunosFaltas::find($id);

        if (!$alunosFaltas) {
            return response()->json(['mensagem' => 'Alunos Faltas não encontrado'], 404);
        }

        $alunosFaltas->delete();
        return response()->json(['mensagem' => 'Alunos Faltas deletado com sucesso']);
    }
}
