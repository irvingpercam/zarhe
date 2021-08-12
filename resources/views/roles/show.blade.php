@extends('layout')
@section('title', 'Roles | ' . $rol->Nombre) 
@section('content')
<div>
    <label for="Nombre">
        <strong>Nombre:</strong>
        <br>
        {{ $rol->Nombre }} 
    </label>
    <br><br>
    <label for="url">
        <strong>url:</strong>
        <br>
        {{ $rol->url }}
    </label>
</div>
<a href="{{ route('roles.edit', $rol)}}">Editar</a>
<form action="{{ route('roles.destroy', $rol) }}" method="post">
    @csrf @method('DELETE')
    <button>Eliminar</button>
@endsection