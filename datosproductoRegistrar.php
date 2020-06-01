<?php

    require("conexion.php");

    // RECIBE LOS DATOS DE LA APP
    $idproducto = $_POST['idproducto'];
    $contenido = $_POST['contenido'];
    $tipoproducto = $_POST['tipoproducto'];
    $tipocantidad = $_POST['tipocantidad'];
    $foto1 = $_POST['foto1'];
    $foto2 = $_POST['foto2'];
    $foto3 = $_POST['foto3'];
    $foto4 = $_POST['foto4'];
 
    
    // VERIFICAMOS QUE NO ESTEN VACIAS LAS VARIABLES
    if(empty($idproducto) || empty($contenido)|| empty($tipoproducto) || empty($tipocantidad) || empty($foto1)) {

        // SI ALGUNA VARIABLE ESTA VACIA MUESTRA ERROR
        //echo "Se deben llenar los dos campos";
        echo "ERROR 1, campos vacios";

    } else {

        // CREAMOS LA CONSULTA
        $sql = "INSERT INTO datosproducto VALUES('', '$idproducto', '$idproducto', '$contenido', '$tipoproducto', '$tipocantidad', '$foto1', '$foto2', '$foto3', '$foto4')";
        $query = $mysqli->query($sql);

        if($query === TRUE) {

            echo "Guardado en BD";

        }
        
    } 

?>