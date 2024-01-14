<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreQuizRequest extends FormRequest
{
    /**
     * Get the validator instance for the request.
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function getValidatorInstance()
    {
        // Here you can inspect the data before validation
        // dd($this->all());
        // Dump and die to see the data

        // Make sure to call the parent method to get the validator instance
        return parent::getValidatorInstance();
    }
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
            'description' => 'sometimes|string|max:255',
            'questions' => 'required|array|min:1',
            'questions.*.content' => 'required|string|max:255',
            'questions.*.options' => 'required|array|min:1',
            'questions.*.options.*.text' => 'required|string|max:255',
        ];
    }
}
