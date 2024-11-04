<?php
// Procesar la entrada de datos para agregar, modificar o eliminar carreras
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Agregar nueva carrera
    if (isset($_POST['ingreso'])) {
        $nombre = $_POST['nombre'];
      
        $result = $oadministrador->carreras->insertarCarrera($nombre);
        if ($result) {
            echo "Carrera ingresada con éxito";
        } else {
            echo "Algo salió mal, es posible que la carrera ya exista.";
        }
    }

    // Modificar carrera existente
    if (isset($_POST['modificacion'])) {
        $id = $_POST['id'];
        $nuevo_nombre = $_POST['nuevo_nombre'];
      
        $result = $oadministrador->carreras->modificarCarrera($id, $nuevo_nombre);
        if ($result) {
            echo "Carrera modificada con éxito";
        } else {
            echo "Algo salió mal, es posible que la carrera ya exista.";
        }
    }

    // Eliminar carrera existente
    if (isset($_POST['eliminacion'])) {
        $id = $_POST['id'];
      
        $result = $oadministrador->carreras->eliminarCarrera($id);
        if ($result) {
            echo "Carrera eliminada con éxito";
        } else {
            echo "Algo salió mal, es posible que la carrera no exista.";
        }
    }
}
?>
