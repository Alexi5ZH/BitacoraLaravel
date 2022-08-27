@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Crear Producto</h1>
@stop

@section('content')

{!! Form::open(['route' => 'admin.productos.store']) !!}

<div class="form-group">
    {!! Form::label('codigo', 'Codigo', ['class' => 'form-control']) !!}
    {!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el codigo del producto']) !!}
    @error('codigo')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('nombre', 'Nombre', ['class' => 'form-control']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
    @error('nombre')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('descipcion', 'Descripcion', ['class' => 'form-control']) !!}
    {!! Form::text('descipcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion']) !!}
    @error('descipcion')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

{!! Form::submit('Crear', ['class' => 'btn btn-success btn-sm mt-2']) !!}
<a class="btn btn-secondary btn-sm mt-2" href="{{ route('admin.productos.index') }}">Cancelar</a>

{!! Form::close() !!}

@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop