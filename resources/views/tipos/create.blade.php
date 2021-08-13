@extends('layout')
@section('title', 'Crear tipo') 
@section('content')
    <h1>Crear nuevo tipo</h1>
    <form method="POST" action=" {{ route('tipos.store') }} ">
        @include('tipos._form', ['btnText' => 'Registrar'])
    </form>
@endsection