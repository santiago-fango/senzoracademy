@extends('adminlte::page')
@section('title', 'Senzoracademy')

@section('content_header')
    <h1>Editar rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}

                @include('admin.roles.partials.form')

                {!! Form::submit('Actualizar rol', ['class' => 'btn btn-primary mt-2 bg-red']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop


{{-- 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection --}}
