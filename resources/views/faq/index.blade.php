<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FAQ') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        h1 {
            text-align: center;
            color: #02356b;
        }

        .Parrafo_info {
            color: darkgray;
            text-align: center;
        }

        .Buscar {
            display: contents;
            justify-content: center;
            align-items: center;
            height: 50px; 
        }

        .Buscar-input {
            border-color: #02356b;
        }

        .Buscar-input:focus {
            border-color: #02356b;
            box-shadow: 5px 0 5px #02356b; 
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    • ¿Cómo puedo crear un nuevo ticket de soporte?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Para crear un ticket, inicia sesión en tu cuenta y dirígete a la sección de soporte. Allí encontrarás una opción para generar un nuevo ticket, donde podrás describir tu problema y añadir detalles.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    • ¿Cómo puedo consultar el estado de mi ticket?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Puedes consultar el estado de tu ticket en la sección de historial de tickets en tu cuenta. Allí verás si está abierto, en proceso o resuelto, junto con cualquier actualización del equipo de soporte.</p>
                                </div>
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



                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</x-app-layout>
