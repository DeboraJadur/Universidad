<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['registrarse'])) {
    $nombreApellido = $_POST['nombre_apellido'];
    $carrera = $_POST['carrera'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
  
    $result = $oegresados -> insertarEgresado($nombreApellido,$carrera,$matricula,$email,$telefono);
    if ($result) {
        echo "Egresado agregado con éxito";
    } else {
        echo "Algo salió mal, es posible que el email ya exista.";
    }
}
?>