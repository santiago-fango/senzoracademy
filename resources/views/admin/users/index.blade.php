@extends('adminlte::page')
@section('title', 'Senzoracademy')

@section('content_header')
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    @livewire('admin-users')
@stop


{{-- 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection --}}
