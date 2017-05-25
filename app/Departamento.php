<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
	public $table = "sis_seg_soc_p_departamento";
	public function Pais(){
		return $this->belongsTo('App\Departamento')->withPivot('CODIGO_PAIS','status'); 
// 		return $this->hasMany(Departamento::class);
	}
	public function Departamento(){
		return $this->hasMany(Departamento::class);
		// 		return $this->belongsTo('App\Pais')->withPivot('cons_pais','status');
	}
}
