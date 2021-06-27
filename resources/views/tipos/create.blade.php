@extends('layout')
@section('title', 'Crear tipo') 
@section('content')
    <h1>Crear nuevo tipo</h1>
    <form method="POST" action=" {{ route('tipos.store') }} ">
        @csrf
        <label for="">
            ID del tipo <br>
            <input type="number" name="TipoID">
        </label>
        <br>
        <label for="">
            Nombre del tipo <br>
            <input type="text" name="Nombre">
        </label>
        <br>
        <label for="">
            Siglas <br>
            <input type="text" name="Siglas">
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection