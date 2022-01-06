@extends('adminlte::page')
@section('title', 'Senzoracademy')

@section('content_header')
    <h1>Crear Nivel</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.levels.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre del nivel']) !!}
                
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                {!! Form::submit('Crear nivel', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop


{{-- 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}
