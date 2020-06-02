<?php

    require("conexion.php");

    // RECIBE LOS DATOS DE LA APP
    $numsocio = $_POST['numsocio'];
   
 
    
    // VERIFICAMOS QUE NO ESTEN VACIAS LAS VARIABLES
    if(empty($numsocio)) {

        // SI ALGUNA VARIABLE ESTA VACIA MUESTRA ERROR
        //echo "Se deben llenar los dos campos";
        echo "ERROR 1, campos vacios";

    } else {

       // CREAMOS LA CONSULTA
        $sql = "INSERT INTO socio VALUES('', '$numsocio')";
        $query = $mysqli->query($sql);

        if($query === TRUE) {

            echo "Guardado en BD";

        } 
        
    }

?>