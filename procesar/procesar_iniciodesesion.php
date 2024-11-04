<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $usuario_completo = $oBase -> crearArregloAsociativo($oadministrador -> traerUsuario($usuario));
        if ($password === $usuario_completo["password"]) {
            echo "Iniciar sesion";
            $_SESSION["user_name"] = $usuario_completo["username"];
            $_SESSION["id"] = $usuario_completo["id"];
            echo "<a href='menu'>Ir al menú</a>";
            exit;
        } else {
            echo "Contraseña incorrecta";
        }

    }
?>