<?php
    $palabras_sql = array(
        "SELECT",
        "INSERT"
    );

    function esCorreoValido($email) {
        
        $patron = "/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/";
        
        return preg_match($patron, $email);

    }


    function esNombreValido($nombreApellido) {
        return preg_match("/^[a-zA-Z\s]+$/", $nombreApellido) && strlen($nombreApellido) > 2;
    }

    
    
    function esMatriculaValida($matricula) {
        return preg_match("/^\d{6,10}$/", $matricula);
    }
    
    
    function esTelefonoValido($telefono) {
        return preg_match("/^\d{10,15}$/", $telefono);
    }

    function esCarreraIdValida ($e) {
        return preg_match("/^[1-9]\d{0,2}$/", $e);
    }
    










?>