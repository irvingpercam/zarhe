@extends('layout')
@section('title', 'Roles') 
@section('content')
    <h1>Roles</h1>
    <a href=" {{ route('roles.create') }} ">Crear rol nuevo</a>
    <ul>
    @forelse ($roles as $rol)
        <li><a href=" {{ route('roles.show', $rol) }} "> {{ $rol->Nombre }} </a></li>
    @empty
        <li>No hay roles para mostrar.</li>
    @endforelse
    </ul>
@endsection