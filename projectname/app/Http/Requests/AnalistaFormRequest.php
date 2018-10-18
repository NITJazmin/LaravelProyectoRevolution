<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AnalistaFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Nombre'=>'required|max:45', //puede o no ser requerido =>'required'
            'Papp'=>'max:45',
            'Sapp'=>'max:45',
            'emailEmpresa'=>'required|max:45',
            'Telefono'=>'max:45',
            'ID_coordinador'=>'required'
        ];
    }
}
