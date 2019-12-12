@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Actualizar datos de Mascotas</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<hr>
			<form class="form-group" method="POST" action="{{route('mascotas.update', $mascota->id)}}">
				@method('PUT')
				@csrf
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" value="{{$mascota->nombre}}">
				<label for="raza">Raza</label>
				<input type="text" class="form-control" name="raza" autocomplete="off" value="{{$mascota->raza}}">
				<label for="peso">Peso</label>
				<input type="text" class="form-control" name="peso" autocomplete="off" value="{{$mascota->peso}}">
				<div class="row">
					<div class="col-md-12 text-center">
				    <a href="{{route('mascotas.index')}}" class="btn btn-danger">Cancelar</a>
				    <button type="submit" class="btn btn-primary">Editar</button>
				    </div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection