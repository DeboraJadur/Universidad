<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Administrador</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Enlazar el archivo CSS -->
</head>
<body>
    <h1>Menú de Administrador</h1>
    
    <!-- Mensajes de confirmación -->
    <?php
        session_start(); // Asegúrate de que la sesión esté iniciada
        if (isset($_SESSION['mensaje'])) {
            echo "<p class='mensaje'>{$_SESSION['mensaje']}</p>";
            unset($_SESSION['mensaje']);
        }
        if (isset($_SESSION['error'])) {
            echo "<p class='error'>{$_SESSION['error']}</p>";
            unset($_SESSION['error']);
        }
    ?>

    <nav>
        <ul>
            <li><a href="gestionar_carreras.php">Gestión de Carreras</a></li>
            <li><a href="gestionar_correos.php">Administrar Correos</a></li>
            <li><a href="listar_egresados.php">Lista de Egresados</a></li>
            <li><a href="gestionar_solicitudes.php">Confirmar/Rechazar Egresados</a></li>
            <li><a href="cambiar_contrasena.php">Cambiar Contraseña</a></li>
        </ul>
    </nav>
</body>
</html>
