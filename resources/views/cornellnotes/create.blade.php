<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear nueva Nota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-blue-900 rounded-md overflow-hidden shadow-sm sm:rounded-lg">
                    @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
                        @foreach($errors->all() as $error)
                        <strong class="font-bold">{{ $error }}</strong> <br>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" viewBox="0 0 20 20">
                                <path d="M14.348 5.652a1 1 0 0 0-1.414 0L10 8.586 6.066 4.652a1 1 0 1 0-1.414 1.414L8.586 10l-3.934 3.934a1 1 0 1 0 1.414 1.414L10 11.414l3.934 3.934a1 1 0 1 0 1.414-1.414L11.414 10l3.934-3.934a1 1 0 0 0 0-1.414z"/>
                            </svg>
                        </span>
                        @endforeach
                    </div>
                    @endif

                    <div class="p-4">
                        <h1 class="text-2xl font-bold text-white">Nueva Nota</h1>
                    </div>
                    <div class="p-4">
                        <form action="{{ route('cornellnotes.store') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-300 font-bold mb-2" for="titulo">
                                    Título
                                </label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:shadow-outline-gray" name="titulo" id="titulo" type="text" placeholder="Ingrese el título">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-300 font-bold mb-2" for="palabrasClave">
                                    Palabras clave
                                </label>
                                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:shadow-outline-gray" name="palabrasClave" id="palabrasClave" type="text" placeholder="Ingrese las palabras clave separadas por comas">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-300 font-bold mb-2" for="texto">
                                    Texto
                                </label>
                                <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:shadow-outline-gray" name="texto" id="texto" rows="6" placeholder="Ingrese el texto"></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-300 font-bold mb-2" for="conclusion">
                                    Conclusión
                                </label>
                                <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:shadow-outline-gray" name="conclusion" id="conclusion" rows="3" placeholder="Ingrese la conclusión"></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-300 font-bold mb-2" for="temas">
                                    Temas
                                </label>
                                <select class="block appearance-none w-full bg-gray-300 border border-gray-200 text-gray-900 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="tema" id="tema">
                                    <option value="">Seleccione un tema</option>
                                    @foreach($temas as $tema)
                                    <option value="{{ $tema->id }}"> {{ $tema->tema }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <x-guardar></x-guardar>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</x-app-layout>