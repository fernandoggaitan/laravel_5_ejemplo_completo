<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TareasRequest extends FormRequest
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
            'titulo' => 'required|min:5|max:255',
            'descripcion' => 'required|max:800',
            'estado_id' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'Usted debe ingresar un título',
            'descripcion.required' => 'Usted debe ingresar una descripción',
            'estado_id.required' => 'Usted debe ingresar un estado'
        ];
    }

}
