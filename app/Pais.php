<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    //
	public $table = "sis_seg_soc_p_pais";
	public function Pais(){
		return $this->hasMany(Pais::class);
	}
}
