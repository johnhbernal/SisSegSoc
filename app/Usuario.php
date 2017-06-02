<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {
	//
	public $table = "sis_seg_soc_p_usuario";
// 	public $primarykey = 'CONS_USUARIO';
	protected $fillable = [ 
// 			'CONS_USUARIO',
// 			'id',
			'NUM_IDENTIFICACION',
// 			'LOGIN_ID',
			'TIPO_DOCUMENTO',
			'PRIMER_NOMBRE',
			'PRIMER_APELLIDO',
			'FECHA_DE_NACIMIENTO',
			'ESTADO',
			'SEXO',
			'GRUPO_SANGUINEO',
			'FACTOR_RH',
			'ESTADO_CIVIL',
			'VINCULO_LABORAL',
			'created_by',
			'created_at' 
	];
	public function Usuario() {
		return $this->hasMany ( Usuario::class );
	}
}
