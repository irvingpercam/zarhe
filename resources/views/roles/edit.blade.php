@extends('layout')
@section('title', 'Editar Rol') 
@section('content')
    <h1>Editar rol</h1>
    <form method="POST" action=" {{ route('roles.update', $rol) }} ">
        @method('PATCH')
        @include('roles._form', ['btnText' => 'Actualizar'])
    </form>
@endsection