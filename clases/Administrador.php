<?php
class Administrador{
    private $bd;
    public $carreras;
    public $correos;
    public $egresados;

    public function __construct($bd,$carreras,$correos, $egresados){
        $this -> bd = $bd;
        $this-> carreras= $carreras;
        $this-> correos= $correos;
        $this-> egresados= $egresados;

    }

    public function cambiarConstraseña($id,$nuevaPassword){
        $sql= "update usuarios set password='".$nuevaPassword."' where id='".$id."'";
        return $this->bd-> ejecutarConsulta($sql);

    }

    public function traerUsuario ($username){
        $sql= "select * from usuarios where username='".$username."'";
        return $this->bd-> ejecutarConsulta($sql);
    }




}

?>