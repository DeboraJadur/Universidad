<?php
class Correos {
    private $bd;

    public function __construct($bd) {
        $this->bd = $bd;
    }

    public function insertarCorreo($email) {
        $sql = "INSERT INTO emails (email) VALUES ('".$email."')";
        return $this->bd->ejecutarConsulta($sql);
    }

    public function modificarCorreo($id, $nuevoEmail) {
        $sql = "UPDATE emails SET email='".$nuevoEmail."' WHERE id='".$id."'";
        return $this->bd->ejecutarConsulta($sql);
    }

    public function eliminarCorreo($id) {
        $sql = "DELETE FROM emails WHERE id='".$id."'";
        return $this->bd->ejecutarConsulta($sql);
    }

    public function traerCorreos() { // Este método ahora está dentro de la clase
        $sql = "SELECT * FROM emails";
        $resultado = $this->bd->ejecutarConsulta($sql);
        $correos = [];

        while ($row = $this->bd->crearArregloAsociativo($resultado)) {
            $correos[] = $row;
        }

        return $correos;
    }
}
?>
