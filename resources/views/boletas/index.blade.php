@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="page-header text-center">Boletas de Ventas </h1>
    <hr>
    <div class="row">
        <div class="col-md-9 offset-md-4">
            <div class="table">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Servicio</th>
                            <th>Producto</th>
                            <th>Tratamiento</th>
                            <th>Medicina</th>
                            <th>Vacuna</th>
                            <th>Total</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($boletas as $data)
                            <tr>
                                <td>{{$data->servicio->nombre}}</td>
                                <td>{{$data->producto->nombre}}</td>
                                <td>{{$data->tratamiento->nombre}}</td>
                                <td>{{$data->medicina->nombre}}</td>
                                <td>{{$data->vacuna->nombre}}</td>
                                <td>{{$data->total}}</td>
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