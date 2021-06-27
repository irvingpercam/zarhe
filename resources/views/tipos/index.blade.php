@extends('layout')
@section('title', 'Tipos') 
@section('content')
    <h1>Tipos</h1>
    <a href=" {{ route('tipos.create') }} ">Crear tipo nuevo</a>
    <ul>
    @forelse ($tipos as $tipo)
        <li><a href=" {{ route('tipos.show', $tipo) }} "> {{ $tipo->Nombre }} </a></li>
    @empty
        <li>No hay tipos para mostrar.</li>
    @endforelse
    </ul>
@endsection