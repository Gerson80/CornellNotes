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
    <div class="min-h-screen bg-gray-800 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
      <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-gray-300 py-8 px-4 shadow sm:rounded-lg sm:px-10">
          <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="text-center text-3xl font-extrabold text-gray-900">
              Error 403: Acceso no autorizado
            </h2>
            <p class="mt-2 text-center text-sm text-gray-900">
              Lo sentimos, no tienes permisos para acceder a esta página.
            </p>
          </div>
          <div class="mt-6">
            <a href="{{ route('dashboard') }}" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
              Volver al inicio
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
