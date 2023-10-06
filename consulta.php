<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Tabla y Gráfico Interactivo</title>
</head>
<body>
    <div class="container">
        <h1>Tabla de Datos</h1>
        <input type="text" id="filtro" placeholder="Filtrar por nombre">
        <button id="filtrarBtn">Filtrar</button>
        <table id="tabla">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Persona 1</td>
                    <td>25</td>
                </tr>
                <tr>
                    <td>Persona 2</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Persona 3</td>
                    <td>22</td>
                </tr>
                <!-- Agrega más filas de datos aquí -->
            </tbody>
        </table>
    </div>

    <div class="container">
        <h1>Gráfico</h1>
        <canvas id="grafico"></canvas>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filtro = document.getElementById('filtro');
            const filtrarBtn = document.getElementById('filtrarBtn');
            const tabla = document.getElementById('tabla').getElementsByTagName('tbody')[0];
            const grafico = document.getElementById('grafico').getContext('2d');
            let data = [];

            // Inicializa el gráfico vacío
            const chart = new Chart(grafico, {
                type: 'bar',
                data: {
                    labels: [],
                    datasets: [{
                        label: 'Edad',
                        data: [],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            filtrarBtn.addEventListener('click', function() {
                const filtroTexto = filtro.value.toLowerCase();
                const filas = tabla.getElementsByTagName('tr');
                data = [];

                for (let i = 0; i < filas.length; i++) {
                    const nombre = filas[i].getElementsByTagName('td')[0].textContent.toLowerCase();
                    const edad = parseInt(filas[i].getElementsByTagName('td')[1].textContent);

                    if (nombre.includes(filtroTexto)) {
                        filas[i].style.display = '';
                        data.push({ nombre, edad });
                    } else {
                        filas[i].style.display = 'none';
                    }
                }

                // Actualiza el gráfico con los datos filtrados
                actualizarGrafico();
            });

            function actualizarGrafico() {
                const nombres = data.map(item => item.nombre);
                const edades = data.map(item => item.edad);

                chart.data.labels = nombres;
                chart.data.datasets[0].data = edades;
                chart.update();
            }
        });

    </script>
</body>
</html>




