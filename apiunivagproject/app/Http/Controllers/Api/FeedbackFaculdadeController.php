<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FeedbackFaculdade;
use Illuminate\Http\Request;

class FeedbackFaculdadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbackFaculdade = FeedbackFaculdade::all();
        return response()->json($feedbackFaculdade);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $feedbackFaculdade = FeedbackFaculdade::create($request->all());
        return response()->json($feedbackFaculdade, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $feedbackFaculdade = FeedbackFaculdade::find($id);

        if (!$feedbackFaculdade) {
            return response()->json(['mensagem' => 'Feedback Faculdade não encontrado'], 404);
        }

        return response()->json($feedbackFaculdade);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $feedbackFaculdade = FeedbackFaculdade::find($id);

        if (!$feedbackFaculdade) {
            return response()->json(['mensagem' => 'Feedback Faculdade não encontrado'], 404);
        }

        $feedbackFaculdade->update($request->all());
        return response()->json($feedbackFaculdade);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feedbackFaculdade = FeedbackFaculdade::find($id);

        if (!$feedbackFaculdade) {
            return response()->json(['mensagem' => 'Feedback Faculdade não encontrado'], 404);
        }

        $feedbackFaculdade->delete();
        return response()->json(['mensagem' => 'Feedback Faculdade deletado com sucesso']);
    }
}
