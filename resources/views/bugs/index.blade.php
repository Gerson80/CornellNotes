<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notas') }}
        </h2>
    </x-slot>

    <div class="bg-gray-800 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-white">Lista de bugs</h1>

            <x-crear-bug></x-crear-bug>

            <div class="bg-gray-800 py-6">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <table class="w-full divide-y divide-gray-700 mt-6">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Codigo de error</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Estado</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Plataforma</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"><center>Detalles</center></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            @foreach($bugs as $bug)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-red-400 hover:text-red-500">{{ $bug->codigo }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-yellow-500">{{ $bug->estado }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">{{ $bug->plataforma }}</td>
                                <x-ver-bug :id="$bug"></x-ver-bug>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>