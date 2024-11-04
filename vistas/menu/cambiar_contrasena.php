<?php
    session_start();
    if (!isset($_SESSION["id"])) {
        echo "Usuario no autenticado";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Gestion de contraseñas</h1>

<form method="POST" action="">
    <label for="password">Nueva contraseña: </label>
    <input type="password" id="password" name="password" required>
    <button type="submit" name="cambiar-contrasena">Cambiar contraseña</button>
</form>
<?php
require_once("../../clases/Basededatos.php");
require_once("../../utils/constantes.php");
require_once("../../clases/Egresados.php");
require_once("../../clases/Carreras.php");
require_once("../../clases/Correos.php");
require_once("../../clases/Administrador.php");

$oBase = new Basededatos(HOST,USER,PASS,BD);
$oegresados = new Egresados($oBase);
$ocarreras = new Carreras($oBase);
$oCorreos = new Correos($oBase);
$oAdministrador = new Administrador($oBase,$ocarreras,$oCorreos,$oegresados);
require_once ("../../procesar/procesar_contrasena.php");

?>
</body>
</html>