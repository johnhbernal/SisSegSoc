<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateMunicipiosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::dropIfExists ( 'sis_seg_soc_p_municipio' );
		Schema::create ( 'sis_seg_soc_p_municipio', function (Blueprint $table) {
			$table->increments ( 'CODIGO_MUNICIPIO' )->unique();
			$table->integer ( 'CODIGO_DEPARTAMENTO' )->unsigned ();
			$table->foreign ( 'CODIGO_DEPARTAMENTO' )->references ( 'CODIGO_DEPARTAMENTO' )->on ( 'sis_seg_soc_p_departamento' );
			$table->string ( 'NOMBRE' )->unique();
			$table->string ( 'created_by' )->default ( 'admin' );
			$table->softDeletes ();
			$table->timestamps ();
		} );
			DB::statement('ALTER TABLE sis_seg_soc_p_municipio CHANGE CODIGO_MUNICIPIO CODIGO_MUNICIPIO INT(3) UNSIGNED ZEROFILL NOT NULL');
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
    {
        Schema::dropIfExists('sis_seg_soc_p_municipio');
    }
}
