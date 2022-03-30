@extends('layouts.app')

@section('content')
    <div class="flex justify-center flex-wrap bg-gray-200 p-4 mt-5">
        <div class="text-center">
            <h1 class="mb-5">{{ __("Listado de conciertos") }}</h1>
        </div>
    </div>
    <table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
        <thead>
        <tr>
            <th class="px-4 py-2">{{ ("Provincia") }}</th>
            <th class="px-4 py-2">{{ ("Artista") }}</th>
            <th class="px-4 py-2">{{ ("Informacion") }}</th>
            <th class="px-4 py-2">{{ ("Fecha celebracion") }}</th>
            <th class="px-4 py-2">{{ ("Precio") }}</th>
        </tr>
        </thead>
        <tbody>
            @forelse($conciertos as $concierto)
                <tr>

                    <td class="border px-4 py-2"> 
                        @foreach($provincias as $provincia)
                            @if($provincia->id == $concierto->provincia_id)
                                {{ $provincia->nombre }}
                            @endif
                        @endforeach    
                    </td>

                    <td class="border px-4 py-2">
                        @foreach($artistas as $artista)
                            @if($artista->id == $concierto->artista_id)
                                {{ $artista->nombre }}
                            @endif
                        @endforeach
                    </td>

                    <td class="border px-4 py-2">{{ $concierto->informacion }}</td>

                    <td class="border px-4 py-2">{{ $concierto->fechacelebracion }}</td>

                    <td class="border px-4 py-2">{{ $concierto->precio }}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ __("No hay conciertos") }}</strong></p>
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