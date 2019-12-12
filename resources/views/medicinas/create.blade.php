@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-2">
			<h1 class="page-header text-center">Registrar Medicamentos</h1>
			@if (Session::has('message'))
			    <div class="alert alert-info">{{ Session::get('message') }}
			    </div>
            @endif
			<form class="form-group" method="POST" action="{{route('medicinas.store')}}">
			@csrf
		        <label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" autocomplete="off" required>
				<label for="precio">Precio</label>
				<input type="text" class="form-control" name="precio" autocomplete="off">
				<label for="dosis">Dosis</label>
				<input type="text" class="form-control" name="dosis" autocomplete="off" required>
				<br>
				<a href="{{ route('medicinas.index') }}" class="btn btn-danger">Cancelar</a>
		        <button type="submit" class="btn btn-primary">Registrar</button>
		    </form>  
		</div>
    </div>
</div>

@endsection