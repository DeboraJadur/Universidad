<?php
class Correos{
    private $bd;

    public function __construct($bd){
        $this -> bd = $bd;
    }

    public function insertarCorreo ($email) {
        $sql= "insert into emails (email) values 
        ('".$email."')
        ";
        return $this-> bd-> ejecutarConsulta($sql);
    }
    
    public function modificarCorreo($id,$nuevoEmail){
        $sql= "update emails set email='".$nuevoEmail."' where id='".$id."'";
        return $this->bd-> ejecutarConsulta($sql);


    }

    public function eliminarCorreo($id){
        $sql= "delete from emails where id='".$id."'";
        return $this->bd-> ejecutarConsulta($sql);
    }
}

?>