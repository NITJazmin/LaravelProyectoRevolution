<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EstudiosFormRequest extends Request
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
          `nombrePostulado` => 'max:50',
          `puestoSol` => 'max:50',
          `fechSol` => 'max:50',  
          `fechEntr` => 'max:50',
          `atencion` => 'max:50',
          `region` => 'max:50',
          `telefonica` => 'max:50',  
          `familiar` => 'max:50',
          `laboral` => 'max:50',  
          `psicosocial` => 'max:50',
          `factorRiesgo` => 'max:50',
          `deshonestidad` => 'max:50',
          `obsHonestidad` => 'max:50',
          `adicciones` => 'max:50',  
          `Obsadic` => 'max:50',
          `perversion` => 'max:50',  
          `Obsperv` => 'max:50',
          `inestabilidadEmo` => 'max:50',
          `ObsEmo` => 'max:50',  
          `resultado` => 'max:50',
          `resRefLab` => 'max:50',
          `mapa` => 'max:50'
        ];
    }
}
