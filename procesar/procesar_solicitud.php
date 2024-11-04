<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Agregar nueva carrera
    if (isset($_POST['confirmar'])) {
        $id = $_POST['id'];
      
        $result = $oEgresados->confirmarEgresado($id);
        if ($result) {
            echo "Egresado confimado con éxito";
        } else {
            echo "Algo salió mal, intentelo más tarde.";
        }
    }

    if (isset($_POST['rechazar'])) {
        $id = $_POST['id'];
      
        $result = $oEgresados->rechazarEgresado($id);
        if ($result) {
            echo "Egresado rechazado con éxito";
        } else {
            echo "Algo salió mal, intentelo más tarde.";
        }
    }
}
?>
