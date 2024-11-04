<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menu de Administrador</h1>
    <?php
        require_once("../../clases/Basededatos.php");
        require_once("../../utils/constantes.php");
        require_once("../../clases/Egresados.php");
        require_once("../../clases/Carreras.php");
        require_once("../../clases/Correos.php");
        require_once("../../clases/Administrador.php");
        $oBase = new Basededatos(HOST,USER,PASS,BD);
        $oegresados= new Egresados($oBase);
        $ocarreras= new Carreras($oBase);
        $oCorreos= new Correos($oBase);
        $oadministrador= new Administrador($oBase,$ocarreras,$oCorreos,$oegresados );
    ?>

    <section>
        <?php
            require_once("../../procesar/procesar_carreras.php")
        ?>
        <h2>Carreras</h2>
        <div>
            <h3>Insertar Carrera</h3>
            <form action="" method="post">
                <input type="text" name="nombre" id="nombre">
                <input type="submit" value="Crear Carrera" name="ingreso">
            </form>
        </div>
        <div>
            <h3>Lista de Carreras</h3>
            <table>
                <tr>
                    <th>Nombre de la Carrera</th>
                    <th>Modificar Carrera</th>
                    <th>Eliminar Carrera</th>
                </tr>
            <?php
                $carreras = $oadministrador -> carreras -> traerCarreras();
                foreach ($carreras as $carrera) {
                    echo "<tr>";
                    echo "<td>".$carrera["nombre"]."</td>";
                    echo "<td>
                        <form action='' method='post'>
                            <input type='text' name='nuevo_nombre' >
                            <input type='hidden' name='id' value='".$carrera["id"]."'>
                            <input type='submit' value='Modificar Carrera' name='modificacion'>
                        </form>
                    </td>";
                    echo "<td>
                        <form action='' method='post'>
                            <input type='hidden' name='id' value='".$carrera["id"]."'>
                            <input type='submit' value='Eliminar Carrera' name='eliminacion'>
                        </form>
                    </td>";
                    echo "</tr>";
                }
            ?>
            </table>
        </div>
    </section>
</body>
</html>