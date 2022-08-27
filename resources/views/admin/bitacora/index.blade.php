@extends('adminlte::page')

@section('title', 'Bitacora')

@section('content_header')
    <h1>Bitacora</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario ID</th>
                        <th>IP Adress</th>
                        <th>Tabla</th>
                        <th>Registro ID</th>
                        <th>Accion</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bitacoras as $bitacora)
                        <tr>
                            <td>{{ $bitacora->user_id }}</td>
                            <td>{{ $bitacora->host }}</td>
                            <td>{{ $bitacora->ip_address }}</td>
                            <td>{{ $bitacora->tabla }}</td>
                            <td>{{ $bitacora->registro_id }}</td>
                            <td>{{ $bitacora->accion }}</td>
                            <td>{{ $bitacora->fecha }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
