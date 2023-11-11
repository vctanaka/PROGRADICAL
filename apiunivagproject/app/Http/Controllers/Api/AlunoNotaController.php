<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AlunosNotas;
use Illuminate\Http\Request;

class AlunoNotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunosNotas = AlunosNotas::all();
        return response()->json($alunosNotas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alunosNotas = AlunosNotas::create($request->all());
        return response()->json($alunosNotas, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alunosNotas = AlunosNotas::find($id);

        if (!$alunosNotas) {
            return response()->json(['mensagem' => 'Aluno Nota não encontrado'], 404);
        }

        return response()->json($alunosNotas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alunosNotas = AlunosNotas::find($id);

        if (!$alunosNotas) {
            return response()->json(['mensagem' => 'Aluno Nota não encontrado'], 404);
        }

        $alunosNotas->update($request->all());
        return response()->json($alunosNotas);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alunosNotas = AlunosNotas::find($id);

        if (!$alunosNotas) {
            return response()->json(['mensagem' => 'Aluno Nota não encontrado'], 404);
        }

        $alunosNotas->delete();
        return response()->json(['mensagem' => 'Aluno Nota deletado com sucesso']);
    }
}
