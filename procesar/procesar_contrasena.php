<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Agregar correo
    if (isset($_POST['cambiar-contrasena'])) {
        $password = $_POST['password'];
        $id = $_SESSION["id"];
        $result = $oAdministrador -> cambiarContrasena($id, $password);
        if ($result) {
            echo "Contraseña cambiada con éxito.";
        } else {
            echo "Error, vuelva a intentarlo";
        }
    }

    
}
?>