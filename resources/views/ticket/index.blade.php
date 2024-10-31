
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion de Tickets') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <title>Gestion de Tickets</title>
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                        </head>
                        <body>
                        @include('layouts.sidebar')

                        <section class="ticket">
                            <div class="content" style="margin-left: 200px; padding: 1px; ">

                                <h1 style="color:#02356b "><b>Gestion de Tickets</b></h1>

                                <!-- Filtros de búsqueda (opcional) -->
                                <form method="GET" action="{{ route('tickets.index') }}" class="form-inline mb-3">
                                    <input type="text" name="nombre" class="form-control mr-2" placeholder="Nombre" value="{{ request('nombre') }}">
                                    <input type="text" name="apellido" class="form-control mr-2" placeholder="Apellido" value="{{ request('apellido') }}">
                                    <select name="estado" class="form-control mr-2">
                                        <option value="">Estado</option>
                                        <option value="abierto" {{ request('estado') == 'abierto' ? 'selected' : '' }}>Abierto</option>
                                        <option value="cerrado" {{ request('estado') == 'cerrado' ? 'selected' : '' }}>Cerrado</option>
                                        <option value="en curso" {{ request('estado') == 'en curso' ? 'selected' : '' }}>En curso</option>
                                    </select>
                                    <input type="date" name="fecha" class="form-control mr-2" value="{{ request('fecha') }}">
                                        <button type="submit" class="btn btn-primary">Filtrar</button>
                                    </form>

                                    <!-- Tabla de tickets -->
                                    <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Prioridad</th>
                                                <th>Estado</th>
                                                <th>Fecha</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        </table>
                                    </div>
                            </div>
                        </section>

                        <div class="content" style="margin-left: 200px; padding: 20px;">
                            <!-- Aquí va el contenido principal del dashboard -->
                           
                            <!-- Coloca aquí el resto del contenido -->
                        </div>
                        
                        </body>
                        </html>

                        <style>
                           
                                /* Contenedor principal */
                                .content {
                                    margin-left: 220px;
                                    padding: 20px;
                                }

                                /* Estilo de la tabla */
                                .table {
                                    margin-top: 20px;
                                    border: 1px solid #ddd;
                                    border-radius: 8px;
                                    overflow: hidden;
                                }

                                .table thead {
                                    background-color: #2c3e50;
                                    color: white;
                                }

                                .table th, .table td {
                                    padding: 12px 15px;
                                    text-align: center;
                                    vertical-align: middle;
                                }

                                .table tbody tr:hover {
                                    background-color: #f2f2f2;
                                }

                                /* Estilos de botones */
                                .btn-primary, .btn-info, .btn-success {
                                    margin-right: 5px;
                                }

                                /* Estilo del formulario de filtros */
                                .form-inline {
                                    display: flex;
                                    justify-content: flex-start;
                                    margin-bottom: 15px;
                                }

                                .form-inline .form-control, .form-inline .btn {
                                    margin-right: 10px;
                                }

                        </style>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>