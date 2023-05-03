<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-gray-600 rounded-md overflow-hidden shadow-sm sm:rounded-lg">

                    
                    <div class="grid grid-rows-1 grid-cols-3 p-5 gap-2">
                        @foreach($asignaturas as $asignatura)
                        <div class="bg-gray-800 col-span-1 text-gray-200 text-center px-4 py-2 rounded-lg">
                            <span class="font-bold text-2xl"> {{ $asignatura->nombre }} </span>
                            <br>
                            <br>
                            <span class="inline-block bg-green-700 rounded-full px-3 py-1 text-sm font-semibold text-black mb-2">{{ $asignatura->clave }}</span>
                            <span class="inline-block bg-green-700 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2">{{ $asignatura->ingenieria }}</span>
                            <span class="inline-block bg-green-700 rounded-full px-3 py-1 text-sm font-semibold text-black mr-2">{{ $asignatura->semestre }}</span>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>