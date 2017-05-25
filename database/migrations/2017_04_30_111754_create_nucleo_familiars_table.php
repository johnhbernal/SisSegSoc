<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNucleoFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_seg_soc_nucleo_familiar', function (Blueprint $table) {
            $table->increments ( 'CONS_NUCLEO_FAMILIAR' );
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
        Schema::dropIfExists('sis_seg_soc_nucleo_familiar');
    }
}
