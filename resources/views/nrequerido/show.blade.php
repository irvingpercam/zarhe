@extends('layout')
@section('title', 'Nivel requerido | ' . $nrequerido->Nombre) 
@section('content')
<div>
    <label for="Nombre">
        <strong>Nombre:</strong>
        <br>
        {{ $nrequerido->Nombre }} 
    </label>
    <br><br>
    <label for="url">
        <strong>url:</strong>
        <br>
        {{ $nrequerido->url }}
    </label>
</div>
<a href="{{ route('nrequerido.edit', $nrequerido)}}">Editar</a>
<form action="{{ route('nrequerido.destroy', $nrequerido) }}" method="post">
    @csrf @method('DELETE')
    <button>Eliminar</button>
@endsection