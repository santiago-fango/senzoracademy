@extends('adminlte::page')
@section('title', 'Senzoracademy')

@section('content_header')
    <h1>Editar precio</h1>
@stop

@section('content')
   
    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif

    
    <div class="card">
        <div class="card-body">
            {!! Form::model($price, ['route' => ['admin.prices.update', $price], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de este precio']) !!}
                    
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('value', 'valor') !!}
                    {!! Form::number('value', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio']) !!}
                
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {!! Form::submit('Actualizar precio', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop


{{-- 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}
