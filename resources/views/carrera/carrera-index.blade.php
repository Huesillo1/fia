@extends('layouts.windmill')
@section('contenido')
  <div class="container px-6 mx-auto grid">
      <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Carreras
      </h2>
  </div>
  
  <div class="mb-4">
      <a href="{{ route('carrera.create') }}" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          Agregar Carrera
      </a>
  </div>
  
  <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
      <table class="w-full whitespace-no-wrap">
        <thead>
          <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <th class="px-4 py-3">Nombre del GP</th>
            <th class="px-4 py-3">Temporada</th>
            <th class="px-4 py-3">Circuito</th>
            <th class="px-4 py-3">Pais</th>
            <th class="px-4 py-3">Acciones</th>
          </tr>
        </thead>
        @if (isset($carreras))
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($carreras as $carrera)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">                            
                        {{ $carrera->nombre }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $carrera->temporada }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $carrera->circuito }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                      {{ $carrera->pais }}
                    </td>                    
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                        <a href="{{ route('carrera.edit',$carrera->id) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                            </svg>
                        </a>
                        <a href="{{ route('carrera.show',$carrera->id) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </a>
                        </div>
                    </td>
                </tr>
                @endforeach
          </tbody>
        @endif
      </table>
    </div>
  </div>
@endsection