<?php
use App\UsuarioNucleoFamiliar;
use App\NucleoFamiliar;
use App\Usuario;
use App\Pais;
use App\User;
use App\Admin;

/*
 * |--------------------------------------------------------------------------
 * | Model Factories
 * |--------------------------------------------------------------------------
 * |
 * | Here you may define all of your model factories. Model factories give
 * | you a convenient way to create models for testing and seeding your
 * | database. Just tell the factory how a default model should look.
 * |
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define ( User::class, function (Faker\Generator $faker) {
	static $password;
	
	return [
			'name' => $faker->name,
			'email' => $faker->unique ()->safeEmail,
			'password' => $password ?: $password = bcrypt ( 'secret' ),
			'remember_token' => str_random ( 10 )
	];
} );
$factory->define ( Admin::class, function (Faker\Generator $faker) {
	static $password;
	
	return [
			'name' => $faker->name,
			'email' => $faker->unique ()->safeEmail,
			'password' => $password ?: $password = bcrypt ( 'secret' ),
			'remember_token' => str_random ( 10 )
	];
} );
$factory->define ( App\Product::class, function (Faker\Generator $faker) {
		return [
				'name' => $faker->name,
				'short' => $faker->text ( 140 ),
				'description' => $faker->text ( 600 )
		];
} );
$factory->define ( App\Pais::class, function (Faker\Generator $faker) {
			
			$isos = Pais::pluck ( 'ISO' );
			
			// Generate a new unique number
			do {
				// $iso = $faker->unique ()->numberBetween ( 00000001, 99999999 );
				$iso = $faker->unique ()->countryCode . $faker->numberBetween ( 001, 999 );
				return [
						// 'CODIGO_PAIS' => $faker->unique()->numberBetween ( 1, 999 ),
						'CODIGO_PAIS' => $faker->unique ()->randomNumber (),
						'NOMBRE' => $faker->country . $faker->numberBetween ( 0001, 9999 ),
						'ISO' => $iso,
						// 'ISO' => $faker->text($maxNbChars = 5),
						'CODIGO_TELEFONICO' => $faker->unique ()->numberBetween ( 0001, 9999, 57 )
				];
			} while ( in_array ( $id, $isos ) );
		} );
			$factory->define ( App\Departamento::class, function (Faker\Generator $faker) {
				return [
						// 'CODIGO_DEPARTAMENTO' => $faker->unique()->numberBetween ( 1, 999 ),
						'CODIGO_DEPARTAMENTO' => $faker->unique ()->numberBetween ( 0000001, 9999999 ),
						'CODIGO_PAIS' => $faker->randomElement ( App\Pais::pluck ( 'CODIGO_PAIS' )->toArray () ),
						'NOMBRE' => $faker->city . $faker->numberBetween ( 0001, 9999 )
				];
			} );
				$factory->define ( App\Municipio::class, function (Faker\Generator $faker) {
					return [
							'CODIGO_MUNICIPIO' => $faker->unique ()->numberBetween ( 00000001, 999999999 ),
							'CODIGO_DEPARTAMENTO' => $faker->randomElement ( App\Departamento::pluck ( 'CODIGO_DEPARTAMENTO' )->toArray () ),
							'NOMBRE' => $faker->city . $faker->numberBetween ( 0001, 9999 )
					];
				} );
					$factory->define ( App\Usuario::class, function (Faker\Generator $faker) {
						
						$loginsIds = User::pluck ( 'id' );
						$loginsIds [] = null;
						
						// Generate a new unique number
						do {
							// $id = rand(1000, 9999);
							$id = $faker->unique ()->numberBetween ( 00000001, 99999999 );
							
							$loginID = $faker->unique ()->randomElement ( App\User::pluck ( 'id' )->toArray ( null ) );
							
							// echo '<pre>';
							// print_r($loginID);
							// echo '</pre>';
							// die(__FILE__.' '.__LINE__);
							
							do {
								$ids = Usuario::pluck ( 'id' );
								
								// }
								
								
								
								
								
								$discapacidad = $faker->randomElement ( $array = array (
										'1',
										'0'
								) );
								
								
								
								if ($discapacidad == 1) {
									$tipoDiscapacidad = $faker->randomElement ( $array = array (
											'F',
											'N',
											'M'
									));
									
									$condicionDiscapacidad = $faker->randomElement ( $array = array (
											'T',
											'P'
									));
								}else{
									$tipoDiscapacidad = null;
									
									$condicionDiscapacidad = null;
								}
								
								
								return [
										
										'id' => $id,
										'NUM_IDENTIFICACION' => $faker->unique ()->numberBetween ( 000000001, 999999999 ),
										
										'LOGIN_ID' => $loginID,
										// 'user_id' => factory(User::class)->create()->id,
										'TIPO_DOCUMENTO' => $faker->randomElement ( $array = array (
												'SC',
												'CD',
												'PA',
												'CE',
												'CC',
												'TI',
												'RC',
												'CN'
										) ),
										'PRIMER_NOMBRE' => $faker->firstName,
										'SEGUNDO_NOMBRE' => $faker->firstName,
										'PRIMER_APELLIDO' => $faker->lastName,
										'SEGUNDO_APELLIDO' => $faker->lastName,
										'FECHA_DE_NACIMIENTO' => $faker->dateTimeBetween ( $startDate = '-90 years', $endDate = 'now' ),
										'ESTADO' => $faker->randomElement ( $array = array (
												'A',
												'I',
												'M',
												'D'
										) ),
										'SEXO' => $faker->randomElement ( $array = array (
												'M',
												'F'
										) ),
										'GRUPO_SANGUINEO' => $faker->randomElement ( $array = array (
												'A',
												'B',
												'O',
												'AB'
										) ),
										'FACTOR_RH' => $faker->randomElement ( $array = array (
												'+',
												'-'
										) ),
										'ESTADO_CIVIL' => $faker->randomElement ( $array = array (
												'S',
												'P',
												'U',
												'E',
												'C',
												'D',
												'V'
										) ),
										'VINCULO_LABORAL' => $faker->randomElement ( $array = array (
												'C',
												'B'
										) ),
										'ETNIA' => $faker->randomElement ( $array = array (
												'01',
												'02',
												'03',
												'04',
												'05'
										) ),
										'DISCAPACIDAD' => $discapacidad,
										'TIPO_DISCAPACIDAD' => $tipoDiscapacidad,
										'CONDICION_DISCAPACIDAD' => $condicionDiscapacidad
								];
							} while ( in_array ( $id, $ids, false ) );
						} while ( in_array ( $loginID, $loginsIds ) );
} );
$factory->define ( NucleoFamiliar::class, function (Faker\Generator $faker) {
		return [
					'FECHA_DE_INSCRIPCION' => $faker->dateTimeBetween ( $startDate = '-90 years', $endDate = 'now' )
			   ];
} );
$factory->define ( UsuarioNucleoFamiliar::class, function (Faker\Generator $faker) {
		return [
					'CONS_NUCLEO_FAMILIAR' => $faker->unique ()->randomElement ( App\NucleoFamiliar::pluck ( 'CONS_NUCLEO_FAMILIAR' )->toArray () ),
					'NUM_IDENTIFICACION' => $faker->unique ()->randomElement ( App\Usuario::pluck ( 'NUM_IDENTIFICACION' )->toArray () ),
					'CONS_PARENTESCO' => $faker->unique ()->randomElement ( App\Parentesco::pluck ( 'CONS_PARENTESCO' )->toArray () ),
					'FECHA_DE_INSCRIPCION' => $faker->dateTimeBetween ( $startDate = '-90 years', $endDate = 'now' )
				];
} );
								