<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\disciplinas;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplinas = Disciplinas::all();
        return response()->json($disciplinas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $disciplina = Disciplinas::create($request->all());
        return response()->json($disciplina, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $disciplina = Disciplinas::find($id);

        if (!$disciplina) {
            return response()->json(['mensagem' => 'Disciplina não encontrado'], 404);
        }

        return response()->json($disciplina);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $disciplina = Disciplinas::find($id);

        if (!$disciplina) {
            return response()->json(['mensagem' => 'Disciplina não encontrado'], 404);
        }

        $disciplina->update($request->all());
        return response()->json($disciplina);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $disciplina = Disciplinas::find($id);

        if (!$disciplina) {
            return response()->json(['mensagem' => 'Disciplina não encontrado'], 404);
        }

        $disciplina->delete();
        return response()->json(['mensagem' => 'Disciplina deletado com sucesso']);
    }
}
