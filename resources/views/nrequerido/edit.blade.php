@extends('layout')
@section('title', 'Editar Nivel Requerido') 
@section('content')
    <h1>Crear nuevo nivel</h1>
    <form method="POST" action=" {{ route('nrequerido.update', $nrequerido) }} ">
        @method('PATCH')
        @include('nrequerido._form', ['btnText' => 'Actualizar'])
    </form>
@endsection