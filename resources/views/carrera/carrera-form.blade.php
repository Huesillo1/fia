@extends('layouts.windmill')
@section('contenido')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Formulario de carreras
        </h2>
    </div>
    <div class="mb-4">
        <a href="{{ route('carrera.index') }}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Volver
        </a>
    </div>
    @if (@isset($carrera))
        {{-- Edicion de carrera --}}
        <form action="{{ route('carrera.update', $carrera) }}" method="POST">
            @method('PATCH')
    @else
        {{-- Creación de carrera --}}
        <form action="{{ route('carrera.store') }}" method="POST">
    @endif

        @csrf
        
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">                
            @include('partials.form-errors')
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nombre</span>
                <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none form-input @error('nombre') border-red-600 focus:border-red-400 focus:shadow-outline-red @else dark:border-gray-600  focus:border-purple-400  focus:shadow-outline-purple  dark:focus:shadow-outline-gray @enderror "
                    type="text" 
                    name="nombre"
                    id="nombre" 
                    value="{{ old('nombre') ?? $carrera->nombre ?? ''}}" 
                >
                @error('nombre')
                    <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message}}
                    </span>
                @enderror                
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Temporada</span>
                <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none form-input @error('apellido') border-red-600 focus:border-red-400 focus:shadow-outline-red @else dark:border-gray-600  focus:border-purple-400  focus:shadow-outline-purple  dark:focus:shadow-outline-gray @enderror "
                type="text"  
                name="temporada"
                id="temporada" 
                value="{{ old('temporada') ?? $carrera->temporada ?? ''}}" 
                >
                @error('temporada')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message}}
                </span>
              @enderror 
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Circuito</span>
                <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none form-input @error('apellido') border-red-600 focus:border-red-400 focus:shadow-outline-red @else dark:border-gray-600  focus:border-purple-400  focus:shadow-outline-purple  dark:focus:shadow-outline-gray @enderror "
                type="text"  
                name="circuito"
                id="circuito" 
                value="{{ old('circuito') ?? $carrera->circuito ?? ''}}" 
                >
                @error('circuito')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message}}
                </span>
              @enderror 
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Pa&iacute;s</span>
                <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none form-input @error('apellido') border-red-600 focus:border-red-400 focus:shadow-outline-red @else dark:border-gray-600  focus:border-purple-400  focus:shadow-outline-purple  dark:focus:shadow-outline-gray @enderror "
                type="text"  
                name="pais"
                id="pais" 
                value="{{ old('pais') ?? $carrera->pais ?? ''}}" 
                >
                @error('pais')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message}}
                </span>
              @enderror 
            </label>            
            <div class="mt-4">
                <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        type="submit"
                >
                    <span>Guardar</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </button>
            </div>
        </div>
    </form>
@endsection