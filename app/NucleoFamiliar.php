<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NucleoFamiliar extends Model
{
    //
	public $table = "sis_seg_soc_nucleo_familiar";
	
// 	protected $fillable = [
// 			'CONS_USUARIO',
// 			'NUMERO_IDENTIFICACION',
// 			'created_by',
// 			'created_at',
// 	];
// 	public function parentesco() {
// 		return $this->belongsToMany ( 'App\Parentesco', 'UsuNucleoFamiliar' )->withPivot ( 'CONS_PARENTESCO', 'status' );
// 	}
// 	public function usuario() {
// 		return $this->belongsToMany ( 'App\Usuario', 'UsuNucleoFamiliar' )->withPivot ( 'CONS_USUARIO', 'status' );
// 	}
// 	public function NucleoFamiliar(){
// 		return $this->hasMany(NucleoFamiliar::class);
// 	}
}
