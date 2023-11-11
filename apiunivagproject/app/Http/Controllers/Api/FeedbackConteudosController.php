<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FeedbackConteudos;
use Illuminate\Http\Request;

class FeedbackConteudosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbackConteudos = FeedbackConteudos::all();
        return response()->json($feedbackConteudos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $feedbackConteudos = FeedbackConteudos::create($request->all());
        return response()->json($feedbackConteudos, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $feedbackConteudos = FeedbackConteudos::find($id);

        if (!$feedbackConteudos) {
            return response()->json(['mensagem' => 'Feedback Conteudos não encontrado'], 404);
        }

        return response()->json($feedbackConteudos);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $feedbackConteudos = FeedbackConteudos::find($id);

        if (!$feedbackConteudos) {
            return response()->json(['mensagem' => 'Feedback Conteudos não encontrado'], 404);
        }

        $feedbackConteudos->update($request->all());
        return response()->json($feedbackConteudos);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feedbackConteudos = FeedbackConteudos::find($id);

        if (!$feedbackConteudos) {
            return response()->json(['mensagem' => 'Feedback Conteudos não encontrado'], 404);
        }

        $feedbackConteudos->delete();
        return response()->json(['mensagem' => 'Feedback Conteudos deletado com sucesso']);
    }
}
