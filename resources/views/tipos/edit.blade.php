@extends('layout')
@section('title', 'Editar Tipo Requerido') 
@section('content')
    <h1>Editar tipo</h1>
    <form method="POST" action=" {{ route('tipos.update', $tipo) }} ">
        @method('PATCH')
        @include('tipos._form', ['btnText' => 'Actualizar'])
    </form>
@endsection