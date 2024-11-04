<?php
    $oBase = new Basededatos(HOST,USER,PASS,BD);
    print_r($oBase);

    // $sqlConsulta= "Insert into carreras (nombre) values ('programacion')";
    // $oBase -> ejecutarConsulta($sqlConsulta);
    $oegresados= new Egresados($oBase);

    $nombre_apellido="deborajadur";
    $carrera_id=1;
    $nro_matricula=222;
    $email="deborajadur@gmail.com";
    $telefono="2234661797";
    //$oegresados-> insertarEgresado($nombre_apellido,$carrera_id,$nro_matricula,$email,$telefono);

    print_r($oegresados->traerEgresados());



    $oegresados->confirmarEgresado(1);

    $ocarreras= new Carreras($oBase);

    // $ocarreras-> insertarCarrera("medicina");

    // $ocarreras-> modificarCarrera("11","programacion2");

    // $ocarreras-> eliminarCarrera("13");



    $oCorreos= new Correos($oBase);
    // $oCorreos-> insertarCorreo("pepi@gmail.com");


    $oadministrador= new Administrador($oBase,$ocarreras,$oCorreos,$oegresados );
    $oadministrador->cambiarConstraseña(1,"peperina");
    
    
    
    
?>

