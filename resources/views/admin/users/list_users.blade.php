@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1 class="text-center text-success">{{ __("Listado de usuarios") }}</h1>
@stop

@section('content')
    
    <table class="table table-danger table-striped" style="width: 100%">
        <thead>
        <tr>
            <th scope="col">{{ ("Nombre") }}</th>
            <th scope="col">{{ ("Email") }}</th>
            <th scope="col">{{ ("Creado") }}</th>
            <th scope="col">{{ ("Acciones") }}</th>
        </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>

                    <td>{{ $user->name }}</td>

                    <td>{{ $user->email }}</td>

                    <td>{{ date_format($user->created_at, "d/m/Y") }}</td>

                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.users.edit', ['user' => $user]) }}" class="btn btn-primary text-blue-400">{{ __("Editar") }}</a> |
                        <a
                            href="#"
                            class="btn btn-danger text-red-400"
                            onclick="event.preventDefault();
                                document.getElementById('delete-concierto-{{ $user->id }}-form').submit();"
                        >{{ __("Eliminar") }}
                        </a>
                        <form id="delete-concierto-{{ $user->id }}-form" action="{{ route('admin.users.destroy', ['user' => $user]) }}" method="POST" class="hidden">
                            @method("DELETE")
                            @csrf
                        </form>
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ __("No hay usuarios") }}</strong></p>
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