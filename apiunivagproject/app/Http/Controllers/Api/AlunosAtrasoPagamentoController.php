<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AlunosAtrasoPagamento;
use Illuminate\Http\Request;

class AlunosAtrasoPagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunosAtrasoPagamento = AlunosAtrasoPagamento::all();
        return response()->json($alunosAtrasoPagamento);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alunosAtrasoPagamento = AlunosAtrasoPagamento::create($request->all());
        return response()->json($alunosAtrasoPagamento, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alunosAtrasoPagamento = AlunosAtrasoPagamento::find($id);

        if (!$alunosAtrasoPagamento) {
            return response()->json(['mensagem' => 'Aluno Atrasado Pagamento não encontrado'], 404);
        }

        return response()->json($alunosAtrasoPagamento);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alunosAtrasoPagamento = AlunosAtrasoPagamento::find($id);

        if (!$alunosAtrasoPagamento) {
            return response()->json(['mensagem' => 'Aluno Atrasado Pagamento não encontrado'], 404);
        }

        $alunosAtrasoPagamento->update($request->all());
        return response()->json($alunosAtrasoPagamento);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alunosAtrasoPagamento = AlunosAtrasoPagamento::find($id);

        if (!$alunosAtrasoPagamento) {
            return response()->json(['mensagem' => 'Aluno Atrasado Pagamento não encontrado'], 404);
        }

        $alunosAtrasoPagamento->delete();
        return response()->json(['mensagem' => 'Aluno Atrasado Pagamento deletado com sucesso']);
    }
}
