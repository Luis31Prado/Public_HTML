<?php

    require("conexion.php");

    // RECIBE LOS DATOS DE LA APP
    $idproducto = $_POST['idproducto'];
    $ingredientes = $_POST['ingredientes'];
    $vitaminas = $_POST['vitaminas'];
    $minerales = $_POST['minerales'];
 
    
   // VERIFICAMOS QUE NO ESTEN VACIAS LAS VARIABLES
    if(empty($idproducto) || empty($ingredientes) || empty($vitaminas) || empty($minerales)) {

        // SI ALGUNA VARIABLE ESTA VACIA MUESTRA ERROR //
        //echo "Se deben llenar los dos campos";
        echo "ERROR 1, campos vacios";

    } else {

        // CREAMOS LA CONSULTA
        $sql = "INSERT INTO listaingredinetes VALUES('', '$idproducto', '$ingredientes', '$vitaminas', '$minerales')";
        $query = $mysqli->query($sql);

        if($query === TRUE) {

            echo "Guardado en BD";

        }
        
    }

?>