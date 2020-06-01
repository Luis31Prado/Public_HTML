<?php

    // VARIABLES QUE ALMACENAN LA CONEXION A LA BASE DE DATOS
    $mysqli = new mysqli(
        "localhost",
        "u967833508_onlyadmin",
        "DevMC!!!",
        "u967833508_dbetiquetado"
    );

    // COMPROBAMOS LA CONEXION
    if($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
        // echo "Conexion exitosa";
    }

?>