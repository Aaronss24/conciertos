@extends('adminlte::page')

@section('title', 'Añadir Concierto')

@section('content_header')
    <h1 class="text-center text-success">{{ __("Listado de conciertos") }}</h1>
@stop

@section('content')
    <a href="{{ route('admin.conciertos.create') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            {{ __("Añadir concierto") }}
    </a>
    <table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
        <thead>
        <tr>
            <th class="px-4 py-2">{{ ("Provincia") }}</th>
            <th class="px-4 py-2">{{ ("Artista") }}</th>
            <th class="px-4 py-2">{{ ("Informacion") }}</th>
            <th class="px-4 py-2">{{ ("Fecha celebracion") }}</th>
            <th class="px-4 py-2">{{ ("Precio") }}</th>
            <th class="px-4 py-2">{{ ("Acciones") }}</th>
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

                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.conciertos.edit', ['concierto' => $concierto]) }}" class="btn btn-primary text-blue-400">{{ __("Editar") }}</a>
                        <a
                            href="#"
                            class="btn btn-danger text-red-400"
                            onclick="event.preventDefault();
                                document.getElementById('delete-concierto-{{ $concierto->id }}-form').submit();"
                        >{{ __("Eliminar") }}
                        </a>
                        <form id="delete-concierto-{{ $concierto->id }}-form" action="{{ route('admin.conciertos.destroy', ['concierto' => $concierto]) }}" method="POST" class="hidden">
                            @method("DELETE")
                            @csrf
                        </form>
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="6">
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script> console.log('Hi!'); </script>
@stop