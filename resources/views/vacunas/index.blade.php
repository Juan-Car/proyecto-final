@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Lista de Mascotas </h1>
    <hr>
    <div class="row">
        <div class="col-md-9 offset-md-4">
            <a href="{{ route('vacunas.create') }}" class="btn btn-primary">Registrar Nuevo</a>
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}
                </div>
            @endif
            <div class="table">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="2">Acciones</th>
                            <th>Fecha de Vacuna</th>
                            <th>Numero de Vacuna</th>
                            <th>Descripcion</th>
                            <th>Mascota</th>
                            <th>Medicina</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vacunas as $data)
                            <tr>
                                <td width="10px">
                                    <a href="{{route('vacunas.edit', $data->id)}}" class="btn btn-success btn-sm">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('vacunas.destroy', $data->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type
                                        ="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                                <td>{{$data->fecha}}</td>
                                <td>{{$data->numero}}</td>
                                <td>{{$data->descripcion}}</td>
                                <td>{{$data->mascota->nombre}}</td>
                                <td>{{$data->medicina->nombre}}</td>
                                <td>{{$data->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

@endsection