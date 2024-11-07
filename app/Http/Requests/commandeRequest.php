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
            'mode_paiement_id' => 'integer',
            'couleur' => 'string',
            'car_id'=> 'integer',
            'numeroCommande' => 'integer',
            'user_id' => 'integer',


        ];
    }



    public function messages()
    {
        
    }
}
