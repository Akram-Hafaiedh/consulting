<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateQuizRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::user()->isConseiller();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'sometimes|nullable|string',
            'questions' => 'required|array|min:1',
            // 'questions.*.id' => 'required|exists:questions,id',
            'questions.*.content' => 'required|string|max:255',
            'questions.*.options' => 'required|array|min:1',
            // 'questions.*.options.*.id' => 'sometimes|required|exists:options,id',
            'questions.*.options.*.text' => 'required|string|max:255',
        ];
    }
}
