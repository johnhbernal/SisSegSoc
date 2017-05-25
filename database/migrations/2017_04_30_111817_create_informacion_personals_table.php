<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateInformacionPersonalsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create ( 'sis_seg_soc_p_informacion_personal', function (Blueprint $table) {
			$table->increments ( 'CONS_INFORMACION_PERSONAL' );
// 			$table->integer( 'NUM_IDENTIFICACION' )->unsigned ()->unique ();
// 			$table->foreign ( 'NUM_IDENTIFICACION' )->references ( 'CONS_USUARIO' )->on ( 'sis_seg_soc_p_usuario' );
			$table->string ( 'created_by' )->default ( 'admin' );
			$table->softDeletes ();
			$table->timestamps ();
		} );
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
    {
        Schema::dropIfExists('sis_seg_soc_p_informacion_personal');
    }
}
