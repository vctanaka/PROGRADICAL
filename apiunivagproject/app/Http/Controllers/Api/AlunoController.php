<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alunos;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Alunos::all();
        return response()->json($alunos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aluno = Alunos::create($request->all());
        return response()->json($aluno, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aluno = Alunos::find($id);

        if (!$aluno) {
            return response()->json(['mensagem' => 'Aluno não encontrado'], 404);
        }

        return response()->json($aluno);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aluno = Alunos::find($id);

        if (!$aluno) {
            return response()->json(['mensagem' => 'Aluno não encontrado'], 404);
        }

        $aluno->update($request->all());
        return response()->json($aluno);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aluno = Alunos::find($id);

        if (!$aluno) {
            return response()->json(['mensagem' => 'Aluno não encontrado'], 404);
        }

        $aluno->delete();
        return response()->json(['mensagem' => 'Aluno deletado com sucesso']);
    }
}
