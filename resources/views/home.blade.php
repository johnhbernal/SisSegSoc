@extends('layouts.app') 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">
					<p>
						<span id="productsTotal">{{$products->total()}}</span> registros |
						página {{$products->currentPage()}} de {{$products->lastPage()}}
					</p>
					<div id="alert" class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert"></button>
					</div>
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th width="20px">ID</th>
								<th>Nombre del Producto</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($products as $item)
							<tr>
								<td widht="20px">{{$item->id}}</td>
								<td>{{$item->name}}</td>
								<td widht="20px">{!!
									Form::open(['route'=>['destroyProduct',$item->id],'method'=>'DELETE'])!!}
									<a href="#" class='btn-delete'>Eliminar</a> {!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{!! $products->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/script.js') }}"></script>
@endsection

