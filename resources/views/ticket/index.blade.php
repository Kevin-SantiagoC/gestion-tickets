
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
                                    <div class="button-group">
                                    <button class="Btn">
  
                                        <div class="sign">+</div>
                                        
                                        <div class="text">Create</div>
                                      </button>

                                      <button class="edit-button">
                                        <svg class="edit-svgIcon" viewBox="0 0 512 512">
                                                          <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                                        </svg>
                                      </button>

                                      <button class="delete-button">
                                        <svg class="delete-svgIcon" viewBox="0 0 448 512">
                                                          <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                                        </svg>
                                      </button>

                                      <button class="Ver-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                        </svg>

                                                       
                                                          
                                      </button>
                                    </div>

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
                                                <th>Asignado A</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Kevin Castaño</td>
                                                <td>Alta</td>
                                                <td>Abierto</td>
                                                <td>2024-11-05</td>
                                                <td>Juan Pérez</td>
                                                <td>
                                                    <div class="checkbox-wrapper-12">
                                                        <div class="cbx">
                                                            <input type="checkbox" id="cbx-12">
                                                            <label for="cbx-12"></label>
                                                            <svg fill="none" viewBox="0 0 15 14" height="14" width="15">
                                                                <path d="M2 8.36364L6.23077 12L13 2"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Agrega más filas según sea necesario -->
                                        </tbody>
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

                                .button-group {
                                display: flex;
                                gap: 10px; /* Espacio entre botones */
                                align-items: center; /* Alineación vertical */
                            }

                                .Btn {
                                display: flex;
                                align-items: center;
                                justify-content: flex-start;
                                width: 45px;
                                height: 45px;
                                border-radius: calc(45px/2);
                                border: none;
                                cursor: pointer;
                                position: relative;
                                overflow: hidden;
                                transition-duration: .3s;
                                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
                                background: linear-gradient(144deg,#02356b,#02356b 50%,#02356b);
                                }

                                /* plus sign */
                                .sign {
                                width: 100%;
                                font-size: 2.2em;
                                color: rgb(255, 255, 255);
                                transition-duration: .3s;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                }
                                /* text */
                                .text {
                                position: absolute;
                                right: 0%;
                                width: 0%;
                                opacity: 0;
                                color: white;
                                font-size: 1.4em;
                                font-weight: 500;
                                transition-duration: .3s;
                                }
                                /* hover effect on button width */
                                .Btn:hover {
                                width: 125px;
                                transition-duration: .3s;
                                }

                                .Btn:hover .sign {
                                width: 30%;
                                transition-duration: .3s;
                                padding-left: 15px;
                                }
                                /* hover effect button's text */
                                .Btn:hover .text {
                                opacity: 1;
                                width: 70%;
                                transition-duration: .3s;
                                padding-right: 15px;
                                }
                                /* button click effect*/
                                .Btn:active {
                                transform: translate(2px ,2px);
                                }

                                .Ver-button {
                                width: 40px;
                                height: 40px;
                                border-radius: 50%;
                                background-color: #02356b;
                                border: none;
                                font-weight: 600;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
                                cursor: pointer;
                                transition-duration: 0.3s;
                                overflow: hidden;
                                position: relative;
                                text-decoration: none !important;
                                color: white;
                                
                                }
                                
                                .Ver-svgIcon {
                                width: 17px;
                                transition-duration: 0.3s;
                                }

                               

                                .Ver-button:hover {
                                width: 120px;
                                border-radius: 50px;
                                transition-duration: 0.3s;
                                background-color: #02356b;
                                align-items: center;
                                }

                                .Ver-button:hover .Ver-svgIcon {
                                width: 20px;
                                transition-duration: 0.3s;
                                transform: translateY(60%);
                                -webkit-transform: rotate(360deg);
                                -moz-transform: rotate(360deg);
                                -o-transform: rotate(360deg);
                                -ms-transform: rotate(360deg);
                                transform: rotate(360deg);
                                }


                                .Ver-button::before {
                                display: none;
                                content: "Ver Detalle";
                                color: white;
                                transition-duration: 0.3s;
                                font-size: 1px;
                                }

                                .Ver-button:hover::before {
                                display: block;
                                padding-right: 10px;
                                font-size: 13px;
                                opacity: 1;
                                transform: translateY(0px);
                                transition-duration: 0.3s;
                                }

                               
                                .edit-button {
                                width: 40px;
                                height: 40px;
                                border-radius: 50%;
                                background-color: #02356b;
                                border: none;
                                font-weight: 600;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
                                cursor: pointer;
                                transition-duration: 0.3s;
                                overflow: hidden;
                                position: relative;
                                text-decoration: none !important;
                                }

                                .edit-svgIcon {
                                width: 17px;
                                transition-duration: 0.3s;
                                }

                                .edit-svgIcon path {
                                fill: white;
                                }

                                .edit-button:hover {
                                width: 120px;
                                border-radius: 50px;
                                transition-duration: 0.3s;
                                background-color: #02356b;
                                align-items: center;
                                }

                                .edit-button:hover .edit-svgIcon {
                                width: 20px;
                                transition-duration: 0.3s;
                                transform: translateY(60%);
                                -webkit-transform: rotate(360deg);
                                -moz-transform: rotate(360deg);
                                -o-transform: rotate(360deg);
                                -ms-transform: rotate(360deg);
                                transform: rotate(360deg);
                                }

                                .edit-button::before {
                                display: none;
                                content: "Edit";
                                color: white;
                                transition-duration: 0.3s;
                                font-size: 2px;
                                }

                                .edit-button:hover::before {
                                display: block;
                                padding-right: 10px;
                                font-size: 13px;
                                opacity: 1;
                                transform: translateY(0px);
                                transition-duration: 0.3s;
                                }

                                .delete-button {
                                width: 40px;
                                height: 40px;
                                border-radius: 50%;
                                background-color: #02356b;
                                border: none;
                                font-weight: 600;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
                                cursor: pointer;
                                transition-duration: 0.3s;
                                overflow: hidden;
                                position: relative;
                                }

                                .delete-svgIcon {
                                width: 15px;
                                transition-duration: 0.3s;
                                }

                                .delete-svgIcon path {
                                fill: white;
                                }

                                .delete-button:hover {
                                width: 90px;
                                border-radius: 50px;
                                transition-duration: 0.3s;
                                background-color: rgb(255, 69, 69);
                                align-items: center;
                                }

                                .delete-button:hover .delete-svgIcon {
                                width: 20px;
                                transition-duration: 0.3s;
                                transform: translateY(60%);
                                -webkit-transform: rotate(360deg);
                                -moz-transform: rotate(360deg);
                                -o-transform: rotate(360deg);
                                -ms-transform: rotate(360deg);
                                transform: rotate(360deg);
                                }

                                .delete-button::before {
                                display: none;
                                content: "Delete";
                                color: white;
                                transition-duration: 0.3s;
                                font-size: 2px;
                                }

                                .delete-button:hover::before {
                                display: block;
                                padding-right: 10px;
                                font-size: 13px;
                                opacity: 1;
                                transform: translateY(0px);
                                transition-duration: 0.3s;
                                }

                        </style>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>