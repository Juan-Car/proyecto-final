@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Lista de Mascotas </h1>
    <hr>
    <div class="row">
        <div class="col-md-9 offset-md-4">
            <a href="{{ route('mascotas.create') }}" class="btn btn-primary">Registrar Nuevo</a>
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}
                </div>
            @endif
            <div class="table">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="2">Acciones</th>
                            <th>Nombre</th>
                            <th>Raza</th>
                            <th>Peso</th>
                            <th>Categoria</th>
                            <th>Cliente</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mascotas as $data)
                            <tr>
                                <td width="10px">
                                    <a href="{{route('mascotas.edit', $data->id)}}" class="btn btn-success btn-sm">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('mascotas.destroy', $data->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type
                                        ="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                                <td>{{$data->nombre}}</td>
                                <td>{{$data->raza}}</td>
                                <td>{{$data->peso}}</td>
                                <td>{{$data->categoria->nombre}}</td>
                                <td>{{$data->cliente->nombre}} {{$data->cliente->apellido}}</td>
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