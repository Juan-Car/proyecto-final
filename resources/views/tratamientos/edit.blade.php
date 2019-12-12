@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Actualizar datos Tratamiento</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<hr>
			<form class="form-group" method="POST" action="{{route('tratamientos.update', $cliente->id)}}">
				@method('PUT')
				@csrf
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" value="{{$cliente->nombre}}">
				<label for="indicacion">Indicacion</label>
				<input type="text" class="form-control" name="indicacion" autocomplete="off" value="{{$cliente->indicacion}}">
				<label for="costo">Costo</label>
				<input type="text" class="form-control" name="costo" autocomplete="off" value="{{$cliente->costo}}">
				<div class="row">
					<div class="col-md-12 text-center">
				    <a href="{{route('tratamientos.index')}}" class="btn btn-danger">Cancelar</a>
				    <button type="submit" class="btn btn-primary">Editar</button>
				    </div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection