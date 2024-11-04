<?php
    session_start();
    if (!isset($_SESSION["id"])) {
        echo "Usuario no autenticado";
        exit;
    }
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Administrador</title>
    <link rel="stylesheet" href="estilos.css"> 
</head>
<body>
    <h1>Menú de Administrador</h1>
    
 

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
