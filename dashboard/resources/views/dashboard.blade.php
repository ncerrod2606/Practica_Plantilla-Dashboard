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
    
    <div class="sidebar">
        <h2>NCR</h2>
        <div class="search-box">
            <input type="text" placeholder="Buscar...">
            <i class="fas fa-search"></i>
        </div>

        
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

    
    <div class="main-content">
        <header>
            <h1>Dashboard</h1>
        </header>

        
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

       
        <div class="card shadow-sm">
            <h2>Ventas Mensuales</h2>
            <canvas id="ventasChart"></canvas>
        </div>

        
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
    <script src="{{ asset('assets/js/scripts.js') }}" defer></script>
</body>

</html>