<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }


    public function message()
    {
        return[
            'titre.required' => "Oups!un Titre est requis",
            'duration.required' => "Oups! une durer est réquise",
            'ti.required' => "Oups!un Titre est requis",

        ];

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            //
            'titre' => 'required|string|max:255',
            'duration' => 'required|string',
            'description' => 'required|string',
        ];
    }
}
