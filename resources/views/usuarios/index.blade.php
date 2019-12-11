@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Lista de Usuarios</h1>
    <hr>
    <div class="row">
        <div class="col-md-10 offset-md-3">
            <div class="table">
                <table class="table table-hover">
                    <thead class="btn-dark">
                        <tr>                        
                            <th scope="col">Acciones</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Fecha Nacimiento</th>
                            <th scope="col">Telefono</th>            
                            <th scope="col">E-mail</th>           
                        </tr>
                    </thead>
                        @foreach($usuarios as $data)
                            <tr>
                                <td>
                                    <form action="" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                                <th scope="row">{{$data->name}}</th>
                                <th scope="row">{{$data->surname}}</th>
                                <td>{{$data->birthdate}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->email}}</td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection