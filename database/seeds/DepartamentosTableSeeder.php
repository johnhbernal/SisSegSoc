<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Departamento;
class DepartamentosTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 91,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Amazonas' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 5,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Antioquia' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 81,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Arauca' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 8,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Atlántico' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 11,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Bogotá D.C' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 13,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Bolívar' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 15,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Boyacá' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 17,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Caldas' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 18,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Caquetá' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 85,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Casanare' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 19,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Cauca' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 20,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Cesar' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 27,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Chocó' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 23,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Córdoba' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 25,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Cundinamarca' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 94,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Güainía' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 95,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Guaviare' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 41,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Huila' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 44,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'La Guajira' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 47,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Magdalena' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 50,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Meta' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 52,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Nariño' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 54,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Norte de Santander' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 86,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Putumayo' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 63,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Quindio' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 66,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Risaralda' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 88,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'San Andrés y Providencia' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 68,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Santander' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 70,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Sucre' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 73,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Tolima' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 76,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Valle del Cauca' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 97,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Vaupés' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_departamento' )->insert ( array (
				'CODIGO_DEPARTAMENTO' => 99,
				'CODIGO_PAIS' => 169,
				'NOMBRE' => urlencode ( 'Vichada' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		));
		
 		factory(Departamento::class,50)->create();
    }
}

