<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PerfiladorFormRequest extends Request
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
            'razonSocial'=>'required|max:50','nombre'=>'required|max:50','giro'=>'required|max:50','contacto'=>'required|max:50','cargo'=>'required|max:50','telefono'=>'required|max:50','email'=>'required|max:50',
            
            'puesto'=>'required|max:50','cantidad'=>'required','objetivo'=>'max:150','diasLab'=>'required|max:150','horario'=>'required|max:150','rangoEdad'=>'required|max:150','estadoCivil'=>'required|max:150',

            'escolaridad'=>'required|max:100',

            'sueldo'=>'required','pago'=>'required',



        ];
    }
}
