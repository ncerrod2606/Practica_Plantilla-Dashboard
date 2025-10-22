<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>NCR</h2>
        <div class="search-box">
            <input type="text" placeholder="Buscar...">
            <i class="fas fa-search"></i>
        </div>

        <!-- Botón hamburguesa -->
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Usuarios</a></li>
            <li><a href="#">Ventas</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Reportes</a></li>
            <li><a href="#">Ajustes</a></li>
        </ul>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
        <header>
            <h1>Dashboard</h1>
        </header>

        <!-- Tarjetas de estadísticas -->
        <div class="grid">
            <div class="card shadow-sm">
                <h3>Usuarios</h3>
                <p>120</p>
            </div>
            <div class="card shadow-sm">
                <h3>Ventas</h3>
                <p>450</p>
            </div>
            <div class="card shadow-sm">
                <h3>Productos</h3>
                <p>32</p>
            </div>
            <div class="card shadow-sm">
                <h3>Ingresos</h3>
                <p>$1520.50</p>
            </div>
        </div>

        <!-- Gráfica de línea -->
        <div class="card shadow-sm">
            <h2>Ventas Mensuales</h2>
            <canvas id="ventasChart"></canvas>
        </div>

        <!-- Tabla de ejemplo -->
        <div class="card shadow-sm">
            <h2>Usuarios Registrados</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Pérez</td>
                        <td>juan@mail.com</td>
                        <td>Admin</td>
                    </tr>
                    <tr>
                        <td>María García</td>
                        <td>maria@mail.com</td>
                        <td>Usuario</td>
                    </tr>
                    <tr>
                        <td>Pedro López</td>
                        <td>pedro@mail.com</td>
                        <td>Usuario</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Script Chart.js -->
    <script>
        const ctx = document.getElementById('ventasChart').getContext('2d');

        const ventasChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
                datasets: [{
                    label: 'Ventas',
                    data: [17000, 21200, 18500, 24000, 23500, 24200, 12000],
                    backgroundColor: 'rgba(33, 74, 255, 0.2)',
                    borderColor: '#214aff',
                    borderWidth: 3,
                    tension: 0.3,
                    pointBackgroundColor: '#214aff',
                    pointBorderColor: '#1a38c0',
                    pointRadius: 5
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: {
                            color: '#fff',
                            font: { size: 14 }
                        }
                    },
                    tooltip: {
                        backgroundColor: '#2e2e2e',
                        titleColor: '#fff',
                        bodyColor: '#fff'
                    }
                },
                scales: {
                    x: {
                        ticks: { color: '#fff' },
                        grid: { color: 'rgba(255,255,255,0.1)' }
                    },
                    y: {
                        ticks: { color: '#fff' },
                        grid: { color: 'rgba(255,255,255,0.1)' }
                    }
                }
            }
        });
    </script>
    <script>
        document.querySelector('.hamburger').addEventListener('click', function () {
            document.querySelector('.sidebar').classList.toggle('active');
            this.classList.toggle('active');
        });
    </script>
</body>

</html>