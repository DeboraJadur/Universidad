<?php
    $palabras_sql = array(
        "SELECT",
        "INSERT"
    )

    function esCorreoValido ($correo) {
        !contienePalabrasSQL($correo, $palabras_sql);
    }
?>