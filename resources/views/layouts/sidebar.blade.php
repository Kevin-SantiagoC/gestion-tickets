

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>
<body>
    


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Botón de menú para pantallas pequeñas -->
<div class="menu-button" onclick="toggleSidebar()">
    <i class="fas fa-bars"></i>
</div>

<!-- Sidebar -->
<div class="sidebar">
    <ul class="list-unstyled">
        <li><a href="{{ route('dashboard') }}" class="sidebar-link">
            <i class="fa-solid fa-chart-line"></i><span> Dashboard</span>
        </a></li>
        <li><a href="{{ route('reportes.index') }}" class="sidebar-link">
            <i class="fa-solid fa-chart-column"></i><span> Reporte y Estadísticas</span>
        </a></li>
        <li><a class="sidebar-link">
            <i class="fa-regular fa-file"></i><span> Historial de Soporte</span>
        </a></li>
        <li><a class="sidebar-link">
            <i class="fa-regular fa-circle-question"></i><span> FAQ</span>
        </a></li>
        <li><a href="{{ route('tickets.index') }}" class="sidebar-link">
            <i class="fa-solid fa-ticket"></i><span> Gestión de Tickets</span>
        </a></li>
    </ul>
</div>

<style>
/* Estilos del botón de menú para pantallas pequeñas */
.menu-button {
    display: none;
    position: fixed;
    top: 10px;
    left: 10px;
    background-color: #042141;
    color: white;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
    z-index: 1000;
}

.menu-button i {
    font-size: 24px;
}

/* Estilos del sidebar */
.sidebar {
    background-color: #042141;
    
    width: 120px;
    height: 250;
    padding-top: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 8px; 
   
    transition: transform 0.3s ease;
}

.sidebar ul {
    padding-left: 0;
    width: 100%;
}

.sidebar li {
    padding: 10px 20px;
    transition: background-color 0.3s;
}

.sidebar li:hover {
    background-color: #ffffff36;
}

.sidebar-link {
    color: rgb(255, 255, 255);
    text-decoration: none;
    display: flex;
    align-items: center;
    flex-direction: column;
}

.sidebar i {
    font-size: 24px;
    
}

.sidebar-link span {
    font-size: 14px;
    text-align: center;
}

.sidebar-link:hover {
    color: #f0a500;
}

/* Media queries para el sidebar responsive */
@media (max-width: 768px) {
    .sidebar {
        transform: translateX(-120%); /* Oculta el sidebar */
    }

    .menu-button {
        display: block; /* Muestra el botón de menú en pantallas pequeñas */
    }

    .sidebar.open {
        transform: translateX(0); /* Muestra el sidebar cuando se hace clic en el botón */
    }
}
</style>

    <script>
    function toggleSidebar() {
        document.querySelector('.sidebar').classList.toggle('open');
    }
    </script>

</body>
</html>