@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')

    {!! Form::model($producto, ['route' => ['admin.productos.update', $producto], 'method' => 'put']) !!}


    <div class="form-group">
        {!! Form::label('nombre', 'Nombre', ['class' => 'form-control']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
        @error('nombre')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


    <div class="form-group">
        {!! Form::label('descripcion', 'Descripcion', ['class' => 'form-control']) !!}
        {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion']) !!}
        @error('descripcion')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    {!! Form::submit('Editar', ['class' => 'btn btn-primary btn-sm mt-2']) !!}
    <a class="btn btn-secondary btn-sm mt-2" href="{{ route('admin.productos.index') }}">Cancelar</a>

    {!! Form::close() !!}



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
