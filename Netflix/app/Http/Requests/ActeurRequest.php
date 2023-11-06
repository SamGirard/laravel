<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActeurRequest extends FormRequest
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
        return [
            'nom' => 'required|string|min:1',
            'dateNaissance' => 'required|string|min:1',
            'lieuNaissance' => 'required|string|min:1',
            'portrait' => 'required|url',
            'age' => 'required|string|min:1',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le champ Nom est requis.',
            'dateNaissance.required' => 'Le champ Date de naissance est requis.',
            'lieuNaissance.required' => 'Le champ Lieu de naissance est requis.',
            'portrait.required' => 'Le champ Portrait est requis.',
            'age.required' => 'Le champ Âge est requis.',
        ];
    }
}
