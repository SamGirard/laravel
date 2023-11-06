<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
    public function rules()
    {
        return [
            'titre' => 'required|string|min:1',
            'resume' => 'required|string|max:1000',
            'duree' => 'required',
            'realisateur_id' => 'required|exists:personnes,id',
            'producteur_id' => 'required|exists:personnes,id',
            'acteur_id' => 'required|exists:acteurs,id',
            'annee' => 'required|string',
            'cote' => 'required',
            'categorie' => 'required|string',
            'bandeAnnonce' => 'url',
            'affiche' => 'url',
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Le champ Titre est requis.',
            'resume.required' => 'Le champ Résumé est requis.',
            'duree.required' => 'Le champ Durée est requis.',
            'realisateur_id.required' => 'Le champ Réalisateur est requis.',
            'realisateur_id.exists' => 'Le Réalisateur sélectionné n est pas valide.',
            'producteur_id.required' => 'Le champ Producteur est requis.',
            'producteur_id.exists' => 'Le Producteur sélectionné n est pas valide.',
            'acteur_id.required' => 'Le champ Acteur principal est requis.',
            'acteur_id.exists' => "L'Acteur principal sélectionné n'est pas valide.",
            'annee.required' => 'Le champ Date est requis.',
            'cote.required' => 'Le champ Cote est requis.',
            'categorie.required' => 'Le champ Catégorie est requis.',
            'bandeAnnonce.url' => 'Le champ Lien de la bande annonce doit être une URL valide.',
            'affiche.url' => 'Le champ URL de l\'affiche doit être une URL valide.',
        ];
    }

}
