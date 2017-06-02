@extends('layouts.app') 
@section('content')
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/adminDatatable.js') }}"></script>
<div class="col-md-10 col-md-offset-1">@include('usuarios.fragment.aside')</div>
<div class="col-md-10 col-md-offset-1">
	<h2>Listado de Usuarios</h2>
		@include('usuarios.fragment.info')
	<a href="{{route('usuarios.create')}}"
		class="btn btn-primary pull-right">Nuevo Usuario</a>
		<br>
	<table id="dataTableUsuarios" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<td width="20px">ID</td>
				<td>Nombre usuario</td>
				<td colspan="3"></td>
			</tr>
		</thead>
		<tbody>
<!-- 		--------- -->
			@foreach($usuarios as $usuario)
			<tr>
				<td><strong>{{$usuario->id}}</strong></td>
				<td>{{$usuario->PRIMER_NOMBRE}}</td>
				<td><a href="{{route('usuarios.show',$usuario->id)}}" class="btn btn-link">Ver</a></td>
				<td><a href="{{route('usuarios.edit',$usuario->id)}}" class="btn btn-link">Editar</a></td>
				<td>
					<form action="{{route('usuarios.destroy',$usuario->id)}}"
						method="POST">
						{{csrf_field()}} <input type="hidden" name="_method"
							value="DELETE">
						<button class="btn btn-link">Borrar</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<td width="20px">ID</td>
				<td>Nombre usuario</td>
				<td colspan="3">&nbsp;</td>
			</tr>
		</tfoot>
	</table>
</div>
@endsection
