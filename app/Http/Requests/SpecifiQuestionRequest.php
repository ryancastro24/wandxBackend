<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecifiQuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if (request()->routeIs('specific_questions.save')) {
            return [
                "text" => 'required|string|max:255',
                "language" => 'required|string|max:255',
                'question_number' => 'required|integer',
                'answer' => 'required|string',
                "tourist_spot_id" => 'required|integer'
            ];
        }
    }
}
