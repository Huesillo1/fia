@extends('layouts.windmill')
@section('contenido')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Formulario de pilotos
        </h2>
    </div>
    <div class="mb-4">
        <a href="{{ route('piloto.index') }}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Volver
        </a>
    </div>
    @if (@isset($piloto))
        {{-- Edicion de piloto --}}
        <form action="{{ route('piloto.update', $piloto) }}" method="POST">
            @method('PATCH')
    @else
        {{-- Creación de piloto --}}
        <form action="{{ route('piloto.store') }}" method="POST">
    @endif

        @csrf
        
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">                
            @include('partials.form-errors')
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nombre(s)</span>
                <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none form-input @error('nombre') border-red-600 focus:border-red-400 focus:shadow-outline-red @else dark:border-gray-600  focus:border-purple-400  focus:shadow-outline-purple  dark:focus:shadow-outline-gray @enderror "
                    type="text" 
                    name="nombre"
                    id="nombre" 
                    value="{{ old('nombre') ?? $piloto->nombre ?? ''}}" 
                >
                @error('nombre')
                    <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message}}
                    </span>
                @enderror                
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Apellido(s)</span>
                <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none form-input @error('apellido') border-red-600 focus:border-red-400 focus:shadow-outline-red @else dark:border-gray-600  focus:border-purple-400  focus:shadow-outline-purple  dark:focus:shadow-outline-gray @enderror "
                type="text"  
                name="apellido"
                id="apellido" 
                value="{{ old('apellido') ?? $piloto->apellido ?? ''}}" 
                >
                @error('apellido')
                <span class="text-xs text-red-600 dark:text-red-400">
                    {{ $message}}
                </span>
              @enderror 
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Edad</span>
                <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none form-input @error('edad') border-red-600 focus:border-red-400 focus:shadow-outline-red @else dark:border-gray-600  focus:border-purple-400  focus:shadow-outline-purple  dark:focus:shadow-outline-gray @enderror "
                type="number"  
                name="edad"
                id="edad" 
                value="{{ old('edad') ?? $piloto->edad ?? ''}}" 
                min="1"
                max="100"
                >
                @error('edad')
                    <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message}}
                    </span>
                @enderror 
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Escuderia
                </span>
                <select name="escuderia_id" id="escuderia_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    @if (isset($escuderiums))
                        @foreach ($escuderiums as $escuderium)
                            <option 
                                value="{{ $escuderium->id }}"
                                @if (isset($piloto))
                                    @if ($piloto->escuderia->id == $escuderium->id)
                                        selected
                                    @endif
                                @elseif (old('escuderia_id', $escuderium->id) == $escuderium->id)
                                    {{-- @dd(old('escuderia_id',$escuderium->id)) --}}
                                    selected                                
                                @else
                                    @if ($escuderium->id == 1)
                                        selected
                                    @endif                            
                                @endif 
                            >
                                {{ $escuderium->nombre }}
                            </option>    
                        @endforeach                        
                    @endif
                </select>
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