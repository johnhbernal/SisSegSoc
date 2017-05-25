<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name', 'index usuario SisSegSoc') }}</title>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Scripts -->
<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="page-header text-center">CRUD Usuario</h1>
			</div>
			@yield('content')
		</div>
	</div>


	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>