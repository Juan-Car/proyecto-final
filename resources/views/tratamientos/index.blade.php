@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Lista de Tratamientos</h1>
    <hr>
    <div class="row">
        <div class="col-md-9 offset-md-4">
            <a href="{{ route('tratamientos.create') }}" class="btn btn-primary">Registrar Nuevo</a>
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}
                </div>
            @endif
            <div class="table">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="2">Acciones</th>
                            <th>Nombres</th>
                            <th>Indicacion</th>
                            <th>Costo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tratamientos as $data)
                            <tr>
                                <td width="10px">
                                    <a href="{{route('tratamientos.edit', $data->id)}}" class="btn btn-success btn-sm">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('tratamientos.destroy', $data->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type
                                        ="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                                <td>{{$data->nombre}}</td>
                                <td>{{$data->indicacion}}</td>
                                <td>{{$data->costo}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

@endsection