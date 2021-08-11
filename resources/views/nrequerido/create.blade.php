@extends('layout')
@section('title', 'Crear Nivel Requerido') 
@section('content')
    <h1>Crear nuevo nivel</h1>
    <form method="POST" action=" {{ route('nrequerido.store') }} ">
        @include('nrequerido._form', ['btnText' => 'Registrar'])
    </form>
@endsection