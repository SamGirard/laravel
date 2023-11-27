<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonneRequest extends FormRequest
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
            'prenom' => 'required|string|min:1',
            'nomUsager' => 'required|string|min:1',
            'profil' => 'required|image|mimes:png,jpeg,gif,webp,jfif|max:4096',
            'type' => 'required',
            'email' => 'required|string|min:1',
            'pwd' => 'required|string|min:1',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le champ Nom est requis.',
            'prenom.required' => 'Le champ Prenom est requis.',
            'nomUsager.required' => 'Le champ Nom D\'usager est requis.',
            'profil.required' => 'Le champ Profil est requis.',
            'type.required' => 'Le champ Type est requis.',
            'profil.required' => 'Le champ Image de Profile est requis.',
            'profil.mimes' => 'Le type de fichier n\'est pas accepté (png, jpg, gif, jpeg, webp, jfif).',
            'email.required' => 'Le champ Email est requis.',
            'pwd.required' => 'Le champ Mot de Passe est requis.',
        ];
    }
}