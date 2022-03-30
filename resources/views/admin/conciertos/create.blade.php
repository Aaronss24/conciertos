@extends('adminlte::page')

@section('title', 'Crear Conciertos')

@section("content")
    <div class="flex justify-center flex-wrap p-4 mt-5">
        @include("admin.conciertos.form")
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script> console.log('Hi!'); </script>
@stop