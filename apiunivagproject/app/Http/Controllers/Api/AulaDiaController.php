<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AulaDia;
use Illuminate\Http\Request;

class AulaDiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aulaDia = AulaDia::all();
        return response()->json($aulaDia);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aulaDia = AulaDia::create($request->all());
        return response()->json($aulaDia, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aulaDia = AulaDia::find($id);

        if (!$aulaDia) {
            return response()->json(['mensagem' => 'Aula Dia não encontrado'], 404);
        }

        return response()->json($aulaDia);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aulaDia = AulaDia::find($id);

        if (!$aulaDia) {
            return response()->json(['mensagem' => 'Aula Dia não encontrado'], 404);
        }

        $aulaDia->update($request->all());
        return response()->json($aulaDia);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aulaDia = AulaDia::find($id);

        if (!$aulaDia) {
            return response()->json(['mensagem' => 'Aula Dia não encontrado'], 404);
        }

        $aulaDia->delete();
        return response()->json(['mensagem' => 'Aula Dia deletado com sucesso']);
    }
}
