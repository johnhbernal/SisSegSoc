<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model {
	public $table = "sis_seg_soc_p_parentesco";
// 	public function Parentesco(){
// 		return $this->belongsTo('App\Parentesco')->withPivot('CONS_PARENTESCO','status');
// 		// 		return $this->hasMany(Departamento::class);
// 	}
// 	public function nucleoFamiliar() {
// 		return $this->belongsToMany ( 'App\NucleoFamiliar', 'UsuNucleoFamiliar' )->withPivot ( 'CONS_NUCLEO_FAMILIAR', 'status' );
// 	}
// 	public function usuario() {
// 		return $this->belongsToMany ( 'App\Usuario', 'UsuNucleoFamiliar' )->withPivot ( 'CONS_USUARIO', 'status' );
// 	}
	public function Parentesco(){
		return $this->hasMany(Parentesco::class);
	}
}
