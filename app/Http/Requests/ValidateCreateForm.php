<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateCreateForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'title' => 'required|min:3|max:150',
            'category' => 'required',
            'body' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Bitte Titel eingeben!',
            'category.required' => 'Bitte Kategorie wählen!',
            'body.required' => 'Bitte Protokoll schreiben!',
            'title.min:3' => 'Bitte mindestens 3 Zeichen eingeben!',
            'title.max:150' => 'Der Titel darf nicht mehr als 150 Zeichen umfassen!',
            'body.min:3' => 'Bitte mehr als 3 Zeichen eingeben!'
        ];
    }
}
