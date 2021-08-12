@extends('layout')
@section('title', 'Crear rol') 
@section('content')
    <h1>Crear nuevo rol</h1>
    <form method="POST" action=" {{ route('roles.store') }} ">
        @include('roles._form', ['btnText' => 'Registrar'])
    </form>
@endsection