<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioNucleoFamiliar extends Model {
	//
	public $table = "sis_seg_soc_usuario_nucleo_familiar";
	public function Usuario() {
		return $this->belongsTo ( 'App\Usuario' )->withPivot ( 'NUM_IDENTIFICACION', 'status' );
	}
	public function NucleoFamiliar() {
		return $this->belongsTo ( 'App\NucleoFamiliar' )->withPivot ( 'CONS_NUCLEO_FAMILIAR', 'status' );
	}
	public function Parentesco() {
		return $this->belongsTo ( 'App\Parentesco' )->withPivot ( 'CONS_PARENTESCO', 'status' );
	}
}
