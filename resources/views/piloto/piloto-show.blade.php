@extends('layouts.windmill')
@section('contenido')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Detalles del piloto
        </h2>
    </div>
    <div class="mb-4 mt-4">
        <a href="{{ route('piloto.index') }}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Volver
        </a>
    </div>
    <div class="grid gap-6 mb-8 md:grid-cols-2">
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                {{ $piloto->nombre.' '.$piloto->apellido }}
            </h4>
            <p class="text-gray-600 dark:text-gray-400">
                <ul>
                    <li class="text-gray-500 dark:text-gray-500 font-semibold mt-2 ">
                        <p class="text-gray-600 dark:text-gray-400 inline-block">Edad:&nbsp;</p>
                        {{ $piloto->edad.' años' }}
                    </li>
                    <li class="text-gray-500 dark:text-gray-500 font-semibold mt-2 ">
                        <p class="text-gray-600 dark:text-gray-400 inline-block">Escuderia:&nbsp; </p>
                        {{ $piloto->escuderia->nombre }}
                    </li>
                </ul>
            </p>
        </div>
    </div>

    <br>
    <form action="{{ route('piloto.destroy', $piloto) }}" method="post">
        @csrf
        @method('DELETE')
        <div class="mt-8">
            <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    type="submit"
            >
                <span>Eliminar</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                </svg>
            </button>
        </div>
    </form>
@endsection