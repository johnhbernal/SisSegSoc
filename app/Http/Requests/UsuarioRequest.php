<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}
	
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		switch ($this->method ()) {
			case 'POST' :
				{
					
					return [ 
							// 'CONS_USUARIO'=>'required',
							'NUM_IDENTIFICACION' => 'required|numeric|integer|unique:sis_seg_soc_p_usuario|digits_between:6,10',
							// 'NUM_IDENTIFICACION'=>'required|unique|min:6|max:11',
							// 'LOGIN_ID'=>'required',
							'TIPO_DOCUMENTO' => 'required',
							'PRIMER_NOMBRE' => 'required|min:2|max:255|Alpha',
							'SEGUNDO_NOMBRE' => 'min:2|max:255|Alpha',
							'PRIMER_APELLIDO' => 'required|min:2|max:255|Alpha',
							'SEGUNDO_APELLIDO' => 'min:2|max:255|Alpha',
							'FECHA_DE_NACIMIENTO' => 'required|date',
							'ESTADO' => 'required',
							'SEXO' => 'required',
							'GRUPO_SANGUINEO' => 'required',
							'FACTOR_RH' => 'required',
							'ESTADO_CIVIL' => 'required',
							'VINCULO_LABORAL' => 'required',
							'DISCAPACIDAD' => 'required|boolean',
							// 'CONDICION_DISCAPACIDAD'=>'required_if:DISCAPACIDAD,1 ',
							'CONDICION_DISCAPACIDAD' => 'required_with:DISCAPACIDAD|required_if:DISCAPACIDAD,1 ',
							'TIPO_DISCAPACIDAD' => 'required_with:CONDICION_DISCAPACIDAD|required_if:CONDICION_DISCAPACIDAD,T,P' 
						// 'TIPO_DISCAPACIDAD'=>'required_if:CONDICION_DISCAPACIDAD,T,P',
						// 'ETNIA'=>'required',
						// ''=>'required',
					];
				}
			case 'PUT' :
				{
					return [ 
							// 'CONS_USUARIO'=>'required',
							'NUM_IDENTIFICACION' => 'numeric|integer|digits_between:6,10',
							// 'NUM_IDENTIFICACION'=>'required|unique|min:6|max:11',
							// 'LOGIN_ID'=>'required',
							'TIPO_DOCUMENTO' => 'required',
							'PRIMER_NOMBRE' => 'required|min:2|max:255|Alpha',
							'SEGUNDO_NOMBRE' => 'min:2|max:255|Alpha',
							'PRIMER_APELLIDO' => 'required|min:2|max:255|Alpha',
							'SEGUNDO_APELLIDO' => 'min:2|max:255|Alpha',
							'FECHA_DE_NACIMIENTO' => 'required|date',
							'ESTADO' => 'required',
							'SEXO' => 'required',
							'GRUPO_SANGUINEO' => 'required',
							'FACTOR_RH' => 'required',
							'ESTADO_CIVIL' => 'required',
							'VINCULO_LABORAL' => 'required',
							'DISCAPACIDAD' => 'required|boolean',
							// 'CONDICION_DISCAPACIDAD'=>'required_if:DISCAPACIDAD,1 ',
							'CONDICION_DISCAPACIDAD' => 'required_with:DISCAPACIDAD|required_if:DISCAPACIDAD,1 ',
							'TIPO_DISCAPACIDAD' => 'required_with:CONDICION_DISCAPACIDAD|required_if:CONDICION_DISCAPACIDAD,T,P' 
						// 'TIPO_DISCAPACIDAD'=>'required_if:CONDICION_DISCAPACIDAD,T,P',
						// 'ETNIA'=>'required',
						// ''=>'required',
					];
				}
    	}
    }
}
