<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioNucleoFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	
    	Schema::create('sis_seg_soc_usuario_nucleo_familiar', function (Blueprint $table) {
    		$table->increments ( 'CONS_USUARIO_NUCLEO_FAMILIAR' );
    		$table->integer ( 'CONS_NUCLEO_FAMILIAR' )->unsigned ()->unique ();
    		$table->foreign ( 'CONS_NUCLEO_FAMILIAR' )->references ( 'CONS_NUCLEO_FAMILIAR' )->on ( 'sis_seg_soc_nucleo_familiar' );
    		$table->integer ( 'NUM_IDENTIFICACION' )->unsigned ()->unique ();
    		$table->foreign ( 'NUM_IDENTIFICACION' )->references ( 'NUM_IDENTIFICACION' )->on ( 'sis_seg_soc_p_usuario' );
    		$table->integer ( 'CONS_PARENTESCO' )->unsigned ()->unique ();
    		$table->foreign ( 'CONS_PARENTESCO' )->references ( 'CONS_PARENTESCO' )->on ( 'sis_seg_soc_p_parentesco' );
    		$table->date ( 'FECHA_DE_INSCRIPCION' );
    		$table->string ( 'created_by' )->default ( 'admin' );
    		$table->softDeletes ();
    		$table->timestamps();
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_seg_soc_usuario_nucleo_familiar');
    }
}
