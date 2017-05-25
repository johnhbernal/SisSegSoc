<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model {
	//
	public $table = "sis_seg_soc_p_municipio";
	public function Departamento() {
		return $this->belongsTo ( 'App\Municipio' )->withPivot ( 'CODIGO_DEPARTAMENTO', 'status' );
		// return $this->hasMany(Departamento::class);
	}
}
