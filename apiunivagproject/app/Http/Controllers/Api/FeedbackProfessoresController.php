<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FeedbackProfessores;
use Illuminate\Http\Request;

class FeedbackProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbackProfessores = FeedbackProfessores::all();
        return response()->json($feedbackProfessores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $feedbackProfessores = FeedbackProfessores::create($request->all());
        return response()->json($feedbackProfessores, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $feedbackProfessores = FeedbackProfessores::find($id);

        if (!$feedbackProfessores) {
            return response()->json(['mensagem' => 'Feedback Professores não encontrado'], 404);
        }

        return response()->json($feedbackProfessores);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $feedbackProfessores = FeedbackProfessores::find($id);

        if (!$feedbackProfessores) {
            return response()->json(['mensagem' => 'Feedback Professores não encontrado'], 404);
        }

        $feedbackProfessores->update($request->all());
        return response()->json($feedbackProfessores);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feedbackProfessores = FeedbackProfessores::find($id);

        if (!$feedbackProfessores) {
            return response()->json(['mensagem' => 'Feedback Professores não encontrado'], 404);
        }

        $feedbackProfessores->delete();
        return response()->json(['mensagem' => 'Feedback Professores deletado com sucesso']);
    }
}
