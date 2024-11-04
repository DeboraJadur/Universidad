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
    

    $oBase = new Basededatos(HOST,USER,PASS,BD);
    $oEgresados = new Egresados($oBase);
?>
   
   <table>
        <tr>
            <th>Nombre y Apellido</th>
            <th>No matricula</th>
            <th>Email</th>
            <th>Fecha de registro</th>
            <th>Estado</th>
            <th>Confirmar/Rechazar</th>
        </tr>
        <?php
            $egresados = $oEgresados -> traerEgresados();
            foreach ($egresados as $egresado) {
                echo "<tr>";
                echo "<td>".$egresado["nombre_apellido"]."</td>";
                echo "<td>".$egresado["nro_matricula"]."</td>";
                echo "<td>".$egresado["email"]."</td>";
                echo "<td>".$egresado["fecha_registro"]."</td>";
                echo "<td>".$egresado["estado"]."</td>";
                echo "<td><form action='' method='post'><input type='hidden' name='id' value=".$egresado["id"]."><input type='submit' name='confirmar' value='Confirmar'></form></td>";
                echo "<td><form action='' method='post'><input type='hidden' name='id' value=".$egresado["id"]."><input type='submit' name='rechazar' value='Rechazar'></form></td>";
                echo "</tr>";
            }
            require_once("../../procesar/procesar_solicitud.php");
        ?>
    </table>



</body>
</html>