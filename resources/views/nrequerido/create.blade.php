@extends('layout')
@section('title', 'Crear Nivel Requerido') 
@section('content')
    <h1>Crear nuevo nivel</h1>
    <form method="POST" action=" {{ route('nrequerido.store') }} ">
        @csrf
        <label for="">
            Nombre del nivel <br>
            <input type="text" name="Nombre">
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection