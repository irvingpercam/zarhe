@extends('layout')
@section('title', 'Nivel Requerido') 
@section('content')
    <h1>Nivel Requerido</h1>
    <a href=" {{ route('nrequerido.create') }} ">Crear nivel requerido</a>
    <ul>
    @forelse ($nrequeridos as $nrequerido)
        <li><a href=" {{ route('nrequerido.show', $nrequerido) }} "> {{ $nrequerido->Nombre }} </a></li>
    @empty
        <li>No hay niveles requeridos para mostrar.</li>
    @endforelse
    </ul>
@endsection