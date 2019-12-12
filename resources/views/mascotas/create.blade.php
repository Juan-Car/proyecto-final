@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-2">
			<h1 class="page-header text-center">Registro de Mascotas</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<form class="form-group" method="POST" action="{{route('mascotas.store')}}">
			@csrf
		        <label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" required>
				<label for="raza">Raza</label>
				<input type="text" class="form-control" name="raza" autocomplete="off" required>
				<label for="peso">Peso</label>
				<input type="text" class="form-control" name="peso" autocomplete="off" required>
				<label for="categoria_id">Categoria</label>
				<select name="categoria_id" class="form-control" required>
					@foreach($categoria as $data)<option value="{{$data->id}}">{{$data->nombre}}</option>
				    @endforeach
				</select>
				<label for="cliente_id">Cliente</label>
				<select name="cliente_id" class="form-control" required>
					@foreach($cliente as $data)<option value="{{$data->id}}">{{$data->nombre}} {{$data->apellido}}</option>
				    @endforeach
				</select>
				<br>
				<a href="{{ route('mascotas.index') }}" class="btn btn-danger">Cancelar</a>
		        <button type="submit" class="btn btn-primary">Registrar</button>
		    </form>  
		</div>
    </div>
</div>

@endsection