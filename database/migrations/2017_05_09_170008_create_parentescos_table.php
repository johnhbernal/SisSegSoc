<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentescosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_seg_soc_p_parentesco', function (Blueprint $table) {            
            $table->increments ( 'CONS_PARENTESCO' );
            $table->string( 'CODIGO_PARENTESCO' );
            $table->string ( 'NOMBRE' );
            $table->text( 'DESCRIPCION' );
            $table->string ( 'created_by' )->default ( 'admin' );
            $table->softDeletes ();
            $table->timestamps ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_seg_soc_p_parentesco');
    }
}
