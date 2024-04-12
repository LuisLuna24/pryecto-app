<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between px-10">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Contacto') }}
            </h2>
            <a class="text-lg text-slate-400 hover:text-slate-100 duration-300" href="{{route('juegos.index')}}">Regresar</a>
        </div>
        
    </x-slot>
    @if (session('info'))
        <div class="bg-slate-300 dark:bg-slate-700 w-full py-5 text-center" >
            <p class=" text-green-500 dark:text-green-500">{{session('info')}}</p>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-10" action="{{route('contactanos.store')}}" method="POST">
                @csrf 
                <div class="grid gap-2">
                    <label class="text-slate-900 dark:text-slate-300 text-lg" for="Nombre">Nombre:</label>
                    <input type="text" name="Nombre" id="Nombre" value="{{ Auth::user()->name }}" class="bg-slate-200 dark:bg-slate-800 p-2 rounded-md text-slate-900 dark:text-slate-300">
                </div>
                @error('Nombre')
                <div class="alert alert-danger text-red-500 mt-2">{{$message}}</div>
                @enderror
                <div class="grid gap-2">
                    <label class="text-slate-900 dark:text-slate-300 text-lg" for="Correo">Correo:</label>
                    <input type="text" name="Correo" id="Correo" value="{{ Auth::user()->email }}" class="bg-slate-200 dark:bg-slate-800 p-2 rounded-md text-slate-900 dark:text-slate-300">
                </div>
                @error('Correo')
                <div class="alert alert-danger text-red-500 mt-2">{{$message}}</div>
                @enderror
                <div class="grid gap-2">
                    <label class="text-slate-900 dark:text-slate-300 text-lg" for="Contenido">Mensaje:</label>
                    <textarea type="text" name="Mensaje" id="Mensaje" value="{{old('Mensaje')}}" class="bg-slate-200 dark:bg-slate-800 p-2 rounded-md text-slate-900 dark:text-slate-300">{{old('Mensaje')}}</textarea>
                </div>
                @error('Mensaje')
                <div class="alert alert-danger text-red-500 mt-2">{{$message}}</div>
                @enderror
                <button type="submit" class="mt-6 py-2.5 px-5 me-2 mb-2 max-w-xs text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Enviar</button>
            </form>
        </div>
        
    </div>
</x-app-layout>
