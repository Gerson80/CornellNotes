<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Usted tiene <span class="text-blue-500"> {{ $cantidad_notas}} notas </span> y <span class="text-purple-500"> {{ $cantidad_bugs }} bugs </span> registrados
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    
                <div class="flex p-8 bg-gray-700 rounded-md h-36">
                    <div class="mx-auto py-6">
                        <a href="{{ route('cornellnotes.create') }}" class="bg-gray-500 text-gray-200 hover:bg-blue-700 px-4 py-2 rounded-md font-bold">
                            Agregar Nota
                        </a>
                    </div>
                    
                    <div class="mx-auto py-6">
                        <a href="{{ route('bugs.create') }}" class="bg-gray-500 text-gray-200 hover:bg-purple-700 px-4 py-2 rounded-md font-bold">
                            Nuevo Bug
                        </a>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

</x-app-layout>
