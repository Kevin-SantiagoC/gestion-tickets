<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Resporte y Estadisticas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <title>Resporte y Estadisticas</title>
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                        </head>
                        <body>
                        @include('layouts.sidebar')
                        
                        <div class="content" style="margin-left: 200px; padding: 20px;">
                            <!-- Aquí va el contenido principal del dashboard -->
                           
                            <!-- Coloca aquí el resto del contenido -->
                        </div>
                        
                        </body>
                        </html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>