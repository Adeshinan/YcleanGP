<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreReservation extends FormRequest
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
            'service_id' => [
                'required',
                Rule::exists('services', 'id')
            ],
            'extra' => 'nullable|array',
            'chambre' => 'nullable|integer',
            'cuisine' => 'nullable|integer',
            'salle_bain' => 'nullable|integer',
            'salle_eau' => 'nullable|integer',
            'salon' => 'nullable|integer',
            'buanderie' => 'nullable|integer',
            'entre_couloir' => 'nullable|integer',
            'escalier' => 'nullable|integer',
            'nbre_personne' => 'nullable|integer',
            'heure_session' => 'nullable|string',
            'nbre_fois' => 'nullable|string',
            'date_visite' => 'required|date',
            'pour_qui' => 'required|boolean',
            'address' => 'nullable|string',
            'code' => 'nullable|string',
            'ville' => 'nullable|string',
            'instruction' => 'required|string',
            'station' => 'required|string',
            'propriete' => 'required|string',
            'type_paiement' => [
                'required',
                'integer',
            ],
            'coupon' => 'nullable|string',
            'position' => 'nullable|string',
        ];
    }



    public function attributes()
    {
        return [
            'service_id' => 'service',
            'extra' => 'extras',
            'chambre' => 'chambre',
            'cuisine' => 'cuisine',
            'salle_bain' => 'salle de bain',
            'salle_eau' => 'salle d\'eau',
            'salon' => 'salon',
            'buanderie' => 'buanderie',
            'entre_couloir' => 'entrée/couloir',
            'escalier' => 'escalier',
            'nbre_personne' => 'nombre de personnes',
            'heure_session' => 'heure de session',
            'nbre_fois' => 'nombre de fois',
            'date_visite' => 'date de visite',
            'pour_qui' => 'pour qui',
            'address' => 'adresse',
            'code' => 'code postal',
            'ville' => 'ville',
            'instruction' => 'instructions',
            'station' => 'station',
            'propriete' => 'propriété',
            'type_paiement' => 'type de paiement',
            'coupon' => 'coupon',
            'position' => 'position géographique',
         ];
    }


    /**
     * Obtient les messages d'erreur personnalisés pour la validation des attributs.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'service_id.required' => 'Le champ :attribute est obligatoire.',
            'service_id.exists' => 'Le :attribute sélectionné n\'existe pas.',
            'date_visite.required' => 'La :attribute est obligatoire.',
            'date_visite.date' => 'La :attribute doit être une date valide.',
            'instruction.required' => 'Les :attribute sont obligatoires.',
            'station.required' => 'La :attribute est obligatoire.',
            'propriete.required' => 'La :attribute est obligatoire.',
            'type_paiement.required' => 'Le champ :attribute est obligatoire.',
            'type_paiement.integer' => 'Le champ :attribute doit être un entier.',
            'type_paiement.in' => 'Le type de paiement sélectionné est invalide.',
            // Ajoutez d'autres messages d'erreur personnalisés ici...
        ];
    }

}