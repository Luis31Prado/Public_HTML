<?php

    require("conexion.php");

    // RECIBE LOS DATOS DE LA APP
    $idproducto = $_POST['idproducto'];
    $grasasaturada = $_POST['grasasaturada'];
    $otrasgrasas = $_POST['otrasgrasas'];
    $azucarestotales = $_POST['azucarestotales'];
    $sodio = $_POST['sodio'];
    $energia = $_POST['energia'];
    $energiaporporcion = $_POST['energiaporporcion'];
 
    
    // VERIFICAMOS QUE NO ESTEN VACIAS LAS VARIABLES
    if(empty($idproducto) || empty($grasasaturada) || empty($otrasgrasas) || empty($azucarestotales) || empty($sodio) || empty($energia) || empty($energiaporporcion)) {

        // SI ALGUNA VARIABLE ESTA VACIA MUESTRA ERROR
        //echo "Se deben llenar los dos campos";
        echo "ERROR 1, campos vacios";

    } else {

        // CREAMOS LA CONSULTA DE LA INFO
        $sql = "INSERT INTO infonutrimental VALUES('', '$idproducto', '$grasasaturada', '$otrasgrasas', '$azucarestotales', '$sodio', '$energia', '$energiaporporcion')";
        $query = $mysqli->query($sql);

        if($query === TRUE) {

            echo "Guardado en BD";

        }
        
    }

?>