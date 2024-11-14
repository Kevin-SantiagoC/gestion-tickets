<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Ajusta el tamaño del contenedor del gráfico */
        #chart-container {
            max-width: 500px;
            max-height: 400px;
            margin: auto;
        }
        /* Alinear lista de estados con el gráfico */
        #estado-list {
            margin-top: 20px;
            background-color: #042141;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="chart-container" class="p-3 border rounded">
                                    <h3 style="color: #042141">Gráfico de Tickets</h3>
                                    <canvas id="pieChart" width="100" height="100"></canvas>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Lista de estados y conteos -->

                                <div class="flex items-center space-x-2 mb-3 border rounded">
                                    
                                    <h2 class="text-lg font-semibold text-gray-800">Total Tickets:</h2>
                                    <p class="text-6xl text-[#042141] font-bold mb-6">{{ $totalTickets }}</p>
                                </div>


                                <div id="estado-list" class="p-3 border rounded">
                                    <h4 style="color: aliceblue">Detalles de Estado de Tickets</h4>
                                    <ul class="list-group">
                                        @foreach($estadoLabels as $index => $estado)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                {{ $estado }}
                                                <span class="badge bg-primary rounded-pill">{{ $estadoData[$index] }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                
                                
                            </div>


                            <div class="py-12">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                        <div class="p-6 text-gray-900">
                                            <h3 class="mb-4" style="color: #042141">Últimos Tickets</h3>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="background-color: #042141; color: aliceblue ">ID Ticket</th>
                                                        <th style="background-color: #042141; color: aliceblue ">Asunto</th>
                                                        <th style="background-color: #042141; color: aliceblue ">Prioridad</th>
                                                        <th style="background-color: #042141; color: aliceblue ">Estado</th>
                                                        <th style="background-color: #042141; color: aliceblue ">Asignado A</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($dash as $dashboard)
                                                    <tr>
                                                        <td >{{ $dashboard->id }}</td>
                                                        <td>{{ $dashboard->asunto }}</td>
                                                        <td>{{ $dashboard->prioridad }}</td>
                                                        <td>{{ $dashboard->estado }}</td>
                                                        <td>{{ $dashboard->name }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var estadoLabels = @json($estadoLabels);
        var estadoData = @json($estadoData);

        var ctx = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: estadoLabels,
                datasets: [{
                    data: estadoData,
                    backgroundColor: ['#003566', '#00284d', '#244766', '#0f487d'],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var total = context.dataset.data.reduce((sum, value) => sum + value, 0);
                                var value = context.raw;
                                var percentage = ((value / total) * 100).toFixed(2);
                                return `${context.label}: ${percentage}% (${value})`;
                            }
                        }
                    }
                }
            }
        });
    </script>
</x-app-layout>
