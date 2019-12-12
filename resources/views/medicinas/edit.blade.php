@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="page-header text-center">Actualizar datos Medicina</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<hr>
			<form class="form-group" method="POST" action="{{route('medicinas.update', $medicina->id)}}">
				@method('PUT')
				@csrf
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" value="{{$medicina->nombre}}">
				<label for="precio">Precio</label>
				<input type="text" class="form-control" name="precio" autocomplete="off" value="{{$medicina->precio}}">
				<label for="dosis">Dosis</label>
				<input type="text" class="form-control" name="dosis" autocomplete="off" value="{{$medicina->dosis}}">
				<div class="row">
					<div class="col-md-12 text-center">
				    <a href="{{route('medicinas.index')}}" class="btn btn-danger">Cancelar</a>
				    <button type="submit" class="btn btn-primary">Editar</button>
				    </div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection