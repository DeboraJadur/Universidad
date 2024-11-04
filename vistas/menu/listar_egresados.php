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
    <?php
        require_once("../../clases/Basededatos.php");
        require_once("../../utils/constantes.php");
        require_once("../../clases/Egresados.php");
        require_once("../../clases/Carreras.php");

        $oBase = new Basededatos(HOST,USER,PASS,BD);
        $oEgresados = new Egresados($oBase);
        $oCarreras = new Carreras($oBase);

    ?>

    <h1>Lista de egresados</h1>
    <table>
        <tr>
            <th>Nombre y Apellido</th>
            <th>Carrera</th>
            <th>No matricula</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Fecha de registro</th>
            <th>Estado</th>
        </tr>
        <?php
            $egresados = $oEgresados -> traerEgresados();
            foreach ($egresados as $egresado) {
                $carrera = $oCarreras -> traerCarreraPorId($egresado["carrera_id"]);
                if ($carrera && $carrera->num_rows > 0) {
                    $carrera = $oBase -> crearArregloAsociativo($carrera);
                } else {
                    $carrera = array("nombre" => "No encontrada");
                }
                echo "<tr>";
                echo "<td>".$egresado["nombre_apellido"]."</td>";
                echo "<td>".$carrera["nombre"]."</td>";
                echo "<td>".$egresado["nro_matricula"]."</td>";
                echo "<td>".$egresado["email"]."</td>";
                echo "<td>".$egresado["telefono"]."</td>";
                echo "<td>".$egresado["fecha_registro"]."</td>";
                echo "<td>".$egresado["estado"]."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>