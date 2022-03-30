<!--<div class="w-full max-w-lg">
    <div class="flex flex-wrap ">
        <h1 class="mb-5 px-300">{{ $title }}</h1>
    </div>
</div>-->

<form class="w-full max-w-lg border-4" method="POST" action="{{ $route }}">
    @csrf
    @isset($update)
        @method("PUT")
    @endisset
     <h1 class="font-semibold py-5 text-blue mb-10 bg-blue-900 text-white px-5">{{ $title }} </h1>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold -my-1 mb-3" for="provincia">
                {{ __("Provincia") }}
            </label>
            <select name="provincia_id" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="provincia">
                @foreach($provincias as $provincia)
                    <option value="{{ $provincia->id }}" 
                    @isset($update)
                        @if($provincia->id == $concierto->provincia_id)
                            selected="selected"
                        @endif
                    @endisset
                    >{{ $provincia->nombre }}</option>
                @endforeach
            </select>
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Provincia") }}</p>
            @error("provincia")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold -my-1 mb-3" for="artista">
                {{ __("Artista") }}
            </label>
            <select name="artista_id" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="artista">
                @foreach($artistas as $artista)
                    <option value="{{ $artista->id }}"
                    @isset($update)
                        @if($artista->id == $concierto->artista_id)
                            selected="selected"
                        @endif
                    @endisset
                    >{{ $artista->nombre }}</option>
                @endforeach
            </select>
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Artista") }}</p>
            @error("artista")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="informacion">
                {{ __("Informacion") }}
            </label>
            <textarea name="informacion" class="no-resize appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-300 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="informacion">{{ old("informacion") ?? $concierto->informacion }}</textarea>
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Informacion del concierto") }}</p>
            @error("description")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold -my-1 mb-3" for="fechacelebracion">
                {{ __("Fecha Celebracion") }}
            </label>
            <input name="fechacelebracion" value="{{ old('fechacelebracion') ?? $concierto->fechacelebracion }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="fechacelebracion" type="date">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Fecha celebracion") }}</p>
            @error("fechacelebracion")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold -my-1 mb-3" for="precio">
                {{ __("Precio") }}
            </label>
            <input name="precio" value="{{ old('precio') ?? $concierto->precio }}" class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="precio" type="number">
            <p class="text-gray-600 text-xs italic -my-3">{{ __("Precio") }}</p>
            @error("precio")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="md:flex md:items-center">
        <div class="md:w-1/3">
            <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                {{ $textButton }}
            </button>
        </div>
    </div>
</form>