@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Actualizar datos Ciente</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<hr>
			<form class="form-group" method="POST" action="{{route('clientes.update', $cliente->id)}}">
				@method('PUT')
				@csrf
				<label for="nombre">Nombres</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" value="{{$cliente->nombre}}">
				<label for="apellido">Apellidos</label>
				<input type="text" class="form-control" name="apellido" autocomplete="off" value="{{$cliente->apellido}}">
				<label for="telefono">Telefono</label>
				<input type="text" class="form-control" name="telefono" autocomplete="off" value="{{$cliente->telefono}}">
				<div class="row">
					<div class="col-md-12 text-center">
				    <a href="{{route('clientes.index')}}" class="btn btn-danger">Cancelar</a>
				    <button type="submit" class="btn btn-primary">Editar</button>
				    </div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection