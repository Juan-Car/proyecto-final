@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Actualizar Dados</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<hr>
			<form class="form-group" method="POST" action="{{route('vacunas.update', $mascota->id)}}">
				@method('PUT')
				@csrf
				<label for="fecha">Fecha de Vacuna</label>
				<input type="text" class="form-control" name="fecha" autocomplete="off" value="{{$mascota->fecha}}">
				<label for="numero">Numero de Vacuna</label>
				<input type="text" class="form-control" name="numero" autocomplete="off" value="{{$mascota->numero}}">
				<label for="descripcion">Descripcion</label>
				<input type="text" class="form-control" name="descripcion" autocomplete="off" value="{{$mascota->descripcion}}">
				<div class="row">
					<div class="col-md-12 text-center">
				    <a href="{{route('vacunas.index')}}" class="btn btn-danger">Cancelar</a>
				    <button type="submit" class="btn btn-primary">Editar</button>
				    </div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection