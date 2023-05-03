<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Error 403</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    </head>
    <body>
        <div class="min-h-screen bg-gray-800 flex flex-col justify-center items-center">
            <div class="bg-gray-300 rounded-lg shadow-lg p-8">
                <div class="flex justify-center items-center">
                    <svg class="h-12 w-12 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M14.417,4.885 C14.417,3.372 13.144,2.1 11.631,2.1 C10.118,2.1 8.846,3.372 8.846,4.885 C8.846,6.397 10.118,7.67 11.631,7.67 C13.144,7.67 14.417,6.397 14.417,4.885 Z M11.631,6.119 C12.364,6.119 12.951,5.532 12.951,4.799 C12.951,4.066 12.364,3.48 11.631,3.48 C10.898,3.48 10.311,4.066 10.311,4.799 C10.311,5.532 10.898,6.119 11.631,6.119 Z M11.631,16.308 C10.118,16.308 8.846,15.035 8.846,13.522 C8.846,12.01 10.118,10.737 11.631,10.737 C13.144,10.737 14.417,12.01 14.417,13.522 C14.417,15.035 13.144,16.308 11.631,16.308 Z M11.631,11.972 C12.364,11.972 12.951,11.385 12.951,10.652 C12.951,9.919 12.364,9.333 11.631,9.333 C10.898,9.333 10.311,9.919 10.311,10.652 C10.311,11.385 10.898,11.972 11.631,11.972 Z M0,20 L20,20 L20,0 L0,0 L0,20 Z M1,19 L19,19 L19,1 L1,1 L1,19 Z"></path>
                    </svg>
                    <div class="ml-4 text-gray-500">
                        <h1 class="text-center text-3xl font-extrabold text-gray-900 mb-4">Página no encontrada</h1>
                        <p class="text-lg text-gray-900
                        ">Lo sentimos, la ruta a la que quieres ir no existe.</p>
                    </div>
                </div>
                <div class="mt-8 flex justify-center">
                    <a href="{{ route('dashboard') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Volver al inicio
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
