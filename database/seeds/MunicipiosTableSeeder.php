<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Municipio;
class MunicipiosTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 020,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Alcalá' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 036,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Andalucía' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 041,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Ansermanuevo' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 054,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Argelia' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 100,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Bolívar' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 109,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Buenaventura' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 111,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Guadalajara de Buga' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 113,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Bugalagrande' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 122,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Caicedonia' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 126,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Calima (Darién)' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 001,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Santiago de Calí' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 130,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Candelaria' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 147,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Cartago' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 233,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Dagua' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 246,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'El Cairo' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 248,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'El Cerrito' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 250,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'El Dovio' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 243,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'El Águila' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 275,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Florida' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 306,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Ginebra' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 318,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Guacarí' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 364,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Jamundí' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 377,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'La Cumbre' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 400,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'La Unión' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 403,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'La Victoria' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 497,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Obando' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 520,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Palmira' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 563,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Pradera' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 606,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Restrepo' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 616,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Riofrío' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 622,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Roldanillo' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 670,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'San Pedro' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 736,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Sevilla' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 823,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Toro' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 828,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Trujillo' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 834,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Tulúa' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 845,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Ulloa' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 863,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Versalles' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 869,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Vijes' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 890,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Yotoco' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 892,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Yumbo' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now () 
		) );
		DB::table ( 'sis_seg_soc_p_municipio' )->insert ( array (
				'CODIGO_MUNICIPIO' => 895,
				'CODIGO_DEPARTAMENTO' => 76,
				'NOMBRE' => urlencode ( 'Zarzal' ),
				'created_by' => 'admin',
				'created_at' => Carbon::now()));
		
// 		factory(Municipio::class,3300)->create();
		factory(Municipio::class,300)->create();
    	
    }
}
