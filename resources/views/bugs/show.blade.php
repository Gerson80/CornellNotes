<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalles de bug') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-purple-800 rounded-md overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label class="block text-black font-bold mb-2" for="codigo">
                                    Código de Error
                                </label>
                                <p class="text-green-500 font-bold">{{ $detalle_bug->codigo }}</p>
                            </div>
                            <div class="mb-4">
                                <label class="block text-black font-bold mb-2" for="fecha">
                                    Fecha
                                </label>
                                <p class="text-gray-200">{{ $detalle_bug->created_at }}</p>
                            </div>
                            <div class="mb-4">
                                <label class="block text-black font-bold mb-2" for="descripcion">
                                    Descripción
                                </label>
                                <p class="text-gray-200">{{ $detalle_bug->descripcion }}</p>
                            </div>
                            <div class="mb-4">
                                <label class="block text-black font-bold mb-2" for="plataforma">
                                    Plataforma
                                </label>
                                <p class="text-gray-200">{{ $detalle_bug->plataforma }}</p>
                            </div>
                            <div class="mb-4">
                                <label class="block text-black font-bold mb-2" for="estado">
                                    Estado
                                </label>
                                <p class="text-yellow-500">{{ $detalle_bug->estado }}</p>
                            </div>
                            <div class="mb-4">
                                <label class="block text-black font-bold mb-2" for="solucion">
                                    Solucion
                                </label>
                                <p class="text-gray-200">{{ $detalle_bug->solucion }}</p>
                            </div>
                        </div>

                        <div class="flex  justify-end mt-6">

                            <x-editar-bug :id="$detalle_bug"></x-editar-bug>
    
                            <x-eliminar-bug :id="$detalle_bug"></x-eliminar-bug>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>