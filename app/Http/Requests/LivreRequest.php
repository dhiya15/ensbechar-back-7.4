<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cotation' => 'nullable',
            'titres' => 'nullable',
            'auteur' => 'nullable',
            'inventaire' => 'nullable',
            'nombre_ex' => 'nullable',
            'spécialiste' => 'nullable',
            'date_edition' => 'nullable',
            'editeur' => 'nullable',
            'date_entrée' => 'nullable',
            'isbn' => 'nullable',
            'image' => 'nullable'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
