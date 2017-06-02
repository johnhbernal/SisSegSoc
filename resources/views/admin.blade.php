@extends('layouts.app') @section('content')

<!-- <link href="{{ asset('/css/jquery.dataTables.min.css') }}" -->
<!-- 	rel="stylesheet"> -->
<!-- <link href="{{ asset('/css/form.css') }}" rel="stylesheet"> -->


<!-- <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script> -->
<script src="{{ asset('js/adminDatatable.js') }}"></script>



<!-- <div class="col-md-10 col-md-offset-1"> -->
<!-- 	<div class="row"> -->
<!-- 		<div class="container " id="contenedorTableImagenes" -->
<!-- 			style="width: 95%; , height: 250%;"> -->

<!-- 			<div class="panel panel-primary"> -->
<!-- 				<div class="panel-heading"> -->
<!-- 					<h3 class="panel-title"> -->
<!-- 						<a data-toggle="collapse" data-parent="#accordion" -->
<!-- 							href="#collapseOne">Busqueda en datatable.</a> -->
<!-- 					</h3> -->
<!-- 				</div> -->
<!-- 				<div id="collapseOne" class="panel-collapse collapse in"> -->
<!--					<div class="panel-body" style="padding-left: 5%;">-->
<!-- 						@include('usuarios.fragment.aside') -->
<!--						<div class="row" style="width: 96%;">-->
<!-- 							<h2>Listado de Usuarios</h2> -->
<!-- 							@include('usuarios.fragment.info') <a -->
<!-- 								href="{{route('usuarios.create')}}" -->
<!-- 								class="btn btn-primary pull-right">Nuevo Usuario</a> <br> -->
<!-- 							<table id='find'> -->
<!-- 								<tbody> -->
<!-- 									<tr> -->
<!-- 										<td><label for="patient_filterLabel"><a class="requerido"></a>Filter -->
<!-- 												by Name:&nbsp;</label></td> -->
<!-- 										<td><input type="text" name="patient_filter" -->
<!-- 											placeholder="Type name" class="form-control" /></td> -->
<!-- 									</tr> -->
<!-- 								</tbody> -->
<!-- 							</table> -->
<!-- 							<br> -->
<!-- 							<table id='findAge' border="0" cellspacing="5" cellpadding="5"> -->
<!-- 								<tbody> -->
<!-- 									<tr> -->
<!-- 										<td><a class="requerido"></a>&nbsp;Minimum age:&nbsp;</td> -->
<!-- 										<td><input type="number" id="min" name="min" -->
<!-- 											placeholder="Type Minimum age" class="form-control"></td> -->
<!-- 										<td>&nbsp;&nbsp;<a class="requerido"></a>&nbsp;Maximum -->
<!-- 											age:&nbsp; -->
<!-- 										</td> -->
<!-- 										<td><input type="number" id="max" name="max" -->
<!-- 											placeholder="Type Maximum age" class="form-control"></td> -->
<!-- 									</tr> -->
<!-- 								</tbody> -->
<!-- 							</table> -->
<!-- 							<br> -->
							<table id="tableAdmin" class="table-striped table-bordered nowrap">
								<thead>
									<tr>
										<td width="20px">ID</td>
										<td>Nombre usuario</td>
										<td colspan="3">&nbsp;</td>
									</tr>
								</thead>
								<tbody>
									<!-- 		--------- -->
									@foreach($usuarios as $usuario)
									<tr>
										<td><strong>{{$usuario->id}}</strong></td>
										<td>{{$usuario->PRIMER_NOMBRE}}</td>
										<td><a href="{{route('usuarios.show',$usuario->id)}}"
											class="btn btn-link">Ver</a></td>
										<td><a href="{{route('usuarios.edit',$usuario->id)}}"
											class="btn btn-link">Editar</a></td>
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
							</table>
								{!! $usuarios->render() !!}
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	</div> -->
<!-- </div> -->





@endsection

