@extends('layout')
@section('title', 'Crear rol') 
@section('content')
    <h1>Crear nuevo rol</h1>
    <form method="POST" action=" {{ route('roles.store') }} ">
        @csrf
        <label for="">
            Nombre del rol <br>
            <input type="text" name="Nombre" value="{{ old('Nombre') }}" required>
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection