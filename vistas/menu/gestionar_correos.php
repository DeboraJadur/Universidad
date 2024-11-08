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
    <title>Administrar Correos</title>
</head>
<body>
    <?php
        require_once("../../clases/Basededatos.php");
        require_once("../../utils/constantes.php");
        require_once("../../clases/Correos.php");

        $oBase = new Basededatos(HOST,USER,PASS,BD);
        $oCorreos = new Correos($oBase);
    ?>
    <h1>Administrar Correos</h1>

    <form method="POST" action="">
        <label for="email">Agregar Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit" name="agregar">Agregar</button>
    </form>

    <h2>Lista de Correos</h2>
    <ul>
        <?php
        // Obtener lista de correos
        $correos = $oCorreos->traerCorreos();
        foreach ($correos as $correo) {
            echo "<li>{$correo['email']} 
                <form method='POST' action='' style='display:inline;'>
                    <input type='hidden' name='id' value='{$correo['id']}'>
                    <button type='submit' name='eliminar'>Eliminar</button>
                </form>
                <form method='POST' action='' style='display:inline;'>
                    <input type='hidden' name='id' value='{$correo['id']}'>
                    <input type='email' name='nuevo_email' required>
                    <button type='submit' name='modificar'>Modificar</button>
                </form>
            </li>";
        }
        ?>
    </ul>

    <?php require_once("../../procesar/procesar_correos.php"); ?>
</body>
</html>
