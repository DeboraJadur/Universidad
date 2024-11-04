<?php
    require_once("../clases/Basededatos.php");
    require_once("../utils/constantes.php");
    require_once("../clases/Egresados.php");
    require_once("../clases/Carreras.php");
    require_once("../clases/Correos.php");
    require_once("../clases/Administrador.php");
    $oBase = new Basededatos(HOST,USER,PASS,BD);
    $oegresados= new Egresados($oBase);
    $ocarreras= new Carreras($oBase);
    $oCorreos= new Correos($oBase);
    $oadministrador= new Administrador($oBase,$ocarreras,$oCorreos,$oegresados );
    require_once("../procesar/procesar_iniciodesesion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login de Administrador</title>
</head>
<body>
    <form method="POST" action="">
        <label>Usuario:</label>
        <input type="text" name="usuario" required>
        <label>Contraseña:</label>
        <input type="password" name="password" required>
        <button type="submit">Ingresar</button>
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>
