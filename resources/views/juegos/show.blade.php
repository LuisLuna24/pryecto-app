

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between px-10">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{$juego->nombre}}
            </h2>
            <div class="grid gap-5 grid-cols-2">
                <a class="text-lg text-slate-400 hover:text-slate-100 duration-300" href="{{route('juegos.index')}}">Regresar</a>
                <a class="text-lg text-slate-400 hover:text-slate-100 duration-300" href="{{route('juegos.edit', $juego->id)}}">Editar</a>
            </div>
        </div>
        
    </x-slot>
</x-app-layout>
