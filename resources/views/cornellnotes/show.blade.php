<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalles de nota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-gray-800 rounded-md overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="grid grid-rows-1 sm:grid-rows-4 grid-cols-1 sm:grid-cols-6 gap-2 p-5">
                        <div class="bg-blue-800 col-span-4 text-gray-200 text-center px-4 py-2 rounded-lg">
                            <span class="font-bold"> Titulo: </span> <br>
                            <span class="text-black font-bold">
                                {{ $detalle_nota->titulo }}
                            </span>
                        </div>

                        <div class="bg-blue-800 col-span-2 text-gray-200 text-center px-4 py-2 rounded-lg">
                            <span class="font-bold"> Fecha de creación: </span> <br>
                            <span class="text-black font-bold">
                                {{ $detalle_nota->created_at }}
                            </span>
                        </div>

                        <div class="bg-blue-800 col-span-2 row-span-4 text-gray-200 text-center px-4 py-2 rounded-lg">
                            <span class="font-bold"> Palabras Clave: </span> <br>
                            @foreach ($detalle_nota->PalabrasClave as $palabra)
                            <div class="inline-flex">
                                <ul>
                                    <li class="p-4 m-2 bg-green-500 text-black font-bold rounded-xl px-4 py-2">
                                        {{ $palabra }}
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </div>

                        <div class="bg-blue-800 col-span-4 row-span-5 text-gray-200 text-justify px-4 py-2 rounded-lg">
                            <span class="font-bold"> Texto: </span> <br>
                            <span class="text-black font-bold">
                                {{ $detalle_nota->Texto }}
                            </span>
                        </div>

                        @foreach ($notas as $nota)
                        <div class="bg-blue-800 col-span-1 row-span-1 text-gray-200 text-center px-4 py-2 rounded-lg">
                            <span class="font-bold"> Unidad: </span> <br>
                            <span class="text-black font-bold">
                                {{ $nota->unidad }}
                            </span>
                        </div>

                        <div class="bg-blue-800 col-span-1 row-span-1 text-gray-200 text-center px-4 py-2 rounded-lg">
                            <span class="font-bold"> Tema: </span> <br>
                            <span class="text-black font-bold">
                                {{ $nota->tema }}
                            </span>
                        </div>
                        @endforeach

                        <div class="bg-blue-800 col-span-6 text-gray-200 text-justify px-4 py-2 rounded-lg">
                            <span class="font-bold"> Conclusion: </span> <br>
                            <span class="text-black font-bold">
                                {{ $detalle_nota->Conclusion }}
                            </span>
                        </div>

                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>

                        <x-editar-nota :id="$detalle_nota"></x-editar-nota>

                        <x-eliminar-nota :id="$detalle_nota"></x-eliminar-nota>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>