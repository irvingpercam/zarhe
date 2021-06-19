@extends('layout')
@section('title', 'Tipos') 
@section('content')
    <h1>Tipos</h1>
    <ul>
    @forelse ($tipos as $tiposItem)
        <li> {{ $tiposItem['title'] }} </li>

    @empty
        <li>No hay tipos para mostrar.</li>
    @endforelse
    </ul>
@endsection