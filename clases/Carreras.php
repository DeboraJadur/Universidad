<?php
class Carreras{
    private $bd;

    public function __construct($bd){
        $this -> bd = $bd;
    }

    public function insertarCarrera ($nombre) {
        $sql= "insert into carreras (nombre) values 
        ('".$nombre."')
        ";
        return $this-> bd-> ejecutarConsulta($sql);
    }
    
    public function modificarCarrera($id,$nuevoNombre){
        $sql= "update carreras set nombre='".$nuevoNombre."' where id='".$id."'";
        return $this->bd-> ejecutarConsulta($sql);
    }

    public function eliminarCarrera($id){
        $sql= "delete from carreras where id='".$id."'";
        return $this->bd-> ejecutarConsulta($sql);
    }

    public function traerCarreras () {
        $sql= "select * from carreras";
        return $this->bd-> ejecutarConsulta($sql);
    }
}

?>