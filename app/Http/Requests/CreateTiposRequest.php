<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTiposRequest extends FormRequest
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
            'Nombre' => 'required', 
            'Siglas' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'Nombre.required' => 'El campo nombre es requerido',
            'Siglas.required' => 'El campo siglas es requerido',
        ];
    }
}
