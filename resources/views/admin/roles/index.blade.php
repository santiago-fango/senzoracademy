@extends('adminlte::page')
@section('title', 'Senzoracademy')

@section('content_header')
    <h1>Lista de roles</h1>
@stop

@section('content')

    @if (session('info'))
            

        <div class="alert alert-success" role="alert">
            <strong>Correcto!</strong> {{session('info')}}
        </div>

    @endif

    <div class="card">

        <div class="card-header">
            <a href="{{route('admin.roles.create')}}">Crear Rol</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>

                            <td width="10px">
                                <a href="{{route('admin.roles.edit', $role)}}" class="btn btn-secondary">Editar</a>    
                            </td>

                            <td width="10px">
                                <form action="{{route('admin.roles.destroy', $role)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty

                    <tr>
                        <td colspan="4">No hay ningun rol registrado</td>
                    </tr>
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop


{{-- 
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection --}}
