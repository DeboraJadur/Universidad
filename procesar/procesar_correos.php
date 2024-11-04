<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Agregar correo
    if (isset($_POST['agregar'])) {
        $email = $_POST['email'];
        $result = $oCorreos->insertarCorreo($email);
        if ($result) {
            echo "Correo agregado con éxito.";
        } else {
            echo "Error al agregar el correo.";
        }
    }

    // Modificar correo
    if (isset($_POST['modificar'])) {
        $id = $_POST['id'];
        $nuevoEmail = $_POST['nuevo_email'];
        $result = $oCorreos->modificarCorreo($id, $nuevoEmail);
        if ($result) {
            echo "Correo modificado con éxito.";
        } else {
            echo "Error al modificar el correo.";
        }
    }

    // Eliminar correo
    if (isset($_POST['eliminar'])) {
        $id = $_POST['id'];
        $result = $oCorreos->eliminarCorreo($id);
        if ($result) {
            echo "Correo eliminado con éxito.";
        } else {
            echo "Error al eliminar el correo.";
        }
    }
}
?>
