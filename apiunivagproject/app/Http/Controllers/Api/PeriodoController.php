<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Periodos;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periodos = Periodos::all();
        return response()->json($periodos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $periodos = Periodos::create($request->all());
        return response()->json($periodos, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $periodos = Periodos::find($id);

        if (!$periodos) {
            return response()->json(['mensagem' => 'Periodos não encontrado'], 404);
        }

        return response()->json($periodos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $periodos = Periodos::find($id);

        if (!$periodos) {
            return response()->json(['mensagem' => 'Periodos não encontrado'], 404);
        }

        $periodos->update($request->all());
        return response()->json($periodos);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $periodos = Periodos::find($id);

        if (!$periodos) {
            return response()->json(['mensagem' => 'Periodos não encontrado'], 404);
        }

        $periodos->delete();
        return response()->json(['mensagem' => 'Periodos deletado com sucesso']);
    }
}
