@extends('layout')
@section('title', 'Usuarios') 
@section('content')
    <h1>Usuarios</h1>
    <p>Bienvenid@ {{ $nombre ?? "Foráneo" }}</p>
@endsection