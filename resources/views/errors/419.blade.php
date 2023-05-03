<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error 419</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-800 flex items-center justify-center h-screen">
        <div class="bg-white border rounded-lg overflow-hidden max-w-sm mx-auto">
        <div class="py-4 px-6">
            <div class="flex items-center justify-center">
            <svg class="h-16 w-16 text-red-500 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 1L3 5V19L12 23L21 19V5L12 1ZM12 17C10.4087 17 9.02345 16.3679 8 15.3209C6.97655 14.274 6.38323 12.9027 6.38323 11.5C6.38323 10.0973 6.97655 8.72602 8 7.67908C9.02345 6.63214 10.4087 6 12 6C13.5913 6 14.9765 6.63214 16 7.67908C17.0235 8.72602 17.6168 10.0973 17.6168 11.5C17.6168 12.9027 17.0235 14.274 16 15.3209C14.9765 16.3679 13.5913 17 12 17ZM13 12H11V8H13V12ZM13 16H11V14H13V16Z" fill="currentColor"/>
            </svg>
            <h2 class="text-2xl font-bold text-gray-800">Error 419</h2>
            </div>
            <p class="text-gray-700 mt-4">Lo sentimos, el tiempo para enviar el formulario ha expirado.</p>
            <div class="mt-6">
            <a href="{{ route('dashboard') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Volver a inicio
            </a>
            </div>
        </div>
        </div>
    </body>
</html>
