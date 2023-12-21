<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecifiQuestionRequest;
use App\Models\SpecificQuestion;
use Illuminate\Http\Request;

class SpecificQuestionsController extends Controller
{
    
    public function index($id)
{
    // Replace 1 with the specific tourist_spot_id you're looking for
    $specificQuestions = SpecificQuestion::where('tourist_spot_id', $id)->get();

    return $specificQuestions;
}

    public function save_specific_questions(SpecifiQuestionRequest $request){
        $validated = $request->validated();
        $specific_questions = SpecificQuestion::create($validated);
        return $specific_questions;
    }
}
