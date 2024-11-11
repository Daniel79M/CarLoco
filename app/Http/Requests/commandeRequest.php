<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class commandeRequest extends FormRequest
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
            'mode_paiement_id' => 'required|exists:mode_paiments,id',
            'car_id' => 'required|exists:cars,id',
            'couleur' => 'required|string',
        ];
    }



    public function messages()
    {
        return [
            // Ajoutez ici les messages personnalisés pour chaque règle de validation, si nécessaire
            'mode_paiement_id.required' => 'Le mode de paiement est requis.',
            'car_id.required' => 'La voiture est requise pour la commande.',
            'couleur.required' => 'La couleur est obligatoire.',
        ];
    }


}
