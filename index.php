<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido a la Administración de Egresados</h1>
    <a href="vistas/registrousuario.php">Registrar Egresado</a>
    <a href="vistas/iniciodesesion.php">Login Administrador</a>
    <?php
        require_once("clases/Basededatos.php");
        require_once("utils/constantes.php");
        require_once("clases/Egresados.php");
        require_once("clases/Carreras.php");
        require_once("clases/Correos.php");
        require_once("clases/Administrador.php");
        require_once("testing.php");

    ?>
</body>
</html>