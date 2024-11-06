<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FAQ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

                        </head>
                        <body>
                        @include('layouts.sidebar')
                        <div class="content" style="margin-left: 120px; padding: 20px;">
                            <style>

                                h1{
                                    text-align: center;
                                    color: #02356b;
                                    
                                    
                                }

                                .Parrafo_info{
                                   color: darkgray;
                                    text-align: center;
                                }

                                .container {
                                    max-width: 100%;
                                    height: auto;
                                }
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

                                /*-----Acordion CCS */

                                .accordion-button {
                                    background-color: #02356b; /* Color de fondo */
                                    color: white; /* Color del texto */
                                }

                                /* Cambiar el color del fondo cuando el acordeón está colapsado */
                                .accordion-button.collapsed {
                                    background-color: #ffffff; /* Color cuando está cerrado */
                                    color: #000000; /* Color del texto */
                                }

                                /* Cambiar el color de fondo al hacer hover sobre los botones */
                                .accordion-button:hover {
                                    background-color: #f0a500; /* Color al pasar el mouse */
                                }

                                /* Cambiar el color del borde del acordeón */
                                .accordion-item {
                                    border-color: #02356b; /* Color del borde */
                                }

                        

                            </style>


<h1><strong>FAQ</strong></h1>
<p class="Parrafo_info">Preguntas y respuestas frecuentes</p>
<br>

<div class="Buscar">
    <form class="d-flex justify-content-center" onsubmit="return false;">
        <input id="searchInput" class="form-control form-control-sm me-2 w-50 Buscar-input" type="search" placeholder="Search" aria-label="Search" oninput="filterAccordion()">
        <button class="btn btn-outline-Light" type="submit">
            <img src="https://png.pngtree.com/png-clipart/20230401/original/pngtree-magnifying-glass-line-icon-png-image_9015864.png" alt="Lupa" height="20px" width="20px">
        </button>
    </form>
</div>
<br>

<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                • ¿Cómo puedo crear un nuevo ticket de soporte?
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse " aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><p>Para crear un ticket, inicia sesión en tu cuenta y dirígete a la sección de soporte. Allí encontrarás una opción para generar un nuevo ticket, donde podrás describir tu problema y añadir detalles.</p></div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                • ¿Cómo puedo consultar el estado de mi ticket?
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><p>Puedes consultar el estado de tu ticket en la sección de historial de tickets en tu cuenta. Allí verás si está abierto, en proceso o resuelto, junto con cualquier actualización del equipo de soporte.</p></div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                • ¿Cuánto tiempo tarda en resolverse un ticket?
            </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><p>El tiempo de respuesta varía según la naturaleza del problema y el volumen de solicitudes. Generalmente, respondemos dentro de las primeras 24 a 48 horas.</p></div>
    </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingfour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                • ¿Cómo puedo actualizar o añadir información a un ticket existente?
            </button>
        </h2>
        <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><p>Para añadir información a un ticket ya creado, abre el ticket desde tu historial y selecciona la opción para agregar una actualización o comentario.
            </p></div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                • ¿Qué debo hacer si olvidé mi número de ticket?
            </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><p>Revisa el correo de confirmación que se envió al crear el ticket, o accede a tu cuenta para ver todos tus tickets y su respectivo número.
            </p></div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                • ¿Puedo cerrar un ticket si ya no necesito ayuda?
            </button>
        </h2>
        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><p>Sí, puedes cerrar un ticket directamente desde tu cuenta seleccionando la opción de “Cerrar ticket” en el historial.</p></div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                • ¿Cómo sé si mi ticket ha sido asignado a alguien?
            </button>
        </h2>
        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><p>En el historial de tu cuenta, podrás ver si el ticket ha sido asignado y quién está gestionando tu solicitud.</p></div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingeight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseeight" aria-expanded="false" aria-controls="flush-collapseeight">
                • ¿Qué tipo de problemas puedo reportar en un ticket?
            </button>
        </h2>
        <div id="flush-collapseeight" class="accordion-collapse collapse" aria-labelledby="flush-headingeight" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body"><p>Puedes reportar problemas técnicos, dudas sobre productos, solicitudes de reembolso o cualquier inconveniente relacionado con nuestro servicio.</p></div>
        </div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                        <script>
                            function filterAccordion() {
                                const input = document.getElementById('searchInput');
                                const filter = input.value.toLowerCase();
                                const accordionItems = document.querySelectorAll('.accordion-item');

                                accordionItems.forEach(item => {
                                    const header = item.querySelector('.accordion-header button');
                                    if (header.textContent.toLowerCase().includes(filter)) {
                                        item.style.display = ''; // Mostrar el item
                                    } else {
                                        item.style.display = 'none'; // Ocultar el item
                                    }
                                });
                            }
                        </script>



                        </body>
                        </html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>