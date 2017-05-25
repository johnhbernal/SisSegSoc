<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsuariosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create ( 'sis_seg_soc_p_usuario', function (Blueprint $table) {
			$table->increments( 'id');
// 			$table->bigIncrements( 'id');
			$table->integer ( 'NUM_IDENTIFICACION' )->unique ();
			$table->integer ( 'LOGIN_ID' )->unsigned ()->unique ()->nullable ();
			$table->foreign ( 'LOGIN_ID' )->references ( 'id' )->on ( 'users' );
			$table->enum ( 'TIPO_DOCUMENTO', array (
					'SC', // El Salvoconducto de Permanencia, es el documento de carácter temporal expedido por la Unidad Administrativa Especial de Migración Colombia.
					'CD', // El Carné Diplomático, es el documento que identifica a extranjeros que cumplen funciones en las embajadas, legaciones,
					'PA', // El Pasaporte, es el documento de identificación del extranjero que no se encuentra obligado a tramitar una cédula de extranjería.
					'CE', // La Cédula de Extranjería, es el documento de identificación expedido por Migración Colombia, que se otorga a los extranjeros titulares de una visa superior a 3 meses y a sus beneficiarios, con base en el Registro de Extranjeros. La Vigencia de la Cédula de Extranjería será por un término igual al de la vigencia de la visa del titular.
					'CC', // La Cédula de Ciudadanía, es el documento expedido por la Registraduría Nacional del Estado Civil, con el que se identifican las personas al cumplir 18 años de edad.
					'TI', // La Tarjeta de Identidad, es un documento expedido por la Registraduría Nacional del Estado Civil con el que se identifican los menores entre 7 y 17 años. Debe ser reemplazada por la cédula de ciudadanía.
					'RC', // El Registro Civil de Nacimiento, es el documento expedido por una notaría pública con el que se identifican los menores de 7 años. Debe ser reemplazado por la tarjeta de identidad.
					'CN'  // El Certificado de Nacido Vivo, es el documento expedido por la Institución Prestadora de Servicios (IPS) donde nació el neonato. Solo tiene validez para realizar la afiliación, y máximo hasta el tercer mes de vida. Debe ser reemplazado por el registro civil.
						     // ) )->default ( 'CC' );
			) );
			// $table->string('TIPO_DOCUMENTO');
			$table->string ( 'PRIMER_NOMBRE' );
			$table->string ( 'SEGUNDO_NOMBRE' )->nullable ();
			$table->string ( 'PRIMER_APELLIDO' );
			$table->string ( 'SEGUNDO_APELLIDO' )->nullable ();
			$table->date ( 'FECHA_DE_NACIMIENTO' );
			// $table->string ( 'ESTADO' );
			$table->enum ( 'ESTADO', array (
					'A', // ACTIVO
					'I', // INACTIVO ES CUANDO AUN NO SE TERMINA EL PROCESO DE AFILIACION
					'M', // MORA ES CUANDO SE PRESENTA RETRASO EN LOS PAGOS
					'D'  // DESACTIVADO CUANDO EL TRABAJADOR SE RETIRA DE LA EMPRESA
			) );
			$table->enum ( 'SEXO', array (
					'M', // MASCULINO
					'F'  // FEMENINO
			) );
			$table->enum ( 'GRUPO_SANGUINEO', array (
					'A', // GRUPO_SANGUINEO A
					'B', // GRUPO_SANGUINEO B
					'O', // GRUPO_SANGUINEO O
					'AB'  // GRUPO_SANGUINEO AB
			) );
			$table->enum ( 'FACTOR_RH', array (
					'+', // FACTOR_RH POSITIVO
					'-'  // FACTOR_RH NEGATIVO
			) );
			$table->enum ( 'ESTADO_CIVIL', array (
					'S', // Soltero/a
					'P', // Comprometido/a
					'U', // Union Libre
					'E', // Separado/a
					'C', // Casado/a
					'D', // Divorciado/a
					'V'  // Viudo/a
			) );
			$table->enum ( 'VINCULO_LABORAL', array (
					'C', // Afiliado/a o Cotizante
					'B'  // Beneficiario/a
			) );
			//discapacidad. Este espacio debe diligenciarse solo en el caso en que el cotizante o cabeza de familia tenga una discapacidad reconocida y calificada médicamente.
			$table->boolean('DISCAPACIDAD')->default(false);
			//Tipo de discapacidad.
			$table->enum ( 'TIPO_DISCAPACIDAD', array (
					'F', // Física
					'N',  // Neuro-sensorial
					'M'//Mental
			) )->nullable ();
			//Condición de discapacidad
			$table->enum ( 'CONDICION_DISCAPACIDAD', array (
					'T', // Temporal
					'P'  // Permanente
			) )->nullable ();
			$table->enum ( 'ETNIA', array (
					'01', // Indígena
					'02', // Rrom (gitano).
					'03', // Raizal (San Andrés y Providencia).
					'04', // Palenquero (San Basilio de Palenque).
					'05'  // Negro(a), afrocolombiano(a).
			) )->nullable ();
			$table->string ( 'created_by' )->default ( 'admin' );
			$table->softDeletes ();
			$table->timestamps ();
		} );
		DB::statement ( 'ALTER TABLE sis_seg_soc_p_usuario CHANGE NUM_IDENTIFICACION NUM_IDENTIFICACION INT(10) UNSIGNED ZEROFILL NOT NULL' );
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists ( 'sis_seg_soc_p_usuario' );
	}
}
