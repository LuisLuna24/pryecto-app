<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between px-10">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Juegos') }}
            </h2>
            <a class="text-lg text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 duration-300" href="{{route('juegos.create')}}">Nuevo Juego</a>
        </div>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-10">
                @foreach ($juegos as $juego)
                    <li class="flex justify-between items-center border-b-4 border-slate-300 dark:border-slate-700">
                        <label for="" class="text-slate-900 dark:text-slate-300 text-lg">{{$juego->nombre}} @if ($juego->created_at==$juego->updated_at)
                            <label class="text-slate-400 dark:text-slate-600 text-sm"></label>
                        @else
                            <label class="text-slate-600 dark:text-slate-600 text-sm">-editado</label> 
                        @endif</label>
                        <nav class="grid grid-cols-3">
                            <a href="{{route('juegos.show', $juego )}}"><svg class="w-10 h-10 fill-slate-800 dark:fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g data-name="View"><path d="M255.998 73.825a182.179 182.179 0 0 0-182.175 182.18c0 100.608 81.567 182.17 182.175 182.17s182.18-81.562 182.18-182.17a182.183 182.183 0 0 0-182.18-182.18zm122.45 187.989c-2.225 2.848-55.222 69.68-122.705 69.68-67.49 0-120.485-66.832-122.709-69.68l-4.547-5.819 4.547-5.817c2.224-2.84 55.218-69.68 122.71-69.68 67.482 0 120.48 66.84 122.703 69.68l4.544 5.818z"/><path d="M255.743 199.404c-47.46 0-88.884 41.08-102.823 56.592 13.931 15.495 55.358 56.592 102.823 56.592 47.452 0 88.88-41.08 102.823-56.593-13.93-15.494-55.37-56.591-102.823-56.591zm-.004 98.858A42.258 42.258 0 1 1 298 255.996a42.265 42.265 0 0 1-42.262 42.266z"/></g></svg></a>
                            <a href="{{route('juegos.edit', $juego)}}"><svg class="w-10 h-10 fill-slate-800 dark:fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.548 3.452a1.542 1.542 0 0 1 0 2.182l-7.636 7.636-3.273 1.091 1.091-3.273 7.636-7.636a1.542 1.542 0 0 1 2.182 0zM4 21h15a1 1 0 0 0 1-1v-8a1 1 0 0 0-2 0v7H5V6h7a1 1 0 0 0 0-2H4a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1z"/></svg></a>
                            <form action="{{route('juegos.destroy',$juego)}}" method="post">
                                @method('delete')
                                @csrf
                                <button><svg class="w-10 h-10 fill-slate-800 dark:fill-slate-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.755 20.283 4 8h16l-1.755 12.283A2 2 0 0 1 16.265 22h-8.53a2 2 0 0 1-1.98-1.717zM21 4h-5V3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v1H3a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2z"/></svg></button>
                            </form>
                        </nav>
                        
                    </li>
                @endforeach
            </ul>
            {{$juegos->links()}}
        </div>
        
    </div>
</x-app-layout>
