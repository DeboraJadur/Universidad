<?php
class Egresados{
    private $bd;

    public function __construct($bd){
        $this -> bd = $bd;
    }

    public function insertarEgresado ($nombre_apellido,$carrera_id,$nro_matricula,$email,$telefono) {
        $sql= "insert into egresados (nombre_apellido,carrera_id,nro_matricula,email,telefono) values 
        ('".$nombre_apellido."', '".$carrera_id."', '".$nro_matricula."', '".$email."', '".$telefono."')
        ";
        return $this-> bd-> ejecutarConsulta($sql);
    }
    

    public function confirmarEgresado($id){
        $sql= "update egresados set estado= 'confirmado' where id='".$id."'";
        return $this->bd->ejecutarConsulta($sql);
    }

    public function rechazarEgresado($id){
        $sql= "update egresados set estado= 'rechazado' where id='".$id."'";
        return $this->bd->ejecutarConsulta($sql);
    }


    public function traerEgresados(){
        $sql= "select * from egresados";
        return $this->bd->ejecutarConsulta($sql);
    }


}

?>