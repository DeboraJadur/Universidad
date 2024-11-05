<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Egresados</title>
    
</head>
<body>
    
<?php
    require_once("../utils/constantes.php");
    require_once("../utils/validaciones.php");
    require_once("../clases/Basededatos.php");
    require_once("../clases/Egresados.php");
    require_once("../clases/Carreras.php");
    require_once("../clases/Correos.php"); // Asegúrate de incluir Correos
    $oBase = new Basededatos(HOST, USER, PASS, BD);
    $oegresados = new Egresados($oBase);
    $oCarreras = new Carreras($oBase);
    $oCorreos = new Correos($oBase); // Asegúrate de inicializar esta variable
    require_once("../procesar/procesar_registro.php");
?>
<h1>Registro de Egresados</h1>

<form action="" method="POST">
    <label for="nombre_apellido">Nombre y Apellido:</label>
    <input type="text" id="nombre_apellido" name="nombre_apellido" required>
    <label for="carrera">Carrera:</label>
    <select name="carrera" id="carrera">
        <option value="0" selected>Selecionar...</option>
        <?php
            $carreras = $oCarreras -> traerCarreras();
            foreach($carreras as $carrera) {
                echo "<option value='".$carrera["id"]."'>".$carrera["nombre"]."</option>";
            }
        ?>
    </select>

    <label for="matricula">Número de Matrícula:</label>
    <input type="text" id="matricula" name="matricula" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" required>

    <button type="submit" name="registrarse">Registrarse</button>
</form>


</body>
</html>
