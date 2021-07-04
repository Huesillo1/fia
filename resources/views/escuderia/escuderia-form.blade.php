@extends('layouts.temp')
@section('contenido')
    <h1>Formulario de escuderias</h1>
    <p>
        <a href="{{ route('escuderia.index') }}">Listado Escuderias</a>
    </p>
    @if (@isset($escuderium))
        {{-- Edicion de escuderia --}}
        <form action="{{ route('escuderia.update', $escuderium) }}" method="POST">
            @method('PATCH')
    @else
        {{-- Creación de escuderia --}}
        <form action="{{ route('escuderia.store') }}" method="POST">
    @endif

        @csrf
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $escuderium->nombre ?? ''}}">
        <br>

        <label for="motor">Motor:</label>
        <input type="text" name="motor" id="motor" value="{{ $escuderium->motor  ?? '' }}">
        <br>
        
        <label for="director">Director:</label>
        <input type="text" name="director" id="director" value="{{ $escuderium->director  ?? '' }}">
        <br>
        
        <input type="submit" value="Guardar">
    </form>
@endsection