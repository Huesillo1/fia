@extends('layouts.temp')
@section('contenido')
    <h1>Listado de Escuderias</h1>
    <br>
    <p>
        <a href="{{ route('escuderia.create') }}">Agregar Escuderia</a>
    </p>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Motor</th>
                <th>Director</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($escuderiums as $escuderium)
                <tr>
                    <td>{{ $escuderium->id }}</td>
                    <td>
                        <a href="{{ route('escuderia.show', $escuderium->id)}}"> {{ $escuderium->nombre }}</a>
                    </td>
                    <td>{{ $escuderium->motor }}</td>
                    <td>{{ $escuderium->director }}</td>
                    <td>
                        <a href="{{ route('escuderia.edit', $escuderium->id) }}">Editar</a>
                    </td>
                </tr>                
            @endforeach
        </tbody>
    </table>
@endsection