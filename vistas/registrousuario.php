<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Egresados</title>
    <!-- <link rel="stylesheet" href="estilotres.css"> -->
</head>
<body>
<h1>Registro de Egresados</h1>

<form action="" method="POST">
    <label for="nombre_apellido">Nombre y Apellido:</label>
    <input type="text" id="nombre_apellido" name="nombre_apellido" required>

    <label for="carrera">Carrera:</label>
    <input type="text" id="carrera" name="carrera" required>

    <label for="matricula">Número de Matrícula:</label>
    <input type="text" id="matricula" name="matricula" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" required>

    <button type="submit" name="registrarse">Registrarse</button>
</form>

<?php
    require_once("../utils/constantes.php");
    require_once("../clases/Basededatos.php");
    require_once("../clases/Egresados.php");
    require_once("../clases/Correos.php"); // Asegúrate de incluir Correos
    $oBase = new Basededatos(HOST, USER, PASS, BD);
    $oegresados = new Egresados($oBase);
    $oCorreos = new Correos($oBase); // Asegúrate de inicializar esta variable
    require_once("../procesar/procesar_registro.php");
?>

</body>
</html>
