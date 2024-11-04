<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['registrarse'])) {
    $nombreApellido = $_POST['nombre_apellido'];
    $carrera = $_POST['carrera'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // Insertar el egresado en la base de datos
    $result = $oegresados->insertarEgresado($nombreApellido, $carrera, $matricula, $email, $telefono);
    if ($result) {
        echo "Egresado agregado con éxito";

        // Enviar un correo a todos los administradores
        $emails = $oCorreos->traerCorreos(); // Método que necesitas implementar
        foreach ($emails as $row) {
            enviarCorreo($row['email'], $nombreApellido);
        }
    } else {
        echo "Algo salió mal, es posible que el email ya exista.";
    }
}

// Función para enviar correo
function enviarCorreo($destinatario, $nombreApellido) {
    $asunto = "Nuevo Egresado Registrado";
    $mensaje = "Se ha registrado un nuevo egresado: $nombreApellido";
    $cabeceras = "From: tu_correo@ejemplo.com"; // Cambia esto a tu correo

    // Enviar el correo
    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "Correo enviado a $destinatario\n";
    } else {
        echo "Error al enviar correo a $destinatario\n";
    }
}
?>
