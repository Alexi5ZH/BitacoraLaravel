@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Lista de productos</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-tools">
            <a href="{{ route('admin.productos.create') }}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                Nuevo
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->codigo }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td width="200px">
                            <form action="{{ route('admin.productos.destroy', $producto) }}" method="post">
                                <a href="{{ route('admin.productos.edit', $producto) }}" class="btn btn-info btn-sm">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
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
    <script> console.log('Hi!'); </script>
@stop