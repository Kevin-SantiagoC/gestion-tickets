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
                            <title>Creacion de Tickets</title>
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                            
                            <script>
                                function filterAccordion() {
                                    let input = document.getElementById('searchInput').value.toLowerCase();
                                    let rows = document.querySelectorAll('table tbody tr');
                                    rows.forEach(row => {
                                        let cells = row.getElementsByTagName('td');
                                        let match = false;
                                        for (let i = 0; i < cells.length; i++) {
                                            if (cells[i].textContent.toLowerCase().includes(input)) {
                                                match = true;
                                                break;
                                            }
                                        }
                                        row.style.display = match ? '' : 'none';
                                    });
                                }
                            </script>
                        </head>
                        <body>
                            <section class="ticket">
                                <div class="content" style="margin: 10px; padding: 1px;">
                                    <h1 style="color:#02356b "><b>Gestion de Tickets</b></h1>
                                    
                                    <form method="POST" action="{{route('tickets.update',['ticket'=>$ticket->id])}}" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Nombre producto" value="{{$ticket->nombre}}">
                                            
                                          </div>
                                          <div class="mb-3">
                                            
                                        <label for="categoria" class="form-label">Asunto</label>
                                        <select id="asunto" name="asunto" class="block mt-1 w-full">
                                            <option  selected disabled value="">{{$ticket->asunto}}</option>
                                            <option value="Soporte">Soporte</option>
                                            <option value="Facturacion">Facturacion</option>
                                            <option value="Incidente">Incidente</option>
                                        </select></div>
                                
                                        <div class="mb-3">
                                            <label for="descri" class="form-label">Descripcion Problema</label>
                                            <textarea class="form-control" id="descri" name="descri" rows="3">{{$ticket->descripcion}}</textarea>
                                        </div>
                                        
                                        <script>
                                            document.addEventListener("DOMContentLoaded", function() {
                                                
                                                let descriField = document.getElementById('descri');
                                                let now = new Date();
                                                let dateTimeString = now.toLocaleString(); 
                                                descriField.value += `\n\nFecha de Edicion: ${dateTimeString}`;
                                            });
                                        </script>

                                          <div class="mb-3">
                                            <label for="prioridad" class="form-label">Prioridad</label>
                                            <select id="prioridad" name="prioridad" class="block mt-1 w-full">
                                                <option selected disabled value="">{{$ticket->prioridad}}</option>
                                                <option value="Alta">Alta</option>
                                                <option value="Medio">Medio</option>
                                                <option value="Baja">Baja</option>
                                            </select>
                                            
                                          </div>

                                          <div class="mb-3">
                                            
                                            <label for="name" class="form-label">Estatus</label>
                                            <select id="estatus" name="estatus" class="block mt-1 w-full">
                                                
                                                <option selected disabled value="">{{$ticket->estado}}</option>
                                                <option value="Alta">Abierto</option>
                                                <option value="En Proceso">En Proceso</option>
                                                <option value="Cerrado">Cerrado</option>
                                                <option value="Cancelado">Cancelado</option>
                                            </select>
                                            
                                          </div>

                                          <div class="mb-3">
                                            
                                            <label for="Responsable" class="form-label">Responsable</label>
                                            
                                            <select class="block mt-1 w-full" id="asignado" name="asignado" required>
                                               
                                             <option selected disabled value="">{{$ticket->name}}</option>
                                             @foreach ($users as $user )
                                             @if ($user->id ==$ticket->user_id)
                                             <option selected value="{{$user->id}}">{{$user->name}}</option>
                                             @else
                                             <option value="{{$user->id}}">{{$user->name}}</option>   
            
                                             @endif   
                                             @endforeach
                                            </select>
                                            
                                          </div>

                                          <div class="mb-3">
                                            <label for="name" class="form-label">Telefono</label>
                                            <input type="text" class="form-control" id="phone" aria-describedby="nameHelp" name="phone"  value="{{$ticket->phone}}">
                                            
                                          </div>


                                         
                                
                                
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                            <a href="{{ route('tickets.index') }}" class="btn btn-warning">Cancelar</a>
                                
                                            
                                            
                                          </div>
                                        
                                      </form>
                            </section>

                        <div class="content" style="margin-left: 200px; padding: 20px;">
                            <!-- Aquí va el contenido principal del dashboard -->
                           
                            <!-- Coloca aquí el resto del contenido -->
                        </div>

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                        
                        
                        </body>
                        </html>

                        <style>
                             /* Contenedor Buscar */
                                .Buscar {
                                    display: contents;
                                    justify-content: center; /* Centra horizontalmente */
                                    align-items: center; /* Centra verticalmente (opcional) */
                                    height: 50px; 
                                }
                                .Buscar-input {
                                    border-color: #02356b; /* Mantiene el color del borde al hacer foco en el input */
                                }
                                .Buscar-input:focus {
                                    border-color: #02356b; /* Mantiene el color del borde al hacer foco en el input */
                                    box-shadow: 5px 0 5px #02356b; 
                                }
                           
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
                                justify-content: center;
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