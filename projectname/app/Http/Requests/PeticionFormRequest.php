<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PeticionFormRequest extends Request
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
            'Nombre'=>'required|max:45',
            'FechaIni'=>'date',
            'FechaFin'=>'date',
            'Status'=>'max:45',
            'Descripcion'=>'max:45' 
              
        ];
    }
}
