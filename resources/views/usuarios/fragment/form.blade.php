<link href="{{ asset('/css/ie10-viewport-bug-workaround.css') }}"
	rel="stylesheet">
<link href="{{ asset('/css/form.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('/css/bootstrapValidator.min.css') }}" -->
<!-- 	rel="stylesheet"> -->

<img src="{{ asset('img/imgLogin/Boton-Ejemplo.jpg') }}" id='logoImagen'>
<div class="col-lg-12">
	<fieldset>
		<legend>
			<label><a class="requerido"></a><font color='red'> Estos campos son
					requeridos </font></label>
		</legend>
	</fieldset>
</div>
<!-- <form class="well form-horizontal" action=" " method="post"> -->

<div class="container">


	<div class="row">
		<div class="col-lg-6">
			<label class="col-md-5 control-label"><a class="requerido"></a> Tipo
				de Documento</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

				@if(isset($usuario)) {!!Form::select('TIPO_DOCUMENTO', ['SC' =>
				'Salvoconducto de Permanencia', 'CD' => 'Carné Diplomático', 'PA' =>
				'Pasaporte', 'CE' => 'Cedula de Extranjería', 'CC' => 'Cedula de
				Ciudadanía', 'TI' => 'Tarjeta de Identidad', 'RC'=>'Registro Civil',
				'CN'=>'Certificado de Nacido Vivo'], null,
				['class'=>'form-control','placeholder' => 'Seleccione Tipo de
				Documento','disabled'=>'true'])!!} @else
				{!!Form::select('TIPO_DOCUMENTO', ['SC' => 'Salvoconducto de
				Permanencia', 'CD' => 'Carné Diplomático', 'PA' => 'Pasaporte', 'CE'
				=> 'Cedula de Extranjería', 'CC' => 'Cedula de Ciudadanía', 'TI' =>
				'Tarjeta de Identidad', 'RC'=>'Registro Civil', 'CN'=>'Certificado
				de Nacido Vivo'], null, ['class'=>'form-control','placeholder' =>
				'Seleccione Tipo de Documento'])!!} @endif

			</div>
			{!! $errors->first('TIPO_DOCUMENTO',' <span
				class="alert text-danger pull-right"><button type="button"
					class="close" data-dismiss="alert">&times;</button> :message. </span>
			')!!}
		</div>
		<div class="col-lg-6">
			<label class="col-md-5 control-label"><a class="requerido"></a>
				Número de Identificación</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				@if(isset($usuario)) {!!
				Form::text('NUM_IDENTIFICACION',null,['class'=>'form-control','placeholder'
				=> 'Digite Número de identificación','readonly'=>'readonly'])!!}
				@else {!!
				Form::text('NUM_IDENTIFICACION',null,['class'=>'form-control','placeholder'
				=> 'Digite Número de identificación'])!!} @endif
			</div>
			{!! $errors->first('NUM_IDENTIFICACION','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-6">
			<label class="col-md-5 control-label"><a class="requerido"></a>
				Primer Nombre</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				{!!
				Form::text('PRIMER_NOMBRE',null,['class'=>'form-control','placeholder'=>
				'Digite Primer Nombre'])!!}
			</div>
			{!! $errors->first('PRIMER_NOMBRE','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
		<div class="col-lg-6">
			<label class="col-md-5 control-label">&nbsp; &nbsp; Segundo Nombre</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				{!!
				Form::text('SEGUNDO_NOMBRE',null,['class'=>'form-control','placeholder'=>
				'Digite Segundo Nombre'])!!}
			</div>
			{!! $errors->first('SEGUNDO_NOMBRE','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-6">
			<label class="col-md-5 control-label"><a class="requerido"></a>
				Primer Apellido</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				{!!
				Form::text('PRIMER_APELLIDO',null,['class'=>'form-control','placeholder'
				=> 'Digite Primer Apellido'])!!}
			</div>
			{!! $errors->first('PRIMER_APELLIDO','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
		<div class="col-lg-6">
			<label class="col-md-5 control-label"> &nbsp; &nbsp; Segundo Apellido</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				{!!
				Form::text('SEGUNDO_APELLIDO',null,['class'=>'form-control','placeholder'
				=> 'Digite Segundo Apellido'])!!}
			</div>
			{!! $errors->first('SEGUNDO_APELLIDO','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-6">
			<label class="col-md-5 control-label"><a class="requerido"></a> Fecha
				de Nacimiento</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				{!!
				Form::date('FECHA_DE_NACIMIENTO',null,['class'=>'form-control','placeholder'
				=> 'Digite Fecha de Nacimiento'])!!}
			</div>
			{!! $errors->first('FECHA_DE_NACIMIENTO','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
		<div class="col-lg-6">
			<label class="col-md-5 control-label"><a class="requerido"></a>
				Genero</label> <label class="radio-inline">{!! Form::radio('SEXO',
				'M', (old('SEXO') == 'M'), ['id' => 'Masculino']) !!}Masculino </label>
			<label class="radio-inline">{!! Form::radio('SEXO', 'F', (old('SEXO')
				== 'F'), ['id'=>'Femenino']) !!}Femenino </label> {!!
			$errors->first('SEXO','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-6">
			<label class="col-md-5 control-label"><a class="requerido"></a> Grupo
				Sanguíneo</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				{!!Form::select('GRUPO_SANGUINEO', ['A' => 'A', 'B' => 'B', 'O' =>
				'O', 'AB' => 'AB'], null, ['class'=>'form-control','placeholder' =>
				'Seleccione Grupo Sanguineo'])!!}
			</div>
			{!! $errors->first('GRUPO_SANGUINEO','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
		<div class="col-lg-6">
			<label class="col-md-5 control-label"><a class="requerido"></a>
				Factor RH</label> <label class="radio-inline">{!!
				Form::radio('FACTOR_RH', '+', (old('FACTOR_RH') == '+'), ['id' =>
				'positivo']) !!}Positivo </label> <label class="radio-inline">{!!
				Form::radio('FACTOR_RH', '-', (old('FACTOR_RH') == '-'),
				['id'=>'negativo']) !!}Negativo </label> {!!
			$errors->first('FACTOR_RH','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-6">
			<label class="col-md-5 control-label">&nbsp; &nbsp; Etnia</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				{!!Form::select('ETNIA', ['01' => 'Indígena', '02' => 'Rrom
				(gitano)','03'=>'Raizal (San Andrés y
				Providencia)','04'=>'Palenquero (San Basilio de
				Palenque)','05'=>'Negro(a), afrocolombiano(a)'], null,
				['class'=>'form-control','placeholder' => 'Seleccione Etnia'])!!}
			</div>
			{!! $errors->first('ETNIA','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
		<div class="col-lg-6">
			<label class="col-md-5 control-label"><a class="requerido"></a>
				Estado Civil</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				{!!Form::select('ESTADO_CIVIL', ['S' => 'Soltero/a', 'P' =>
				'Comprometido/a','U'=>'Union
				Libre','E'=>'Separado/a','C'=>'Casado/a','D'=>'Divorciado/a','V'=>'Viudo/a'],
				null, ['class'=>'form-control','placeholder' => 'Seleccione Estado
				Civil'])!!}
			</div>
			{!! $errors->first('ESTADO_CIVIL','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-6">
			<label class="col-md-5 control-label"><a class="requerido"></a>
				Vínculo Laboral</label>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				{!!Form::select('VINCULO_LABORAL', ['C' => 'Afiliado/a o Cotizante',
				'B' => 'Beneficiario/a'], null,
				['class'=>'form-control','placeholder' => 'Seleccione Vínculo
				Laboral'])!!}
			</div>
			{!! $errors->first('VINCULO_LABORAL','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
		<div class="col-lg-6">
			<label class="col-md-5 control-label"><a class="requerido"></a>
				Estado </label>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				{!!Form::select('ESTADO', ['A' => 'ACTIVO', 'I' => 'INACTIVO', 'M'
				=> 'MORA', 'D' => 'DESACTIVADO'], null,
				['class'=>'form-control','placeholder' => 'Estado'])!!}
			</div>
			{!! $errors->first('ESTADO','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-6">
			<label class="col-md-5 control-label"><a class="requerido"></a>
				Discapacidad </label>
			<div class="input-group">
				<label class="radio-inline">{!! Form::radio('DISCAPACIDAD', '1',
					(old('DISCAPACIDAD') == '1'), ['id' => 'Discapacitado'])
					!!}Discapacitado </label> <label class="radio-inline">{!!
					Form::radio('DISCAPACIDAD', '0', (old('DISCAPACIDAD') == '0'),
					['id'=>'SinDiscapacidad']) !!}Sin Discapacidad </label>
			</div>
			{!! $errors->first('DISCAPACIDAD','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
		<div class="col-lg-6">

			<label class="col-md-5 control-label"><a class="requerido"></a>
				Condición de Discapacidad</label>
			<div class="input-group">

				<label class="radio-inline">{!!
					Form::radio('CONDICION_DISCAPACIDAD', 'T',
					(old('CONDICION_DISCAPACIDAD') == 'T'), ['id' => 'Temporal'])
					!!}Temporal </label> <label class="radio-inline">{!!
					Form::radio('CONDICION_DISCAPACIDAD', 'P',
					(old('CONDICION_DISCAPACIDAD') == 'P'), ['id'=>'Permanente'])
					!!}Permanente </label>
			</div>
			{!! $errors->first('CONDICION_DISCAPACIDAD','
			<p class="alert alert-danger">
				:message
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</p>
			')!!}
		</div>
		<br>
		<div class="row">
			<div class="col-lg-6">
				<label class="col-md-5 control-label"><a class="requerido"></a>Tipo
					de Discapacidad </label>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					{!!Form::select('TIPO_DISCAPACIDAD', ['F' => 'Física', 'N' =>
					'Neuro-sensorial','M'=>'Mental'], null,
					['class'=>'form-control','placeholder' => 'Seleccione Tipo
					Discapacidad'])!!}
				</div>
				{!! $errors->first('TIPO_DISCAPACIDAD','
				<p class="alert alert-danger">
					:message
					<button type="button" class="close" data-dismiss="alert">&times;</button>
				</p>
				')!!}
			</div>
		</div>
		<br>
		<div class="form-group">{!! Form::submit('Registrar',['class'=>'btn
			btn-default pull-right','id'=>'formUsuarioSubmit'])!!}</div>
	</div>
</div>
<!-- </form> -->

<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script
	src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js') }}"></script>
<script src="{{ asset('/js/jquery.validate.js') }}"></script>

<!-- <script src="{{ asset('/js/app.js') }}"></script> -->
<!-- <script src="{{ asset('/js/bootstrapValidator.min.js') }}"></script> -->
<!-- <script src="{{ asset('/js/es_ES.js') }}"></script> -->
<script src="{{ asset('/js/usuForm.js') }}"></script>