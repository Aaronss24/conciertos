@extends('layouts.app')

@section('content')
    <div class="flex justify-center flex-wrap bg-gray-200 p-4 mt-5">
        <div class="text-center">
            <h1 class="mb-5">{{ __("Listado de artistas") }}</h1>
        </div>
    </div> 
    <table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
        <thead>
        <tr>
            <th scope="px-4 py-2">{{ ("Nombre") }}</th>
            <th scope="px-4 py-2">{{ ("Informacion") }}</th>
        </tr>
        </thead>
        <tbody>
            @forelse($artistas as $artista)
                <tr>

                    <td class="border px-4 py-2">{{ $artista->nombre }}</td>

                    <td class="border px-4 py-2">{{ $artista->informacion }}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="2">
                        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ __("No hay artistas") }}</strong></p>
                            <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-3">

    </div>
@stop