<?php
class Basededatos{
    private $conexion;

    public function __construct($host, $user, $pass, $bd){
        $this -> conexion = mysqli_connect($host, $user, $pass, $bd);
    }

    public function ejecutarConsulta ($consulta) {
        mysqli_report(MYSQLI_REPORT_OFF);
        return @mysqli_query ($this-> conexion, $consulta);
    }

    public function crearArregloAsociativo($resultado){
       return  mysqli_fetch_assoc ($resultado);
    }
}
?>