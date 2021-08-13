@extends('layout')
@section('title', 'Tipos | ' . $tipo->Nombre) 
@section('content')
<div>
    <label for="Nombre">
        <strong>Nombre:</strong>
        <br>
        {{ $tipo->Nombre }} 
    </label>
    <br><br>
    <label for="Siglas">
        <strong>Siglas:</strong>
        <br>
        {{ $tipo->Siglas }} 
    </label>
    <br><br>
    <label for="url">
        <strong>url:</strong>
        <br>
        {{ $tipo->url }}
    </label>
</div>
<a href="{{ route('tipos.edit', $tipo)}}">Editar</a>
<form action="{{ route('tipos.destroy', $tipo) }}" method="post">
    @csrf @method('DELETE')
    <button>Eliminar</button>
@endsection