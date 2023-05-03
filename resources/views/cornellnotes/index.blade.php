<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notas') }}
        </h2>
    </x-slot>

    <div class="bg-gray-800 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-white">Lista de Notas</h1>

            <x-crear-nota></x-crear-nota>

            <table class="w-full divide-y divide-gray-700 mt-6">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Título</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Asignatura</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"><center>Detalles</center></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @foreach($notas as $nota)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-400"> {{ $nota->titulo }} </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-500"> {{ $nota->nombre }} </td>
                        <x-ver-nota :id="$nota->id"></x-ver-nota>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>