@extends('layout')
@section('title', 'Crear tipo') 
@section('content')
    <h1>Crear nuevo tipo</h1>
    <form method="POST" action=" {{ route('tipos.store') }} ">
        @csrf
        <label for="">
            Nombre del tipo <br>
            <input type="text" name="Nombre" value="{{ old('Nombre') }}" required>
        </label>
        <br>
        <label for="">
            Siglas <br>
            <input type="text" name="Siglas" value="{{ old('Siglas') }}" required>
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection