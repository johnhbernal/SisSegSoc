<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Pais;

class PaisesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'sis_seg_soc_p_pais' )->insert ( array (
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Colombia' ),
				'ISO' => 'CO',
				'CODIGO_TELEFONICO' => 57,
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		factory ( Pais::class, 50 )->create();
	}
	
}
