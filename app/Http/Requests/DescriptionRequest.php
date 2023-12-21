<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DescriptionRequest extends FormRequest
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
        if (request()->routeIs('description.save')) {
            return [
                "description_one" => 'required|string',
                "description_two" => 'required|string',
                "language" => 'required|string|max:255',
            ];
        }
    }
}
