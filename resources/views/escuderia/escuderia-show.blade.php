@extends('layouts.temp')
@section('contenido')
    <h1>Detalles Escuderia</h1>
    <br>
    
    <p>
        <a href="{{ route('escuderia.index') }}">Listado Escuderias</a>
    </p>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Motor</th>
                <th>Director</th>
            </tr>
        </thead>
        <tbody>    
            <tr>
                <td>{{ $escuderium->id }}</td>
                <td>{{ $escuderium->nombre }}</td>
                <td>{{ $escuderium->motor }}</td>
                <td>{{ $escuderium->director }}</td>
            </tr>                            
        </tbody>
    </table>
    <br>
    <form action="{{ route('escuderia.destroy', $escuderium) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar escuderia">
    </form>
@endsection