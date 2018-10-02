<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Requests;

class CoordinadorRevFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     * Para autorizar que tiene permisos para todo esto*/
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() /*Va como que las reglas del negocio las restricciones de la BD)*/
    {
        return [
            'Nombre'=>'required|max:45', //puede o no ser requerido =>'required'
            'Papp'=>'required|max:45',
            'Sapp'=>'required|max:45',
            'Email'=>'required|max:45'                     
        ];
    }
}
