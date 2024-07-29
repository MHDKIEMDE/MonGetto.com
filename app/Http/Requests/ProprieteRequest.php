<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProprieteRequest extends FormRequest
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

            'nbre_C' => 'required|integer',
            'loyers' => 'required|numeric',
            'google_map' => 'nullable|string',
            'equipements' => 'array',
            'description' => 'nullable|string',
            'pays_id' => 'required|integer|exists:pays,id',
            'ville_id' => 'required|integer|exists:villes,id',
            'quartier_id' => 'required|integer|exists:quartiers,id',
            'typeMaison_id' => 'required|integer|exists:type_maisons,id',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}
