@extends('layout')
@section('title', 'Contacto') 
@section('content')
    <h1>Contacto</h1>
    <form method="POST" action="{{ route('contacto') }}">
        @csrf
        <input type="text" name="name" placeholder="Nombre...">
        <br>
        <input type="email" name="email" placeholder="Email...">
        <br>
        <input type="text" name="subject" placeholder="Asunto...">
        <br>
        <textarea name="content" cols="30" rows="10" placeholder="Mensaje..."></textarea>
        <br>
        <button>Enviar</button>
    </form>
@endsection