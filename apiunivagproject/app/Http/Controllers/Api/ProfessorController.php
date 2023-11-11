<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Professores;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professores = Professores::all();
        return response()->json($professores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $professores = Professores::create($request->all());
        return response()->json($professores, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $professores = Professores::find($id);

        if (!$professores) {
            return response()->json(['mensagem' => 'Professor não encontrado'], 404);
        }

        return response()->json($professores);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $professores = Professores::find($id);

        if (!$professores) {
            return response()->json(['mensagem' => 'Professor não encontrado'], 404);
        }

        $professores->update($request->all());
        return response()->json($professores);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $professores = Professores::find($id);

        if (!$professores) {
            return response()->json(['mensagem' => 'Professor não encontrado'], 404);
        }

        $professores->delete();
        return response()->json(['mensagem' => 'Professor deletado com sucesso']);
    }
}
