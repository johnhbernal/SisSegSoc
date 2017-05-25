<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateDepartamentosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::dropIfExists ( 'sis_seg_soc_p_departamento' );
		Schema::create ( 'sis_seg_soc_p_departamento', function (Blueprint $table) {
			$table->increments ( 'CODIGO_DEPARTAMENTO' );
			$table->integer ( 'CODIGO_PAIS' )->unsigned ();
			$table->foreign ( 'CODIGO_PAIS' )->references ( 'CODIGO_PAIS' )->on ( 'sis_seg_soc_p_pais' );
			$table->string ( 'NOMBRE' );
			$table->string ( 'created_by' )->default ( 'admin' );
			$table->softDeletes ();
			$table->timestamps ();
		} );
			DB::statement('ALTER TABLE sis_seg_soc_p_departamento CHANGE CODIGO_DEPARTAMENTO CODIGO_DEPARTAMENTO INT(2) UNSIGNED ZEROFILL NOT NULL');
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table ( 'sis_seg_soc_p_departamento', function (Blueprint $table) {
			$table->dropForeign ( 'sis_seg_soc_p_departamento_codigo_pais_foreign' );
    	} );
        Schema::dropIfExists('sis_seg_soc_p_departamento');
    }
}
