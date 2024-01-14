<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateConseilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->isConseiller();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', Rule::unique('conseils')->ignore($this->conseil)],
            'description' => 'required|string',
            'type' => 'required|in:santé,education,relationnel',
            'image' => 'sometimes|file|image|mimes:jpeg,png,jpg,svg|max:2028'
        ];
    }
}
