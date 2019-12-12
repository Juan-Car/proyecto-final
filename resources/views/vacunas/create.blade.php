@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-2">
			<h1 class="page-header text-center">Registro de Vacunas</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<form class="form-group" method="POST" action="{{route('vacunas.store')}}">
			@csrf
		        <label for="fecha">Fecha de Vacuna</label>
				<input type="text" class="form-control" name="fecha" autocomplete="off" required>
				<label for="numero">Numero de Vacuna</label>
				<input type="text" class="form-control" name="numero" autocomplete="off" required>
				<label for="descripcion">Descripcion</label>
				<input type="text" class="form-control" name="descripcion" autocomplete="off" required>
				<label for="mascota_id">Mascota</label>
				<select name="mascota_id" class="form-control" required>
					@foreach($mascota as $data)<option value="{{$data->id}}">{{$data->nombre}}</option>
				    @endforeach
				</select>
				<label for="medicina_id">Medicamento</label>
				<select name="medicina_id" class="form-control" required>
					@foreach($medicina as $data)<option value="{{$data->id}}">{{$data->nombre}}</option>
				    @endforeach
				</select>
				<br>
				<a href="{{ route('vacunas.index') }}" class="btn btn-danger">Cancelar</a>
		        <button type="submit" class="btn btn-primary">Registrar</button>
		    </form>  
		</div>
    </div>
</div>

@endsection